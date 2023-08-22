<?php

namespace App\Http\Controllers;

use App\Models\EditBudget;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use App\Notifications\NewEventNotification;

class EventController extends Controller
{
    public function index(Event $event) {
        // return view('event.index')->with('event', $event);
        return view('event.index', ['event' => $event]);
    }

    // Create,Update,Delete Event

    public function create() {
        return view('event.create');
    }

    public function storeEvent(Request $request,User $user) {
//        dd($request->all());
        $user = Auth::user(); //call user ...hello?

        $data = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'date' => 'required|date|after_or_equal:tomorrow',
            'hour' => 'required|string|min:0|max:2',
            'minute' => 'required|string|min:0|max:2',
            'timeType' => 'required|in:AM,PM',
            'detail' => 'required|string|min:0|max:255|nullable',
            'property' => 'required|string|min:0|max:255|nullable',
            'image' => 'required|nullable|image|mimes:jpg,jpeg,png,gif|max:2048' // <-- my man just poison me >:<
        ]);

        if ($request->hasFile('image')) {
//            $userId = $user->id;
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('event_images', $imageName, 'public');
            $data['image'] = $imagePath;
//            return $data['image'];
//            return $imagePath;
        }

//        $newEvent = Event::create($data);
        $newEvent = Event::create([
            'name' => $data['name'],
            'date' => $data['date'],
            'hour' => $data['hour'],
            'minute' => $data['minute'],
            'timeType' => $data['timeType'],
            'detail' => $data['detail'],
            'property' => $data['property'],
            'image_path' => $data['image']
        ]);

        // add 'role' => 'HOST' to db:event_user
        $user->events()->attach($newEvent->id ,[
            'role' => 'HOST'
        ]);
        return redirect(route('dashboard.index'));
    }

    public function editEvent(Event $event) {
        Gate::authorize('update', [$event,Auth::user()]);
        return view('event.edit', ['event' => $event]);
    }

    public function updateEvent(Event $event, Request $request) {
        Gate::authorize('update', [$event,Auth::user()]);
        $data = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'date' => 'required|date|after_or_equal:tomorrow',
            'hour' => 'required|string|min:0|max:2',
            'minute' => 'required|string|min:0|max:2',
            'timeType' => 'required|string',
            'detail' => 'required|string|min:0|max:255|nullable',
            'property' => 'required|string|min:0|max:255|nullable',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);


//        $imagePath = null;
        if ($request->hasFile('image')) {
//            $eventId = $event->id;
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('event_images', $imageName, 'public');
            $event->update(['image_path' => $imagePath]);
        }

        $event->update($data);
        return redirect(route('event.manage', ['event' => $event]));
        // return view('event.manage', ['event' => $event]);
    }

    public function destroyEvent(Event $event) {
        Gate::authorize('delete',[$event,Auth::user()]);
        $event->deleteImage();
        $event->delete();
        return redirect(route('dashboard.index'))->with('Success', 'Event deleted successfully');
    }

    // End of Create,Update,Delete Event

    public function manage(Event $event) {
        // $event->delete();
        Gate::authorize('view',[$event,Auth::user()]);
        $attendees = $this->getAttendeeList($event);
        $staffs = $this->getStaffList($event);
        return view('event.manage', [
            'event' => $event,
            'attendees' => $attendees,
            'staffs' => $staffs
        ]);
    }

    public function edit(Event $event) {
        Gate::authorize('update',[$event,Auth::user()]);
        return view('event.edit');
    }

    public function editBudget(Event $event) {
        return view('event.editBudget', ['event' => $event]);
    }

    public function editStaff(Event $event) {
        $staffList = $this->getStaffList($event);
        $attendeeList = $this->getAttendeeList($event);
        $UserStaffEventMixs = $this->getUserStaffEventMix();
        return view('event.editStaff', [
            'event' => $event,
            'attendeeList' => $attendeeList,
            'staffList' => $staffList,
            'UserStaffEventMixs' => $UserStaffEventMixs
        ]);
    }

    public function storeStaffEvent(Request $request, Event $event) {
//        dd($request->all());
        $data = $request->validate([
            'assignment' => 'required|string|min:3|max:50',
            'user' => 'required|string|min:3|max:50'
        ]);

//        $StaffUser = DB::table('event_staff');
        $user = $this->getAttendeeID($data['user']);

//        return $user;
//        $newEvent = Event::create($data);
        DB::table('event_staff')->insertGetId([
            'event_id' => $event->id,
            'user_id' => $user,
            'assignment' => $data['assignment']
        ]);

        DB::table('event_user') // add 'role' => 'STAFF' to db:event_user
        ->where('event_id', $event->id)
            ->where('user_id', $user)
            ->update(['role' => 'STAFF']);

        // add 'role' => 'STAFF' to db:event_user
//        $user->events()->attach($newEvent->event_id ,[
//            'role' => 'STAFF'
//        ]);
        $staffList = $this->getStaffList($event);
        $attendeeList = $this->getAttendeeList($event);
        $UserStaffEventMixs = $this->getUserStaffEventMix();
        return view('event.editStaff', [
            'event' => $event,
            'attendeeList' => $attendeeList,
            'staffList' => $staffList,
            'UserStaffEventMixs' => $UserStaffEventMixs
        ]);
    }

    public function getStaffList(Event $event) {
        return DB::table('event_user') // Just pull this straight from DB lol
        ->join('users', 'event_user.user_id', '=', 'users.id')
            ->where('event_user.event_id', $event->id)
            ->where('event_user.role', 'STAFF')
//            ->select('users.fullname')
            ->get();
    }

    public function getUserStaffEventMix() {
        return DB::table('event_user')
            ->join('users', 'event_user.user_id', '=', 'users.id')
            ->join('event_staff', function ($join) {
                $join->on('event_user.event_id', '=', 'event_staff.event_id')
                    ->on('event_user.user_id', '=', 'event_staff.user_id');
            })
            ->get();
    }

    public function getAttendeeList(Event $event) {
        return DB::table('event_user') // Just pull this straight from DB lol
            ->join('users', 'event_user.user_id', '=', 'users.id')
            ->where('event_user.event_id', $event->id)
            ->where('event_user.role', 'ATTENDEE')
//            ->select('users.fullname')
            ->get();
    }

    public function getAttendeeID($fullname) {
        return DB::table('event_user') // Just pull this straight from DB again lol
            ->join('users', 'event_user.user_id', '=', 'users.id')
            ->where('users.fullname', $fullname)
            ->select('event_user.user_id')
            ->value('event_user.user_id'); // Use the value() method to get a single value OHHHHHHHH oOo
    }

    // public function whiteboard() {
    //     return view('event.whiteboard');
    // }

    //user send request to join an event
    public function join(Event $event)
    {
        $user = Auth::user(); //call user ...Who is this? Stop calling me
        // add 'role' => 'ATTENDEE' to db:event_user
    $user->events()->attach($event, [
            'role' => 'ATTENDEE'
        ]);
        return redirect()->route('dashboard.index');
//            ->with('success', 'Request to join successfully'); // might use it later lol
    }
}

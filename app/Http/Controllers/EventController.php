<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function storeEvent(Request $request) {
//        dd($request->all());
        $user = Auth::user(); //call user ...hello?
        $data = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'date' => 'required|string|min:0|max:10',
            'hour' => 'required|string|min:0|max:2',
            'minute' => 'required|string|min:0|max:2',
            'timeType' => 'required|in:AM,PM',
            'detail' => 'required|string|min:0|max:255|nullable',
            'property' => 'required|string|min:0|max:255|nullable',
            'image' => 'required|nullable|image|mimes:jpg,jpeg,png,gif|max:2048' // <-- my man just poison me >:<
        ]);


        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
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
        return view('event.edit', ['event' => $event]);
    }

    public function updateEvent(Event $event, Request $request) {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'date' => 'required|string|min:0|max:10',
            'hour' => 'required|string|min:0|max:2',
            'minute' => 'required|string|min:0|max:2',
            'timeType' => 'required|string',
            'detail' => 'required|string|min:0|max:255|nullable',
            'property' => 'required|string|min:0|max:255|nullable',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);


        $imagePath = null;
        if ($request->hasFile('image')) {
            $eventId = $event->id;
            $imageName = $eventId . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('event_images', $imageName, 'public');
            $event->update(['image_path' => $imagePath]);
        }

        $event->update($data);
        return redirect(route('event.manage', ['event' => $event]));
        // return view('event.manage', ['event' => $event]);
    }

    public function destroyEvent(Event $event) {
        $event->deleteImage();
        $event->delete();
        return redirect(route('dashboard.index'))->with('Success', 'Event deleted successfully');
    }

    // End of Create,Update,Delete Event

    public function manage(Event $event) {
        // $event->delete();
        return view('event.manage', ['event' => $event]);
    }

    public function edit() {
        return view('event.edit');
    }

    public function editBudget() {
        return view('event.editBudget');
    }

    public function editWorker() {
        return view('event.editWorker');
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

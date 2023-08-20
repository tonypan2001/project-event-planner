<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

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

    public function storeEvent(Request $request, Event $event) {
        // dd($request);
        $data = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'date' => 'required|string|min:0|max:10',
            'hour' => 'required|string|min:0|max:2',
            'minute' => 'required|string|min:0|max:2',
            'timeType' => 'required|in:AM,PM',
            'detail' => 'required|string|min:0|max:255|nullable',
            'property' => 'required|string|min:0|max:255|nullable',
            'image' => 'required|nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $newEvent = Event::create($data);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $eventId = $newEvent->id;
            $imageName = $eventId . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('event_images', $imageName, 'public');
            $newEvent->update(['image_path' => $imagePath]);
        }

        // dd($request->all());

        // $newEvent = Event::create($data);
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
}

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

    public function storeEvent(Request $request) {
        // dd($request);
        $data = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'date' => 'required|string|min:0|max:10',
            'hour' => 'required|string|min:0|max:2',
            'minute' => 'required|string|min:0|max:2',
            'timeType' => 'required|string',
            'detail' => 'required|string|min:0|max:255|nullable',
            'property' => 'required|string|min:0|max:255|nullable'
        ]);
        $newEvent = Event::create($data);
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
            'property' => 'required|string|min:0|max:255|nullable'
        ]);
        $event->update($data);
        return redirect(route('event.manage', ['event' => $event]));
        // return view('event.manage', ['event' => $event]);
    }

    public function destroyEvent(Event $event) {
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

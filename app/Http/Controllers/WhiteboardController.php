<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Whiteboard;
use Illuminate\Http\Request;

class WhiteboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Event $event)
    {
        $whiteboards = Whiteboard::where('event_id', $event->id)->get();

        return view('event.whiteboard', compact('event', 'whiteboards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => ['required', 'string', 'min:3', 'max:100'],
            'detail' => ['required', 'string', 'min:3', 'max:255'],
            // 'event_id' => ['required', 'exists:events,id'], // Ensure event_id exist
        ]);

        // Get the current event from the request
        $event = Event::findOrFail($request->input('event_id'));

        // Create a new whiteboard entry associated with the event
        $event->whiteboard()->create($data);

        return redirect()->back()->with('success', 'Whiteboard entry added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Whiteboard $whiteboard)
    {
        $whiteboard->delete();
        return back()->with('success', 'Whiteboard entry deleted successfully.');
    }
}

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
        // $whiteboards = Whiteboard::all();
        // return view('event.whiteboard', compact('whiteboards'), ['event' => $event]);
        // return Event::find($event)->whiteboard;
        // $whiteboards = Whiteboard::all();
        // $whiteboard = $event->whiteboard;
        // return view('event.whiteboard', compact('whiteboard', 'event'));
        $whiteboards = Whiteboard::where('event_id', $event->id)->get();

        return view('event.whiteboard', compact('event', 'whiteboards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

        // Whiteboard::create($data);
        // // return redirect()->route('event.whiteboard');
        // return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Whiteboard $whiteboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Whiteboard $whiteboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Whiteboard $whiteboard)
    {
        //
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
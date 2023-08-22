<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\Whiteboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class WhiteboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Event $event)
    {
        Gate::authorize('view',[$event,Auth::user()]);
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
        $user = Auth::user();
        $data = $request->validate([
            'content' => ['required', 'string', 'min:3', 'max:100'],
            'detail' => ['required', 'string', 'min:3', 'max:255'],
            // 'event_id' => ['required', 'exists:events,id'], // Ensure event_id exist
        ]);
        // $whiteboard = new Whiteboard();
        // $whiteboard->content = $request->get('content');
        // $whiteboard->detail = $request->get('detail');
        // $whiteboard->creator = $user->fullname;
        // $data1 = [$request->get('content'),$request->get('detail'),$user->fullname];


        // Get the current event from the request
        $event = Event::findOrFail($request->input('event_id'));

        // Create a new whiteboard entry associated with the event
        $event->whiteboard()->create($data);
        // $event->whiteboard()->attach($whiteboard);

        return redirect()->back()->with('success', 'Whiteboard entry added successfully.');
    }

    public function updateStatus(Request $request, Whiteboard $whiteboard)
    {
        // Validate the request data if needed

        // Update the whiteboard status
        $whiteboard->update([
            'status' => 'Done', // Update the status to 'Done!' here
        ]);

        return redirect()->back()->with('success', 'Whiteboard status updated to Done!');
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
    public function destroy(Whiteboard $whiteboard,Event $event)
    {
         $whiteboard->delete();
        return back()->with('success', 'Whiteboard entry deleted successfully.');
    }
}

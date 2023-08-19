<?php

namespace App\Http\Controllers;

use App\Models\Whiteboard;
use Illuminate\Http\Request;

class WhiteboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $whiteboards = Whiteboard::all();
        return view('event.whiteboard', compact('whiteboards'));
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
        ]);

        Whiteboard::create($data);
        // return redirect()->route('event.whiteboard');
        return back();
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
        // return redirect()->route('event.whiteboard');
        return back();
    }
}

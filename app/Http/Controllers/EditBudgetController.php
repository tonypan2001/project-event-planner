<?php

namespace App\Http\Controllers;

use App\Models\EditBudget;
use App\Models\Event;
use Illuminate\Http\Request;

class EditBudgetController extends Controller
{
    public function index(Event $event, EditBudget $editBudget) {
        $editBudget = EditBudget::where('event_id', $event->id)->first();
        $editBudgets = EditBudget::where('event_id', $event->id)->get();
        return view('event.editBudget', compact('event','editBudget','editBudgets'));
    }

    public function store(Request $request) {
        // dd($request->all());
        $data = $request->validate([
            'item' => 'required|string',
            'price' => 'required|numeric',
        ]);
    
        $event = Event::findOrFail($request->input('event_id'));
    
        // Create a new editBudget record
        $event->editBudget()->create($data);
    
        // Redirect back with updated data
        return redirect()->route('event.editBudget', ['event' => $event]);
    }


    public function destroy(EditBudget $editBudget) {
        // Get the associated event
        $event = $editBudget->event;
    
        // Calculate the new total budget by subtracting the item's price
        $newTotalBudget = $event->total_budget - $editBudget->price;
    
        // Update the event's total budget
        $event->update(['total_budget' => $newTotalBudget]);
    
        // Delete the editBudget record
        $editBudget->delete();
    
        return back();
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\EditBudget;
use App\Models\Event;
use Illuminate\Http\Request;

class EditBudgetController extends Controller
{
    public function index(Event $event, EditBudget $editBudget) {
        // $editBudget = EditBudget::where('event_id', $event->id)->first();
        $editBudgets = EditBudget::where('event_id', $event->id)->get();
        $totalBudget = $editBudgets->sum('price');
        return view('event.editBudget', compact('event','editBudget','editBudgets','totalBudget'));
    }

    public function store(Request $request, Event $event) {
        // dd($request->all());
        $data = $request->validate([
            'item' => 'required|string|min:0|max:50',
            'price' => 'required|numeric|min:0|max:100000000',
        ]);
    
        $event = Event::findOrFail($request->input('event_id'));
    
        // Create a new editBudget record
        $event->editBudgets()->create([
            'item' => $data['item'],
            'price' => $data['price'],
        ]);

        // just add
        $totalBudget = $event->editBudgets->sum('price');
        $event->update(['total_price' => $totalBudget]);
        // end just add
    
        // Redirect back with updated data
        // return route('event.editBudget', ['event' => $event]);
        return redirect()->route('event.editBudget', ['event' => $event]);

        // return back();
    }


    public function destroy(EditBudget $editBudget) {
        // Get the associated event
        // $event = $editBudget->event;
    
        // Calculate the new total budget by subtracting the item's price
        // $newTotalBudget = $event->total_budget - $editBudget->price;
    
        // Update the event's total budget
        // $event->update(['total_budget' => $newTotalBudget]);
    
        // Delete the editBudget record
        $editBudget->delete();
    
        return back();
    }
    
}

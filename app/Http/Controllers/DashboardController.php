<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Event $event) {
        $events = Event::all();
        // return view('dashboard.index', compact('events'));
        
        return view('dashboard.index', compact('events'));
    }
}

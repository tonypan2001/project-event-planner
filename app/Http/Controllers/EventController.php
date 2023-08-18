<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        return view('event.index');
    }

    public function create() {
        return view('event.create');
    }

    public function manager() {
        return view('event.manage');
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

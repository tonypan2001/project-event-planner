<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function index() {
        return view('settings.index');
    }

    public function update(Request $request, User $user)
    {
        $user->fullname = $request->get('fullname');
        $user->save();
        return redirect()->route('dashboard.index',['user'=>$user]);
    }
}

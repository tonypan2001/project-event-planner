<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function index(User $user) {
        return view('settings.index',['user'=>$user]);
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('settings.index', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->fullname = $request->get('fullname');        
        $user->username = $request->get('username');
        $user->age = $request->get('age');
        $user->email = $request->get('email');
        $user->phone_num = $request->get('phone_num');
        $user->password = $request->get('password');
        $user->save();
        return redirect()->route('dashboard.index',['user'=>$user]);
    }
}

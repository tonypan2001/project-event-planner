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

    public function update(User $user, Request $request) {
        $data = $request->validate([
            'fullname' => 'required|string|min:3|max:255',
            'phone_num' => 'required|digits:10|numeric',
            'image' => '|image|mimes:jpg,jpeg,png,gif|max:2048',
            'age' => 'required|required|integer|between:1,100'
        ]);
        // return $data;

        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('user_images', $imageName, 'public');
            $data['image_user_path'] = $imagePath; // <-- Dont forget to add 'image_user_path' to Models >:<
        }
//        return $data;
        $user->update($data);
//        dd($request->all());
//        $user->update([
//            'fullname' => $data['fullname'],
//            'phone_num' => $data['phone_num'],
//            'image_user_path' => $data['image']
//        ]);
        return redirect()->route('dashboard.index',['user'=>$user]);
        // return view('event.manage', ['event' => $event]);
    }
}

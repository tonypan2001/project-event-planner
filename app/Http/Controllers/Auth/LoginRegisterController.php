<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    // Instantiate a new LoginRegisterController instance.
    public function __construct() {
        $this->middleware('guest')->except([
            'logout',
            'dashboard'
        ]);
    }

    // Display a register transform.
    public function register() {
        return view('auth.register');
    }

    public function login() {
        return view('auth.login');
    }

    // Store a new user
    public function store(Request $request) {
        $request->validate([
            'title' => ['required', 'string', 'min:4', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'max:255']
        ]);

        return redirect()->route('dashboard.index');
    }
}

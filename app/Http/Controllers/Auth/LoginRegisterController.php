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

    // Store a new user
    public function store(Request $request) {
        
    }
}

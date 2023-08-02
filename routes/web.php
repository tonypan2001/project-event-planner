<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Login
Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/login', function () {
    return view('login');
})->name('login');

// Route Register
Route::get('/register', function () {
    return view('register');
})->name('register');

// Route Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
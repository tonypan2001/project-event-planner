<?php

use App\Http\Controllers\CreateEventController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
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
    return view('auth.login');
})->name('login');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/event', [EventController::class, 'index'])->name('event.index');

Route::get('/create-event', [EventController::class, 'create'])->name('event.create');
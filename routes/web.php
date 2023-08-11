<?php

use App\Http\Controllers\CreateEventController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NotificationController;
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

Route::get('/signin', function () {
    return view('auth.login');
})->name('login');

// Route Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/notification', [NotificationController::class, 'index'])->name('notification.index');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// Event
Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/create-event', [EventController::class, 'create'])->name('event.create');
Route::get('/event/manage', [EventController::class, 'manager'])->name('event.manage');
Route::get('/event/edit', [EventController::class, 'edit'])->name('event.edit');
Route::get('/event/manage/edit/budget', [EventController::class, 'editBudget'])->name('event.editBudget');
Route::get('/event/manage/edit/worker', [EventController::class, 'editWorker'])->name('event.editWorker');
Route::get('/event/whiteboard', [EventController::class, 'whiteboard'])->name('event.whiteboard');

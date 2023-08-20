<?php

use App\Http\Controllers\CreateEventController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\WhiteboardController;
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
Route::post('/gallery', [GalleryController::class, 'storeGalleryImage'])->name('gallery.store');
Route::delete('gallery/{gallery}', [GalleryController::class, 'destroyGalleryImage'])->name('gallery.destroy');

Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');

// Event
Route::get('/event/{event}', [EventController::class, 'index'])->name('event.index');

// Create Event
Route::get('/create-event', [EventController::class, 'create'])->name('event.createEvent'); // create event page
Route::post('/event', [EventController::class, 'storeEvent'])->name('event.storeEvent');
Route::get('/event/edit/{event}', [EventController::class, 'editEvent'])->name('event.editEvent');
Route::put('/event/edit/{event}/update', [EventController::class, 'updateEvent'])->name(('event.updateEvent'));
Route::get('/event/manage/{event}', [EventController::class, 'manage'])->name('event.manage');


Route::delete('/event/manage/{event}/destroy', [EventController::class, 'destroyEvent'])->name('event.manage.destroy');
Route::get('/event/edit', [EventController::class, 'edit'])->name('event.edit');
Route::get('/event/manage/editbudget/{event}', [EventController::class, 'editBudget'])->name('event.editBudget');
Route::get('/event/manage/editworker/{event}', [EventController::class, 'editWorker'])->name('event.editWorker');

// Whiteboard
Route::get('/event/whiteboard/{event}', [WhiteboardController::class, 'index'])->name('event.whiteboard');
Route::post('/event/whiteboard', [WhiteboardController::class, 'store'])->name('event.storeWhiteboard');
Route::delete('/event/whiteboard/{whiteboard}/destroy', [WhiteboardController::class, 'destroy'])->name('event.destroyWhiteboard');

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

// Go to login first anon! >:<
Route::get('/signin', function () {
    return view('auth.login');
})->name('login');
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Route Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Dont want anon to get to ur web without login?
// Use This!
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/notification', [NotificationController::class, 'index'])->name('notification.index');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');

// Event
    Route::get('/event', [EventController::class, 'index'])->name('event.index');
    Route::get('/create-event', [EventController::class, 'create'])->name('event.create');
    Route::get('/event/manage', [EventController::class, 'manager'])->name('event.manage');
    Route::get('/event/edit', [EventController::class, 'edit'])->name('event.edit');
    Route::get('/event/manage/edit/budget', [EventController::class, 'editBudget'])->name('event.editBudget');
    Route::get('/event/manage/edit/worker', [EventController::class, 'editWorker'])->name('event.editWorker');

// Whiteboard
    Route::get('/event/whiteboard', [WhiteboardController::class, 'index'])->name('event.whiteboard');
    Route::post('/event/whiteboard', [WhiteboardController::class, 'store'])->name('event.store');
    Route::delete('/event/whiteboard', [WhiteboardController::class, 'destroy'])->name('event.destroy');
});
require __DIR__.'/auth.php';

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

// OLD Route Dashboard
//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


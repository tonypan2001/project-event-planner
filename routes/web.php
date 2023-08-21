<?php

use App\Http\Controllers\CreateEventController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditBudgetController;
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

// Route Setting
Route::controller(SettingsController::class)->group(function(){
    Route::resource('/settings', SettingsController::class);
    Route::get('/settings/{user->id()}', [SettingsController::class, 'index'])->name('settings.index');
    Route::put('/settings/update/{user}', [SettingsController::class, 'update'])->name('settings.update');
});

// Dont want anon to get to ur web without login?
// Use This!
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/notification', [NotificationController::class, 'index'])->name('notification.index');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/gallery', [GalleryController::class, 'storeGalleryImage'])->name('gallery.store');
    Route::delete('gallery/{gallery}', [GalleryController::class, 'destroyGalleryImage'])->name('gallery.destroy');

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');

// Event
    Route::get('/event/{event}', [EventController::class, 'index'])->name('event.index');

    Route::controller(EventController::class)->group(function () {
        // Create Event
        Route::get('/create-event', [EventController::class, 'create'])->name('event.createEvent'); // create event page
        Route::post('/event', [EventController::class, 'storeEvent'])->name('event.storeEvent');
        Route::get('/event/edit/{event}', [EventController::class, 'editEvent'])->name('event.editEvent');
        Route::put('/event/edit/{event}/update', [EventController::class, 'updateEvent'])->name(('event.updateEvent'));
        
        Route::get('/events/{event}/join', [EventController::class, 'join'] )->name('events.join');
        
        Route::get('/event/edit', [EventController::class, 'edit'])->name('event.edit');
        
        Route::get('/event/manage/{event}', [EventController::class, 'manage'])->name('event.manage');
        Route::delete('/event/manage/{event}/destroy', [EventController::class, 'destroyEvent'])->name('event.manage.destroy');
        Route::get('/event/manage/edit-budget/{event}', [EditBudgetController::class, 'index'])->name('event.editBudget');
        Route::post('/event/manage/edit-budget', [EditBudgetController::class, 'store'])->name('event.editBudget.store');
        Route::delete('/event/manage/edit-budget/{editBudget}/destroy', [EditBudgetController::class, 'destroy'])->name('event.editBudget.destroy');
        Route::get('/event/manage/edit/worker/{event}', [EventController::class, 'editWorker'])->name('event.editWorker');


// Whiteboard
        Route::get('/event/whiteboard/{event}', [WhiteboardController::class, 'index'])->name('event.whiteboard');
        Route::post('/event/whiteboard', [WhiteboardController::class, 'store'])->name('event.storeWhiteboard');
        Route::delete('/event/whiteboard/{whiteboard}/destroy', [WhiteboardController::class, 'destroy'])->name('event.destroyWhiteboard');

    });

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


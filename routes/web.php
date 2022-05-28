<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\InvitesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index'); 


// Groups
Route::get('/lakbay-group', [ViewsController::class, 'viewGroups'])->name('groups');

// Manage your trips
Route::post('/trip-profile', [TripsController::class, 'store'])->name('store-trip-profile');
Route::get('/create-trip-profile', [ViewsController::class, 'createTripProfile'])->name('create-trip-profile');
Route::get('/view-trip-profile', [TripsController::class, 'viewTripProfile'])->name('view-trip-profile');
Route::get('/edit-trip-profile/{id}', [TripsController::class, 'edit'])->name('edit-trip-profile');
Route::put('/edit-trip-profile/{id}', [TripsController::class, 'update'])->name('update-trip-profile');
Route::post('/delete-trip-profile', [TripsController::class, 'delete'])->name('delete-trip-profile');


// Find my trips
Route::get('/search-trips', [ViewsController::class, 'searchTrips'])->name('search-trips');
//Route::get('/search', [TripController::class, 'search.show'])->middleware(['auth'])->name('search.search-trips');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

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
Route::get('{id}/join-groups', [GroupsController::class, 'joinGroups'])->name('join-groups');

// Manage your trips
Route::post('/trip-profile', [TripsController::class, 'store'])->name('store-trip-profile');
Route::get('/create-trip-profile', [ViewsController::class, 'createTripProfile'])->name('create-trip-profile');
Route::get('/view-trip-profile', [TripsController::class, 'viewTripProfile'])->name('view-trip-profile');
Route::get('/edit-trip-profile/{id}', [TripsController::class, 'edit'])->name('edit-trip-profile');
Route::put('/edit-trip-profile/{id}', [TripsController::class, 'update'])->name('update-trip-profile');
Route::get('/delete-trip-profile/{id}', [TripsController::class, 'delete'])->name('delete-trip-profile');

// Invite
Route::get('/invite-passenger/{id}/{groupId}', [InvitesController::class, 'requestPassengerInvite'])->name('invite-passenger');
Route::get('/invite-driver/{driverId}/{passengerId}', [InvitesController::class, 'requestDriverInvite'])->name('invite-driver');
Route::get('/accept-invite/{inviteId}', [InvitesController::class, 'acceptInvite'])->name('accept-invite');
Route::get('/decline-invite/{inviteId}', [InvitesController::class, 'declineInvite'])->name('decline-invite');

// Find my trips
Route::get('/search-trips', [ViewsController::class, 'searchTrips'])->name('search-trips');
Route::get('/open-trip-profile/{id}', [ViewsController::class, 'openTripProfile'])->name('open-trip-profile');
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

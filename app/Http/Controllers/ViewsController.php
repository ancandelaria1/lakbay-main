<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trips;
use App\Models\Groups;
use App\Models\Invites;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function searchTrips() {
        $trip_profiles = Trips::all();
        return view('search.search-trips', compact('trip_profiles'));
    }
    public function createTripProfile() {
        return view('trips.create-trip-profile');
    }
    public function viewGroups() {
        return view('group.group');
    }
}

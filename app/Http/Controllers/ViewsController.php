<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function searchTrips() {
        return view('search.search-trips');
    }
    public function createTripProfile() {
        return view('trips.create-trip-profile');
    }
    public function viewGroups() {
        return view('group.group');
    }
}

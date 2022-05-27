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
    public function viewTripProfile() {
        return view('trips.view-trip-profile');
    }
    public function editTripProfile() {
        return view('trips.edit-trip-profile');
    }
    public function viewGroup() {
        return view('group.group');
    }
}

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
    public function openTripProfile($id) {
        $trip_profile = Trips::find($id);
        return view('search.open-trip-profile', compact('trip_profile'));
    }
    public function createTripProfile() {
        return view('trips.create-trip-profile');
    }
    public function viewGroups() {
        if(auth()->user()){
            $all_profiles = Trips::all();
            $trip_profiles = Trips::where('_userid', '=', auth()->user()->email)->get();

            if($trip_profiles){
                $groups = Groups::all();

                if($groups){
                    $invites = Invites::all();
                }
            }
            
            return view('group.group', compact('all_profiles','trip_profiles','groups','invites'));

        }
        else{
            redirect()->route('index')->with('success', 'Re-login in again');
        }
    }
}

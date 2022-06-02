<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trips;
use App\Models\Groups;
use App\Models\Invites;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(auth()->user()){
            
        //     $groups = Groups::where('_userid', '=', auth()->user()->email);
        //     dd($groups);
        //     return view('group.group', compact('groups', $groups));
        // }
        // else{
        //     redirect()->route('index')->with('success', 'Re-login in again');
        // }
    }

    public function joinGroups($id)
    {   
        $trip_profile = Trips::find($id);
        if($trip_profile)
        {   
            $groupId = $trip_profile->groupId;
            switch($trip_profile->riderType){
                case ('Driver'):
                    $trip_profiles = Trips::where('_userid', '<>', auth()->user()->email)->where('riderType', '=', 'Passenger')->get();
                    
                    break;
                case ('Passenger'):
                    $trip_profiles = Trips::where('_userid', '<>', auth()->user()->email)->where('riderType', '=', 'Driver')->get();
                    break;
            }
            
            return view('search.search-trips', compact('trip_profiles', 'id', 'groupId' ));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function show(Groups $groups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function edit(Groups $groups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Groups $groups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function destroy(Groups $groups)
    {
        //
    }
}

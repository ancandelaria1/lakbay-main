<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trips;
use App\Models\Groups;
use App\Models\Invites;
use Illuminate\Http\Request;

class InvitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function requestPassengerInvite($id, $groupId){
        
        $trip_profile = Trips::where('_id', $id)->get()->first();
        if($trip_profile){
            $data = new Invites ();
            $data->tripId = $trip_profile->id;
            $data->groupId = $groupId;
            $data->_userid = $trip_profile->_userid;
            $data->riderType = $trip_profile->riderType;
            $data->firstName = $trip_profile->firstName;
            $data->lastName = $trip_profile->lastName;
            $data->gender = $trip_profile->gender;
            $data->mobileNumber = $trip_profile->mobileNumber;
            $data->requestFromDriver = 'Y';
            $data->confirmed = null;
            
            $data->save();
            if($data){
                return redirect()->route('groups')->with('success', 'Request has been submitted to join group');
            } else{
                return url((previous()));
            }
        }
    }

    public function requestDriverInvite($driverId, $passengerId)
    {
        $trip_profile = Trips::where('_id', $passengerId)->get()->first();
        if($trip_profile){
            $data = new Invites ();
            $data->tripId = $trip_profile->id;
            $data->groupId = $driverId;
            $data->_userid = $trip_profile->_userid;
            $data->riderType = $trip_profile->riderType;
            $data->firstName = $trip_profile->firstName;
            $data->lastName = $trip_profile->lastName;
            $data->gender = $trip_profile->gender;
            $data->mobileNumber = $trip_profile->mobileNumber;
            $data->requestFromDriver = 'N';
            $data->confirmed = null;

            $data->save();
            if($data){
                return redirect()->route('groups')->with('success', 'Request has been submitted to join group');
            } else{
                return url((previous()));
            }
        }
    }

    public function declineInvite($inviteId){
        $invite = Invites::find($inviteId);
        if(!is_null($invite)){
            $invite->delete();
            return redirect()->route('groups')->with('success', 'Invite declined');
        }
    }


    public function acceptInvite($inviteId){

        $invite = Invites::find($inviteId);
        if(!is_null($invite)){

            $group = Groups::find($invite->groupId);
            if(!is_null($group)){

                $trip_profile = Trips::find($invite->tripId);
                if($trip_profile){

                    // append trip id
                    $group->members = array_merge($group->members, [$trip_profile->id]);
                    $group->save();

                    $trip_profile->groupId = $group->groupId;
                    $trip_profile->tripId = $trip_profile->id;
                    $trip_profile->save();

                    if($trip_profile){

                        $invite->confirmed = 'Y';
                        $invite->save();

                        return redirect()->route('groups')->with('success', 'Added to the group');
                    } else{
                        return url()(previous());
                    }
                }
            }
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
     * @param  \App\Models\Invites  $invites
     * @return \Illuminate\Http\Response
     */
    public function show(Invites $invites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invites  $invites
     * @return \Illuminate\Http\Response
     */
    public function edit(Invites $invites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invites  $invites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invites $invites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invites  $invites
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invites $invites)
    {
        //
    }
}

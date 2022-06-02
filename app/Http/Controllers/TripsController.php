<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trips;
use App\Models\Groups;
use App\Models\Invites;
use Illuminate\Http\Request;

class TripsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()){
            $trip_profiles = Trips::where('_userid', '=', auth()->user()->email);
            return view('trips.view-trip-profile')->with('trip_profiles', $trip_profiles);
        }
        else{
            redirect()->route('index')->with('success', 'Re-login in again');
        }
        
        
    }

    public function viewTripProfile() {
        if(auth()->user()){
            $trip_profiles = Trips::where('_userid', '=', auth()->user()->email)->get();
            return view('trips.view-trip-profile', compact('trip_profiles'));
        }
        else{
            redirect()->route('index')->with('success', 'Re-login in again');
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
        if(auth()->user()){

            $data = new Trips ();
            $data['riderType'] = $request->riderType;
            $data['firstName'] = $request->firstName;
            $data['lastName'] = $request->firstName;
            $data['gender'] = $request->gender;
            $data['mobileNumber'] = $request->mobileNumber;
            $data['commChannel'] = $request->commChannel;
            $data['originAddress'] = $request->originAddress;
            $data['departureTime'] = $request->departureTime;
            $data['destinationAddress'] = $request->destinationAddress;
            $data['arrivalTime'] = $request->arrivalTime;
            $data['facebook'] = $request->facebook;
            $data['instagram'] = $request->instagram;
            $data['linkedin'] = $request->linkedin;
            $data['emailAddress'] = $request->emailAddress;
            $data['workInterests'] = $request->workInterests;
            $data['travelInterests'] = $request->travelInterests;

            // convert checkbox values 
            // $arrayToString = implode(',', $request->input('frequency'));
            $data['frequency'] = $request->frequency;
            
            // set user registered email as default key
            $data['_userid'] = auth()->user()->email;

            // set group id
            $data['groupId'] = null;

            $data->save();

            if($data){
                if($data->riderType == 'Driver' ){
                    
                    $group = new Groups ($request->all());
                    $group['_userid'] = auth()->user()->email;
                    $group->save();

                    if($group){
                        $trip_profile = Trips::find($data->id);
                        if($trip_profile){
                            $trip_profile->tripId = $trip_profile->id;
                            $trip_profile->groupId = $group->id;
                            $trip_profile->save();
                        }

                        //update groupId
                        $groupDriver = Groups::find($group->id);
                        $groupDriver->tripId = $trip_profile->tripId;
                        $groupDriver->groupId = $group->id;
                        $groupDriver->members = array();
                        if($groupDriver){
                            $groupDriver->save();
                        }
                        
                    }
                }

            }

        }
        else{
            return redirect()->route('index')->with('success', 'Re-login in again');
        }
        

        if($data){
            return redirect()->route('view-trip-profile')->with('success', 'Trip profile has been created');
        } else{
            return redirect()->route('create-trip-profile');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function show(Trips $trips)
    {
        return view('trips.view-trip-profile',compact('trip_profile'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $trip_profile = Trips::find($id);
        return view('trips.edit-trip-profile', compact('trip_profile'));
    }

    // public function editTripProfile($id) {
    //     $trip_profile_id = Trips::find($id);
    //     return view('trips.edit-trip-profile', compact('trip_profile_id', $id));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $request->validate([
            'originAddress' => 'required',
            'destinationAddress' => 'required',
        ]
        );
        
        $trip_profile = Trips::find($id);
        if(!is_null($trip_profile)){
        
            $trip_profile->firstName = $request->firstName;
            $trip_profile->lastName  = $request->lastName;
            $trip_profile->gender  = $request->gender;
            $trip_profile->mobileNumber = $request->mobileNumber;
            $trip_profile->commChannel = $request->commChannel;
            $trip_profile->originAddress = $request->originAddress;
            $trip_profile->departureTime = $request->departureTime;
            $trip_profile->destinationAddress = $request->destinationAddress;
            $trip_profile->arrivalTime = $request->arrivalTime;
            $trip_profile->frequency = $request->frequency;
            $trip_profile->facebook = $request->facebook;
            $trip_profile->instagram = $request->instagram;
            $trip_profile->linkedin = $request->linkedin;
            $trip_profile->emailAddress = $request->emailAddress;
            $trip_profile->workInterests = $request->workInterests;
            $trip_profile->travelInterests = $request->travelInterests;

            $trip_profile->save();

            if($trip_profile){
                return redirect()->route('view-trip-profile')->with('success', 'Trip profile has been updated');
            }else{
                return view('trips.edit-trip-profile', compact('trip_profile'));
            }

        }
        else{

        
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $trip_profile = Trips::find($id);
        if (!is_null($trip_profile)){

            if($trip_profile->riderType == 'Driver'){
                $driverGroup = Groups::find($trip_profile->groupId);

                if($driverGroup){
                    $driverGroup->delete();
                }
            }

            $trip_profile->delete();

            if($trip_profile){

                return redirect()->route('view-trip-profile')->with('success', 'Trip profile has been delete');
            
            }
            
            
        }
    }
}

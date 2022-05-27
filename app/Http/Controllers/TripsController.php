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
        //
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
        // dynamically get all inputs
        $data = new Trips ($request->all());

        // convert checkbox values 
        $arrayToString = implode(',', $request->input('frequency'));
        $data['frequency'] = $arrayToString;
        
        // set user registered email as default key
        $data['_userid'] = auth()->user()->email;

        $data->save();
        

        if($data){
            return redirect()->route('index')->with('success', 'Trip profile has been created');
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
        return view('view-trip-profile',compact('trip_profile'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function edit(Trips $trips)
    {
        return view('edit-trip-profile',compact('trip_profile'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trips $trips)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trips $trips)
    {
        //
    }
}

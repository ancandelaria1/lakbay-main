<x-app-layout>
    @include('layouts.nav-link')
    
    @if($trip_profiles->first())
    <div id="searchPage" class="container">
        <div class="row">
            <div class="col-lg-12 card-margin">
                <div class="card search-form">
                    <div class="card-body p-0">
                        <form id="search-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Location</option>
                                                <option>London</option>
                                                <option>Boston</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                            <input type="text" placeholder="Search..." class="form-control" id="search" name="search">
                                        </div>
                                        <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                            <button type="submit" class="btn btn-base">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    @endif
    @if(!$trip_profiles->isEmpty())
        @foreach($trip_profiles as $trip_profile)
        <div class="member-entry"> 
            <a href="#" class="member-img"> 
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-rounded"> 
                <i class="fa fa-forward"></i> 
            </a> 
            <div class="member-details"> 
                <h4> <a href="#">{{ $trip_profile->firstName }} {{ $trip_profile->lastName }}</a> </h4> 
                <div class="row info-list"> 
                    <div class="col-sm-4"> 
                        {{ $trip_profile->gender }} {{ $trip_profile->riderType }}
                    </div> 
                    <div class="col-sm-4"> 
                        Departure Time: {{ $trip_profile->departureTime }} 
                    </div> 
                    <div class="col-sm-4"> 
                        Origin Address: {{ $trip_profile->originAddress }} 
                    </div> 
                    <div class="clear"></div> 
                    <div class="col-sm-4"> 
                    </div> 
                    <div class="col-sm-4"> 
                        Estimated Arrival Time: {{ $trip_profile->arrivalTime }} 
                    </div> 
                    <div class="col-sm-4"> 
                        Destination Address: {{ $trip_profile->destinationAddress }} 
                    </div> 
                </div> 
                <div class="buttons">
                    <a href="{{ route('open-trip-profile', $trip_profile->id ) }}" id="btn_Trip" class="btn btn-primary px-4 ms-3">Open Profile</a>
                    <!-- <a id="btn_Trip" class="btn btn-primary px-4 ms-3" data-id="{{ $trip_profile->id }}" >Open Profile</a> -->
                    @if(Request::url() == 'http://127.0.0.1:8001/search-trips')
                        <!-- remove invite button -->
                    @else
                        @if ($trip_profile->riderType == 'Passenger')
                            {{ method_field('POST') }}
                            @csrf
                            <a id="btn_Trip" class="btn btn-primary px-4 ms-3" onclick="return confirm('Are you sure you want to invite this person?')" 
                                href="{{ route( 'invite-passenger', [ 'id' => $trip_profile->id, 'groupId' =>  $groupId ] ) }}">
                                Invite to group
                            </a>
                        @else
                            <a id="btn_Trip" class="btn btn-primary px-4 ms-3" onclick="return confirm('Do you want to join this group?')"  
                                href ="{{ route('invite-driver', [ 'driverId' => $trip_profile->groupId, 'passengerId' =>  $id ] ) }}">Join Group</a>
                        @endif
                    @endif
                </div>
            </div> 
        </div>
        @endforeach
    @else
        <div style="margin: 20px" class="alert alert-warning radius-bordered alert-shadowed text-center">
            <strong>No trips created yet.</strong>
        </div>
    @endif
    </div>

</x-app-layout>

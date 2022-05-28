<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Trip profile') }}
        </h2> -->
        <!-- Trips navigation-->
        <nav id="nav_Trips" class="nav nav-borders">
            <a class="nav-link" href="{{route('groups')}}" target="_self">Your Group</a>
            <a class="nav-link active ms-0" href="{{route('view-trip-profile')}}" target="_self">View Trip Profile</a>
            <a class="nav-link" href="{{ route('search-trips') }}" target="_self">Find Trips</a>
        </nav>
    </x-slot>

    <div id="createTripProfile">
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <!-- <div class="col-xl-4">
                <! -- Profile picture card-- >
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Display Picture</div>
                    <div class="card-body text-center">
                        <! -- Profile picture image -- >
                        <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <! -- Profile picture help block -- >
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <! -- Profile picture upload button -- >
                        <button id="btn_Trip" class="btn btn-primary" type="button">Upload new image</button>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-xl-4">
            <a class="btn btn-primary" href="{{ route('delete-trip-profile') }}" enctype="multipart/form-data">Delete profile</a>
            </div>   -->
            <!-- <div class="col-xl-8"> -->
            <div class="col-xl-10 mx-auto">
                <!-- Create Trip Profile card-->
                <div class="card mb-4">
                    <div class="card-header">Edit Profile Information</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('update-trip-profile', $trip_profile->id) }}" enctype='multipart/form-data'>
                        {{ method_field('put') }}
                        @csrf
                            <!-- Form Group (username)
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                            </div> -->
                            <!-- Form Group (driver / passenger ) -->
                            <!-- <div class="form-check form-switch">
                                <label class="form-check-label" for="isDriver">Driver? (toggle, if yes)</label>
                                <input class="form-check-input" type="checkbox" id="isDriver" checked>
                            </div> -->
                            <!-- Form Group (driver / passenger ) -->
                            @if ($trip_profile->riderType == "Passenger")
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="isDriver">Driver</label>
                                <input class="form-check-input" type="radio" name ="riderType" id="isDriver" value="Driver" {{ ( $trip_profile->riderType == "Driver")? "checked" : "" }} >
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="isPassenger">Passenger</label>
                                <input class="form-check-input" type="radio" name ="riderType" id="isPassenger" value="Passenger" {{ ( $trip_profile->riderType == "Passenger")? "checked" : "" }}  >
                            </div>
                            @endif
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="firstName">First name</label>
                                    <input class="form-control" id="firstName" name="firstName" type="text" placeholder="Enter your first name" value="{{ $trip_profile->firstName }}">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="lastName">Last name</label>
                                    <input class="form-control" id="lastName" name= "lastName" type="text" placeholder="Enter your last name" value="{{ $trip_profile->lastName }}">
                                </div>
                            </div>
                            <!-- Form Group (male / female ) -->
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="isMale">Male</label>
                                <input class="form-check-input" type="radio" name ="gender" id="isMale" value="Male" {{ ( $trip_profile->gender == "Male")? "checked" : "" }} >
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="isFemale">Female</label>
                                <input class="form-check-input" type="radio" name ="gender" id="isFemale" value="Female" {{ ( $trip_profile->gender == "Female")? "checked" : "" }} >
                            </div>
                            <!-- Form Row -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (mobile Number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="mobileNumber">Mobile Number</label>
                                    <input class="form-control" id="mobileNumber" name="mobileNumber" type="text" placeholder="Enter your active mobile number" value="{{ $trip_profile->mobileNumber }}">
                                </div>
                                <!-- Form Group (preferred communication channel)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="commChannel">Preferred Communication Channel</label>
                                    <input class="form-control" id="commChannel" name="commChannel" type="text" placeholder="Facebook / Viber / SMS / Email / others" value="{{ $trip_profile->commChannel }}">
                                </div>
                            </div>
                            <!-- Form Group (origin)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="originAddress">Origin</label>
                                <input class="form-control" id="originAddress" name="originAddress" type="text" placeholder="Where are you leaving from?" value="{{ $trip_profile->originAddress }}">
                            </div>
                            <!-- Form Group (estimated departure time )-->
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="departureTime">Estimated Departure Time</label>
                                    <input class="form-control" id="departureTime" name="departureTime" type="time" placeholder="" value="{{ $trip_profile->departureTime }}">
                                </div>
                            </div>
                            <!-- Form Group (destination)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="destinationAddress">Destination</label>
                                <input class="form-control" id="destinationAddress" name="destinationAddress" type="text" placeholder="Where are you heading?" value="{{ $trip_profile->destinationAddress }}">
                            </div>
                            <!-- Form Group (estimated arrival time )-->
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="arrivalTime">Estimated Arrival Time</label>
                                    <input class="form-control" id="arrivalTime" name="arrivalTime" type="time" placeholder="" value="{{ $trip_profile->arrivalTime }}">
                                </div>
                            </div>
                            <!-- Form Group (frequency of trip)-->
                            <div class="mb-1">
                                <label class="small mb-1">Frequency of this trip:</label>
                            </div>
                            <!-- Form Group (frequency)-->
                            <div class="form-check form-check-inline">
                            <label class="form-check-label" for="isSunday">Sun</label>
                            <input class="form-check-input" type="checkbox" id="isSunday" name="frequency[]" value="Sunday" {{ ( in_array( "Sunday" ,  $trip_profile->frequency))? "checked" : "" }}>
                            </div>
                            <div class="form-check form-check-inline">
                            <label class="form-check-label" for="isMonday">Mon</label>
                            <input class="form-check-input" type="checkbox" id="isMonday" name="frequency[]" value="Monday" {{ ( in_array( "Monday" ,  $trip_profile->frequency))? "checked" : "" }}>
                            </div>
                            <div class="form-check form-check-inline">
                            <label class="form-check-label" for="isTuesday">Tue</label>
                            <input class="form-check-input" type="checkbox" id="isTuesday" name="frequency[]" value="Tuesday" {{ ( in_array( "Tuesday" ,  $trip_profile->frequency))? "checked" : "" }}>
                            </div>
                            <div class="form-check form-check-inline">
                            <label class="form-check-label" for="isWednesday">Wed</label>
                            <input class="form-check-input" type="checkbox" id="isWednesday" name="frequency[]" value="Wednesday" {{ ( in_array( "Wednesday" ,  $trip_profile->frequency))? "checked" : "" }}>
                            </div>
                            <div class="form-check form-check-inline">
                            <label class="form-check-label" for="isThursday">Thu</label>
                            <input class="form-check-input" type="checkbox" id="isThursday" name="frequency[]" value="Thursday" {{ ( in_array( "Thursday" ,  $trip_profile->frequency))? "checked" : "" }}>
                            </div>
                            <div class="form-check form-check-inline">
                            <label class="form-check-label" for="isFriday">Fri</label>
                            <input class="form-check-input" type="checkbox" id="isFriday" name="frequency[]" value="Friday" {{ ( in_array( "Friday" ,  $trip_profile->frequency))? "checked" : "" }}>
                            </div>
                            <div class="form-check form-check-inline">
                            <label class="form-check-label" for="isSaturday">Sat</label>
                            <input class="form-check-input" type="checkbox" id="isSaturday" name="frequency[]" value="Saturday" {{ ( in_array( "Saturday" ,  $trip_profile->frequency))? "checked" : "" }}>
                            </div>
                            <div class="mt-3">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (facebook)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="facebook">Facebook</label>
                                    <input class="form-control" id="facebook" name="facebook" type="text" placeholder="-optional-" value="{{ $trip_profile->facebook }}">
                                </div>
                                <!-- Form Group (instagram)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="instagram">Instagram</label>
                                    <input class="form-control" id="instagram" name="instagram" type="text" placeholder="-optional-" value="{{ $trip_profile->instagram }}">
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (linkedin)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="linkedin">Linkedin</label>
                                    <input class="form-control" id="linkedin" name="linkedin" type="text" placeholder="-optional-" value="{{ $trip_profile->linkedin }}">
                                </div>
                                <!-- Form Group (email)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="emailAddress">Email</label>
                                    <input class="form-control" id="emailAddress" name="emailAddress" type="text" placeholder="Preferred email" value="{{ $trip_profile->emailAddress }}">
                                </div>
                            </div>
                            <!-- Form Group (professional/work interests)-->
                            <div class="mb-3">
                            <label for="workInterests" class="form-label">Professional or work interests:</label>
                            <textarea class="form-control" id="workInterests" name="workInterests" rows="3">{{ $trip_profile->workInterests }}</textarea>
                            </div>
                            <!-- Form Group (Travel or hobby interests)-->
                            <div class="mb-3">
                            <label for="travelInterests" class="form-label">Travel or hobby interests:</label>
                            <textarea class="form-control" id="travelInterests" name="travelInterests" rows="3">{{ $trip_profile->travelInterests }}</textarea>
                            </div>
                            <!-- Save button-->
                            <div>
                                <button id= "btn_Trip" class="btn btn-primary" href="{{ route('update-trip-profile', $trip_profile->id) }}" enctype="multipart/form-data">Update Profile</button>
                                <a class="btn btn-danger" href="{{ route('delete-trip-profile') }}" enctype="multipart/form-data">Delete profile</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>

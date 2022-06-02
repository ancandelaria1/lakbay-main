<x-app-layout>
    @include('layouts.nav-link')

    <div id="showTripProfile">
        <div class="container mt-5">

            <div class="row d-flex justify-content-center">

                <div class="col-md-7">
                @if (session()->has('message'))
                    <div class="alert alert-success" style="margin-top:30px;">x
                    {{ session('message') }}
                    </div>
                @endif
                    @if (!$trip_profiles->isEmpty())
                    @foreach($trip_profiles as $trip_profile)
                    <div class="card p-3 py-4" style="margin: 10px">

                        <div id="custom_img"> 
                            <img
                            @if($trip_profile->gender == 'Male' )
                                src="https://bootdey.com/img/Content/avatar/avatar7.png"
                            @else
                                src="https://bootdey.com/img/Content/avatar/avatar3.png"
                            @endif  
                            width="100" class="rounded-circle">
                        </div>

                        <div class="text-center mt-3">
                            <span class="bg-secondary p-1 px-4 rounded text-white">{{ $trip_profile->riderType }} </span>
                            <h5 class="mt-2 mb-0">{{ $trip_profile->firstName }} {{ $trip_profile->lastName }} </h5>
                            <span><i class="fa fa-mobile"> {{ $trip_profile->mobileNumber }}</i></span>

                            <div class="px-4 mt-1">
                                <p class="fonts"> - - - </p>
                            </div>
                            <div class="px-4 mt-1">
                                <p class="fonts">Origin: {{ $trip_profile->originAddress }} </p>
                            </div>
                            <div class="px-4 mt-1">
                                <p class="fonts">Estimated Departure Time: {{ $trip_profile->departureTime }} </p>
                            </div>
                            <div class="px-4 mt-1">
                                <p class="fonts">Destination: {{ $trip_profile->destinationAddress }} </p>
                            </div>
                            <div class="px-4 mt-1">
                                <p class="fonts">Estimated Arrival Time: {{ $trip_profile->arrivalTime }} </p>
                            </div>
                            <div class="px-4 mt-1">
                                <p class="fonts"> - - - </p>
                            </div>
                            <div class="px-4 mt-1">
                                <p class="fonts">@foreach ($trip_profile->frequency as $day) {{ $day }} , @endforeach</p>
                            </div>

                            <ul class="social-list">
                                <li><i class="fa fa-facebook"></i></li>
                                <li><i class="fa fa-instagram"></i></li>
                                <li><i class="fa fa-linkedin"></i></li>
                                <li><i class="fa fa-envelope"></i></li>
                            </ul>

                            <div class="buttons">
                                <!-- <form method="GET" action="{{ route('edit-trip-profile', $trip_profile->id ) }}" enctype='multipart/form-data'>
                                @csrf -->
                                <!-- <button class="btn btn-outline-primary px-4">Message</button> -->
                                <a id="btn_Trip" class="btn btn-primary px-4 ms-3" href ="{{ route('edit-trip-profile', $trip_profile->id ) }}">Edit Profile</a>
                                @if ($trip_profile->riderType == 'Driver')
                                    <a id="btn_Trip" class="btn btn-primary px-4 ms-3" 
                                        href ="{{ route('join-groups', $trip_profile->id ) }}">Invite Passengers </a>
                                @else
                                    <a id="btn_Trip" class="btn btn-primary px-4 ms-3" 
                                        href ="{{ route('join-groups', $trip_profile->id ) }}">Join Groups </a>
                                @endif
                                <!-- </endform> -->
                            </div>

                        </div>

                    </div>
                    @endforeach
                    @else
                    <div class="alert alert-warning radius-bordered alert-shadowed">
                        <strong>You have no profiles yet.</strong>
                    </div>
                    @endif
                </div>

            </div>

        </div>
    </div>
</x-app-layout>

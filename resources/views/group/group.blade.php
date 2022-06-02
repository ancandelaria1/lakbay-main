<x-app-layout>
    @include('layouts.nav-link')

<div class="container" >

        <!-- <div class="row">
            <div class="col-md-6 text-center" id="group-box">
                <div class="box-content">
                    Some name wants to join the group
                    <button class="btn btn-success ml-3">accept</button>
                    <button class="btn btn-danger">ignore</button>
                </div>
                <div class="box-content">
                    Some name wants to join the group
                    <button class="btn btn-success ml-3">accept</button>
                    <button class="btn btn-danger">ignore</button>
                </div>
                <div class="box-content">
                    Some name wants to join the group
                    <button class="btn btn-success ml-3">accept</button>
                    <button class="btn btn-danger">ignore</button>
                </div>

            </div>
        </div> -->

    @if($trip_profiles->isEmpty())
        <div style ="margin-top: 20px" class="alert alert-warning radius-bordered alert-shadowed text-center">
            <strong>You have no profiles yet.</strong>
        </div>
    @endif

<!-- Driver Section -->

    <div style="background:#000; color:#fff; font-weight:bold" class="col-md-2 text-center" id="group-box">
        Driver Section
    </div>

    @if(!$trip_profiles->isEmpty())

    @foreach($trip_profiles->where('riderType','Driver') as $trip_profile)

    <!-- Driver profile -->
    <div class="row bootstrap snippets bootdey" id="group-box">

        
        <!-- Invite requests -->
        @php 
            $groupDriver = $groups->where('groupId', $trip_profile->groupId)->first()
        @endphp
        @if(!$invites->isEmpty() && ($groupDriver))
            @foreach($invites->where('groupId', $groupDriver->groupId)->where('confirmed', null)->where('requestFromDriver', 'N') as $invite)
                
                <div class="col-md-8 text-center" >
                    <div class="box-content">
                        {{ $invite->riderType}}, {{ $invite->firstName }} {{ $invite->lastName }}, wants to join the group.
                        <a class="btn btn-success ml-3" href="{{ route('accept-invite', $invite->id ) }}">Accept</a>
                        <a class="btn btn-danger" href="{{ route('decline-invite', $invite->id ) }}">Decline</a>
                        <a id="btn_Trip" class="btn btn-primary" href="{{ route('open-trip-profile', $invite->tripId ) }}">Verify Passenger Profile</a>
                    </div>
                </div>
            @endforeach
        @endif

        <div class="row">
            <div class="col-md-12 font-accident-two-bold-italic text-left team-attrs">
                <span>{{$trip_profile->firstName}}'s Group </span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="team-member">
                <figure class="effect-zoe">
                    <a class="btn btn-secondary" href="{{ route('open-trip-profile', $trip_profile->id ) }}">Check Profile</a>
                    <div class="team-photo">
                        <img 
                        @if ( $trip_profile->gender == 'Male' )
                            src="https://bootdey.com/img/Content/avatar/avatar7.png"
                        @else
                            src="https://bootdey.com/img/Content/avatar/avatar3.png"
                        @endif 
                        alt="user" class="img-responsive">
                    </div>
                    <div class="team-attrs">
                        <div class="team-name font-accident-two-bold-italic">
                            {{ $trip_profile->firstName }} {{ $trip_profile->lastName }}
                        </div>
                        <div class="team-position">{{ $trip_profile->riderType }}</div>
                    </div>
                    <div class="team-content small">
                        Destination: {{ $trip_profile->destinationAddress }}
                    </div>
                    <figcaption>

                        <p class="icon-links">
                            <a 
                            @if($trip_profile->emailAddress)
                                href="{{$trip_profile->emailAddress}}" target="_blank">
                            @else
                                href="#!">
                            @endif
                                <i class="fa fa-google"></i>
                            </a>
                            <a 
                            @if($trip_profile->instagram)
                                href="{{$trip_profile->instagram}}" target="_blank">
                            @else
                                href="#!">
                            @endif
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a 
                            @if($trip_profile->facebook)
                                href="{{$trip_profile->facebook}}" target="_blank">
                            @else
                                href="#!">
                            @endif
                                <i class="fa fa-facebook"></i>
                            </a>
                        </p>

                        <p class="phone-number">
                            <a href="#!">Mobile: {{ $trip_profile->mobileNumber }}</a>
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="dividewhite4"></div>
        </div>

        <!-- Member's profile -->
        @php
            $groupDriver = $groups->where('groupId', $trip_profile->groupId)->first()
        @endphp
        @if(isset($groupDriver->members))
            @foreach($groupDriver->members as $member)

                @if(isset($member))
            
                    @foreach($all_profiles->where('_id', $member) as $member_profile)
                    <div class="col-md-3">
                        <div class="team-member">
                            <figure class="effect-zoe">
                                <a class="btn btn-secondary" href="{{ route('open-trip-profile', $member_profile->id ) }}">Check Profile</a>
                                <div class="team-photo">
                                    <img 
                                    @if ( $member_profile->gender == 'Male' )
                                        src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                    @else
                                        src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                    @endif 
                                    alt="user" class="img-responsive">
                                </div>
                                <div class="team-attrs">
                                    <div class="team-name font-accident-two-bold-italic">
                                        {{ $member_profile->firstName }} {{ $member_profile->lastName }}
                                    </div>
                                    <div class="team-position">{{ $member_profile->riderType }}</div>
                                </div>
                                <div class="team-content small">
                                    Destination: {{ $member_profile->destinationAddress }}
                                </div>
                                <figcaption>

                                    <p class="icon-links">
                                        <a 
                                        @if($trip_profile->emailAddress)
                                            href="{{$member_profile->emailAddress}}" target="_blank">
                                        @else
                                            href="#!">
                                        @endif
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a 
                                        @if($trip_profile->instagram)
                                            href="{{$member_profile->instagram}}" target="_blank">
                                        @else
                                            href="#!">
                                        @endif
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                        <a 
                                        @if($trip_profile->facebook)
                                            href="{{$member_profile->facebook}}" target="_blank">
                                        @else
                                            href="#!">
                                        @endif
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </p>

                                    <p class="phone-number">
                                        <a href="#!">Mobile: {{ $member_profile->mobileNumber }}</a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="dividewhite4"></div>
                    </div>

                    @endforeach

                @endif

            @endforeach
        @endif

    </div>
    @endforeach
    @endif

<!-- Passenger Section -->
    
    <div style="background:#000; color:#fff; font-weight:bold" class="col-md-2 text-center" id="group-box">
        Passenger Section
    </div>

    @if(!$trip_profiles->isEmpty())

    @foreach($trip_profiles->where('riderType','Passenger') as $trip_profile)

    <!-- Passenger profile -->
    <div class="row bootstrap snippets bootdey" id="group-box">

        <!-- Invite requests -->
        @if(!$invites->isEmpty())
            @foreach($invites->where('confirmed', '=', null)->where('requestFromDriver','=', 'Y') as $invite)
                @php 
                    $groupDriver = $groups->where('groupId', $invite->groupId)->first()
                @endphp
                @if($invite->groupId == $groupDriver->groupId && $invite->tripId == $trip_profile->id)
                    <div class="col-md-8 text-center" >
                        <div class="box-content">
                            {{ $groupDriver->riderType}}, {{ $groupDriver->firstName }} {{ $groupDriver->lastName }}, wants you to join their group.
                        <a class="btn btn-success ml-3" href="{{ route('accept-invite', $invite->id ) }}">Accept</a>
                        <a class="btn btn-danger" href="{{ route('decline-invite', $invite->id ) }}">Decline</a>
                            <a id="btn_Trip" class="btn btn-primary"  href="{{ route('open-trip-profile', $groupDriver->tripId ) }}">Verify Driver Profile</a>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif

        <div class="row">
            <div class="team-name font-accident-two-bold-italic">
                <span>{{$trip_profile->firstName}}'s Group </span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="team-member">
                <figure class="effect-zoe">
                    <a class="btn btn-secondary" href="{{ route('open-trip-profile', $trip_profile->id ) }}">Check Profile</a>
                    <div class="team-photo">
                        <img 
                        @if ( $trip_profile->gender == 'Male' )
                            src="https://bootdey.com/img/Content/avatar/avatar7.png"
                        @else
                            src="https://bootdey.com/img/Content/avatar/avatar3.png"
                        @endif 
                        alt="user" class="img-responsive">
                    </div>
                    <div class="team-attrs">
                        <div class="team-name font-accident-two-bold-italic">
                            {{ $trip_profile->firstName }} {{ $trip_profile->lastName }}
                        </div>
                        <div class="team-position">{{ $trip_profile->riderType }}</div>
                    </div>
                    <div class="team-content small">
                        Destination: {{ $trip_profile->destinationAddress }}
                    </div>
                    <figcaption>

                        <p class="icon-links">
                            <a 
                            @if($trip_profile->emailAddress)
                                href="{{$trip_profile->emailAddress}}" target="_blank">
                            @else
                                href="#!">
                            @endif
                                <i class="fa fa-google"></i>
                            </a>
                            <a 
                            @if($trip_profile->instagram)
                                href="{{$trip_profile->instagram}}" target="_blank">
                            @else
                                href="#!">
                            @endif
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a 
                            @if($trip_profile->facebook)
                                href="{{$trip_profile->facebook}}" target="_blank">
                            @else
                                href="#!">
                            @endif
                                <i class="fa fa-facebook"></i>
                            </a>
                        </p>

                        <p class="phone-number">
                            <a href="#!">Mobile: {{ $trip_profile->mobileNumber }}</a>
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="dividewhite4"></div>
        </div>

        <!-- Member's profile -->
        @php
            $groupDriver = $groups->where('groupId', $trip_profile->groupId)->first()
        @endphp
        @if(isset($groupDriver->members))
            @foreach($groupDriver->members as $member)

                @if(isset($member))

                    <!-- replace current member profile with driver profile -->
                    @if($member == $trip_profile->id)
                        @php $member = $groupDriver->tripId @endphp
                    @endif
            
                    @foreach($all_profiles->where('_id', $member) as $member_profile)
                    <div class="col-md-3">
                        <div class="team-member">
                            <figure class="effect-zoe">
                                <a class="btn btn-secondary" href="{{ route('open-trip-profile', $member_profile->id ) }}">Check Profile</a>
                                <div class="team-photo">
                                    <img 
                                    @if ( $member_profile->gender == 'Male' )
                                        src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                    @else
                                        src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                    @endif 
                                    alt="user" class="img-responsive">
                                </div>
                                <div class="team-attrs">
                                    <div class="team-name font-accident-two-bold-italic">
                                        {{ $member_profile->firstName }} {{ $member_profile->lastName }}
                                    </div>
                                    <div class="team-position">{{ $member_profile->riderType }}</div>
                                </div>
                                <div class="team-content small">
                                    Destination: {{ $member_profile->destinationAddress }}
                                </div>
                                <figcaption>

                                    <p class="icon-links">
                                        <a 
                                        @if($trip_profile->emailAddress)
                                            href="{{$member_profile->emailAddress}}" target="_blank">
                                        @else
                                            href="#!">
                                        @endif
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a 
                                        @if($trip_profile->instagram)
                                            href="{{$member_profile->instagram}}" target="_blank">
                                        @else
                                            href="#!">
                                        @endif
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                        <a 
                                        @if($trip_profile->facebook)
                                            href="{{$member_profile->facebook}}" target="_blank">
                                        @else
                                            href="#!">
                                        @endif
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </p>

                                    <p class="phone-number">
                                        <a href="#!">Mobile: {{ $member_profile->mobileNumber }}</a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="dividewhite4"></div>
                    </div>

                    @endforeach

                @endif

            @endforeach
        @endif

    </div>
    @endforeach
    @endif
</div>

    

</x-app-layout>

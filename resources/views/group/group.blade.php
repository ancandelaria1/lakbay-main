<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Group') }}
        </h2> -->
        <!-- Trips navigation-->
        <nav id="nav_Trips" class="nav nav-borders">
            <a class="nav-link active ms-0" href="{{ route('groups') }}" target="_self">Your Group</a>
            <a class="nav-link" href="{{ route('view-trip-profile') }}" target="_self">View Trip Profile</a>
            <a class="nav-link" href="{{ route('create-trip-profile') }}" target="_self">Create Trip Profile</a>
            <a class="nav-link" href="{{ route('search-trips') }}" target="_self">Find Trips</a>
        </nav>
    </x-slot>

    <div>
    <div class="container">
        <a  class="btn btn-danger px-4 ms-0"> Leave Group </a>
        <div class="col-md-4">
        <div class="team-member">
            <figure class="effect-zoe">
                <div class="team-photo">
                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Rachel James Johnes" class="img-responsive">
                </div>
                <div class="team-attrs">
                    <div class="team-name font-accident-two-bold-italic">Mario Quinn</div>
                    <div class="team-position">Designer</div>
                </div>
                <div class="team-content small">
                    Truong is also the recipient of The George C. Lin Emerging Filmmaker Award from the San Diego
                </div>
                <figcaption>
                    <p class="icon-links">
                        <a href="#!"><i class="fa fa-google"></i></a>
                        <a href="#!"><i class="fa fa-instagram"></i></a>
                        <a href="#!"><i class="fa fa-facebook"></i></a>
                    </p>

                    <p class="phone-number">
                        <a href="#!">tel: 1 234 567-89-10</a>
                    </p>
                </figcaption>
            </figure>
        </div>
        <div class="dividewhite4"></div>
    </div>

    <div class="container">
        <div class="row bootstrap snippets bootdey">
            <div class="team-member">
                <figure class="effect-zoe">
                    <div class="team-photo">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Rachel James Johnes" class="img-responsive">
                    </div>
                    <div class="team-attrs">
                        <div class="team-name font-accident-two-bold-italic">Ramon Vasquez</div>
                        <div class="team-position">Manager</div>
                    </div>
                    <div class="team-content small">
                        Truong is also the recipient of The George C. Lin Emerging Filmmaker Award from the San Diego
                    </div>
                    <figcaption>
                        <p class="icon-links">
                            <a href="#!"><i class="fa fa-google"></i></a>
                            <a href="#!"><i class="fa fa-instagram"></i></a>
                            <a href="#!"><i class="fa fa-facebook"></i></a>
                        </p>

                        <p class="phone-number">
                            <a href="#!">tel: 1 234 567-89-10</a>
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="dividewhite4"></div>
        </div>
    </div>
            <!-- TEAM MEMBER 3 - END -->

                <!-- <div  class="alert alert-warning radius-bordered alert-shadowed">
                <strong>You have no groups yet.</strong> 
                    <a id="btn_Trip" class="btn btn-primary px-4 ms-3" href ="{{ route('search-trips') }}">Search Trips</a>
                </div> -->
        </div>
    </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Group') }}
        </h2> -->
        <!-- Trips navigation-->
        <nav id="nav_Trips" class="nav nav-borders">
            <a class="nav-link" href="{{ route('groups') }}" target="_self">Your Group</a>
            <a class="nav-link" href="{{ route('view-trip-profile') }}" target="_self">View Trip Profile</a>
            <a class="nav-link active ms-0" href="{{ route('create-trip-profile') }}" target="_self">Create Trip Profile</a>
        </nav>
    </x-slot>

    <div>
    <div class="container">
        <div class="row" id="team">
            <!-- TEAM MEMBER 1 - START -->
            <div class="col-xs-6 col-sm-3">
                <div class="team-member">
                    <div class="overlay-wrapper2">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive" alt="">
                        <span class="overlay" style="display: none;">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </span>
                    </div>
                    <h4>John Doe</h4>
                    <span>CEO</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec nulla sagittis, scelerisque mi vitae.</p>
                </div>
            </div>
            <!-- TEAM MEMBER 1 - END -->
            
            <!-- TEAM MEMBER 2 - START -->
            <div class="col-xs-6 col-sm-3">
                <div class="team-member">
                    <div class="overlay-wrapper2">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-responsive" alt="">
                        <span class="overlay" style="display: none;">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </span>
                    </div>
                    <h4>John Doe</h4>
                    <span>Project Manager</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec nulla sagittis, scelerisque mi vitae.</p>
                </div>
            </div>
            <!-- TEAM MEMBER 2 - END -->
            
            <!-- TEAM MEMBER 3 - START -->
            <div class="col-xs-6 col-sm-3">
                <div class="team-member">
                    <div class="overlay-wrapper2">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-responsive" alt="">
                        <span class="overlay" style="display: none;">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </span>
                    </div>
                    <h4>John Doe</h4>
                    <span>Webdesigner</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec nulla sagittis, scelerisque mi vitae.</p>
                </div>
            </div>
            <!-- TEAM MEMBER 3 - END -->
            
            <!-- TEAM MEMBER 4 - START -->
            <div class="col-xs-6 col-sm-3">
                <div class="team-member">
                    <div class="overlay-wrapper2">
                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="img-responsive" alt="">
                        <span class="overlay" style="display: none;">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </span>
                    </div>
                    <h4>John Doe</h4>
                    <span>Photographer</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec nulla sagittis, scelerisque mi vitae.</p>
                </div>
            </div>
            <!-- TEAM MEMBER 4 - END -->
        </div>
    </div>
    </div>
</x-app-layout>

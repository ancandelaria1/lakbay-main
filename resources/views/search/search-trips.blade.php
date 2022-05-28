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
                                            <option>Mumbai</option>
                                            <option>New York</option>
                                            <option>Toronto</option>
                                            <option>Paris</option>
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
        <div class="member-entry"> 


            <a href="#" class="member-img"> 
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-rounded"> 
                <i class="fa fa-forward"></i> 
            </a> 
            <div class="member-details"> 
                <h4> <a href="#">Johnnie Linton</a> </h4> 
                <div class="row info-list"> 
                    <div class="col-sm-4"> 
                        <i class="fa fa-briefcase"></i>
                        Co-Founder at <a href="#">Complete Tech</a> 
                    </div> 
                    <div class="col-sm-4"> 
                        <i class="fa fa-twitter"></i> 
                        <a href="#">@johnnie</a> 
                    </div> 
                    <div class="col-sm-4"> 
                        <i class="fa fa-facebook"></i> 
                        <a href="#">fb.me/johnnie</a> 
                    </div> 
                    <div class="clear"></div> 
                    <div class="col-sm-4"> 
                        <i class="fa fa-location"></i> 
                        <a href="#">Prishtina</a> 
                    </div> 
                    <div class="col-sm-4"> 
                        <i class="fa fa-envelope"></i> 
                        <a href="#">john@gmail.com</a> 
                    </div> 
                    <div class="col-sm-4"> 
                        <i class="fa fa-linkedin"></i> 
                        <a href="#">johnkennedy</a> 
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
</x-app-layout>

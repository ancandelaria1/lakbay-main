<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Trip profile') }}
        </h2> -->
        <!-- Trips navigation-->
        <nav id="nav_Trips" class="nav nav-borders">
            <a class="nav-link" href="{{ route('groups') }}" target="_self">Your Group</a>
            <a class="nav-link" href="{{ route('view-trip-profile') }}" target="_self">View Trip Profile</a>
            <a class="nav-link active ms-0" href="{{ route('create-trip-profile') }}" target="_self">Create Trip Profile</a>
        </nav>
    </x-slot>

    <div id="showTripProfile">
        <div class="container mt-5">
    
            <div class="row d-flex justify-content-center">
                
                <div class="col-md-7">
                    
                    <div class="card p-3 py-4">
                        
                        <div class="text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="100" class="rounded-circle">
                        </div>
                        
                        <div class="text-center mt-3">
                            <span class="bg-secondary p-1 px-4 rounded text-white">Pro</span>
                            <h5 class="mt-2 mb-0">Alquin Candelaria</h5>
                            <span>Developer</span>
                            
                            <div class="px-4 mt-1">
                                <p class="fonts">My trip details are... </p>
                            
                            </div>
                            
                            <ul class="social-list">
                                <li><i class="fa fa-facebook"></i></li>
                                <li><i class="fa fa-instagram"></i></li>
                                <li><i class="fa fa-linkedin"></i></li>
                                <li><i class="fa fa-envelope"></i></li>
                            </ul>
                            
                            <div class="buttons">
                                
                                <button class="btn btn-outline-primary px-4">Message</button>
                                <button @click="" class="btn btn-primary px-4 ms-3">Edit</button>
                            </div>
                            
                            
                        </div>
                        
                    
                        
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>    
    </div>
</x-app-layout>

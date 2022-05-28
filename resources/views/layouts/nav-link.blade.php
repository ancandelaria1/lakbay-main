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

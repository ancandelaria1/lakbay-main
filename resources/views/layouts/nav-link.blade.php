<x-slot name="header">
    <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Your Group') }}
    </h2> -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Trips navigation-->
    <nav id="nav_Trips" class="nav nav-borders">
        <a class="nav-link active ms-0" href="{{ route('groups') }}" target="_self" data-toggle="tooltip" title="Check your groups!"><i id="custom_nav_link_icon" class="fa fa-globe"> lakbay</i></a>
        <a class="nav-link" href="{{ route('view-trip-profile') }}" target="_self" data-toggle="tooltip" title="View Trip Profile"><i id="custom_nav_link_icon" class="fa fa-book"> view</i></a>
        <a class="nav-link" href="{{ route('create-trip-profile') }}" target="_self" data-toggle="tooltip" title="Create Trip Profile"><i id="custom_nav_link_icon" class="fa fa-pencil-square-o"> create</i></a>
        <!-- <a class="nav-link" href="{{ route('search-trips') }}" target="_self">Find Trips</a> -->
    </nav>
</x-slot>

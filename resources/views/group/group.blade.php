<x-app-layout>
    @include('layouts.nav-link')

    <div class="container">

        <div class="row">
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
        </div>


        <div class="row">
            <div class="col-md-12 text-right">
                <a  class="btn btn-danger px-4 ms-0 mt-3"> Leave Group </a>
            </div>
        </div>


        <div class="row bootstrap snippets bootdey">

            <div class="col-md-3">
                <div class="team-member">
                    <figure class="effect-zoe">
                        <div class="team-photo">
                            @if (isset($user->photo))

                            @else
                                <img src="{{ url('img/default_dp.jpg')}}" alt="Rachel James Johnes" class="img-responsive">
                            @endif
                        </div>
                        <div class="team-attrs">
                            <div class="team-name font-accident-two-bold-italic">Jack Moss</div>
                            <div class="team-position">CEO</div>
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

            <div class="col-md-3">
                <div class="team-member">
                    <figure class="effect-zoe">
                        <div class="team-photo">
                            @if (isset($user->photo))

                            @else
                                <img src="{{ url('img/default_dp.jpg')}}" alt="Rachel James Johnes" class="img-responsive">
                            @endif
                        </div>
                        <div class="team-attrs">
                            <div class="team-name font-accident-two-bold-italic">Jack Moss</div>
                            <div class="team-position">CEO</div>
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

            <div class="col-md-3">
                <div class="team-member">
                    <figure class="effect-zoe">
                        <div class="team-photo">
                            @if (isset($user->photo))

                            @else
                                <img src="{{ url('img/default_dp.jpg')}}" alt="Rachel James Johnes" class="img-responsive">
                            @endif
                        </div>
                        <div class="team-attrs">
                            <div class="team-name font-accident-two-bold-italic">Jack Moss</div>
                            <div class="team-position">CEO</div>
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

            <div class="col-md-3">
                <div class="team-member">
                    <figure class="effect-zoe">
                        <div class="team-photo">
                            @if (isset($user->photo))

                            @else
                                <img src="{{ url('img/default_dp.jpg')}}" alt="Rachel James Johnes" class="img-responsive">
                            @endif
                        </div>
                        <div class="team-attrs">
                            <div class="team-name font-accident-two-bold-italic">Jack Moss</div>
                            <div class="team-position">CEO</div>
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

            <div class="col-md-3">
                <div class="team-member">
                    <figure class="effect-zoe">
                        <div class="team-photo">
                            @if (isset($user->photo))

                            @else
                                <img src="{{ url('img/default_dp.jpg')}}" alt="Rachel James Johnes" class="img-responsive">
                            @endif
                        </div>
                        <div class="team-attrs">
                            <div class="team-name font-accident-two-bold-italic">Jack Moss</div>
                            <div class="team-position">CEO</div>
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
    </div>

    <!-- TEAM MEMBER 3 - END -->

    <!-- <div  class="alert alert-warning radius-bordered alert-shadowed">
    <strong>You have no groups yet.</strong>
        <a id="btn_Trip" class="btn btn-primary px-4 ms-3" href ="{{ route('search-trips') }}">Search Trips</a>
    </div> -->


</x-app-layout>

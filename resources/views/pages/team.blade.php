@extends('layouts.front')

@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bg="{{asset('front/img/bg/14.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Our Team</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{URL::to('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- TEAM AREA START (Team - 3) -->
<div class="ltn__team-area pt-110--- pb-90">
    <div class="container">
        <div class="row justify-content-center">
            @foreach( $teams as $team )
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__team-item ltn__team-item-3---">
                    <div class="team-img">
                        <img src="{{asset('images')}}/{{$team->teamimage}}" alt="Image">
                    </div>
                    <div class="team-info">
                        <h4><a href="#">{{$team->name}}</a></h4>
                        <h6 class="ltn__secondary-color">{{$team->description}}</h6>
                        <div class="ltn__social-media">
                            <ul>
                              @if($team->facebook)
                                <li><a href="{{$team->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                              @endif
                              @if($team->twitter)
                                <li><a href="{{$team->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                              @endif
                              @if($team->linkedin)
                                <li><a href="{{$team->linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                              @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- TEAM AREA END -->
@endsection

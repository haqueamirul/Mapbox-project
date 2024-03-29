@extends('layouts.front')

@section('content')
<div class="ltn__utilize-overlay"></div>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Consultation</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{URL::to('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Consultation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2> <a href="{{route('google.map.index')}}">Click Here</a> </h2>
            </div>
        </div>
    </div>

<!-- BREADCRUMB AREA END -->
@endsection

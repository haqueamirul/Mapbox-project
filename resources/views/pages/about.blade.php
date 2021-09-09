@extends('layouts.front')

@section('content')
<div class="ltn__utilize-overlay"></div>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">{{'About Us'}}</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{URL::to('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> {{'Home'}}</a></li>
                            <li>{{'About Us'}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-120--- pb-90 mt--30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="{{asset('front/img/others/13.jpg')}}" alt="About Us Image">

                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div id="new-pa" class="section-title-area ltn__section-title-2--- mb-20">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">{{'About Us'}}</h6>
                        <h1 class="section-title">{{'Welcome to THICN'}} </h1>
                        <p>
                            {{'Tower Hamlets Island Community Network (THICN), is a new grassroots consortium supporting young people facing multiple/complex disadvantages in the borough. Funded by the Mayor’s Office for Policing and Crime (MOPAC) Violence Reduction Unit (VRU), THICN is one of a number of grass-roots neighbourhood partnerships funded as part of the MyEnds programme.'}}
                        </p>
                        <p>
                            {{'THICN is led by Osmani Trust, in partnership with Spotlight and Streets of Growth, who are all specialists in transforming the life trajectories of young people who have become marginalised by severe local poverty, unemployment and crime – particularly those from BAME communities who are disproportionately affected by these issues.'}}
                        </p>
                        <p>
                            {{'THICN will work to reduce violence on the Isle of Dogs, Tower Hamlets London by working with key stakeholders, young people and local communities to provide a range of interventions, capacity building and support.'}}
                        </p>
                    </div>
                    <!-- <div class="ltn__callout bg-overlay-theme-05  mt-30">
                        <p>"Enimad minim veniam quis nostrud exercitation <br>
                            llamco laboris. Lorem ipsum dolor sit amet" </p>
                    </div> -->
                    <div class="btn-wrapper animated">
                        <a href="#" class="theme-btn-1 btn btn-effect-1">{{'OUR SERVICES'}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- FEATURE AREA START ( Feature - 6) -->
<div class="ltn__feature-area section-bg-1--- pt-115 pb-90 mb-120---">
    <div class="container">
        <div class="row ltn__custom-gutter---  justify-content-center">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house"></i></span> -->
                        <img src="{{asset('front/img/icons/icon-img/21.png')}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="{{route('consultation')}}">{{'Consultation Map'}}</a></h3>
                        <p>{{'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna'}}</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house-3"></i></span> -->
                        <img src="{{asset('front/img/icons/icon-img/22.png')}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="#">{{'Whats on in the Island'}}</a></h3>
                        <p>{{'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna'}}</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-deal-1"></i></span> -->
                        <img src="{{asset('front/img/icons/icon-img/23.png')}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="#">{{'Grants and Support'}}</a></h3>
                        <p>{{'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna'}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->
@endsection

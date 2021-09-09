@extends('layouts.front')

@section('content')
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bg="img/bg/14.jpg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="ltn__breadcrumb-inner">
                      <h1 class="page-title">What We Do</h1>
                      <div class="ltn__breadcrumb-list">
                          <ul>
                              <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                              <li>Service</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
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
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="ltn__service-area section-bg-1 pt-115 pb-70">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title-area ltn__section-title-2--- text-center">
                      <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>
                      <h1 class="section-title">Our Core Services</h1>
                  </div>
              </div>
          </div>
          <div class="row  justify-content-center">
              <div class="col-lg-4 col-sm-6 col-12">
                  <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                      <div class="ltn__feature-icon">
                          <span><i class="flaticon-house"></i></span>
                          <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                      </div>
                      <div class="ltn__feature-info">
                          <h3><a href="service-details.html">Property Management</a></h3>
                          <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                          <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                  <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                      <div class="ltn__feature-icon">
                          <span><i class="flaticon-mortgage"></i></span>
                          <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                      </div>
                      <div class="ltn__feature-info">
                          <h3><a href="service-details.html">Mortgage Service</a></h3>
                          <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                          <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                  <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                      <div class="ltn__feature-icon">
                          <span><i class="flaticon-operator"></i></span>
                          <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                      </div>
                      <div class="ltn__feature-info">
                          <h3><a href="service-details.html">Consulting Service</a></h3>
                          <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                          <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                  <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                      <div class="ltn__feature-icon">
                          <span><i class="flaticon-house-1"></i></span>
                          <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                      </div>
                      <div class="ltn__feature-info">
                          <h3><a href="service-details.html">Home Buying</a></h3>
                          <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                          <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                  <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                      <div class="ltn__feature-icon">
                          <span><i class="flaticon-house-3"></i></span>
                          <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                      </div>
                      <div class="ltn__feature-info">
                          <h3><a href="service-details.html">Home Selling</a></h3>
                          <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                          <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                  <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                      <div class="ltn__feature-icon">
                          <span><i class="flaticon-official-documents"></i></span>
                          <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                      </div>
                      <div class="ltn__feature-info">
                          <h3><a href="service-details.html">Escrow Services</a></h3>
                          <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                          <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="ltn__blog-area pt-120 pb-70">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title-area ltn__section-title-2--- text-center">
                      <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">{{'News & Events'}}</h6>
                      <h1 class="section-title">{{'Leatest News Feeds'}}</h1>
                  </div>
              </div>
          </div>
          <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
              <!-- Blog Item -->

              @php
              $events =App\Event::all();
              @endphp

              @foreach($events  as $event)
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="/details-event/{{$event->id}}"><img style="width:100%;height: 250px;" src="{{asset('images')}}/{{$event->eventimage}}" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>{{'by: Admin'}}</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>{{'Event'}}</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="/details-event/{{$event->id}}">{{$event->title}}</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>{{$event->created_at->format('F m, Y')}}</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="/details-event/{{$event->id}}">{{'Read more'}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
          </div>
      </div>
  </div>
@endsection

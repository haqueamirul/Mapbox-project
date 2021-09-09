<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{'THICN - Tower Hamlets Island Community Network'}}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('front/img/logo-mob.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('front/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('front/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-transparent gradient-color-4---">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area top-area-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">

                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-right">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>

                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->

        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="{{URL::to('/')}}"><img src="{{asset('front/img/logo-new.png')}}" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li><a href="{{route('about')}}">{{'About us'}} </a></li>
                                        <li><a href="{{route('service')}}">{{'Our services'}}</a></li>
                                        <li><a href="{{route('consultation')}}">{{'Consultation'}}</a></li>
                                        <li><a href="#">{{'News'}}</a></li>
                                        <li class="special-link">
                                            <a href="{{route('contact')}}">{{'Contact us'}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="ltn__header-options ltn__header-options-2 ">
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="{{URL::to('/')}}"><img src="{{asset('front/img/logo-mob.png')}}" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="{{route('about')}}">{{'About us'}} </a></li>
                    <li><a href="{{route('service')}}">{{'Our services'}}</a></li>
                    <li><a href="{{route('consultation')}}">{{'Consultation'}}</a></li>
                    <li><a href="#">{{'News'}}</a></li>
                    <li><a href="{{route('contact')}}">{{'Contact'}}</a></li>
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3  section-bg-2">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bg="{{asset('front/img/slider/11.png')}}">
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <!-- <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div> -->
                                        <h6 class="slide-sub-title white-color--- animated">{{'Welcome to'}}</h6>
                                        <h1 class="slide-title animated ">{{'Tower Hamlets Island'}} <br> {{'Community Network'}}</h1>
                                        <!-- <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div> -->
                                        <div class="btn-wrapper animated">
                                            <a href="{{route('consultation')}}" class="theme-btn-1 btn btn-effect-1">{{'Consultation'}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__slide-item -->
             <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bg="{{asset('front/img/slider/12.png')}}">
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <!-- <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div> -->
                                        <h6 class="slide-sub-title white-color--- animated">{{'Welcome to'}}</h6>
                                        <h1 class="slide-title animated ">{{'Tower Hamlets Island'}} <br> {{'Community Network'}}</h1>
                                        <!-- <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div> -->
                                        <div class="btn-wrapper animated">
                                            <a href="{{route('consultation')}}" class="theme-btn-1 btn btn-effect-1">{{'Consultation'}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1--- pt-115 pb-90 mb-120---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h4>{{'Tower Hamlets Island Community Network (THICN),'}} <br>
                            {{'is a new grassroots consortium supporting young'}} <br>
                            {{'people facing multiple/complex disadvantages'}} <br>
                            {{'in the borough.'}}
                        </h4>
                    </div>
                </div>
            </div>
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


    <!-- BRAND LOGO AREA START -->
    <div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1 pt-110 pb-110 plr--9 d-none---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 safe-com">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title">Building a safer community</h1>
                    </div>
                    <div class="btn-wrapper text-center">
                        <a class="btn btn-effect-3 btn-white" href="{{route('contact')}}">Support us <i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND LOGO AREA END -->

    <!-- BLOG AREA START (blog-3) -->
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
    <!-- BLOG AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg text-center---">
                        <div class="coll-to-info text-color-white col-md-4">
                            <h1>{{'Sign up to'}} <br>{{'our Newsletter'}}</h1>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="footer-widget footer-newsletter-widget col-md-6">
                            <div class="footer-newsletter">
                                <form action="{{route('createEmail')}}" method="post">
                                  @csrf
                                    <input type="email" name="email" placeholder="Email*">
                                    <div class="btn-wrapper">
                                        <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </form>
                                @if(Session::has('email_added'))
                                <div class="alert alert-success" role="alert" style="margin-top:10px;">
                                  {{Session::get('email_added')}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-2 plr--5 new-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo">
                                <div class="site-logo">
                                    <img src="{{asset('front/img/logo-new.png')}}" alt="Logo">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-6">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{route('about')}}">{{'About Us'}}</a></li>
                                    <li><a href="#">{{'Our Stories'}}</a></li>
                                    <li><a href="#">{{'Support Us'}}</a></li>
                                    <li><a href="#">{{'Work With Us'}}</a></li>
                                    <li><a href="{{route('contact')}}">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-6">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">{{'Our Services'}}</a></li>
                                    <li><a href="#">{{'What’s On The'}}</a></li>
                                    <li><a href="#">{{'Island'}}</a></li>
                                    <li><a href="#">{{'News'}}</a></li>
                                    <li><a href="#">{{'Grants'}}</a></li>
                                    <li><a href="#">{{'Resources'}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-6">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{route('consultation')}}">{{'Consultation'}}</a></li>
                                    <li><a href="#">{{'Consultation Q1'}}</a></li>
                                    <li><a href="#">{{'Consultation Q2'}}</a></li>
                                    <li><a href="#">{{'Consultation Q3'}}</a></li>
                                    <li><a href="#">{{'Consultation Q4'}}</a></li>
                                    <?php
                                    $projects = App\Counter::latest()->paginate(5);
                                    App\Counter::increment('views'); ?>
                                    @foreach($projects  as $project)
                                      <input type="hidden" name="views" value="{{$project->views}}">
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 col-6">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>{{'Osmani Centre'}} <br> {{'58 Underwood Road'}} <br> {{'London, E1 5AW'}}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+0123-456789">{{'020 7247 8080'}}</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:info@osmanitrust.org">{{'info@osmanitrust.org'}}</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
            <div class="container ltn__border-top-2">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="ltn__copyright-design clearfix">
                            <p>{{'©2021 osmanitrust.org | Charity Registration Number: 1129282'}} </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-right">
                            <ul>
                                <li><a href="#">{{'Privacy Policy'}}</a></li>
                                <li><a href="#">{{'Moderation Policy'}}</a></li>
                                <li><a href="#">{{'Accessibility'}}</a></li>
                                <li><a href="#">{{'Technical Support'}}</a></li>
                                <li><a href="#">{{'Cookie Policy'}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->


</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{asset('front/js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('front/js/main.js')}}"></script>

</body>
</html>

@extends('layouts.front')

@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">{{$event->title}}</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ URL::to('/') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>{{$event->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PAGE DETAILS AREA START (blog-details) -->
<div class="ltn__page-details-area ltn__blog-details-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__blog-details-wrap">
                    <div class="ltn__page-details-inner ltn__blog-details-inner">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-category">
                                    <a href="#">Event</a>
                                </li>
                            </ul>
                        </div>
                        <h2 class="ltn__blog-title">{{$event->title}}</h2>
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <i class="far fa-user"></i>{{'By: Admin'}}
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i>{{$event->created_at->format('d/m/Y')}}
                                </li>
                                <!-- <li>
                                    <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                </li> -->
                            </ul>
                        </div>
                        <p>{!! $event->description !!}</p>

                    </div>

                    <!-- blog-tags-social-media -->
                    <div class="ltn__blog-tags-social-media mt-80 row">
                        <div class="ltn__tagcloud-widget col-lg-8">
                          <h4>Social Share</h4>
                          <ul>
                              <li><a href="https://www.facebook.com/sharer/sharer.php?u=YourPageLink.com&display=popup" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fparse.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                          </ul>
                        </div>
                    </div>
                
                    <!-- related-post -->
                    <!-- <div class="related-post-area mb-50">
                        <h4 class="title-2">Related Post</h4>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="ltn__blog-item ltn__blog-item-6">
                                    <div class="ltn__blog-img">
                                        <a href="blog-details.html"><img src="img/blog/blog-details/11.jpg" alt="Image"></a>
                                    </div>
                                    <div class="ltn__blog-brief">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date ltn__secondary-color">
                                                    <i class="far fa-calendar-alt"></i>June 22, 2020
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="ltn__blog-title"><a href="blog-details.html">A series of iOS 7 inspire
                                            vector icons sense.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="ltn__blog-item ltn__blog-item-6">
                                    <div class="ltn__blog-img">
                                        <a href="blog-details.html"><img src="img/blog/blog-details/12.jpg" alt="Image"></a>
                                    </div>
                                    <div class="ltn__blog-brief">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date ltn__secondary-color">
                                                    <i class="far fa-calendar-alt"></i>June 22, 2020
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="ltn__blog-title"><a href="blog-details.html">A series of iOS 7 inspire
                                            vector icons sense.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="col-lg-4">
                <aside class="sidebar-area blog-sidebar ltn__right-sidebar">
                    <!-- Search Widget -->
                    <!-- <div class="widget ltn__search-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Search Objects</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search your keyword...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div> -->
                    <!-- Form Widget -->
                    <!-- <div class="widget ltn__form-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Drop Messege For Book</h4>
                        <form action="#">
                            <input type="text" name="yourname" placeholder="Your Name*">
                            <input type="text" name="youremail" placeholder="Your e-Mail*">
                            <textarea name="yourmessage" placeholder="Write Message..."></textarea>
                            <button type="submit" class="btn theme-btn-1">Send Messege</button>
                        </form>
                    </div> -->
                    <!-- Top Rated Product Widget -->

                    <!-- Popular Post Widget -->
                    <div class="widget ltn__popular-post-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Leatest Blogs</h4>
                        <ul>
                          @php
                          $events =App\Event::all();
                          @endphp

                          @foreach($events  as $event)
                            <li>
                                <div class="popular-post-widget-item clearfix">
                                    <div class="popular-post-widget-img">
                                        <a href="/details-event/{{$event->id}}"><img src="{{asset('images')}}/{{$event->eventimage}}" alt="#"></a>
                                    </div>
                                    <div class="popular-post-widget-brief">
                                        <h6><a href="/details-event/{{$event->id}}">{{$event->title}}</a></h6>
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date">
                                                    <i class="far fa-calendar-alt"></i>{{$event->created_at->format('F m, Y')}}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <!-- Social Media Widget -->
                    <div class="widget ltn__social-media-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Follow us</h4>
                        <div class="ltn__social-media-2">
                            <ul>
                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <!-- Tagcloud Widget -->
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PAGE DETAILS AREA END -->
@endsection

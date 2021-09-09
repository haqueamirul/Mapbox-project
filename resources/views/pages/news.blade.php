@extends('layouts.front')

@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">News</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{route('homepage')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- BLOG AREA START -->
<div class="ltn__blog-area ltn__blog-item-3-normal mb-100">
    <div class="container">
        <div class="row">
            <!-- Blog Item -->
            @foreach($events  as $event)
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="/details-event/{{$event->id}}"><img src="{{asset('images')}}/{{$event->eventimage}}" alt="#"></a>
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
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="ltn__pagination-area text-center">
                    <div class="ltn__pagination">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- BLOG AREA END -->
@endsection

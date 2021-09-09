@extends('layouts.main')
@section('script')
<script>

		var defaultLocation = [-0.016649152363157782, 51.497569972698955]
		// const bounds = [
		// 	[-122.66336, 37.492987], // Southwest coordinates
		// 	[-122.250481, 37.871651] // Northeast coordinates
		// ];

		// const southWest = new mapboxgl.LngLat(-1.1203625830800092, 52.90470026649493);
		// const northEast = new mapboxgl.LngLat(-1.1411366504768523, 52.94857525034527);
		// const boundingBox = new mapboxgl.LngLatBounds(southWest, northEast);
        mapboxgl.accessToken = 'pk.eyJ1Ijoic2tpcHBlcmhvYSIsImEiOiJjazE2MjNqMjkxMTljM2luejl0aGRyOTAxIn0.Wyvywisw6bsheh7wJZcq3Q';
        var map = new mapboxgl.Map({
          container: 'map',
          style: 'mapbox://styles/mapbox/streets-v11',
          center: defaultLocation, //lng,lat 10.818746, 106.629179
          zoom: 13.2,
					// maxBounds: boundingBox,
        });
        var test ='<?php echo $dataArray;?>';  //ta nhận dữ liệu từ Controller
        var dataMap = JSON.parse(test); //chuyển đổi nó về dạng mà Mapbox yêu cầu

        // ta tạo dòng lặp để for ra các đối tượng
        dataMap.features.forEach(function(marker) {

            //tạo thẻ div có class là market, để hồi chỉnh css cho market
            var el = document.createElement('div');
            el.className = 'marker';

            //gắn marker đó tại vị trí tọa độ
            new mapboxgl.Marker(el)
                .setLngLat(marker.geometry.coordinates)
                .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
            .setHTML('</h4><h5>Why do you feel unsafe here?</h5><p>' + marker.properties.ques_one + '</p><h5>What do you feel would help make the Isle of Dogs Safer and what services would you like to see?</h5><p>' + marker.properties.ques_two + '</p><h5>Additional comments</h5><p>' + marker.properties.description + '</p>'))
                .addTo(map);
        });

        // map.on('click', function (e) {
        //     // marker.remove();
        //     addMarker(e.lngLat,'click');
        //     console.log(e.lngLat.lat);
        //     document.getElementById("lat").value = e.lngLat.lat;
        //     document.getElementById("lng").value = e.lngLat.lng;

        // });

        map.on('click', (e) => {
			// const longtitude = e.lngLat.lng
			// const lattitude = e.lngLat.lat

			document.getElementById("lat").value = e.lngLat.lat;
            document.getElementById("lng").value = e.lngLat.lng;


		})

		var marker ;

        // After the map style has loaded on the page, add a source layer and default
        // styling for a single point.
        map.on('load', function() {
            addMarker(defaultLocation,'load');
            add_markers(dataMap);

            // Listen for the `result` event from the MapboxGeocoder that is triggered when a user
            // makes a selection and add a symbol that matches the result.
            geocoder.on('result', function(ev) {
                alert("aaaaa");
                console.log(ev.result.center);

            });
        });

		function addMarker(ltlng,event) {

            if(event === 'click'){
                defaultLocation = ltlng;
            }
            marker = new mapboxgl.Marker({draggable: true,color:"#d02922"})
                .setLngLat(defaultLocation)
                .addTo(map)
                .on('dragend', onDragEnd);
        }

        function add_markers(coordinates) {

            var geojson = (dataMap == coordinates ? dataMap : '');

            console.log(geojson);
            // add markers to map
            geojson.forEach(function (marker) {
                console.log(marker);
                // make a marker for each feature and add to the map
                new mapboxgl.Marker()
                    .setLngLat(marker)
                    .addTo(map);
            });

        }

        function onDragEnd() {
            var lngLat = marker.getLngLat();
            document.getElementById("lat").value = lngLat.lat;
            document.getElementById("lng").value = lngLat.lng;
            console.log('lng: ' + lngLat.lng + '<br />lat: ' + lngLat.lat);
        }

    </script>
		<script>
			$(function () {
						$(document).on('click', '.nav-tabs a', function () {
								var link = $(this),
										listItem = link.parent(),
										content = $(link.attr('href'));
								// show current link and content
								listItem.add(content).addClass('active');
								// hide other links and contents
								listItem.siblings().add(content.siblings()).removeClass('active');
								// save selected tab e.g. #tab1. #tab2, ...
								localStorage.setItem('activeTab', link.attr('href'));
						});
						// go back to last tab if any
						var activeTab = localStorage.getItem('activeTab'); // ex. #tab1, #tab2, ...
						if (activeTab) {
								$('.nav-tabs a[href="' + activeTab + '"]').click();
						}
				})


				const cookieBanner = document.querySelector('#cookie-banner');
				const hasCookieConsent = getCookie('cookies-consent');

				if (!hasCookieConsent) {
				    cookieBanner.classList.remove('hidden');
				}

				const consentCta = cookieBanner.querySelector('#consent-cookies');

				consentCta.addEventListener('click', () => {
				    cookieBanner.classList.add('hidden');
				    setCookie('cookies-consent', 1, 365);
				});


				var ta = document.getElementById("ta");
				ta.addEventListener(
				    'keypress',
				    function (e) {
				        // Test for the key codes you want to filter out.
				        if (e.keyCode == 60) {
				            alert('No "<"!');
				            // Prevent the default event action (adding the
				            // character to the textarea).
				            e.preventDefault();
				        }
				    }
				);



		</script>
    <style>
        #map {
            width: 100%;
            height: 800px;
        }
        .marker {
            background-image: url('{{asset("images/icon.png")}}');
            background-repeat:no-repeat;
            background-size:100%;
            width: 30px;
            height: 70px;
            cursor: pointer;
        }

				@media (min-width: 481px) and (max-width: 767px) {
        .site-logo a img {
            /* text-align: center; */
            margin-left: 0px !important;
        }

			}



				.privacy-banner {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    max-width: 100%;
    padding: 1rem .5rem;
    background: #fff;
    z-index: 1030;
    color: #000;
    font-size: 14px;
    margin: 0;
  }
  .banner-wrapper {
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    display: flex;
    position: relative;
    align-items: center;
  }
  .privacy-banner p {
    margin: 0;
    color: #000;
    text-align: center;
  }
  .privacy-banner .banner-wrapper p {
      padding-right: 3rem;
  }
  .privacy-banner a {
    text-decoration: none;
    margin: 20px auto 0 auto;
    display: block;
    max-width: 150px;
  }
  .privacy-banner a:hover {
    text-decoration: underline;
  }
  .privacy-banner button {
    position: absolute;
    right: 5px;
    top: calc(50% - 12.5px);
    color: #fff;
    outline: 0;
    height: 25px;
    width: 25px;
    border: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.35rem;
    font-weight: 700;
    border-radius: 50%;
    text-align: center;
    padding: 0;
    line-height: 1;
    background: #000;
    cursor: pointer;
  }
  .banner-learn {
    color: #000;
  }
  .banner-accept {
    padding: 7px 15px;
    color: #fff;
    border-radius: 5px;
    background: #000;
  }
  @media (min-width: 768px) {
    .privacy-banner {
      padding: 1.5rem .5rem;
    }
    .privacy-banner a {
      display: inline-block;
      margin: 0 10px;
    }
  }


</style>
@endsection
@section('content')
<!-- HEADER AREA START (header-5) -->
<header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
		<!-- ltn__header-top-area start -->
		 <div id="top-heaae" class="ltn__header-top-area top-area-color-white">
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
																		<div style="padding: 3px;" class="ltn__social-media">
																				<ul>
																						<li style="display: initial;list-style: none;"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
																						<li style="display: initial;list-style: none;"><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>

																						<li style="display: initial;list-style: none;"><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
																						<li style="display: initial;list-style: none;"><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
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
		<div id="midd-heaae" class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black">
				<div class="container">
						<div class="row">
								<div class="col">
										<div style="margin: 0px;" class="site-logo-wrap">
												<div class="site-logo">
														<a href="{{URL::to('/')}}"><img src="{{asset('front/img/logo-new.png')}}" alt="Logo"></a>
												</div>
										</div>
								</div>
								<div style="padding: 0px;" class="col header-menu-column menu-color-white">
										<div class="header-menu d-none d-xl-block">
												<nav>
														<div style="float: right;" class="ltn__main-menu">
																<ul>
																		<li><a href="{{route('about')}}">{{'About us'}} </a></li>
																		<li><a href="{{route('consultation')}}">{{'Consultation'}}</a></li>
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
		<div wire:ignore id='map' style='width: 100%; height: 700px;'></div>
		<div class="privacy-banner" style="border-top: 2px solid #ffd008;">
		  <div>
		    <p style="color:#00a19a">
		      While you can drop a pin anywhere on the map, we will only be feeding back pins that are marked on the Isle of Dogs.
		    </p>
		  </div>
		</div>

		<div class="tabs-left">
			<ul class="nav nav-tabs">
				<li><a  class="active" href="#a" data-toggle="tab"><span class="glyphicon glyphicon-info-sign"></span></a></li>
				<li><a href="#b" data-toggle="tab"><span class="glyphicon glyphicon-plus"></span></a></li>
				<li><a href="#c" data-toggle="tab"><span class="glyphicon glyphicon-align-left"></span></a></li>
				<li><a href="#d" data-toggle="tab"><span class="glyphicon glyphicon-map-marker"></span></a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="a">
					<h4>Where don't you feel safe?</h4>
					<p>Drag a pin onto the map to highlight the areas where you don't feel safe in the Isle of Dogs.</p>
					<p>While you can drop a pin anywhere on the map, we will only be feeding back pins that are marked in Isle of Dogs.</p>
				</div>
				<div class="tab-pane" id="b">
					<div class="">
						<h4>ADD MAP</h4>
						<p>Select Red Color Pin on the map and drag to the your location</p>
							@if (session('success'))
									<div class="alert alert-success">
											{{ session('success') }}
									</div>
							@endif
							@if ($errors->any())
									<div class="alert alert-danger">
											<ul>
													@foreach ($errors->all() as $error)
															<li>{{ $error }}</li>
													@endforeach
											</ul>
									</div>
							@endif
						 <form action="{{route('google.map.store')}}" method="post" id="boxmap" >
						 @csrf
									<!-- <div class="form-group">
											<label for="title">Your Name</label>
											<input type="text" name="title" placeholder="Your Name" class="form-control"/>
									</div> -->
									<hr>
									<div class="form-group">
											<label for="title">1: Why do you feel unsafe here?</label>
											<textarea name="ques_one" class="form-control ta" rows="3" cols="80"></textarea>
											<!-- <input type="text" name="description" placeholder="Description" class="form-control"/> -->
									</div>
									<div class="form-group">
											<label for="title">2: What do you feel would help make the Isle of Dogs safer and what services would you like to see?</label>
											<label><input type="checkbox" name="ques_two[]" value="Centre Based Youth Work"> Centre Based Youth Work</label>
											<label><input type="checkbox" name="ques_two[]" value="Outreach"> Outreach</label>
											<label><input type="checkbox" name="ques_two[]" value="Detached Youth Work"> Detached Youth Work</label>
											<label><input type="checkbox" name="ques_two[]" value="Arts Activities"> Arts Activities</label>
											<label><input type="checkbox" name="ques_two[]" value="Sports Activities"> Sports Activities</label>
											<label><input type="checkbox" name="ques_two[]" value="Police Walkabouts"> Police Walkabouts</label>
											<label><input type="checkbox" name="ques_two[]" value="Increased Lighting"> Increased Lighting</label>
											<label><input type="checkbox" name="ques_two[]" value="CCTV"> CCTV</label>
											<label><input type="checkbox" name="ques_two[]" value="Accredited Courses"> Accredited Courses</label>
											<label><input type="checkbox" name="ques_two[]" value="After School Clubs"> After School Clubs</label>
											<label><input type="checkbox" name="ques_two[]" value="Holiday Provision"> Holiday Provision</label>
											<label><input type="checkbox" name="ques_two[]" value="Mentoring"> Mentoring</label>
											<label><input type="checkbox" name="ques_two[]" value="Employment Support"> Employment Support</label>
											<label><input type="checkbox" name="ques_two[]" value="Family Support"> Family Support</label>
											<label><input type="checkbox" name="ques_two[]" value="Other (please specify below)"> Other (please specify below)</label>
											<!-- <input type="text" name="description" placeholder="Description" class="form-control"/> -->
									</div>
									<hr>
									<div class="form-group">
											<label for="title">Additional comments</label>
											<textarea name="description" class="form-control" rows="3" cols="80"></textarea>
											<!-- <input type="text" name="description" placeholder="Description" class="form-control"/> -->
									</div>
									<div class="form-group">
											<!-- <label for="lat">lat</label> -->
											<input type="hidden" name="lat" id="lat" value="" placeholder="lat" class="form-control"/>
									</div>
									<div class="form-group">
											<!-- <label for="lng">lng</label> -->
											<input type="hidden" name="lng" id="lng" value="" placeholder="lng" class="form-control"/>
									</div>
									<div class="form-group">
											<input style="background: #ffd008;border: 1px solid #ffd008;color: #000;font-size: 16px;padding: 7px 20px;" type="submit" name="submit" value="Add Your Comment" class="btn btn-success"/>
									</div>
							</form>
					</div>
				</div>
				<div class="tab-pane" id="c">
					<p>FILTER PINS</p>
			<p>Select the pins you want to see.</p>
			<label class="form-check-label" for="flexRadioDefault1">I don't feel safe here</label>
			<!-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> -->
				</div>
				<div class="tab-pane" id="d">
					<h4>ALL ACTIVITY</h4>
					@php
					$locations =App\Boxmap::latest('id')->get();
					@endphp
					<ul class="list-group pull-left">
						@if(!empty($locations ))
						@foreach($locations  as $location)
						<li class="list-group-item">
							<hr>
							<div class="row">
								<div class="col-md-3">
									<img src="https://image.flaticon.com/icons/png/512/149/149071.png" width="40px;" height="40px;">
								</div>
								<div class="col-md-9">
									<!-- <h5>{{ $location->title }}</h5> -->
									@if(!empty($location->created_at ))
									<h5>{{ $location->created_at->diffForHumans() }}</h5>
									@endif
								</div>
							</div>
							<h5 style="margin-top:20px; color: #00a19a; font-size:16px;">Que. 1: Why do you feel unsafe here?</h5>
							<p id="new_customer">{{ $location->ques_one }}</p>
							<!-- <p id="new_customer" class="desii">{{ Str::limit($location->description,50) }}</p> -->

							<h5 style="margin-top:20px; color: #00a19a; font-size:16px;">Que. 2: What do you feel would help make the Isle of Dogs Safer and what services would you like to see?</h5>
							{{$location->ques_two}}
							<!-- @if (is_array($location->ques_two) || is_object($location->ques_two))
							@foreach($location->ques_two  as $singlev)
							<p id="new_customer">{{ $singlev }}</p>
							@endforeach
							@endif -->

							<h5 style="margin-top:20px; color: #00a19a; font-size:16px;">Additional comments</h5>
							<p id="new_customer">{{ $location->description }}</p>


						</li>
						<!-- <h6>{{ $location->name }} &nbsp; &nbsp; &nbsp;<span>{{ $location->email }}</span></h6> -->

						@endforeach
						@endif

					</ul>
					</ul>
				</div>
			</div><!-- /tab-content -->
		</div><!-- /tabbable -->
	</div><!-- /col -->
</header>

<?php
$projects = App\Counter::latest()->paginate(5);
App\Counter::increment('views'); ?>
@foreach($projects  as $project)
	<input type="hidden" name="views" value="{{$project->views}}">
@endforeach
<!-- HEADER AREA END -->
@endsection

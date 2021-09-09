<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{'THICN - Tower Hamlets Island Community Network'}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/font-icons.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/stylemap.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">

    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- @livewireStyles -->
</head>

<body>
  <div >
      @yield('content')
  </div>

  <script src="{{ asset('js/main.js') }}"></script>
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
  <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>


</body>
<style>
        .mapboxgl-popup {
            max-width: 600px;
            width: 400px;
            font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
        }
</style>
@yield('script')
</html>

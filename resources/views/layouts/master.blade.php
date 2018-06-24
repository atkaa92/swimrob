<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Champions Shop</title>
    <link rel="icon" href="{{ asset('/images/logo_2.png') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uistyle.css') }}">
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    
    {{--  NAFSIAKI  --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet"> --}}
    {{-- <script src="{{ asset('js/popper.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/respond.min.js') }}"></script> --}}
 
</head>
<body>
<div class="fh5co-loader"></div>
<div id="page">
    @include('includes.header')
    @yield('content')
    @if(!isset($hidefooter))
        @include('includes.footer')
    @endif
</div>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.cookie.js') }}"></script>
<script src="{{ asset('js/jquery.countTo.js') }}"></script>
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/uimain.js') }}"></script>
@stack('scripts')
</body>
</html>
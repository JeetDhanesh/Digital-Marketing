<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.awaikenthemes.com/artistic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Dec 2025 05:44:47 GMT -->
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
    <title>{{config("app.name")}} | {{ @$title ?? "" }}</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/front/images/favicon.png')}}">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fustat:wght@200..800&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="{{ asset('assets/front/css/slicknav.min.css') }}" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="{{ asset('assets/front/css/swiper-bundle.min.css') }}">
	<!-- Font Awesome Icon Css-->
	<link href="{{asset('assets/front/css/all.css')}}" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="{{asset('assets/front/css/animate.css')}}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="{{asset('assets/front/css/mousecursor.css')}}">
	<!-- Main Custom Css -->
	<link href="{{asset('assets/front/css/custom.css')}}" rel="stylesheet" media="screen">

    @stack('style')
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="{{asset('assets/front/images/loader.svg')}}" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    @include('front.layout.header')

    @yield('content')

    @include('front.layout.footer')


    <!-- Jquery Library File -->
    <script src="{{ asset('assets/front/js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('assets/front/js/bootstrap.min.js')}}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('assets/front/js/validator.min.js')}}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('assets/front/js/jquery.slicknav.js')}}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('assets/front/js/swiper-bundle.min.js')}}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('assets/front/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/front/js/jquery.counterup.min.js')}}"></script>
    <!-- Isotop js file -->
	<script src="{{ asset('assets/front/js/isotope.min.js')}}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('assets/front/js/SmoothScroll.js')}}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('assets/front/js/parallaxie.js')}}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('assets/front/js/gsap.min.js')}}"></script>
    <script src="{{ asset('assets/front/js/magiccursor.js')}}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('assets/front/js/SplitText.js')}}"></script>
    <script src="{{ asset('assets/front/js/ScrollTrigger.min.js')}}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('assets/front/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <!-- Typed js file -->
	<script src="{{ asset('assets/front/js/typed.js')}}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('assets/front/js/wow.js')}}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('assets/front/js/function.js')}}"></script>
	{{-- <script src="../../demo.awaikenthemes.com/assets/js/theme-panel.js"></script> --}}

    @stack('script')
</body>

<!-- Mirrored from html.awaikenthemes.com/artistic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Dec 2025 05:45:12 GMT -->
</html>

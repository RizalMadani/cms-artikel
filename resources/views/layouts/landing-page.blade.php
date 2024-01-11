<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="landing-page/css/style.css">

    @yield('css')
    {{-- <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css"> --}}
</head>
<body>

    @include('partials.landing-page.nav');

    @yield('content')

    @include('partials.landinfooter');



    {{-- <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}


    <script src="landing-page/js/jquery.min.js"></script>
    <script src="landing-page/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="landing-page/js/popper.min.js"></script>
    <script src="landing-page/js/bootstrap.min.js"></script>

    @yield('js')
    {{-- <script src="landing-page/js/jquery.easing.1.3.js"></script> --}}
    {{-- <script src="landing-page/js/jquery.waypoints.min.js"></script> --}}
    {{-- <script src="landing-page/js/jquery.stellar.min.js"></script> --}}
    {{-- <script src="landing-page/js/owl.carousel.min.js"></script> --}}
    {{-- <script src="landing-page/js/jquery.magnific-popup.min.js"></script> --}}
    {{-- <script src="landing-page/js/jquery.animateNumber.min.js"></script> --}}
    {{-- <script src="landing-page/js/bootstrap-datepicker.js"></script> --}}
    {{-- <script src="landing-page/js/scrollax.min.js"></script> --}}
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
    {{-- <script src="landing-page/js/google-map.js"></script> --}}
    <script src="landing-page/js/main.js"></script>

</body>
</html>
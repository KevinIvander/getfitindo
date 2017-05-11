<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GetFit</title>

    <!-- CSS -->
    <link rel="shortcut icon" href="{{ asset('images/icon/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('css/base.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('css/elements.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/page/nav.css') }}" />
    @yield('css')
    <!-- End of CSS -->
</head>
<body>
	@include('layout.nav')

    @yield('content')

    @include('layout.footer')
    
    <!-- javascript libraries -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/smooth-scroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- wow animation -->
        <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
        <!-- owl carousel -->
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>        
        <!-- images loaded -->
        <script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- isotope -->
        <script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script> 
        <!-- magnific popup -->
        <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <!-- navigation -->
        <script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>
        <!-- equalize -->
        <script type="text/javascript" src="{{ asset('js/equalize.min.js') }}"></script>
        <!-- fit videos -->
        <script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
        <!-- number counter -->
        <script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script>
        <!-- time counter  -->
        <script type="text/javascript" src="{{ asset('js/counter.js') }}"></script>
        <!-- twitter Fetcher  -->
        <script type="text/javascript" src="{{ asset('js/twitterFetcher_min.js') }}"></script>
        <!-- main -->
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <!-- waypoint -->
        <script type="text/javascript" src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(this).scrollTop(0);
            });
        </script>
    @yield('scripts')
</body>
</html>
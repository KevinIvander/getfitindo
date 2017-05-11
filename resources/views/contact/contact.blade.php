@extends('layout.master')

@section('css')

    <!-- <link rel="stylesheet" href="{{ asset('css/page/home.css') }}" /> -->

@endsection

@section('scripts')
    
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh7n0c-qc1u1yuMZTXjEZhUzEKQLt4dBY&callback=myMap"></script>
    
@endsection

@section('content')
        <section class="container">
            <div id="map_container"></div>
            <div id="map"></div>
        </section>
        <section class="padding-110px-tb bg-black builder-bg xs-padding-60px-tb border-none" id="contact-section18">
            <div class="container">
                <div class="row four-column">
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-nine-bottom xs-margin-thirteen-bottom text-center sm-clear-both">
                        <div class="feature-box xs-margin-thirteen xs-no-margin-tb hvr-buzz-out">     
                            <i class="fa ti-location-pin text-sky-blue icon-large tz-icon-color margin-ten-bottom xs-margin-five-bottom"></i>
                            <h3 class="feature-title text-white text-medium font-weight-400 alt-font display-block margin-three-bottom tz-text">Contact Address</h3>
                            <div class="text-medium center-col tz-text">301 The Greenhouse, Custard,<br>Factory, London, E2 8DY.</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-nine-bottom xs-margin-thirteen-bottom text-center">
                        <div class="feature-box xs-margin-thirteen xs-no-margin-tb hvr-buzz-out">
                            <i class="fa ti-mobile text-sky-blue icon-large tz-icon-color margin-ten-bottom xs-margin-five-bottom"></i>
                            <h3 class="feature-title text-white text-medium font-weight-400 alt-font display-block margin-three-bottom tz-text">Call Us Today!</h3>
                            <div class="text-medium center-col tz-text">(M) +44 (0) 123 456 7890<br>(O) +44 (0) 123 456 7890</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center xs-margin-thirteen-bottom sm-clear-both">
                        <div class="feature-box xs-margin-thirteen xs-no-margin-tb hvr-buzz-out">
                            <i class="fa ti-email text-sky-blue icon-large tz-icon-color margin-ten-bottom xs-margin-five-bottom"></i>
                            <h3 class="feature-title text-white text-medium font-weight-400 alt-font display-block margin-three-bottom tz-text">Email</h3>
                            <div class="text-medium center-col"><a class="tz-text text-light-gray2" href="mailto:no-reply@domain.com">no-reply@domain.com</a><br><a class="tz-text text-light-gray2" href="mailto:help@domain.com">help@domain.com</a></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="feature-box xs-margin-thirteen xs-no-margin-tb hvr-buzz-out">
                            <i class="fa ti-time text-sky-blue icon-large tz-icon-color margin-ten-bottom xs-margin-five-bottom"></i>
                            <h3 class="feature-title text-white text-medium font-weight-400 alt-font display-block margin-three-bottom tz-text">Working Hours</h3>
                            <div class="text-medium center-col tz-text">Mon to Sat - 9 AM to 11 PM<br>Sunday 10 AM to 6 PM</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
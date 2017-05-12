@extends('layout.master')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/map.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/page/contact.css') }}" />

@endsection

@section('scripts')
    
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh7n0c-qc1u1yuMZTXjEZhUzEKQLt4dBY&callback=myMap"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min') }}"></script>
    
@endsection

@section('content')
    <section class="padding-110px-tb bg-black builder-bg border-top-light xs-padding-top-60px xs-no-padding-bottom border-none" id="facility">
        <div class="container">                    
            <div class="row equalize xs-equalize-auto">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 col-xs-12 display-table xs-margin-fifteen-bottom">
                    <div class="display-table-cell-vertical-middle">
                        <h2 class="wow fadeInUp title-extra-large-3 line-height-55 font-weight-600 sm-section-title-large alt-font text-sky-blue title-large width-90 sm-width-100 sm-title-large xs-title-large tz-text">CONTACT US</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-medium display-table">
                    <div class="display-table-cell-vertical-middle">
                        <div class="text-medium tz-text no-margin">
                            <p class="wow slideInUp no-margin-bottom">You can contact us for more information</p>
                        </div>
                    </div>
                </div>
                <!-- end section title -->
            </div>                    
        </div>
    </section>
    <section class="padding-30px-tb bg-black builder-bg xs-padding-60px-tb border-none" id="contact-section18">
        <div class="container">
            <div class="row four-column">
                <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-nine-bottom xs-margin-thirteen-bottom text-center sm-clear-both">
                    <div class="feature-box xs-margin-thirteen xs-no-margin-tb hvr-buzz-out">     
                        <i class="fa fa-instagram text-sky-blue icon-large tz-icon-color margin-ten-bottom xs-margin-five-bottom"></i>
                        <h3 class="feature-title text-white text-medium font-weight-400 alt-font display-block margin-three-bottom tz-text">Instagram</h3>
                        <div class="text-medium center-col tz-text">@getfitgetconfidence</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-nine-bottom xs-margin-thirteen-bottom text-center">
                    <div class="feature-box xs-margin-thirteen xs-no-margin-tb hvr-buzz-out">
                        <i class="fa fa-whatsapp text-sky-blue icon-large tz-icon-color margin-ten-bottom xs-margin-five-bottom"></i>
                        <h3 class="feature-title text-white text-medium font-weight-400 alt-font display-block margin-three-bottom tz-text">WhatsApp</h3>
                        <div class="text-medium center-col tz-text">0813 3888 1069</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center xs-margin-thirteen-bottom sm-clear-both">
                    <div class="feature-box xs-margin-thirteen xs-no-margin-tb hvr-buzz-out">
                        <i class="fa fa-group text-sky-blue icon-large tz-icon-color margin-ten-bottom xs-margin-five-bottom"></i>
                        <h3 class="feature-title text-white text-medium font-weight-400 alt-font display-block margin-three-bottom tz-text">BBM</h3>
                        <div class="text-medium center-col"><a class="tz-text text-light-gray2" href="mailto:no-reply@domain.com">D6CE4AAB</a><br><a class="tz-text text-light-gray2" href="mailto:help@domain.com"></a></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="feature-box xs-margin-thirteen xs-no-margin-tb hvr-buzz-out">
                        <i class="fa fa-clock-o text-sky-blue icon-large tz-icon-color margin-ten-bottom xs-margin-five-bottom"></i>
                        <h3 class="feature-title text-white text-medium font-weight-400 alt-font display-block margin-three-bottom tz-text">Working Hours</h3>
                        <div class="text-medium center-col tz-text">Mon to Sat - 8 AM to 10 PM</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row equalize">
            <div class="map-responsive col-md-6 col-sm-12 col-xs-12" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.0711196408531!2d110.4158054!3d-7.7751974!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc8db77f1434ef324!2sGet+Fit+Aerobic+%26+Fitness+Center!5e0!3m2!1sen!2sid!4v1494539836542" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>
            <section id="contact-section7" class="col-md-6 col-sm-12 col-xs-12 wow fadeIn no-padding cover-background tz-builder-bg-image border-none xs-padding-60px-tb bg-img-nine" style="background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.85)), url('images/bg-image/hero-bg3.jpg');">
                <div class="container one-third-screen xs-height-auto">
                    <div class="row">
                        <div class="slider-typography xs-position-static">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle text-left">
                                    <!-- section title -->
                                    <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 center-col text-center">
                                        <h2 class="title-extra-large sm-section-title-medium xs-section-title-large text-white font-weight-600 alt-font margin-five-bottom xs-margin-fifteen-bottom tz-text">ANY QUESTION OR SUGGESTIONS? </h2>
                                        <div class="text-medium text-light-gray width-90 sm-width-100 center-col tz-text margin-thirteen-bottom xs-margin-nineteen-bottom">Share your questions or suggestions for us below.<br>Thank you.</div>
                                    </div>
                                    <!-- end section title -->
                                    <!-- contact form -->
                                    <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 center-col text-center">
                                        <form method="POST" action="{{ url('subscribe') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="text" name="name" id="name" data-email="required" placeholder="*Your Name" class="medium-input alt-font border-radius-4">

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif

                                            <input type="text" name="email" id="email" data-email="required" placeholder="*Your Email" class="medium-input alt-font border-radius-4">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                            <textarea name="comment" rows="4" id="comment" placeholder="Your Message" class="medium-input alt-font border-radius-4"></textarea>

                                            @if ($errors->has('comment'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('comment') }}</strong>
                                                </span>
                                            @endif

                                            <button type="submit" class="default-submit btn btn-large propClone bg-sky-blue btn-circle tz-text text-white">SEND MESSAGE</button>                      
                                        </form>
                                    </div>
                                    <!-- end contact form -->
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
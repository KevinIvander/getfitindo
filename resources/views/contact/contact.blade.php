@extends('layout.master')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/map.css') }}" />

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
    <section class="container">
        <div class="row equalize">
            <div class="map-responsive col-md-6 col-sm-5" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.0711196408531!2d110.4158054!3d-7.7751974!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc8db77f1434ef324!2sGet+Fit+Aerobic+%26+Fitness+Center!5e0!3m2!1sen!2sid!4v1494539836542" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>
            <div class="col-md-6 col-sm-5">
                <h2>SEND YOUR MESSAGE HERE</h2>
                  <form class="form-horizontal" action="/action_page.php">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Email:</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Password:</label>
                      <div class="col-sm-10">          
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label><input type="checkbox" name="remember"> Remember me</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </section>
@endsection
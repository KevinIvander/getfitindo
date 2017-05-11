@extends('layout.master')

@section('css')

	<link rel="stylesheet" href="{{ asset('css/page/home.css') }}" />

@endsection

@section('scripts')
	
	<script type="text/javascript" src="{{ asset('js/page/home.js') }}"></script>
    
@endsection

@section('content')

	<section id="home" class="no-padding slider-style1 border-none no-margin-top">
        <div class="owl-slider-full owl-carousel light-pagination owl-without-next-pre-arrow">
            <!-- slider item -->
            <div class="item owl-bg-img tz-builder-bg-image custom-background bg-img-one" id="tz-bg-1" data-img-size="(W)1920px X (H)994px" style="background: linear-gradient(rgba(15, 15, 15, 0), rgba(15, 15, 15, 0)) repeat scroll 0% 0%, transparent url('images/bg-image/agency-slider-01.jpg') repeat scroll 0% 0%;">
                <div class="container one-sixth-screen xs-one-third-screen position-relative">
                    <div class="col-md-12 col-sm-12 col-xs-12 slider-typography-custom text-left">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle"> 
                                <div class="col-md-7 col-sm-10 col-xs-12 no-padding alt-font slider-content sm-no-margin-top">
                                    <div class="title-extra-large-6 line-height-75 font-weight-600 text-sky-blue slider-title margin-seven-bottom tz-text" id="tz-slider-text1">CROSSFIT EXERCISES ON EVERY DAY.</div>
                                    <div class="text-extra-large main-font font-weight-500 slider-text margin-ten-bottom tz-text width-80 xs-width-100" id="tz-slider-text2">Lorem Ipsum is simply dummy text of printing and industry. Lorem Ipsum the industry's dummy text ever since.</div>
                                    <div class="btn-dual">
                                        <a class="btn btn-large xs-btn-small bg-white text-dark-gray propClone no-margin-tb btn-circle xs-margin-five-bottom inner-link" href="#content-section24"><span class="tz-text" id="tz-slider-text3">READ MORE</span><i class="fa fa-angle-right icon-extra-small tz-icon-color" id="tz-icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- slider item -->
            <div class="item owl-bg-img tz-builder-bg-image custom-background bg-img-two" id="tz-bg-2" data-img-size="(W)1920px X (H)994px" style="background: linear-gradient(rgba(15, 15, 15, 0), rgba(15, 15, 15, 0)) repeat scroll 0% 0%, transparent url('images/bg-image/agency-slider-02.jpg') repeat scroll 0% 0%;">
                <div class="container one-sixth-screen xs-one-third-screen position-relative">
                    <div class="col-md-12 col-sm-10 col-xs-12 slider-typography-custom text-left sm-position-inherit">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle"> 
                                <div class="col-md-7 col-sm-10 col-xs-12 no-padding alt-font slider-content sm-no-margin-top">
                                    <div class="title-extra-large-6 line-height-75 font-weight-600 text-sky-blue slider-title margin-seven-bottom tz-text" id="tz-slider-text4">A POWERFUL PROGRAM, JUST FOR YOU.</div>
                                    <div class="2 text-extra-large main-font font-weight-500 slider-text margin-ten-bottom tz-text width-80 xs-width-100" id="tz-slider-text5">Lorem Ipsum is simply dummy text of printing and industry. Lorem Ipsum the industry's dummy text ever since.</div>
                                    <div class="btn-dual">
                                        <a class="btn btn-large xs-btn-small bg-white text-dark-gray propClone no-margin-tb btn-circle xs-margin-five-bottom inner-link" href="#content-section24"><span class="tz-text" id="tz-slider-text6">READ MORE</span><i class="fa fa-angle-right icon-extra-small tz-icon-color" id="tz-icon-5"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- slider item -->
            <div class="item owl-bg-img tz-builder-bg-image custom-background bg-img-three" id="tz-bg-3" data-img-size="(W)1920px X (H)994px" style="background: linear-gradient(rgba(15, 15, 15, 0), rgba(15, 15, 15, 0)) repeat scroll 0% 0%, transparent url('images/bg-image/agency-slider-03.jpg') repeat scroll 0% 0%;">
                <div class="container one-sixth-screen xs-one-third-screen position-relative">
                    <div class="col-md-12 col-sm-12 col-xs-12 slider-typography-custom text-left sm-position-inherit">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle"> 
                                <div class="col-md-7 col-sm-10 col-xs-12 no-padding alt-font slider-content sm-no-margin-top">
                                    <div class="title-extra-large-6 line-height-75 font-weight-600 text-sky-blue slider-title margin-seven-bottom tz-text" id="tz-slider-text7">CROSSFIT EXERCISES ON EVERY DAY.</div>
                                    <div class="text-extra-large main-font font-weight-500 slider-text margin-ten-bottom tz-text width-80 xs-width-100" id="tz-slider-text8">Lorem Ipsum is simply dummy text of printing and industry. Lorem Ipsum the industry's dummy text ever since.</div>
                                    <div class="btn-dual">
                                        <a class="btn btn-large xs-btn-small bg-white text-dark-gray propClone no-margin-tb btn-circle xs-margin-five-bottom inner-link" href="#content-section24"><span class="tz-text" id="tz-slider-text9">READ MORE</span><i class="fa fa-angle-right icon-extra-small tz-icon-color" id="tz-icon-6"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
        </div>
    </section>
    <section class="about-container wow bounceInUp padding-130px-tb xs-padding-60px-tb cover-background tz-builder-bg-image border-none bg-img-four animated" id="content-section24" data-img-size="(W)1920px X (H)994px" style="background:linear-gradient(rgba(0,0,0,0.65), rgba(80,80,80,0.15)), url('images/bg-image/restaurant-slider-01.jpg')">
        <div class="container">
            <div class="row equalize sm-equalize-auto equalize-display-inherit">
                <!-- feature content -->
                <div class="wow bounceInLeft col-lg-6 col-md-6 col-sm-12 col-xs-12 display-table" data-wow-delay="0.5s">
                    <div class="display-table-cell-vertical-middle">
                        <h2 class="alt-font text-sky-blue title-extra-large-3 alt-font line-height-55 font-weight-600 sm-section-title-large width-90 md-width-100 xs-margin-fifteen-bottom xs-section-title-large tz-text">ABOUT THE GYM AND FITNESS</h2>
                    </div>
                </div>
                <!-- end feature content -->
                <!-- image -->
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 display-table">
                    <div class="display-table-cell-vertical-middle">
                        <div class="col-md-12 col-sm-12 col-xs-12 no-padding-lr margin-thirteen-bottom padding-four-bottom sm-padding-one-bottom sm-margin-seven-bottom xs-margin-fifteen-bottom border-bottom-light tz-border">
                            <h3 class="wow bounceInDown text-extra-large margin-two-bottom text-sky-blue vertical-align-middle xs-margin-five-bottom xs-text-extra-large alt-font tz-text" data-wow-delay="1s">The place to get in shape.</h3>
                            <div class="wow bounceInRight text-medium vertical-align-middle tz-text" data-wow-delay="1.5s"><p>Lorem Ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been he standard dummy.</p></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 no-padding-lr">
                            <h3 class="wow bounceInUp text-extra-large margin-two-bottom text-sky-blue vertical-align-middle xs-margin-five-bottom xs-text-extra-large alt-font tz-text" data-wow-delay="2s">We work hard & play hard.</h3>
                            <div class="wow bounceInRight text-medium vertical-align-middle tz-text" data-wow-delay="2.5s"><p class="no-margin-bottom">Lorem Ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been he standard dummy.</p></div>
                        </div>
                    </div>
                </div>
                <!-- end image -->
            </div>
        </div>
    </section>
    <section class="bg-sky-blue builder-bg border-none hero-style25" id="hero-section26">
        <div class="container-fluid container-part2">
            <div class="row">
                <!-- image -->
                <div class="img-fitness wow bounceInLeft col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding xs-no-padding-15 bg-gray tz-builder-bg-image one-third-screen sm-one-third-screen cover-background bg-img-five" data-wow-delay="0.5s" data-img-size="(W)1000px X (H)1000px" style="background:linear-gradient(rgba(0,0,0,0.01), rgba(0,0,0,0.01)), url('images/bg-image/hero-bg26.jpg')"></div>
                <!-- end image -->
                <!-- slider text -->
                <div class="text-fitness col-lg-6 col-md-6 col-sm-12 col-xs-12 one-third-screen sm-one-second-screen xs-height-auto display-table text-center xs-no-padding">
                    <div class="display-table-cell-vertical-middle padding-twenty-five sm-padding-seven xs-padding-twenty no-padding-tb">
                        <h2 class="wow bounceInDown alt-font text-white letter-spacing-minus-2 font-weight-600 title-extra-large-6 md-title-extra-large-3 xs-title-extra-large-4 margin-five-bottom tz-text">THE PLACE TO GET IN SHAPE</h2>
                        <div class="wow bounceInUp title-large tz-text margin-ten-bottom text-white font-weight-300 width-70 md-width-100 xs-width-80 center-col xs-title-extra-large">For fitness and workout. we are available for 24/7 for your fitness.</div>
                    </div>
                </div>
                <!-- end slider text -->
            </div>
        </div>
    </section>
    <section class="wow fadeIn position-relative cover-background tz-builder-bg-image border-none xs-padding-50px-tb hero-style2 bg-img-six" id="hero-section22" data-wow-duration="1.5s" data-img-size="(W)1920px X (H)1000px" style="background:linear-gradient(rgba(22,22,22,0.65), rgba(0,0,0,0.60)), url('images/bg-image/hero-bg16.jpg');background-attachment: fixed">
        <div class="container one-third-screen xs-height-auto position-relative">
            <div class="row">
                <div class="slider-typography xs-position-static text-center">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle text-center xs-padding-fifteen xs-no-padding-lr">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 center-col">
                                <h1 class="title-extra-large-4 font-weight-600 xs-title-extra-large text-white alt-font margin-three-bottom tz-text">FOLLOW OUR EVENT<br>STAY TUNE WITH US!</h1>
                                <div class="text-extra-large text-light-gray xs-text-extra-large width-70 margin-eight-bottom tz-text margin-lr-auto"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p></div>
                            </div>
                        </div>                                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark-gray2 builder-bg border-none" id="content-section19">
        <div class="container-fluid">
            <div class="row equalize">
                <div class="col-md-6 col-sm-12 col-xs-12 display-table no-padding xs-padding-ten">
                    <div class="display-table-cell-vertical-middle padding-twenty-two md-padding-seven xs-no-padding-lr">
                        <!-- section title -->
                        <div class="col-md-12 col-sm-12 col-xs-12 margin-nine-top xs-no-padding-lr">
                            <h2 class="title-extra-large-4 md-title-extra-large sm-title-extra-large xs-title-extra-large font-weight-600 width-90 sm-width-100 text-sky-blue margin-twenty-bottom xs-margin-fifteen-bottom alt-font tz-text">THE PLACE TO GET BODY IN SHAPE.</h2>
                        </div>
                        <!-- section title -->
                        <!-- content details -->
                        <div class="two-column">
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-margin-fifteen-bottom xs-no-padding-lr">
                                <div class="float-left width-100 margin-four-bottom">      
                                    <div class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-sky-blue title-large sm-title-large no-padding tz-text">01.</div>   
                                    <h3 class="title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text">Running to Happiness</h3>
                                </div>                                             
                                <div class="text-medium sm-text-medium float-left width-90 md-width-100 tz-text"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-margin-fifteen-bottom xs-no-padding-lr">
                                <div class="float-left width-100 margin-four-bottom">      
                                    <div class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-sky-blue title-large sm-title-large no-padding tz-text">02.</div>   
                                    <h3 class="title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text">Feminist Over Power</h3>
                                </div>                                             
                                <div class="text-medium sm-text-medium float-left width-90 md-width-100 tz-text"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-margin-fifteen-bottom xs-no-padding-lr">
                                <div class="float-left width-100 margin-four-bottom">      
                                    <div class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-sky-blue title-large sm-title-large no-padding tz-text">03.</div>   
                                    <h3 class="title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text">Sport Happiness Fantasy</h3>
                                </div>                                             
                                <div class="text-medium sm-text-medium float-left width-90 md-width-100 tz-text"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-no-margin-bottom xs-no-padding-lr">
                                <div class="float-left width-100 margin-four-bottom">      
                                    <div class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-sky-blue title-large sm-title-large no-padding tz-text">04.</div>   
                                    <h3 class="title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text">Power Overwhelming</h3>
                                </div>                                             
                                <div class="text-medium sm-text-medium float-left width-90 md-width-100 tz-text"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                            </div>
                        </div>
                        <!-- end content details -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 tz-builder-bg-image xs-height-400-px cover-background bg-img-eight" data-img-size="(W)1000px X (H)800px" style="background:linear-gradient(rgba(0,0,0,0.01), rgba(0,0,0,0.01)), url('images/bg-image/infographic-6.jpg')"></div>
            </div>
        </div>
    </section>
    <section class="padding-110px-tb bg-black builder-bg border-top-light xs-padding-top-60px xs-no-padding-bottom border-none" id="pricing">
        <div class="container">                    
            <div class="row equalize xs-equalize-auto">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 col-xs-12 display-table xs-margin-fifteen-bottom">
                    <div class="display-table-cell-vertical-middle">
                        <h2 class="title-extra-large-3 line-height-55 font-weight-600 sm-section-title-large alt-font text-sky-blue title-large width-90 sm-width-100 sm-title-large xs-title-large tz-text">EFFECTIVE MEMBERSHIP</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-medium display-table">
                    <div class="display-table-cell-vertical-middle">
                        <div class="text-medium tz-text no-margin"><p class="no-margin-bottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type scrambled it to make a type specimen book.</p></div>
                    </div>
                </div>
                <!-- end section title -->
            </div>                    
        </div>
    </section>
    <section class="bg-black builder-bg padding-110px-tb no-padding-top xs-padding-60px-tb border-none" id="pricing-table4">
        <div class="container">
            <div class="row">
                <div class="pricing-box-style4 display-inline-block width-100">
                    <!-- pricing item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center xs-margin-nine-bottom">
                        <div class="pricing-box builder-bg tz-border border-none bg-dark-gray2">
                            <!-- pricing title -->
                            <div class="pricing-title text-center">
                                <h3 class="alt-font text-large text-medium-gray tz-text">PERSONAL</h3>
                            </div>
                            <!-- end pricing title -->
                            <!-- pricing price -->
                            <div class="pricing-price builder-bg">
                                <h4 class="title-extra-large-2 sm-title-extra-large-2 alt-font font-weight-500 text-white tz-text">$95</h4>
                                <div class="text-small2 alt-font tz-text no-margin-bottom"> <p>ONE MONTH</p> </div>
                            </div>
                            <!-- end pricing price -->
                            <!-- pricing features -->
                            <div class="pricing-features no-padding-top">
                                <ul class="margin-twenty-three-bottom list-style-none">
                                    <li class="tz-border border-bottom-light"><span class="tz-text">Swimming pool not included</span></li>
                                    <li class="tz-border border-bottom-light"><span class="tz-text">Canteen optional</span></li>
                                    <li class="tz-border border-bottom-light"><span class="tz-text">Towels not included</span></li>
                                    <li class="tz-border border-bottom-light"><span class="tz-text">Water not included</span></li>
                                    <li class="tz-border border-bottom-light border-none"><span class="tz-text">Personal trainer not included</span></li>
                                </ul>
                                <!-- pricing action -->
                                <div class="pricing-action">
                                    <a class="btn-medium btn btn-circle bg-sky-blue text-white no-letter-spacing" href="#contact-section7"><span class="tz-text">CHOOSE PLAN</span></a>
                                </div>
                                <!-- end pricing action -->
                            </div>
                            <!-- end pricing features -->
                        </div>
                    </div>
                    <!-- end pricing item -->
                    <!-- pricing item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center xs-margin-nine-bottom">
                        <div class="pricing-box builder-bg tz-border border-none bg-dark-gray2">
                            <!-- pricing title -->
                            <div class="pricing-title text-center">
                                <h3 class="alt-font text-large text-medium-gray tz-text">PERSONAL</h3>
                            </div>
                            <!-- end pricing title -->
                            <!-- pricing price -->
                            <div class="pricing-price builder-bg">
                                <h4 class="title-extra-large-2 sm-title-extra-large-2 alt-font font-weight-500 text-white tz-text">$499</h4>
                                <div class="text-small2 alt-font tz-text no-margin-bottom"> <p>SIX MONTH</p> </div>
                            </div>
                            <!-- end pricing price -->
                            <!-- pricing features -->
                            <div class="pricing-features no-padding-top">
                                <ul class="margin-twenty-three-bottom list-style-none">
                                    <li class="tz-border border-bottom-light"><span class="tz-text">Swimming pool + $10</span></li>
                                    <li class="tz-border border-bottom-light"><span class="tz-text">Canteen optional</span></li>
                                    <li class="tz-border border-bottom-light"><span class="tz-text">Towels for FREE</span></li>
                                    <li class="tz-border border-bottom-light"><span class="tz-text">Water + $5</span></li>
                                    <li class="tz-border border-bottom-light border-none"><span class="tz-text">Personal trainer optional</span></li>
                                </ul>
                                <!-- pricing action -->
                                <div class="pricing-action">
                                    <a class="btn-medium btn btn-circle bg-sky-blue text-white no-letter-spacing" href="#contact-section7"><span class="tz-text">CHOOSE PLAN</span></a>
                                </div>
                                <!-- end pricing action -->
                            </div>
                            <!-- end pricing features -->
                        </div>
                    </div>
                    <!-- end pricing item -->
                    <!-- pricing item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                        <div class="pricing-box builder-bg tz-border border-none bg-dark-gray2">
                            <!-- pricing title -->
                            <div class="pricing-title text-center">
                                <h3 class="alt-font text-large text-medium-gray tz-text">PERSONAL</h3>
                            </div>
                            <!-- end pricing title -->
                            <!-- pricing price -->
                            <div class="pricing-price builder-bg">
                                <h4 class="title-extra-large-2 sm-title-extra-large-2 alt-font font-weight-500 text-white tz-text">$999</h4>
                                <div class="text-small2 alt-font tz-text no-margin-bottom"> <p>PER YEAR</p> </div>
                            </div>
                            <!-- end pricing price -->
                            <!-- pricing features -->
                            <div class="pricing-features no-padding-top">
                                <ul class="margin-twenty-three-bottom list-style-none">
                                    <li class="tz-border border-bottom-light"><span class="tz-text">Swimming pool for FREE</span></li>
                                    <li class="tz-border border-bottom-light"><span class="tz-text">Canteen included</span></li>
                                    <li class="tz-border border-bottom-light"><span class="tz-text">Towels for FREE</span></li>
                                    <li class="tz-border border-bottom-light"><span class="tz-text">Water for FREE</span></li>
                                    <li class="tz-border border-bottom-light border-none"><span class="tz-text">Personal trainer included</span></li>
                                </ul>
                                <!-- pricing action -->
                                <div class="pricing-action">
                                    <a class="btn-medium btn btn-circle bg-sky-blue text-white no-letter-spacing" href="#contact-section7"><span class="tz-text">CHOOSE PLAN</span></a>
                                </div>
                                <!-- end pricing action -->
                            </div>
                            <!-- end pricing features -->
                        </div>
                    </div>
                    <!-- end pricing item -->
                </div>
            </div>
        </div>
    </section>
    <section id="contact-section7" class="no-padding position-relative cover-background tz-builder-bg-image border-none xs-padding-60px-tb bg-img-nine" data-img-size="(W)1920px X (H)800px" style="background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.85)), url('images/bg-image/hero-bg3.jpg');">
        <div class="container one-third-screen position-relative xs-height-auto">
            <div class="row">
                <div class="slider-typography xs-position-static">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle text-left">
                            <!-- section title -->
                            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 center-col text-center">
                                <h2 class="title-extra-large-2 sm-section-title-medium xs-section-title-large text-white font-weight-600 alt-font margin-five-bottom xs-margin-fifteen-bottom tz-text">HELP US SERVE BETTER</h2>
                                <div class="text-medium text-light-gray width-90 sm-width-100 center-col tz-text margin-thirteen-bottom xs-margin-nineteen-bottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</div>
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
 
@endsection
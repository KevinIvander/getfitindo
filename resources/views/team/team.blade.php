@extends('layout.master')

@section('css')

    <!-- <link rel="stylesheet" href="{{ asset('css/page/home.css') }}" /> -->

@endsection

@section('scripts')
    
    <!-- <script type="text/javascript" src="{{ asset('js/page/home.js') }}"></script> -->
    
@endsection

@section('content')
    <section class="padding-110px-tb bg-black builder-bg border-top-light xs-padding-top-60px xs-no-padding-bottom border-none" id="team">
        <div class="container">                    
            <div class="row equalize xs-equalize-auto">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 col-xs-12 display-table xs-margin-fifteen-bottom">
                    <div class="display-table-cell-vertical-middle">
                        <h2 class="wow slideInLeft title-extra-large-3 line-height-55 font-weight-600 sm-section-title-large alt-font text-sky-blue title-large width-90 sm-width-100 sm-title-large xs-title-large tz-text">OUR TEAM</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-medium display-table">
                    <div class="display-table-cell-vertical-middle">
                        <div class="wow bounceInDown text-medium tz-text no-margin"><p class="no-margin-bottom">Hello, this is our team. We will help you get your confidence </p></div>
                    </div>
                </div>
                <!-- end section title -->
            </div>                    
        </div>
    </section>
    <section class="bg-black builder-bg padding-110px-tb xs-padding-60px-tb no-padding-top team-style2 border-none" id="team-section2">
        <div class="container">     
        <?php $index = 0;?>                                  
            <div class="row four-column">
            @foreach($datas as $data) 
                <!-- team member -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-fifteen-bottom xs-margin-twenty-nine-bottom">
                    <div class="team position-relative">
                        <div class="padding-twenty-bottom blog-post"><img class="img600" alt="" src="{{ config('app.url')}}{{ $data->profil_picture }}" data-img-size="(W)600px X (H)600px"></div>
                        <div class="team-details text-center">
                            <div class="team-name padding-twelve-bottom margin-sixteen-bottom border-bottom-light tz-border">
                                <span class="text-sky-blue font-weight-500 display-block alt-font tz-text">{{$data->name}}</span>
                                <span class="text-small text-light-gray2 alt-font tz-text">{{$data->position}}</span>
                            </div>
                            <div class="social-icon medium-social-icon">
                                <div class="display-inline-block margin-three no-margin-tb"><a href="#"><i class="fa ti-facebook tz-icon-color icon-extra-small builder-bg"></i></a></div>
                                <div class="display-inline-block margin-three no-margin-tb"><a href="#"><i class="fa ti-twitter-alt tz-icon-color icon-extra-small builder-bg"></i></a></div>
                                <div class="display-inline-block margin-three no-margin-tb"><a href="#"><i class="fa ti-linkedin tz-icon-color icon-extra-small builder-bg"></i></a></div>
                                <div class="display-inline-block margin-three no-margin-tb"><a href="#"><i class="fa ti-pinterest tz-icon-color icon-extra-small builder-bg"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end team member -->
            <?php $index++;?>
            @if($index%4 == 0)
            </div><div class="row four-column">
            @endif
            @endforeach
        </div>
    </section>
@endsection
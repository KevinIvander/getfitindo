@extends('layout.master')

@section('css')

    <!-- <link rel="stylesheet" href="{{ asset('css/page/home.css') }}" /> -->

@endsection

@section('scripts')
    
    <!-- <script type="text/javascript" src="{{ asset('js/page/home.js') }}"></script> -->
    
@endsection

@section('content')
    <section class="padding-110px-tb bg-black builder-bg border-top-light xs-padding-top-60px xs-no-padding-bottom border-none" id="facility">
        <div class="container">                    
            <div class="row equalize xs-equalize-auto">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 col-xs-12 display-table xs-margin-fifteen-bottom">
                    <div class="display-table-cell-vertical-middle">
                        <h2 class="wow bounceInDown title-extra-large-3 line-height-55 font-weight-600 sm-section-title-large alt-font text-sky-blue title-large width-90 sm-width-100 sm-title-large xs-title-large tz-text">GET YOUR FACILITIES</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-medium display-table">
                    <div class="display-table-cell-vertical-middle">
                        <div class="wow bounceInRight text-medium tz-text no-margin">
                            <p class="no-margin-bottom">Get Fit, Get Your Confidence</p>Getfit have many facilities for your satisfaction</div>
                        </div>
                    </div>
                </div>
                <!-- end section title -->
            </div>                    
        </div>
    </section>
    <section class="padding-110px-tb xs-padding-60px-tb blog-style1 bg-black no-padding-top builder-bg border-none" id="blog-section6">
        <div class="container">
            <div class="row">
                <!-- blog item -->
                @foreach($datas as $data)
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-nineteen-bottom">
                    <div class="blog-post">
                        <!-- blog image -->
                        <div class="blog-image">
                            <a href="#"><img class="img100" alt="" src="{{ config('app.url')}}{{ $data->picture_url }}" data-img-size="(W)800px X (H)533px"></a>
                        </div>
                        <!-- end blog image -->
                        <!-- blog details -->
                        <div class="post-details bg-dark-gray2 tz-background-color">
                            <a href="#" class="tz-text text-white alt-font blog-post-title text-medium font-weight-500 margin-five-bottom display-inline-block md-margin-five-bottom">{{$data->name}}</a>
                            <div class="text-medium tz-text">{!!substr($data->description,0,120)!!}...</div>
                        </div>
                        <!-- end blog details -->
                    </div>
                </div>
                <!-- end blog item -->
                @endforeach
            </div>
        </div>
    </section>
@endsection
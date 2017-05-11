@extends('layout.master')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/page/home.css') }}" />

@endsection

@section('scripts')
    
    <script type="text/javascript" src="{{ asset('js/page/home.js') }}"></script>
    
@endsection

@section('content')
    <section class="padding-110px-tb bg-black builder-bg border-top-light xs-padding-top-60px xs-no-padding-bottom border-none" id="classes">
        <div class="container">                    
            <div class="row equalize xs-equalize-auto">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 col-xs-12 display-table xs-margin-fifteen-bottom">
                    <div class="display-table-cell-vertical-middle">
                        <h2 class="title-extra-large-3 line-height-55 font-weight-600 sm-section-title-large alt-font text-sky-blue title-large width-90 sm-width-100 sm-title-large xs-title-large tz-text">THE FITNESS CLASSES</h2>
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
    <section class="padding-110px-tb xs-padding-60px-tb no-padding-top bg-black builder-bg border-none" id="content-section8">
        <div class="container">
            <div class="row">
            <?php $index = 0;?>
                <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                    <!-- content treatments -->
                    <div class="col-md-12 col-sm-12 col-xs-12 margin-ten-bottom sm-margin-eight-bottom xs-margin-fifteen-bottom">
                    @foreach($datas as $data)
                        <div class="col-md-12 col-sm-12 col-xs-12 no-padding overflow-hidden content-treatments position-relative">
                            <img class="img200" src="{{ config('app.url')}}{{ $data->picture_url }}" data-img-size="(W)900px X (H)490px" alt=""/>
                            <div class="treatments-details bg-dark-gray2 spa-treatments tz-background-color">
                                <div class="slider-text-middle-main padding-thirty md-padding-ten sm-padding-nineteen xs-padding-eleven">
                                    <div class="slider-text-middle">
                                        <h3 class="text-medium text-sky-blue margin-two-bottom display-block alt-font tz-text">{{$data->name}}</h3>
                                        <div class="text-extra-medium line-height-22 tz-text">{!!substr($data->description,0,120)!!}...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $index++;?>
                    @if($index%2 == 1)
                    </div><div class="col-md-12 col-sm-12 col-xs-12 sm-margin-eight-bottom xs-margin-fifteen-bottom">
                    @endif
                    
                @if($index%2 == 0)
                </div></div><div class="col-md-6 col-sm-12 col-xs-12 no-padding"><div class="col-md-12 col-sm-12 col-xs-12 margin-ten-bottom sm-margin-eight-bottom xs-margin-fifteen-bottom">
                @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
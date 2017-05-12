@extends('layout.master')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/page/eventandtips.css') }}" />

@endsection

@section('scripts')


    
@endsection

@section('content')
    <div class="container">
        <section class="padding-110px-tb bg-black builder-bg border-top-light xs-padding-top-60px xs-no-padding-bottom border-none" id="team">
            <div class="container">                    
                <div class="row equalize xs-equalize-auto">
                    <!-- section title -->
                    <div class="col-md-6 col-sm-6 col-xs-12 display-table xs-margin-fifteen-bottom">
                        <div class="display-table-cell-vertical-middle">
                            <h2 class="wow rotateInDownLeft title-extra-large-3 line-height-55 font-weight-600 sm-section-title-large alt-font text-sky-blue title-large width-90 sm-width-100 sm-title-large xs-title-large tz-text">JOIN OUR EVENT & TIPS</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-medium display-table">
                        <div class="display-table-cell-vertical-middle">
                            <div class="wow bounceInUp text-medium tz-text no-margin"><p class="no-margin-bottom">Don't miss our events and keep update tips from us to get maximum result. Get healthy life!</p></div>
                        </div>
                    </div>
                    <!-- end section title -->
                </div>                    
            </div>
        </section>
        <div id="timeline">
        <div class="row timeline-movement timeline-movement-top">
            <div class="timeline-badge timeline-future-movement">
                <a>
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            </div>
            <div class="timeline-badge timeline-filter-movement">
                <a>
                    <span class="glyphicon glyphicon-time"></span>
                </a>
            </div>
        </div>
        <?php $index = 0;?>
        @foreach($datas as $data)
        <div class="row timeline-movement">
            <div class="timeline-badge">
                <span class="timeline-balloon-date-day">18</span>
                <span class="timeline-balloon-date-month">APRIL</span>
            </div>
            @if($index%2 == 0)
            <div class="col-sm-6  timeline-item">
            @else
            <div class="col-sm-offset-6 col-sm-6  timeline-item">
            @endif
                <div class="row">
                    @if($index%2 == 0)
                    <div class="col-sm-11">
                        <div class="timeline-panel credits">
                    @else
                    <div class="col-sm-offset-1 col-sm-11">
                        <div class="timeline-panel debits">
                    @endif
                            <ul class="timeline-panel-ul">
                                <li><span class="importo">{{$data->event_title}}</span></li>
                                <li><span class="causale">{!!substr($data->description,0,60)!!}...</span> </li>
                                <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{$data->start_date}}</small></p> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php $index++;?>
        </div>
        @endforeach
    </div>
    <section class="row bg-dark-gray2 builder-bg border-none" id="content-section19">
        <div class="container-fluid">
            <div class="row equalize">
                <div class="col-md-6 col-sm-12 col-xs-12 tz-builder-bg-image xs-height-400-px cover-background bg-img-eight" data-img-size="(W)1000px X (H)800px" style="background:linear-gradient(rgba(0,0,0,0.01), rgba(0,0,0,0.01)), url('images/bg-image/infographic-6.jpg')"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 display-table no-padding xs-padding-ten">
                    <div class="display-table-cell-vertical-middle padding-twenty-two md-padding-seven xs-no-padding-lr">
                        <!-- section title -->
                        <div class="col-md-12 col-sm-12 col-xs-12 margin-nine-top xs-no-padding-lr">
                            <h2 class="wow rotateInDownRight title-extra-large-4 md-title-extra-large sm-title-extra-large xs-title-extra-large font-weight-600 width-90 sm-width-100 text-sky-blue margin-twenty-bottom xs-margin-fifteen-bottom alt-font tz-text">TIPS FOR HEALTHY LIFE.</h2>
                        </div>
                        <!-- section title -->
                        <!-- content details -->
                        <div class="two-column">
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-margin-fifteen-bottom xs-no-padding-lr">
                                <div class="float-left width-100 margin-four-bottom">      
                                    <div class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-sky-blue title-large sm-title-large no-padding tz-text">01.</div>   
                                    <h3 class="wow slideInUp title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text"> EAT NUTRITIOUS CALORIES</h3>
                                </div>                                             
                                <div class="wow bounceInLeft text-medium sm-text-medium float-left width-90 md-width-100 tz-text"><p>Make sure the majority of your energy intake comes from nutritious calories that also provide your bidy with nutrients like vitamins, minerals, protein, fibre, and good fats. Avoid empty calories </p></div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-margin-fifteen-bottom xs-no-padding-lr">
                                <div class="float-left width-100 margin-four-bottom">      
                                    <div class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-sky-blue title-large sm-title-large no-padding tz-text">02.</div>   
                                    <h3 class="wow slideInUp title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text"> DRINK MORE WATER</h3>
                                </div>                                             
                                <div class="wow bounceInRight text-medium sm-text-medium float-left width-90 md-width-100 tz-text"><p></p>Water is an essential part of your diet. Drink plenty of water and avoid empty calories from things such as fizzy drinks, energy drinks, or juices with added sugar. Eat your calories don't drink them</div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-margin-fifteen-bottom xs-no-padding-lr">
                                <div class="float-left width-100 margin-four-bottom">      
                                    <div class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-sky-blue title-large sm-title-large no-padding tz-text">03.</div>   
                                    <h3 class="wow slideInUp title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text"> DO EXERCISE</h3>
                                </div>                                             
                                <div class="wow bounceInLefttext-medium sm-text-medium float-left width-90 md-width-100 tz-text"><p>Exercise is an extremely important factor in staying healthy so try to be as active as you can</p></div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-no-margin-bottom xs-no-padding-lr">
                                <div class="float-left width-100 margin-four-bottom">      
                                    <div class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-sky-blue title-large sm-title-large no-padding tz-text">04.</div>   
                                    <h3 class="wow slideInUp title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text"> SLEEP WELL</h3>
                                </div>                                             
                                <div class="wow bounceInRight text-medium sm-text-medium float-left width-90 md-width-100 tz-text"><p>Make sure you get enough sleep - it's an essential part of being healthy and directly affects how well we are able to learn, grow, and act in life. WHile we're sleep, our bodies have that all important time to rpeair</p></div>
                            </div>
                        </div>
                        <!-- end content details -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('layout.master')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/page/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/page/class.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/page/mediaclass.css') }}" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,regular,600&subset=latin%2Clatin-ext" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


@endsection

@section('scripts')
    
    <script type="text/javascript" src="{{ asset('js/page/home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/page/class.js') }}"></script>
    
@endsection

@section('content')
    <section class="padding-110px-tb bg-black builder-bg border-top-light xs-padding-top-60px xs-no-padding-bottom border-none" id="classes">
        <div class="container">                    
            <div class="row equalize xs-equalize-auto">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 col-xs-12 display-table xs-margin-fifteen-bottom">
                    <div class="display-table-cell-vertical-middle">
                        <h2 class="wow flipInX title-extra-large-3 line-height-55 font-weight-600 sm-section-title-large alt-font text-sky-blue title-large width-90 sm-width-100 sm-title-large xs-title-large tz-text">GET FIT CLASSES</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-medium display-table">
                    <div class="display-table-cell-vertical-middle">
                        <div class="wow slideInRight text-medium tz-text no-margin"><p class="no-margin-bottom">Let's join get fit classes. Get more confidence and shape your body</p></div>
                    </div>
                </div>
                <!-- end section title -->
            </div>                    
        </div>
    </section>
    <section class="padding-110px-tb xs-padding-60px-tb no-padding-top bg-black builder-bg border-none" id="class2">
        <div class="container">
            <div class="row">
            <?php $index = 0;?>
                <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                    <!-- content treatments -->
                    <div class="col-md-12 col-sm-12 col-xs-12 margin-ten-bottom sm-margin-eight-bottom xs-margin-fifteen-bottom">
                    @foreach($datas as $data)
                        <div class="view view-first portfolio col-md-12 col-sm-12 col-xs-12 no-padding overflow-hidden content-treatments position-relative">
                            <img class="wow lightSpeedIn img200" src="{{ config('app.url')}}{{ $data->picture_url }}" data-img-size="(W)900px X (H)490px" alt="{{$data->name}}"/>
                            <!-- <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
                                  <h4>{{$data->name}}</h4>
                                  <p><span class="cat-portfolio">posters, webdesign</span></p>
                                  <div class="portf_detail">
                                        <a href="{{ config('app.url')}}{{ $data->picture_url }}" data-gal="portfolio" class="info open-imag">
                                          <i class="fa fa-search"></i>
                                        </a>
                                        <a href="#" class="info external open_port_detail" data-id="1">
                                          <i class="fa fa-link"></i>
                                        </a>
                                  </div>

                            </div> -->
                            <div id="myModal" class="modal">
                                  <span class="close">&times;</span>
                                  <img class="wow lightSpeedOut modal-content" id="img200">
                                  <div id="caption"></div>
                            </div>
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
    <section id="timetable" class="default-bg">
            <div class="wow bounceInUp container">
            <!-- / College Timetable -->
            <div class='tab border-rad'>
            <table border='0' cellpadding='0' cellspacing='0'>
                <tr class='days white-bg'>
                    <th class="border-custom-bottom border-custom-right"></th>
                    <th class="text-center">Monday</th>
                    <th class="text-center">Tuesday</th>
                    <th class="text-center">Wednesday</th>
                    <th class="text-center">Thursday</th>
                    <th class="text-center">Friday</th>
                    <th class="text-center">Saturday</th>
                </tr>
                <tr>
                    <td class='time'>8.00 - 9.00</td>
                    <td class='timetable-col blue'>BL Mix <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>BL Inovasi <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>BL Inovasi <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>Body Shape <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>BL Mix <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>Aero Mix <h6>Prof. Johnathan Doe</h6></td>
                </tr>
                <tr>
                    <td class='time'>9:15 - 10:15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class='timetable-col blue'>Power Yoga <h6>Prof. Johnathan Doe</h6></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class='time'>16:00 - 17:00</td>
                    <td class='timetable-col blue'>Aero Fun <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>Aero BL <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>Aero Mix <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>BL Mix <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>Aero BL <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>Body Shape <h6>Prof. Johnathan Doe</h6></td>
                </tr>
                <tr>
                    <td class='time'>17:15 - 18:30</td>
                    <td></td>
                    <td class='timetable-col blue'>BL Mix <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>BL Mix <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>Aero Fun <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>BI Inovasi <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>Aero Fat Burn <h6>Prof. Johnathan Doe</h6></td>
                </tr>
                <tr>
                    <td class='time'>18:45 - 19:45</td>
                    <td class='timetable-col blue'>Dynamic Yoga <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>Zumba <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>Zumba <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>Zumba <h6>Prof. Johnathan Doe</h6></td>
                    <td class='timetable-col blue'>Zumba <h6>Prof. Johnathan Doe</h6></td>
                    <td></td>
                </tr>
                <tr>
                    <td class='time'>20:00 - 21:00</td>
                    <td></td>
                    <td class='timetable-col blue'>Astanga Yoga <h6>Prof. Johnathan Doe</h6></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            </div>
            </div>
    </section>
@endsection
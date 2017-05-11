@extends('layout.master')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/page/eventandtips.css') }}" />

@endsection

@section('scripts')


    
@endsection

@section('content')
    <div class="container">
        <!-- <div class="page-header">
            <h1 id="">Timeline</h1>
        </div> -->
        </br></br></br></br></br></br></br></br>
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
                <span class="timeline-balloon-date-month">APR</span>
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
</div>
@endsection
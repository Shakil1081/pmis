@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>


            {{-- <div class="row">
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="d-flex align-items-center flex-grow-1 gap-3">
                                    <div
                                        class="wh-48 d-flex align-items-center bg-primary justify-content-center rounded-circle bg-opacity-10">
                                        <span class="material-icons-outlined text-primary">shopping_cart</span>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0">$48,562</h5>
                                        <p class="mb-0">Total Orders</p>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        <span class="material-icons-outlined fs-5">more_vert</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <div class="d-flex align-items-center align-self-end text-success">
                                    <p class="mb-0">25.6%</p>
                                    <span class="material-icons-outlined">expand_less</span>
                                </div>
                                <div class="" id="chart1" style="min-height: 50px;">
                                    <div id="apexchartsucag3uuj"
                                        class="apexcharts-canvas apexchartsucag3uuj apexcharts-theme-light"
                                        style="width: 150px; height: 50px;"><svg id="SvgjsSvg1006" width="150"
                                            height="50" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="150" height="50">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 25px;"></div>
                                            </foreignObject>
                                            <rect id="SvgjsRect1010" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fefefe"></rect>
                                            <g id="SvgjsG1048" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1007">
                                                    <clipPath id="gridRectMaskucag3uuj">
                                                        <rect id="SvgjsRect1012" width="156" height="52" x="-3" y="-1"
                                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskucag3uuj"></clipPath>
                                                    <clipPath id="nonForecastMaskucag3uuj"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskucag3uuj">
                                                        <rect id="SvgjsRect1013" width="154" height="54" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1018" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1019" stop-opacity="0.8"
                                                            stop-color="rgba(13,110,253,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1020" stop-opacity="0.1"
                                                            stop-color="rgba(13,110,253,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1021" stop-opacity="0.1"
                                                            stop-color="rgba(13,110,253,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1022" stop-opacity="0.8"
                                                            stop-color="rgba(13,110,253,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1011" x1="-0.5" y1="0" x2="-0.5"
                                                    y2="50" stroke="#b6b6b6" stroke-dasharray="3"
                                                    stroke-linecap="butt" class="apexcharts-xcrosshairs" x="-0.5" y="0"
                                                    width="1" height="50" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1025" class="apexcharts-grid">
                                                    <g id="SvgjsG1026" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1029" x1="0" y1="0"
                                                            x2="150" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1030" x1="0" y1="8.333333333333334"
                                                            x2="150" y2="8.333333333333334" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1031" x1="0" y1="16.666666666666668"
                                                            x2="150" y2="16.666666666666668" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1032" x1="0" y1="25"
                                                            x2="150" y2="25" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1033" x1="0" y1="33.333333333333336"
                                                            x2="150" y2="33.333333333333336" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1034" x1="0" y1="41.66666666666667"
                                                            x2="150" y2="41.66666666666667" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1035" x1="0" y1="50.00000000000001"
                                                            x2="150" y2="50.00000000000001" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1027" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1037" x1="0" y1="50"
                                                        x2="150" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1036" x1="0" y1="1"
                                                        x2="0" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1014" class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1015" class="apexcharts-series" seriesName="Desktops"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1023"
                                                            d="M0 50L0 46.666666666666664C10.5 46.666666666666664 19.5 15.833333333333329 30 15.833333333333329C40.5 15.833333333333329 49.5 20.833333333333332 60 20.833333333333332C70.5 20.833333333333332 79.5 7.5 90 7.5C100.5 7.5 109.5 29.166666666666664 120 29.166666666666664C130.5 29.166666666666664 139.5 43.333333333333336 150 43.333333333333336C150 43.333333333333336 150 43.333333333333336 150 50M150 43.333333333333336C150 43.333333333333336 150 43.333333333333336 150 43.333333333333336 "
                                                            fill="url(#SvgjsLinearGradient1018)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskucag3uuj)"
                                                            pathTo="M 0 50 L 0 46.666666666666664C 10.5 46.666666666666664 19.5 15.833333333333329 30 15.833333333333329C 40.5 15.833333333333329 49.5 20.833333333333332 60 20.833333333333332C 70.5 20.833333333333332 79.5 7.5 90 7.5C 100.5 7.5 109.5 29.166666666666664 120 29.166666666666664C 130.5 29.166666666666664 139.5 43.333333333333336 150 43.333333333333336C 150 43.333333333333336 150 43.333333333333336 150 50M 150 43.333333333333336z"
                                                            pathFrom="M -1 50 L -1 50 L 30 50 L 60 50 L 90 50 L 120 50 L 150 50">
                                                        </path>
                                                        <path id="SvgjsPath1024"
                                                            d="M0 46.666666666666664C10.5 46.666666666666664 19.5 15.833333333333329 30 15.833333333333329C40.5 15.833333333333329 49.5 20.833333333333332 60 20.833333333333332C70.5 20.833333333333332 79.5 7.5 90 7.5C100.5 7.5 109.5 29.166666666666664 120 29.166666666666664C130.5 29.166666666666664 139.5 43.333333333333336 150 43.333333333333336C150 43.333333333333336 150 43.333333333333336 150 43.333333333333336 "
                                                            fill="none" fill-opacity="1" stroke="#0d6efd"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskucag3uuj)"
                                                            pathTo="M 0 46.666666666666664C 10.5 46.666666666666664 19.5 15.833333333333329 30 15.833333333333329C 40.5 15.833333333333329 49.5 20.833333333333332 60 20.833333333333332C 70.5 20.833333333333332 79.5 7.5 90 7.5C 100.5 7.5 109.5 29.166666666666664 120 29.166666666666664C 130.5 29.166666666666664 139.5 43.333333333333336 150 43.333333333333336"
                                                            pathFrom="M -1 50 L -1 50 L 30 50 L 60 50 L 90 50 L 120 50 L 150 50"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1016"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1052" r="0" cx="0"
                                                                    cy="46.666666666666664"
                                                                    class="apexcharts-marker wzvbi7gvm no-pointer-events"
                                                                    stroke="#ffffff" fill="#0d6efd" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1017" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1028" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1038" x1="0" y1="0" x2="150"
                                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1039" x1="0" y1="0" x2="150"
                                                    y2="0" stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1040" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1041" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1049"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1050"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1051"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light"
                                            style="left: 11px; top: -20px;">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Jan
                                            </div>
                                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(13, 110, 253);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label">Desktops: </span><span
                                                            class="apexcharts-tooltip-text-y-value">4</span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="{{ $chart1->options['column_class'] }}">
                            <h3>{!! $chart1->options['chart_title'] !!}</h3>
                            {!! $chart1->renderHtml() !!}
                        </div>
                        <div class="{{ $chart2->options['column_class'] }}">
                            <h3>{!! $chart2->options['chart_title'] !!}</h3>
                            {!! $chart2->renderHtml() !!}
                        </div>
                        <div class="{{ $chart3->options['column_class'] }}">
                            <h3>{!! $chart3->options['chart_title'] !!}</h3>
                            {!! $chart3->renderHtml() !!}
                        </div>

                    </div>
                </div>
            </div> --}}


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Dashboard
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="row">
                            <div class="{{ $chart1->options['column_class'] }}">
                                <h3>{!! $chart1->options['chart_title'] !!}</h3>
                                {!! $chart1->renderHtml() !!}
                            </div>
                            <div class="{{ $chart2->options['column_class'] }}">
                                <h3>{!! $chart2->options['chart_title'] !!}</h3>
                                {!! $chart2->renderHtml() !!}
                            </div>
                            <div class="{{ $chart3->options['column_class'] }}">
                                <h3>{!! $chart3->options['chart_title'] !!}</h3>
                                {!! $chart3->renderHtml() !!}
                            </div>
                            <div class="{{ $chart4->options['column_class'] }}">
                                <h3>{!! $chart4->options['chart_title'] !!}</h3>
                                {!! $chart4->renderHtml() !!}
                            </div>
                            <div class="{{ $chart5->options['column_class'] }}">
                                <h3>{!! $chart5->options['chart_title'] !!}</h3>
                                {!! $chart5->renderHtml() !!}
                            </div>
                            <div class="{{ $chart6->options['column_class'] }}">
                                <h3>{!! $chart6->options['chart_title'] !!}</h3>
                                {!! $chart6->renderHtml() !!}
                            </div>
                            <div class="{{ $chart7->options['column_class'] }}">
                                <h3>{!! $chart7->options['chart_title'] !!}</h3>
                                {!! $chart7->renderHtml() !!}
                            </div>
                            <div class="{{ $chart8->options['column_class'] }}">
                                <h3>{!! $chart8->options['chart_title'] !!}</h3>
                                {!! $chart8->renderHtml() !!}
                            </div>
                            <div class="{{ $chart9->options['column_class'] }}">
                                <h3>{!! $chart9->options['chart_title'] !!}</h3>
                                {!! $chart9->renderHtml() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>{!! $chart1->renderJs() !!}{!! $chart2->renderJs() !!}{!! $chart3->renderJs() !!}{!! $chart4->renderJs() !!}{!! $chart5->renderJs() !!}{!! $chart6->renderJs() !!}{!! $chart7->renderJs() !!}{!! $chart8->renderJs() !!}{!! $chart9->renderJs() !!}
@endsection
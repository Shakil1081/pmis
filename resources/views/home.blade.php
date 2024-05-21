@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="row">
<<<<<<< HEAD

            <div class="row">
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
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="d-flex align-items-center flex-grow-1 gap-3">
                                    <div
                                        class="wh-48 d-flex align-items-center bg-danger justify-content-center rounded-circle bg-opacity-10">
                                        <span class="material-icons-outlined text-danger">attach_money</span>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0">$89,145</h5>
                                        <p class="mb-0">Total Income</p>
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
                                <div class="d-flex align-items-center align-self-end text-danger">
                                    <p class="mb-0">15.8%</p>
                                    <span class="material-icons-outlined">expand_more</span>
                                </div>
                                <div class="" id="chart2" style="min-height: 50px;">
                                    <div id="apexchartsgwfzr91j"
                                        class="apexcharts-canvas apexchartsgwfzr91j apexcharts-theme-light"
                                        style="width: 150px; height: 50px;"><svg id="SvgjsSvg1053" width="150"
                                            height="50" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="150" height="50">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 25px;"></div>
                                            </foreignObject>
                                            <g id="SvgjsG1159" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1055" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1054">
                                                    <linearGradient id="SvgjsLinearGradient1058" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1059" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1060" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1061" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskgwfzr91j">
                                                        <rect id="SvgjsRect1063" width="156" height="52" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskgwfzr91j"></clipPath>
                                                    <clipPath id="nonForecastMaskgwfzr91j"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskgwfzr91j">
                                                        <rect id="SvgjsRect1064" width="154" height="54" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1070" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1071" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1072" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1073" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1074" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1077" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1078" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1079" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1080" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1081" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1084" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1085" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1086" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1087" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1088" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1091" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1092" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1093" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1094" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1095" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1098" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1099" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1100" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1101" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1102" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1105" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1106" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1107" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1108" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1109" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1112" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1113" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1114" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1115" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1116" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1119" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1120" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1121" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1122" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1123" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1126" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1127" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1128" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1129" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1130" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <rect id="SvgjsRect1062" width="11.666666666666668" height="50" x="0"
                                                    y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke-dasharray="3" fill="url(#SvgjsLinearGradient1058)"
                                                    class="apexcharts-xcrosshairs" y2="50" filter="none"
                                                    fill-opacity="0.9"></rect>
                                                <g id="SvgjsG1133" class="apexcharts-grid">
                                                    <g id="SvgjsG1134" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1137" x1="0" y1="0"
                                                            x2="150" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1138" x1="0" y1="8.333333333333334"
                                                            x2="150" y2="8.333333333333334" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1139" x1="0" y1="16.666666666666668"
                                                            x2="150" y2="16.666666666666668" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1140" x1="0" y1="25"
                                                            x2="150" y2="25" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1141" x1="0" y1="33.333333333333336"
                                                            x2="150" y2="33.333333333333336" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1142" x1="0" y1="41.66666666666667"
                                                            x2="150" y2="41.66666666666667" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1143" x1="0" y1="50.00000000000001"
                                                            x2="150" y2="50.00000000000001" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1135" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1145" x1="0" y1="50"
                                                        x2="150" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1144" x1="0" y1="1"
                                                        x2="0" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1065" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1066" class="apexcharts-series" rel="1"
                                                        seriesName="Desktops" data:realIndex="0">
                                                        <path id="SvgjsPath1076"
                                                            d="M2.5 50.001L2.5 41.66766666666666L12.166666666666668 41.66766666666666L12.166666666666668 50.001L2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001 "
                                                            fill="url(#SvgjsLinearGradient1070)" fill-opacity="1"
                                                            stroke="#fc185a" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 2.5 50.001 L 2.5 41.66766666666666 L 12.166666666666668 41.66766666666666 L 12.166666666666668 50.001 Z"
                                                            pathFrom="M 2.5 50.001 L 2.5 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 2.5 50.001 Z"
                                                            cy="41.666666666666664" cx="18.166666666666668" j="0"
                                                            val="10" barHeight="8.333333333333334"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1083"
                                                            d="M19.166666666666668 50.001L19.166666666666668 15.834333333333326L28.833333333333336 15.834333333333326L28.833333333333336 50.001L19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001 "
                                                            fill="url(#SvgjsLinearGradient1077)" fill-opacity="1"
                                                            stroke="#fc185a" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 19.166666666666668 50.001 L 19.166666666666668 15.834333333333328 L 28.833333333333336 15.834333333333328 L 28.833333333333336 50.001 Z"
                                                            pathFrom="M 19.166666666666668 50.001 L 19.166666666666668 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 19.166666666666668 50.001 Z"
                                                            cy="15.833333333333329" cx="34.833333333333336" j="1"
                                                            val="41" barHeight="34.16666666666667"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1090"
                                                            d="M35.833333333333336 50.001L35.833333333333336 25.001L45.5 25.001L45.5 50.001L35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001 "
                                                            fill="url(#SvgjsLinearGradient1084)" fill-opacity="1"
                                                            stroke="#fc185a" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 35.833333333333336 50.001 L 35.833333333333336 25.001 L 45.5 25.001 L 45.5 50.001 Z"
                                                            pathFrom="M 35.833333333333336 50.001 L 35.833333333333336 50.001 L 45.5 50.001 L 45.5 50.001 L 45.5 50.001 L 45.5 50.001 L 45.5 50.001 L 35.833333333333336 50.001 Z"
                                                            cy="25" cx="51.5" j="2" val="30"
                                                            barHeight="25" barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1097"
                                                            d="M52.5 50.001L52.5 7.500999999999998L62.16666666666667 7.500999999999998L62.16666666666667 50.001L52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001 "
                                                            fill="url(#SvgjsLinearGradient1091)" fill-opacity="1"
                                                            stroke="#fc185a" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 52.5 50.001 L 52.5 7.501 L 62.16666666666667 7.501 L 62.16666666666667 50.001 Z"
                                                            pathFrom="M 52.5 50.001 L 52.5 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 52.5 50.001 Z"
                                                            cy="7.5" cx="68.16666666666667" j="3" val="51"
                                                            barHeight="42.5" barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1104"
                                                            d="M69.16666666666667 50.001L69.16666666666667 29.167666666666666L78.83333333333334 29.167666666666666L78.83333333333334 50.001L69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001 "
                                                            fill="url(#SvgjsLinearGradient1098)" fill-opacity="1"
                                                            stroke="#fc185a" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 69.16666666666667 50.001 L 69.16666666666667 29.167666666666666 L 78.83333333333334 29.167666666666666 L 78.83333333333334 50.001 Z"
                                                            pathFrom="M 69.16666666666667 50.001 L 69.16666666666667 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 69.16666666666667 50.001 Z"
                                                            cy="29.166666666666664" cx="84.83333333333334" j="4"
                                                            val="25" barHeight="20.833333333333336"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1111"
                                                            d="M85.83333333333334 50.001L85.83333333333334 37.501L95.50000000000001 37.501L95.50000000000001 50.001L85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001 "
                                                            fill="url(#SvgjsLinearGradient1105)" fill-opacity="1"
                                                            stroke="#fc185a" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 85.83333333333334 50.001 L 85.83333333333334 37.501 L 95.50000000000001 37.501 L 95.50000000000001 50.001 Z"
                                                            pathFrom="M 85.83333333333334 50.001 L 85.83333333333334 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 85.83333333333334 50.001 Z"
                                                            cy="37.5" cx="101.50000000000001" j="5" val="15"
                                                            barHeight="12.5" barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1118"
                                                            d="M102.50000000000001 50.001L102.50000000000001 50.001L114.16666666666669 50.001L114.16666666666669 50.001L102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001 "
                                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 102.50000000000001 50.001 L 102.50000000000001 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 Z"
                                                            pathFrom="M 102.50000000000001 50.001 L 102.50000000000001 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 102.50000000000001 50.001 Z"
                                                            cy="50" cx="118.16666666666669" j="6" barHeight="0"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1125"
                                                            d="M119.16666666666669 50.001L119.16666666666669 50.001L130.83333333333334 50.001L130.83333333333334 50.001L119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001 "
                                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 119.16666666666669 50.001 L 119.16666666666669 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 Z"
                                                            pathFrom="M 119.16666666666669 50.001 L 119.16666666666669 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 119.16666666666669 50.001 Z"
                                                            cy="50" cx="134.83333333333334" j="7" barHeight="0"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1132"
                                                            d="M135.83333333333334 50.001L135.83333333333334 50.001L147.5 50.001L147.5 50.001L135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001 "
                                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 135.83333333333334 50.001 L 135.83333333333334 50.001 L 147.5 50.001 L 147.5 50.001 Z"
                                                            pathFrom="M 135.83333333333334 50.001 L 135.83333333333334 50.001 L 147.5 50.001 L 147.5 50.001 L 147.5 50.001 L 147.5 50.001 L 147.5 50.001 L 135.83333333333334 50.001 Z"
                                                            cy="50" cx="151.5" j="8" barHeight="0"
                                                            barWidth="11.666666666666668"></path>
                                                        <g id="SvgjsG1068" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG1075" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1082" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1089" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1096" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1103" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1110" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1117" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1124" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1131" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                        </g>
                                                        <g id="SvgjsG1069"
                                                            class="apexcharts-bar-shadows apexcharts-hidden-element-shown"
                                                            style="pointer-events: none"></g>
                                                    </g>
                                                    <g id="SvgjsG1067"
                                                        class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <g id="SvgjsG1136" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1146" x1="0" y1="0" x2="150"
                                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1147" x1="0" y1="0" x2="150"
                                                    y2="0" stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1148" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1149" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, 4)"></g>
                                                </g>
                                                <g id="SvgjsG1160"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1161"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1162"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(252, 24, 90);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
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
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="d-flex align-items-center flex-grow-1 gap-3">
                                    <div
                                        class="wh-48 d-flex align-items-center bg-success justify-content-center rounded-circle bg-opacity-10">
                                        <span class="material-icons-outlined text-success">people</span>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0">5563</h5>
                                        <p class="mb-0">Customers</p>
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
                                    <p class="mb-0">34.5%</p>
                                    <span class="material-icons-outlined">expand_less</span>
                                </div>
                                <div class="" id="chart3" style="min-height: 50px;">
                                    <div id="apexchartsgm0kry35i"
                                        class="apexcharts-canvas apexchartsgm0kry35i apexcharts-theme-light"
                                        style="width: 150px; height: 50px;"><svg id="SvgjsSvg1163" width="150"
                                            height="50" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <foreignObject x="0" y="0" width="150" height="50">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 25px;"></div>
                                            </foreignObject>
                                            <rect id="SvgjsRect1167" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                            <g id="SvgjsG1205" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1165" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1164">
                                                    <clipPath id="gridRectMaskgm0kry35i">
                                                        <rect id="SvgjsRect1169" width="156" height="52" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskgm0kry35i"></clipPath>
                                                    <clipPath id="nonForecastMaskgm0kry35i"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskgm0kry35i">
                                                        <rect id="SvgjsRect1170" width="154" height="54" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1175" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1176" stop-opacity="0.8"
                                                            stop-color="rgba(2,194,122,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1177" stop-opacity="0.1"
                                                            stop-color="rgba(2,194,122,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1178" stop-opacity="0.1"
                                                            stop-color="rgba(2,194,122,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1179" stop-opacity="0.8"
                                                            stop-color="rgba(2,194,122,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1168" x1="0" y1="0"
                                                    x2="0" y2="50" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                    height="50" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                    stroke-width="1"></line>
                                                <g id="SvgjsG1182" class="apexcharts-grid">
                                                    <g id="SvgjsG1183" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1186" x1="0" y1="0"
                                                            x2="150" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1187" x1="0" y1="8.333333333333334"
                                                            x2="150" y2="8.333333333333334" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1188" x1="0"
                                                            y1="16.666666666666668" x2="150"
                                                            y2="16.666666666666668" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1189" x1="0" y1="25"
                                                            x2="150" y2="25" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1190" x1="0"
                                                            y1="33.333333333333336" x2="150"
                                                            y2="33.333333333333336" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1191" x1="0" y1="41.66666666666667"
                                                            x2="150" y2="41.66666666666667" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1192" x1="0" y1="50.00000000000001"
                                                            x2="150" y2="50.00000000000001" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1184" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1194" x1="0" y1="50"
                                                        x2="150" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1193" x1="0" y1="1"
                                                        x2="0" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1171"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1172" class="apexcharts-series" seriesName="Desktops"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1180"
                                                            d="M0 50L0 46.666666666666664C10.5 46.666666666666664 19.5 15.833333333333329 30 15.833333333333329C40.5 15.833333333333329 49.5 20.833333333333332 60 20.833333333333332C70.5 20.833333333333332 79.5 7.5 90 7.5C100.5 7.5 109.5 29.166666666666664 120 29.166666666666664C130.5 29.166666666666664 139.5 43.333333333333336 150 43.333333333333336C150 43.333333333333336 150 43.333333333333336 150 50M150 43.333333333333336C150 43.333333333333336 150 43.333333333333336 150 43.333333333333336 "
                                                            fill="url(#SvgjsLinearGradient1175)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMaskgm0kry35i)"
                                                            pathTo="M 0 50 L 0 46.666666666666664C 10.5 46.666666666666664 19.5 15.833333333333329 30 15.833333333333329C 40.5 15.833333333333329 49.5 20.833333333333332 60 20.833333333333332C 70.5 20.833333333333332 79.5 7.5 90 7.5C 100.5 7.5 109.5 29.166666666666664 120 29.166666666666664C 130.5 29.166666666666664 139.5 43.333333333333336 150 43.333333333333336C 150 43.333333333333336 150 43.333333333333336 150 50M 150 43.333333333333336z"
                                                            pathFrom="M -1 50 L -1 50 L 30 50 L 60 50 L 90 50 L 120 50 L 150 50">
                                                        </path>
                                                        <path id="SvgjsPath1181"
                                                            d="M0 46.666666666666664C10.5 46.666666666666664 19.5 15.833333333333329 30 15.833333333333329C40.5 15.833333333333329 49.5 20.833333333333332 60 20.833333333333332C70.5 20.833333333333332 79.5 7.5 90 7.5C100.5 7.5 109.5 29.166666666666664 120 29.166666666666664C130.5 29.166666666666664 139.5 43.333333333333336 150 43.333333333333336C150 43.333333333333336 150 43.333333333333336 150 43.333333333333336 "
                                                            fill="none" fill-opacity="1" stroke="#02c27a"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMaskgm0kry35i)"
                                                            pathTo="M 0 46.666666666666664C 10.5 46.666666666666664 19.5 15.833333333333329 30 15.833333333333329C 40.5 15.833333333333329 49.5 20.833333333333332 60 20.833333333333332C 70.5 20.833333333333332 79.5 7.5 90 7.5C 100.5 7.5 109.5 29.166666666666664 120 29.166666666666664C 130.5 29.166666666666664 139.5 43.333333333333336 150 43.333333333333336"
                                                            pathFrom="M -1 50 L -1 50 L 30 50 L 60 50 L 90 50 L 120 50 L 150 50"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1173"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1209" r="0" cx="0"
                                                                    cy="0"
                                                                    class="apexcharts-marker w6hr2s74q no-pointer-events"
                                                                    stroke="#ffffff" fill="#02c27a" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1174" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <g id="SvgjsG1185" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1195" x1="0" y1="0"
                                                    x2="150" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1196" x1="0" y1="0"
                                                    x2="150" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1197" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1198" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1206"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1207"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1208"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(2, 194, 122);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
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
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="d-flex align-items-center flex-grow-1 gap-3">
                                    <div
                                        class="wh-48 d-flex align-items-center bg-orange-light justify-content-center rounded-circle">
                                        <span class="material-icons-outlined text-orange">face</span>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0">84.5K</h5>
                                        <p class="mb-0">Total Visits</p>
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
                                <div class="d-flex align-items-center align-self-end text-danger">
                                    <p class="mb-0">12.2%</p>
                                    <span class="material-icons-outlined">expand_more</span>
                                </div>
                                <div class="" id="chart4" style="min-height: 50px;">
                                    <div id="apexchartsbdn7lqa4"
                                        class="apexcharts-canvas apexchartsbdn7lqa4 apexcharts-theme-light"
                                        style="width: 150px; height: 50px;"><svg id="SvgjsSvg1210" width="150"
                                            height="50" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <foreignObject x="0" y="0" width="150" height="50">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 25px;"></div>
                                            </foreignObject>
                                            <g id="SvgjsG1316" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1212" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1211">
                                                    <linearGradient id="SvgjsLinearGradient1215" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1216" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1217" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1218" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskbdn7lqa4">
                                                        <rect id="SvgjsRect1220" width="156" height="52" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskbdn7lqa4"></clipPath>
                                                    <clipPath id="nonForecastMaskbdn7lqa4"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskbdn7lqa4">
                                                        <rect id="SvgjsRect1221" width="154" height="54" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1227" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1228" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1229" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1230" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1231" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1234" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1235" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1236" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1237" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1238" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1241" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1242" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1243" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1244" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1245" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1248" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1249" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1250" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1251" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1252" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1255" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1256" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1257" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1258" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1259" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1262" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1263" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1264" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1265" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1266" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1269" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1270" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1271" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1272" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1273" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1276" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1277" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1278" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1279" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1280" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1283" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1284" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1285" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1286" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1287" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <rect id="SvgjsRect1219" width="11.666666666666668" height="50"
                                                    x="0" y="0" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke-dasharray="3"
                                                    fill="url(#SvgjsLinearGradient1215)" class="apexcharts-xcrosshairs"
                                                    y2="50" filter="none" fill-opacity="0.9"></rect>
                                                <g id="SvgjsG1290" class="apexcharts-grid">
                                                    <g id="SvgjsG1291" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1294" x1="0" y1="0"
                                                            x2="150" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1295" x1="0" y1="8.333333333333334"
                                                            x2="150" y2="8.333333333333334" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1296" x1="0"
                                                            y1="16.666666666666668" x2="150"
                                                            y2="16.666666666666668" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1297" x1="0" y1="25"
                                                            x2="150" y2="25" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1298" x1="0"
                                                            y1="33.333333333333336" x2="150"
                                                            y2="33.333333333333336" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1299" x1="0" y1="41.66666666666667"
                                                            x2="150" y2="41.66666666666667" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1300" x1="0" y1="50.00000000000001"
                                                            x2="150" y2="50.00000000000001" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1292" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1302" x1="0" y1="50"
                                                        x2="150" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1301" x1="0" y1="1"
                                                        x2="0" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1222" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1223" class="apexcharts-series" rel="1"
                                                        seriesName="Desktops" data:realIndex="0">
                                                        <path id="SvgjsPath1233"
                                                            d="M2.5 50.001L2.5 38.334333333333326L12.166666666666668 38.334333333333326L12.166666666666668 50.001L2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001 "
                                                            fill="url(#SvgjsLinearGradient1227)" fill-opacity="1"
                                                            stroke="#fd7e14" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 2.5 50.001 L 2.5 38.334333333333326 L 12.166666666666668 38.334333333333326 L 12.166666666666668 50.001 Z"
                                                            pathFrom="M 2.5 50.001 L 2.5 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 2.5 50.001 Z"
                                                            cy="38.33333333333333" cx="18.166666666666668" j="0"
                                                            val="14" barHeight="11.666666666666668"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1240"
                                                            d="M19.166666666666668 50.001L19.166666666666668 15.834333333333326L28.833333333333336 15.834333333333326L28.833333333333336 50.001L19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001 "
                                                            fill="url(#SvgjsLinearGradient1234)" fill-opacity="1"
                                                            stroke="#fd7e14" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 19.166666666666668 50.001 L 19.166666666666668 15.834333333333328 L 28.833333333333336 15.834333333333328 L 28.833333333333336 50.001 Z"
                                                            pathFrom="M 19.166666666666668 50.001 L 19.166666666666668 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 19.166666666666668 50.001 Z"
                                                            cy="15.833333333333329" cx="34.833333333333336" j="1"
                                                            val="41" barHeight="34.16666666666667"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1247"
                                                            d="M35.833333333333336 50.001L35.833333333333336 20.834333333333333L45.5 20.834333333333333L45.5 50.001L35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001 "
                                                            fill="url(#SvgjsLinearGradient1241)" fill-opacity="1"
                                                            stroke="#fd7e14" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 35.833333333333336 50.001 L 35.833333333333336 20.834333333333333 L 45.5 20.834333333333333 L 45.5 50.001 Z"
                                                            pathFrom="M 35.833333333333336 50.001 L 35.833333333333336 50.001 L 45.5 50.001 L 45.5 50.001 L 45.5 50.001 L 45.5 50.001 L 45.5 50.001 L 35.833333333333336 50.001 Z"
                                                            cy="20.833333333333332" cx="51.5" j="2"
                                                            val="35" barHeight="29.166666666666668"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1254"
                                                            d="M52.5 50.001L52.5 7.500999999999998L62.16666666666667 7.500999999999998L62.16666666666667 50.001L52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001 "
                                                            fill="url(#SvgjsLinearGradient1248)" fill-opacity="1"
                                                            stroke="#fd7e14" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 52.5 50.001 L 52.5 7.501 L 62.16666666666667 7.501 L 62.16666666666667 50.001 Z"
                                                            pathFrom="M 52.5 50.001 L 52.5 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 52.5 50.001 Z"
                                                            cy="7.5" cx="68.16666666666667" j="3" val="51"
                                                            barHeight="42.5" barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1261"
                                                            d="M69.16666666666667 50.001L69.16666666666667 29.167666666666666L78.83333333333334 29.167666666666666L78.83333333333334 50.001L69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001 "
                                                            fill="url(#SvgjsLinearGradient1255)" fill-opacity="1"
                                                            stroke="#fd7e14" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 69.16666666666667 50.001 L 69.16666666666667 29.167666666666666 L 78.83333333333334 29.167666666666666 L 78.83333333333334 50.001 Z"
                                                            pathFrom="M 69.16666666666667 50.001 L 69.16666666666667 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 69.16666666666667 50.001 Z"
                                                            cy="29.166666666666664" cx="84.83333333333334" j="4"
                                                            val="25" barHeight="20.833333333333336"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1268"
                                                            d="M85.83333333333334 50.001L85.83333333333334 35.001L95.50000000000001 35.001L95.50000000000001 50.001L85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001 "
                                                            fill="url(#SvgjsLinearGradient1262)" fill-opacity="1"
                                                            stroke="#fd7e14" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 85.83333333333334 50.001 L 85.83333333333334 35.001 L 95.50000000000001 35.001 L 95.50000000000001 50.001 Z"
                                                            pathFrom="M 85.83333333333334 50.001 L 85.83333333333334 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 85.83333333333334 50.001 Z"
                                                            cy="35" cx="101.50000000000001" j="5"
                                                            val="18" barHeight="15"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1275"
                                                            d="M102.50000000000001 50.001L102.50000000000001 50.001L114.16666666666669 50.001L114.16666666666669 50.001L102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001 "
                                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 102.50000000000001 50.001 L 102.50000000000001 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 Z"
                                                            pathFrom="M 102.50000000000001 50.001 L 102.50000000000001 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 102.50000000000001 50.001 Z"
                                                            cy="50" cx="118.16666666666669" j="6"
                                                            barHeight="0" barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1282"
                                                            d="M119.16666666666669 50.001L119.16666666666669 50.001L130.83333333333334 50.001L130.83333333333334 50.001L119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001 "
                                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 119.16666666666669 50.001 L 119.16666666666669 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 Z"
                                                            pathFrom="M 119.16666666666669 50.001 L 119.16666666666669 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 119.16666666666669 50.001 Z"
                                                            cy="50" cx="134.83333333333334" j="7"
                                                            barHeight="0" barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1289"
                                                            d="M135.83333333333334 50.001L135.83333333333334 50.001L147.5 50.001L147.5 50.001L135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001 "
                                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 135.83333333333334 50.001 L 135.83333333333334 50.001 L 147.5 50.001 L 147.5 50.001 Z"
                                                            pathFrom="M 135.83333333333334 50.001 L 135.83333333333334 50.001 L 147.5 50.001 L 147.5 50.001 L 147.5 50.001 L 147.5 50.001 L 147.5 50.001 L 135.83333333333334 50.001 Z"
                                                            cy="50" cx="151.5" j="8" barHeight="0"
                                                            barWidth="11.666666666666668"></path>
                                                        <g id="SvgjsG1225" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG1232" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1239" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1246" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1253" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1260" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1267" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1274" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1281" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1288" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1226"
                                                            class="apexcharts-bar-shadows apexcharts-hidden-element-shown"
                                                            style="pointer-events: none"></g>
                                                    </g>
                                                    <g id="SvgjsG1224"
                                                        class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <g id="SvgjsG1293" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1303" x1="0" y1="0"
                                                    x2="150" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1304" x1="0" y1="0"
                                                    x2="150" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1305" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1306" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, 4)"></g>
                                                </g>
                                                <g id="SvgjsG1317"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1318"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1319"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(253, 126, 20);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
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
                    </div>
                </div>
            </div>

<<<<<<< HEAD
=======
>>>>>>> parent of 90e809a (Merge branch 'quickadminpanel_2024_05_21_12_41_09' into shakil-dev)

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
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="d-flex align-items-center flex-grow-1 gap-3">
                                    <div
                                        class="wh-48 d-flex align-items-center bg-danger justify-content-center rounded-circle bg-opacity-10">
                                        <span class="material-icons-outlined text-danger">attach_money</span>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0">$89,145</h5>
                                        <p class="mb-0">Total Income</p>
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
                                <div class="d-flex align-items-center align-self-end text-danger">
                                    <p class="mb-0">15.8%</p>
                                    <span class="material-icons-outlined">expand_more</span>
                                </div>
                                <div class="" id="chart2" style="min-height: 50px;">
                                    <div id="apexchartsgwfzr91j"
                                        class="apexcharts-canvas apexchartsgwfzr91j apexcharts-theme-light"
                                        style="width: 150px; height: 50px;"><svg id="SvgjsSvg1053" width="150"
                                            height="50" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="150" height="50">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 25px;"></div>
                                            </foreignObject>
                                            <g id="SvgjsG1159" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1055" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1054">
                                                    <linearGradient id="SvgjsLinearGradient1058" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1059" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1060" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1061" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskgwfzr91j">
                                                        <rect id="SvgjsRect1063" width="156" height="52" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskgwfzr91j"></clipPath>
                                                    <clipPath id="nonForecastMaskgwfzr91j"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskgwfzr91j">
                                                        <rect id="SvgjsRect1064" width="154" height="54" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1070" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1071" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1072" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1073" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1074" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1077" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1078" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1079" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1080" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1081" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1084" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1085" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1086" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1087" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1088" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1091" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1092" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1093" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1094" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1095" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1098" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1099" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1100" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1101" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1102" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1105" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1106" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1107" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1108" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1109" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1112" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1113" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1114" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1115" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1116" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1119" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1120" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1121" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1122" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1123" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1126" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1127" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1128" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1129" stop-opacity="0.1"
                                                            stop-color="rgba(252,24,90,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1130" stop-opacity="0.8"
                                                            stop-color="rgba(252,24,90,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <rect id="SvgjsRect1062" width="11.666666666666668" height="50" x="0"
                                                    y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke-dasharray="3" fill="url(#SvgjsLinearGradient1058)"
                                                    class="apexcharts-xcrosshairs" y2="50" filter="none"
                                                    fill-opacity="0.9"></rect>
                                                <g id="SvgjsG1133" class="apexcharts-grid">
                                                    <g id="SvgjsG1134" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1137" x1="0" y1="0"
                                                            x2="150" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1138" x1="0" y1="8.333333333333334"
                                                            x2="150" y2="8.333333333333334" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1139" x1="0" y1="16.666666666666668"
                                                            x2="150" y2="16.666666666666668" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1140" x1="0" y1="25"
                                                            x2="150" y2="25" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1141" x1="0" y1="33.333333333333336"
                                                            x2="150" y2="33.333333333333336" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1142" x1="0" y1="41.66666666666667"
                                                            x2="150" y2="41.66666666666667" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1143" x1="0" y1="50.00000000000001"
                                                            x2="150" y2="50.00000000000001" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1135" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1145" x1="0" y1="50"
                                                        x2="150" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1144" x1="0" y1="1"
                                                        x2="0" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1065" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1066" class="apexcharts-series" rel="1"
                                                        seriesName="Desktops" data:realIndex="0">
                                                        <path id="SvgjsPath1076"
                                                            d="M2.5 50.001L2.5 41.66766666666666L12.166666666666668 41.66766666666666L12.166666666666668 50.001L2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001 "
                                                            fill="url(#SvgjsLinearGradient1070)" fill-opacity="1"
                                                            stroke="#fc185a" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 2.5 50.001 L 2.5 41.66766666666666 L 12.166666666666668 41.66766666666666 L 12.166666666666668 50.001 Z"
                                                            pathFrom="M 2.5 50.001 L 2.5 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 2.5 50.001 Z"
                                                            cy="41.666666666666664" cx="18.166666666666668" j="0"
                                                            val="10" barHeight="8.333333333333334"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1083"
                                                            d="M19.166666666666668 50.001L19.166666666666668 15.834333333333326L28.833333333333336 15.834333333333326L28.833333333333336 50.001L19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001 "
                                                            fill="url(#SvgjsLinearGradient1077)" fill-opacity="1"
                                                            stroke="#fc185a" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 19.166666666666668 50.001 L 19.166666666666668 15.834333333333328 L 28.833333333333336 15.834333333333328 L 28.833333333333336 50.001 Z"
                                                            pathFrom="M 19.166666666666668 50.001 L 19.166666666666668 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 19.166666666666668 50.001 Z"
                                                            cy="15.833333333333329" cx="34.833333333333336" j="1"
                                                            val="41" barHeight="34.16666666666667"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1090"
                                                            d="M35.833333333333336 50.001L35.833333333333336 25.001L45.5 25.001L45.5 50.001L35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001 "
                                                            fill="url(#SvgjsLinearGradient1084)" fill-opacity="1"
                                                            stroke="#fc185a" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 35.833333333333336 50.001 L 35.833333333333336 25.001 L 45.5 25.001 L 45.5 50.001 Z"
                                                            pathFrom="M 35.833333333333336 50.001 L 35.833333333333336 50.001 L 45.5 50.001 L 45.5 50.001 L 45.5 50.001 L 45.5 50.001 L 45.5 50.001 L 35.833333333333336 50.001 Z"
                                                            cy="25" cx="51.5" j="2" val="30"
                                                            barHeight="25" barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1097"
                                                            d="M52.5 50.001L52.5 7.500999999999998L62.16666666666667 7.500999999999998L62.16666666666667 50.001L52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001 "
                                                            fill="url(#SvgjsLinearGradient1091)" fill-opacity="1"
                                                            stroke="#fc185a" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 52.5 50.001 L 52.5 7.501 L 62.16666666666667 7.501 L 62.16666666666667 50.001 Z"
                                                            pathFrom="M 52.5 50.001 L 52.5 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 52.5 50.001 Z"
                                                            cy="7.5" cx="68.16666666666667" j="3" val="51"
                                                            barHeight="42.5" barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1104"
                                                            d="M69.16666666666667 50.001L69.16666666666667 29.167666666666666L78.83333333333334 29.167666666666666L78.83333333333334 50.001L69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001 "
                                                            fill="url(#SvgjsLinearGradient1098)" fill-opacity="1"
                                                            stroke="#fc185a" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 69.16666666666667 50.001 L 69.16666666666667 29.167666666666666 L 78.83333333333334 29.167666666666666 L 78.83333333333334 50.001 Z"
                                                            pathFrom="M 69.16666666666667 50.001 L 69.16666666666667 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 69.16666666666667 50.001 Z"
                                                            cy="29.166666666666664" cx="84.83333333333334" j="4"
                                                            val="25" barHeight="20.833333333333336"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1111"
                                                            d="M85.83333333333334 50.001L85.83333333333334 37.501L95.50000000000001 37.501L95.50000000000001 50.001L85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001 "
                                                            fill="url(#SvgjsLinearGradient1105)" fill-opacity="1"
                                                            stroke="#fc185a" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 85.83333333333334 50.001 L 85.83333333333334 37.501 L 95.50000000000001 37.501 L 95.50000000000001 50.001 Z"
                                                            pathFrom="M 85.83333333333334 50.001 L 85.83333333333334 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 85.83333333333334 50.001 Z"
                                                            cy="37.5" cx="101.50000000000001" j="5" val="15"
                                                            barHeight="12.5" barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1118"
                                                            d="M102.50000000000001 50.001L102.50000000000001 50.001L114.16666666666669 50.001L114.16666666666669 50.001L102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001 "
                                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 102.50000000000001 50.001 L 102.50000000000001 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 Z"
                                                            pathFrom="M 102.50000000000001 50.001 L 102.50000000000001 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 102.50000000000001 50.001 Z"
                                                            cy="50" cx="118.16666666666669" j="6" barHeight="0"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1125"
                                                            d="M119.16666666666669 50.001L119.16666666666669 50.001L130.83333333333334 50.001L130.83333333333334 50.001L119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001 "
                                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 119.16666666666669 50.001 L 119.16666666666669 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 Z"
                                                            pathFrom="M 119.16666666666669 50.001 L 119.16666666666669 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 119.16666666666669 50.001 Z"
                                                            cy="50" cx="134.83333333333334" j="7" barHeight="0"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1132"
                                                            d="M135.83333333333334 50.001L135.83333333333334 50.001L147.5 50.001L147.5 50.001L135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001 "
                                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskgwfzr91j)"
                                                            pathTo="M 135.83333333333334 50.001 L 135.83333333333334 50.001 L 147.5 50.001 L 147.5 50.001 Z"
                                                            pathFrom="M 135.83333333333334 50.001 L 135.83333333333334 50.001 L 147.5 50.001 L 147.5 50.001 L 147.5 50.001 L 147.5 50.001 L 147.5 50.001 L 135.83333333333334 50.001 Z"
                                                            cy="50" cx="151.5" j="8" barHeight="0"
                                                            barWidth="11.666666666666668"></path>
                                                        <g id="SvgjsG1068" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG1075" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1082" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1089" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1096" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1103" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1110" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1117" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1124" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                            <g id="SvgjsG1131" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskgwfzr91j)"></g>
                                                        </g>
                                                        <g id="SvgjsG1069"
                                                            class="apexcharts-bar-shadows apexcharts-hidden-element-shown"
                                                            style="pointer-events: none"></g>
                                                    </g>
                                                    <g id="SvgjsG1067"
                                                        class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <g id="SvgjsG1136" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1146" x1="0" y1="0" x2="150"
                                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1147" x1="0" y1="0" x2="150"
                                                    y2="0" stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1148" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1149" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, 4)"></g>
                                                </g>
                                                <g id="SvgjsG1160"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1161"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1162"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(252, 24, 90);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
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
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="d-flex align-items-center flex-grow-1 gap-3">
                                    <div
                                        class="wh-48 d-flex align-items-center bg-success justify-content-center rounded-circle bg-opacity-10">
                                        <span class="material-icons-outlined text-success">people</span>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0">5563</h5>
                                        <p class="mb-0">Customers</p>
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
                                    <p class="mb-0">34.5%</p>
                                    <span class="material-icons-outlined">expand_less</span>
                                </div>
                                <div class="" id="chart3" style="min-height: 50px;">
                                    <div id="apexchartsgm0kry35i"
                                        class="apexcharts-canvas apexchartsgm0kry35i apexcharts-theme-light"
                                        style="width: 150px; height: 50px;"><svg id="SvgjsSvg1163" width="150"
                                            height="50" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <foreignObject x="0" y="0" width="150" height="50">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 25px;"></div>
                                            </foreignObject>
                                            <rect id="SvgjsRect1167" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                            <g id="SvgjsG1205" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1165" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1164">
                                                    <clipPath id="gridRectMaskgm0kry35i">
                                                        <rect id="SvgjsRect1169" width="156" height="52" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskgm0kry35i"></clipPath>
                                                    <clipPath id="nonForecastMaskgm0kry35i"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskgm0kry35i">
                                                        <rect id="SvgjsRect1170" width="154" height="54" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1175" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1176" stop-opacity="0.8"
                                                            stop-color="rgba(2,194,122,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1177" stop-opacity="0.1"
                                                            stop-color="rgba(2,194,122,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1178" stop-opacity="0.1"
                                                            stop-color="rgba(2,194,122,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1179" stop-opacity="0.8"
                                                            stop-color="rgba(2,194,122,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1168" x1="0" y1="0"
                                                    x2="0" y2="50" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                    height="50" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                    stroke-width="1"></line>
                                                <g id="SvgjsG1182" class="apexcharts-grid">
                                                    <g id="SvgjsG1183" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1186" x1="0" y1="0"
                                                            x2="150" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1187" x1="0" y1="8.333333333333334"
                                                            x2="150" y2="8.333333333333334" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1188" x1="0"
                                                            y1="16.666666666666668" x2="150"
                                                            y2="16.666666666666668" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1189" x1="0" y1="25"
                                                            x2="150" y2="25" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1190" x1="0"
                                                            y1="33.333333333333336" x2="150"
                                                            y2="33.333333333333336" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1191" x1="0" y1="41.66666666666667"
                                                            x2="150" y2="41.66666666666667" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1192" x1="0" y1="50.00000000000001"
                                                            x2="150" y2="50.00000000000001" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1184" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1194" x1="0" y1="50"
                                                        x2="150" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1193" x1="0" y1="1"
                                                        x2="0" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1171"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1172" class="apexcharts-series" seriesName="Desktops"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1180"
                                                            d="M0 50L0 46.666666666666664C10.5 46.666666666666664 19.5 15.833333333333329 30 15.833333333333329C40.5 15.833333333333329 49.5 20.833333333333332 60 20.833333333333332C70.5 20.833333333333332 79.5 7.5 90 7.5C100.5 7.5 109.5 29.166666666666664 120 29.166666666666664C130.5 29.166666666666664 139.5 43.333333333333336 150 43.333333333333336C150 43.333333333333336 150 43.333333333333336 150 50M150 43.333333333333336C150 43.333333333333336 150 43.333333333333336 150 43.333333333333336 "
                                                            fill="url(#SvgjsLinearGradient1175)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMaskgm0kry35i)"
                                                            pathTo="M 0 50 L 0 46.666666666666664C 10.5 46.666666666666664 19.5 15.833333333333329 30 15.833333333333329C 40.5 15.833333333333329 49.5 20.833333333333332 60 20.833333333333332C 70.5 20.833333333333332 79.5 7.5 90 7.5C 100.5 7.5 109.5 29.166666666666664 120 29.166666666666664C 130.5 29.166666666666664 139.5 43.333333333333336 150 43.333333333333336C 150 43.333333333333336 150 43.333333333333336 150 50M 150 43.333333333333336z"
                                                            pathFrom="M -1 50 L -1 50 L 30 50 L 60 50 L 90 50 L 120 50 L 150 50">
                                                        </path>
                                                        <path id="SvgjsPath1181"
                                                            d="M0 46.666666666666664C10.5 46.666666666666664 19.5 15.833333333333329 30 15.833333333333329C40.5 15.833333333333329 49.5 20.833333333333332 60 20.833333333333332C70.5 20.833333333333332 79.5 7.5 90 7.5C100.5 7.5 109.5 29.166666666666664 120 29.166666666666664C130.5 29.166666666666664 139.5 43.333333333333336 150 43.333333333333336C150 43.333333333333336 150 43.333333333333336 150 43.333333333333336 "
                                                            fill="none" fill-opacity="1" stroke="#02c27a"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMaskgm0kry35i)"
                                                            pathTo="M 0 46.666666666666664C 10.5 46.666666666666664 19.5 15.833333333333329 30 15.833333333333329C 40.5 15.833333333333329 49.5 20.833333333333332 60 20.833333333333332C 70.5 20.833333333333332 79.5 7.5 90 7.5C 100.5 7.5 109.5 29.166666666666664 120 29.166666666666664C 130.5 29.166666666666664 139.5 43.333333333333336 150 43.333333333333336"
                                                            pathFrom="M -1 50 L -1 50 L 30 50 L 60 50 L 90 50 L 120 50 L 150 50"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1173"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1209" r="0" cx="0"
                                                                    cy="0"
                                                                    class="apexcharts-marker w6hr2s74q no-pointer-events"
                                                                    stroke="#ffffff" fill="#02c27a" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1174" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <g id="SvgjsG1185" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1195" x1="0" y1="0"
                                                    x2="150" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1196" x1="0" y1="0"
                                                    x2="150" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1197" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1198" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1206"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1207"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1208"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(2, 194, 122);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
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
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="d-flex align-items-center flex-grow-1 gap-3">
                                    <div
                                        class="wh-48 d-flex align-items-center bg-orange-light justify-content-center rounded-circle">
                                        <span class="material-icons-outlined text-orange">face</span>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0">84.5K</h5>
                                        <p class="mb-0">Total Visits</p>
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
                                <div class="d-flex align-items-center align-self-end text-danger">
                                    <p class="mb-0">12.2%</p>
                                    <span class="material-icons-outlined">expand_more</span>
                                </div>
                                <div class="" id="chart4" style="min-height: 50px;">
                                    <div id="apexchartsbdn7lqa4"
                                        class="apexcharts-canvas apexchartsbdn7lqa4 apexcharts-theme-light"
                                        style="width: 150px; height: 50px;"><svg id="SvgjsSvg1210" width="150"
                                            height="50" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <foreignObject x="0" y="0" width="150" height="50">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 25px;"></div>
                                            </foreignObject>
                                            <g id="SvgjsG1316" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1212" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1211">
                                                    <linearGradient id="SvgjsLinearGradient1215" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1216" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1217" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1218" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskbdn7lqa4">
                                                        <rect id="SvgjsRect1220" width="156" height="52" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskbdn7lqa4"></clipPath>
                                                    <clipPath id="nonForecastMaskbdn7lqa4"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskbdn7lqa4">
                                                        <rect id="SvgjsRect1221" width="154" height="54" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1227" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1228" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1229" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1230" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1231" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1234" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1235" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1236" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1237" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1238" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1241" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1242" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1243" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1244" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1245" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1248" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1249" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1250" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1251" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1252" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1255" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1256" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1257" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1258" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1259" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1262" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1263" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1264" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1265" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1266" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1269" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1270" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1271" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1272" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1273" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1276" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1277" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1278" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1279" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1280" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1283" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1284" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1285" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1286" stop-opacity="0.1"
                                                            stop-color="rgba(253,126,20,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1287" stop-opacity="0.8"
                                                            stop-color="rgba(253,126,20,0.8)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <rect id="SvgjsRect1219" width="11.666666666666668" height="50"
                                                    x="0" y="0" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke-dasharray="3"
                                                    fill="url(#SvgjsLinearGradient1215)" class="apexcharts-xcrosshairs"
                                                    y2="50" filter="none" fill-opacity="0.9"></rect>
                                                <g id="SvgjsG1290" class="apexcharts-grid">
                                                    <g id="SvgjsG1291" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1294" x1="0" y1="0"
                                                            x2="150" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1295" x1="0" y1="8.333333333333334"
                                                            x2="150" y2="8.333333333333334" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1296" x1="0"
                                                            y1="16.666666666666668" x2="150"
                                                            y2="16.666666666666668" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1297" x1="0" y1="25"
                                                            x2="150" y2="25" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1298" x1="0"
                                                            y1="33.333333333333336" x2="150"
                                                            y2="33.333333333333336" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1299" x1="0" y1="41.66666666666667"
                                                            x2="150" y2="41.66666666666667" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1300" x1="0" y1="50.00000000000001"
                                                            x2="150" y2="50.00000000000001" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1292" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1302" x1="0" y1="50"
                                                        x2="150" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1301" x1="0" y1="1"
                                                        x2="0" y2="50" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1222" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1223" class="apexcharts-series" rel="1"
                                                        seriesName="Desktops" data:realIndex="0">
                                                        <path id="SvgjsPath1233"
                                                            d="M2.5 50.001L2.5 38.334333333333326L12.166666666666668 38.334333333333326L12.166666666666668 50.001L2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001C2.5 50.001 2.5 50.001 2.5 50.001 "
                                                            fill="url(#SvgjsLinearGradient1227)" fill-opacity="1"
                                                            stroke="#fd7e14" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 2.5 50.001 L 2.5 38.334333333333326 L 12.166666666666668 38.334333333333326 L 12.166666666666668 50.001 Z"
                                                            pathFrom="M 2.5 50.001 L 2.5 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 12.166666666666668 50.001 L 2.5 50.001 Z"
                                                            cy="38.33333333333333" cx="18.166666666666668" j="0"
                                                            val="14" barHeight="11.666666666666668"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1240"
                                                            d="M19.166666666666668 50.001L19.166666666666668 15.834333333333326L28.833333333333336 15.834333333333326L28.833333333333336 50.001L19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001C19.166666666666668 50.001 19.166666666666668 50.001 19.166666666666668 50.001 "
                                                            fill="url(#SvgjsLinearGradient1234)" fill-opacity="1"
                                                            stroke="#fd7e14" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 19.166666666666668 50.001 L 19.166666666666668 15.834333333333328 L 28.833333333333336 15.834333333333328 L 28.833333333333336 50.001 Z"
                                                            pathFrom="M 19.166666666666668 50.001 L 19.166666666666668 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 28.833333333333336 50.001 L 19.166666666666668 50.001 Z"
                                                            cy="15.833333333333329" cx="34.833333333333336" j="1"
                                                            val="41" barHeight="34.16666666666667"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1247"
                                                            d="M35.833333333333336 50.001L35.833333333333336 20.834333333333333L45.5 20.834333333333333L45.5 50.001L35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001C35.833333333333336 50.001 35.833333333333336 50.001 35.833333333333336 50.001 "
                                                            fill="url(#SvgjsLinearGradient1241)" fill-opacity="1"
                                                            stroke="#fd7e14" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 35.833333333333336 50.001 L 35.833333333333336 20.834333333333333 L 45.5 20.834333333333333 L 45.5 50.001 Z"
                                                            pathFrom="M 35.833333333333336 50.001 L 35.833333333333336 50.001 L 45.5 50.001 L 45.5 50.001 L 45.5 50.001 L 45.5 50.001 L 45.5 50.001 L 35.833333333333336 50.001 Z"
                                                            cy="20.833333333333332" cx="51.5" j="2"
                                                            val="35" barHeight="29.166666666666668"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1254"
                                                            d="M52.5 50.001L52.5 7.500999999999998L62.16666666666667 7.500999999999998L62.16666666666667 50.001L52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001C52.5 50.001 52.5 50.001 52.5 50.001 "
                                                            fill="url(#SvgjsLinearGradient1248)" fill-opacity="1"
                                                            stroke="#fd7e14" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 52.5 50.001 L 52.5 7.501 L 62.16666666666667 7.501 L 62.16666666666667 50.001 Z"
                                                            pathFrom="M 52.5 50.001 L 52.5 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 62.16666666666667 50.001 L 52.5 50.001 Z"
                                                            cy="7.5" cx="68.16666666666667" j="3" val="51"
                                                            barHeight="42.5" barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1261"
                                                            d="M69.16666666666667 50.001L69.16666666666667 29.167666666666666L78.83333333333334 29.167666666666666L78.83333333333334 50.001L69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001C69.16666666666667 50.001 69.16666666666667 50.001 69.16666666666667 50.001 "
                                                            fill="url(#SvgjsLinearGradient1255)" fill-opacity="1"
                                                            stroke="#fd7e14" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 69.16666666666667 50.001 L 69.16666666666667 29.167666666666666 L 78.83333333333334 29.167666666666666 L 78.83333333333334 50.001 Z"
                                                            pathFrom="M 69.16666666666667 50.001 L 69.16666666666667 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 78.83333333333334 50.001 L 69.16666666666667 50.001 Z"
                                                            cy="29.166666666666664" cx="84.83333333333334" j="4"
                                                            val="25" barHeight="20.833333333333336"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1268"
                                                            d="M85.83333333333334 50.001L85.83333333333334 35.001L95.50000000000001 35.001L95.50000000000001 50.001L85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001C85.83333333333334 50.001 85.83333333333334 50.001 85.83333333333334 50.001 "
                                                            fill="url(#SvgjsLinearGradient1262)" fill-opacity="1"
                                                            stroke="#fd7e14" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 85.83333333333334 50.001 L 85.83333333333334 35.001 L 95.50000000000001 35.001 L 95.50000000000001 50.001 Z"
                                                            pathFrom="M 85.83333333333334 50.001 L 85.83333333333334 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 95.50000000000001 50.001 L 85.83333333333334 50.001 Z"
                                                            cy="35" cx="101.50000000000001" j="5"
                                                            val="18" barHeight="15"
                                                            barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1275"
                                                            d="M102.50000000000001 50.001L102.50000000000001 50.001L114.16666666666669 50.001L114.16666666666669 50.001L102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001C102.50000000000001 50.001 102.50000000000001 50.001 102.50000000000001 50.001 "
                                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 102.50000000000001 50.001 L 102.50000000000001 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 Z"
                                                            pathFrom="M 102.50000000000001 50.001 L 102.50000000000001 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 114.16666666666669 50.001 L 102.50000000000001 50.001 Z"
                                                            cy="50" cx="118.16666666666669" j="6"
                                                            barHeight="0" barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1282"
                                                            d="M119.16666666666669 50.001L119.16666666666669 50.001L130.83333333333334 50.001L130.83333333333334 50.001L119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001C119.16666666666669 50.001 119.16666666666669 50.001 119.16666666666669 50.001 "
                                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 119.16666666666669 50.001 L 119.16666666666669 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 Z"
                                                            pathFrom="M 119.16666666666669 50.001 L 119.16666666666669 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 130.83333333333334 50.001 L 119.16666666666669 50.001 Z"
                                                            cy="50" cx="134.83333333333334" j="7"
                                                            barHeight="0" barWidth="11.666666666666668"></path>
                                                        <path id="SvgjsPath1289"
                                                            d="M135.83333333333334 50.001L135.83333333333334 50.001L147.5 50.001L147.5 50.001L135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001C135.83333333333334 50.001 135.83333333333334 50.001 135.83333333333334 50.001 "
                                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskbdn7lqa4)"
                                                            pathTo="M 135.83333333333334 50.001 L 135.83333333333334 50.001 L 147.5 50.001 L 147.5 50.001 Z"
                                                            pathFrom="M 135.83333333333334 50.001 L 135.83333333333334 50.001 L 147.5 50.001 L 147.5 50.001 L 147.5 50.001 L 147.5 50.001 L 147.5 50.001 L 135.83333333333334 50.001 Z"
                                                            cy="50" cx="151.5" j="8" barHeight="0"
                                                            barWidth="11.666666666666668"></path>
                                                        <g id="SvgjsG1225" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG1232" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1239" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1246" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1253" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1260" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1267" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1274" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1281" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                            <g id="SvgjsG1288" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskbdn7lqa4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1226"
                                                            class="apexcharts-bar-shadows apexcharts-hidden-element-shown"
                                                            style="pointer-events: none"></g>
                                                    </g>
                                                    <g id="SvgjsG1224"
                                                        class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <g id="SvgjsG1293" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1303" x1="0" y1="0"
                                                    x2="150" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1304" x1="0" y1="0"
                                                    x2="150" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1305" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1306" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, 4)"></g>
                                                </g>
                                                <g id="SvgjsG1317"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1318"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1319"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(253, 126, 20);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
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
                    </div>
                </div>
            </div> --}}


=======

>>>>>>> parent of 0a6c57d (QuickAdminPanel automatic commit)
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> parent of 0a6c57d (QuickAdminPanel automatic commit)
=======
>>>>>>> parent of 90e809a (Merge branch 'quickadminpanel_2024_05_21_12_41_09' into shakil-dev)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    {!! $chart1->renderJs() !!}{!! $chart2->renderJs() !!}{!! $chart3->renderJs() !!}{!! $chart4->renderJs() !!}{!! $chart5->renderJs() !!}{!! $chart6->renderJs() !!}{!! $chart7->renderJs() !!}{!! $chart8->renderJs() !!}{!! $chart9->renderJs() !!}
@endsection

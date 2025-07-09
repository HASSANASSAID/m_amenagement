@extends('layouts_backend.app')
@section('top-content')
    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <h1 class="page-title fw-medium fs-18 mb-0">Dashboard</h1>
        </div>
    </div>
    <!-- Page Header Close -->
@endsection
@section('content')
    <div class="row">
        <div class="col-xxl-9">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-end gap-2 justify-content-between flex-wrap mb-3">
                                        <div>
                                            <span class="avatar avatar-rounded bg-primary-transparent">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none"></rect>
                                                    <circle cx="128" cy="144" r="40" fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="24">
                                                    </circle>
                                                    <path d="M72,216a65,65,0,0,1,112,0" fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="24">
                                                    </path>
                                                    <path
                                                        d="M164,72.55a32,32,0,1,1,39.63,45.28c14.33,3.1,27.89,14.84,36.4,26.17"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="24"></path>
                                                    <path d="M16,144c8.51-11.33,22.06-23.07,36.4-26.17A32,32,0,1,1,92,72.55"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="24"></path>
                                                </svg>
                                            </span>
                                            <h4 class="mb-0 mt-3 fw-smeibold">{{$users}}</h4>
                                            <div class="fs-12 text-muted fw-medium">Total utilisateurs</div>
                                        </div>
                                        <div class="text-end">
                                            <span class="d-block text-success lh-1 fs-12 fw-medium"><i
                                                    class="ti ti-trending-up me-1 align-middle fs-16 d-inline-block"></i>12%</span>
                                        </div>
                                    </div>
                                    <div id="total-revenue" style="min-height: 40px;">
                                        <div id="apexcharts8ezrj515"
                                            class="apexcharts-canvas apexcharts8ezrj515 apexcharts-theme-"
                                            style="width: 436px; height: 40px;"><svg id="SvgjsSvg1858" width="436"
                                                height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)">
                                                <foreignObject x="0" y="0" width="436" height="40">
                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                        style="max-height: 20px;"></div>
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <g id="SvgjsG1865" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g id="SvgjsG1866" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g id="SvgjsG1899" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1860" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0.75)">
                                                    <defs id="SvgjsDefs1859">
                                                        <clipPath id="gridRectMask8ezrj515">
                                                            <rect id="SvgjsRect1862" width="436" height="38.5" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMask8ezrj515">
                                                            <rect id="SvgjsRect1863" width="441.5" height="44" x="-2.75"
                                                                y="-2.75" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask8ezrj515">
                                                            <rect id="SvgjsRect1864" width="436" height="38.5" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask8ezrj515"></clipPath>
                                                        <clipPath id="nonForecastMask8ezrj515"></clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1871" x1="0" y1="0" x2="0"
                                                            y2="1">
                                                            <stop id="SvgjsStop1872" stop-opacity="1"
                                                                stop-color="var(--primary04)" offset="0"></stop>
                                                            <stop id="SvgjsStop1873" stop-opacity="1"
                                                                stop-color="var(--primary02)" offset="0.6"></stop>
                                                            <stop id="SvgjsStop1874" stop-opacity="1"
                                                                stop-color="rgba(121, 97, 245, 0)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG1877" class="apexcharts-grid">
                                                        <g id="SvgjsG1878" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1881" x1="0" y1="0" x2="436" y2="0"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1882" x1="0" y1="19.25" x2="436" y2="19.25"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1883" x1="0" y1="38.5" x2="436" y2="38.5"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1879" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1885" x1="0" y1="38.5" x2="436" y2="38.5"
                                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                        <line id="SvgjsLine1884" x1="0" y1="1" x2="0" y2="38.5"
                                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1880" class="apexcharts-grid-borders"
                                                        style="display: none;"></g>
                                                    <g id="SvgjsG1867"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1868" class="apexcharts-series" zIndex="0"
                                                            seriesName="series-1" data:longestSeries="true" rel="1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1875"
                                                                d="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997C 436 18.479999999999997 436 18.479999999999997 436 38.5 L 0 38.5z"
                                                                fill="url(#SvgjsLinearGradient1871)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMask8ezrj515)"
                                                                pathTo="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997C 436 18.479999999999997 436 18.479999999999997 436 38.5 L 0 38.5z"
                                                                pathFrom="M 0 57.75 L 0 57.75 L 54.5 57.75 L 109 57.75 L 163.5 57.75 L 218 57.75 L 272.5 57.75 L 327 57.75 L 381.5 57.75 L 436 57.75z">
                                                            </path>
                                                            <path id="SvgjsPath1876"
                                                                d="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997"
                                                                fill="none" fill-opacity="1" stroke="var(--primary-color)"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="1.5"
                                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMask8ezrj515)"
                                                                pathTo="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997"
                                                                pathFrom="M 0 57.75 L 0 57.75 L 54.5 57.75 L 109 57.75 L 163.5 57.75 L 218 57.75 L 272.5 57.75 L 327 57.75 L 381.5 57.75 L 436 57.75"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1869"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <path id="SvgjsPath1903" d="M 0, 0 
                   m -0, 0 
                   a 0,0 0 1,0 0,0 
                   a 0,0 0 1,0 -0,0" fill="var(--primary-color)" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="0" cy="0" shape="circle"
                                                                        class="apexcharts-marker wqv0u6hf no-pointer-events"
                                                                        default-marker-size="0"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1870" class="apexcharts-datalabels" data:realIndex="0">
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1886" x1="0" y1="0" x2="436" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1887" x1="0" y1="0" x2="436" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1888" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g id="SvgjsG1889" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1900" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1901" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1902" class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                                    style="order: 1;"><span class="apexcharts-tooltip-marker"
                                                        style="background-color: var(--primary-color);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Montserrat, sans-serif; font-size: 12px;">
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
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-end gap-2 justify-content-between flex-wrap mb-3">
                                        <div>
                                            <span class="avatar avatar-rounded bg-info-transparent">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none"></rect>
                                                    <line x1="80" y1="100" x2="176" y2="100" fill="none"
                                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></line>
                                                    <line x1="80" y1="140" x2="176" y2="140" fill="none"
                                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></line>
                                                    <path
                                                        d="M32,208V56a8,8,0,0,1,8-8H216a8,8,0,0,1,8,8V208l-32-16-32,16-32-16L96,208,64,192Z"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="24"></path>
                                                </svg>
                                            </span>
                                            <h4 class="mb-0 mt-3 fw-smeibold">1059</h4>
                                            <div class="fs-12 text-muted fw-medium">Total contacts</div>
                                        </div>
                                        <div class="text-end">
                                            <span class="d-block text-success lh-1 fs-12 fw-medium"><i
                                                    class="ti ti-trending-up me-1 align-middle fs-16 d-inline-block"></i>11%</span>
                                            
                                        </div>
                                    </div>
                                    <div id="total-transactions" style="min-height: 40px;">
                                        <div id="apexchartsgmpuvu5l"
                                            class="apexcharts-canvas apexchartsgmpuvu5l apexcharts-theme-"
                                            style="width: 436px; height: 40px;"><svg id="SvgjsSvg1928" width="436"
                                                height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)">
                                                <foreignObject x="0" y="0" width="436" height="40">
                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                        style="max-height: 20px;"></div>
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <g id="SvgjsG1935" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g id="SvgjsG1936" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g id="SvgjsG1969" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1930" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0.75)">
                                                    <defs id="SvgjsDefs1929">
                                                        <clipPath id="gridRectMaskgmpuvu5l">
                                                            <rect id="SvgjsRect1932" width="436" height="38.5" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMaskgmpuvu5l">
                                                            <rect id="SvgjsRect1933" width="441.5" height="44" x="-2.75"
                                                                y="-2.75" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskgmpuvu5l">
                                                            <rect id="SvgjsRect1934" width="436" height="38.5" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskgmpuvu5l"></clipPath>
                                                        <clipPath id="nonForecastMaskgmpuvu5l"></clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1941" x1="0" y1="0" x2="0"
                                                            y2="1">
                                                            <stop id="SvgjsStop1942" stop-opacity="1"
                                                                stop-color="rgba(40, 200, 235, 0.4)" offset="0"></stop>
                                                            <stop id="SvgjsStop1943" stop-opacity="1"
                                                                stop-color="rgba(40, 200, 235, 0.2)" offset="0.6"></stop>
                                                            <stop id="SvgjsStop1944" stop-opacity="1"
                                                                stop-color="rgba(40, 200, 235, 0)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG1947" class="apexcharts-grid">
                                                        <g id="SvgjsG1948" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1951" x1="0" y1="0" x2="436" y2="0"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1952" x1="0" y1="19.25" x2="436" y2="19.25"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1953" x1="0" y1="38.5" x2="436" y2="38.5"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1949" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1955" x1="0" y1="38.5" x2="436" y2="38.5"
                                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                        <line id="SvgjsLine1954" x1="0" y1="1" x2="0" y2="38.5"
                                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1950" class="apexcharts-grid-borders"
                                                        style="display: none;"></g>
                                                    <g id="SvgjsG1937"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1938" class="apexcharts-series" zIndex="0"
                                                            seriesName="series-1" data:longestSeries="true" rel="1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1945"
                                                                d="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997C 436 18.479999999999997 436 18.479999999999997 436 38.5 L 0 38.5z"
                                                                fill="url(#SvgjsLinearGradient1941)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskgmpuvu5l)"
                                                                pathTo="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997C 436 18.479999999999997 436 18.479999999999997 436 38.5 L 0 38.5z"
                                                                pathFrom="M 0 57.75 L 0 57.75 L 54.5 57.75 L 109 57.75 L 163.5 57.75 L 218 57.75 L 272.5 57.75 L 327 57.75 L 381.5 57.75 L 436 57.75z">
                                                            </path>
                                                            <path id="SvgjsPath1946"
                                                                d="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997"
                                                                fill="none" fill-opacity="1" stroke="#28c8eb"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="1.5"
                                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskgmpuvu5l)"
                                                                pathTo="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997"
                                                                pathFrom="M 0 57.75 L 0 57.75 L 54.5 57.75 L 109 57.75 L 163.5 57.75 L 218 57.75 L 272.5 57.75 L 327 57.75 L 381.5 57.75 L 436 57.75"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1939"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <path id="SvgjsPath1973" d="M 0, 0 
               m -0, 0 
               a 0,0 0 1,0 0,0 
               a 0,0 0 1,0 -0,0" fill="#28c8eb" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="0" cy="0" shape="circle"
                                                                        class="apexcharts-marker wsri84e0e no-pointer-events"
                                                                        default-marker-size="0"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1940" class="apexcharts-datalabels" data:realIndex="0">
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1956" x1="0" y1="0" x2="436" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1957" x1="0" y1="0" x2="436" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1958" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g id="SvgjsG1959" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1970" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1971" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1972" class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                                    style="order: 1;"><span class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(40, 200, 235);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Montserrat, sans-serif; font-size: 12px;">
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
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-end gap-2 justify-content-between flex-wrap mb-3">
                                        <div>
                                            <span class="avatar avatar-rounded bg-success-transparent">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none"></rect>
                                                    <circle cx="128" cy="144" r="40" fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="24">
                                                    </circle>
                                                    <path d="M72,216a65,65,0,0,1,112,0" fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="24">
                                                    </path>
                                                    <path
                                                        d="M164,72.55a32,32,0,1,1,39.63,45.28c14.33,3.1,27.89,14.84,36.4,26.17"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="24"></path>
                                                    <path d="M16,144c8.51-11.33,22.06-23.07,36.4-26.17A32,32,0,1,1,92,72.55"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="24"></path>
                                                </svg>
                                            </span>
                                            <h4 class="mb-0 mt-3 fw-smeibold">15432</h4>
                                            <div class="fs-12 text-muted fw-medium">Total Visiteurs</div>
                                        </div>
                                        <div class="text-end">
                                            <span class="d-block text-danger lh-1 fs-12 fw-medium"><i
                                                    class="ti ti-trending-down me-1 align-middle fs-16 d-inline-block"></i>5%</span>
                                            
                                        </div>
                                    </div>
                                    <div id="total-customers" style="min-height: 40px;" class="">
                                        <div id="apexchartsb6xqols8l"
                                            class="apexcharts-canvas apexchartsb6xqols8l apexcharts-theme-"
                                            style="width: 436px; height: 40px;"><svg id="SvgjsSvg1881" width="436"
                                                height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)">
                                                <foreignObject x="0" y="0" width="436" height="40">
                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                        style="max-height: 20px;"></div>
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <g id="SvgjsG1888" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g id="SvgjsG1889" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g id="SvgjsG1922" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1883" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0.75)">
                                                    <defs id="SvgjsDefs1882">
                                                        <clipPath id="gridRectMaskb6xqols8l">
                                                            <rect id="SvgjsRect1885" width="436" height="38.5" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMaskb6xqols8l">
                                                            <rect id="SvgjsRect1886" width="441.5" height="44" x="-2.75"
                                                                y="-2.75" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskb6xqols8l">
                                                            <rect id="SvgjsRect1887" width="436" height="38.5" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskb6xqols8l"></clipPath>
                                                        <clipPath id="nonForecastMaskb6xqols8l"></clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1894" x1="0" y1="0" x2="0"
                                                            y2="1">
                                                            <stop id="SvgjsStop1895" stop-opacity="1"
                                                                stop-color="rgba(133, 204, 65, 0.4)" offset="0"></stop>
                                                            <stop id="SvgjsStop1896" stop-opacity="1"
                                                                stop-color="rgba(133, 204, 65, 0.2)" offset="0.6"></stop>
                                                            <stop id="SvgjsStop1897" stop-opacity="1"
                                                                stop-color="rgba(133, 204, 65, 0)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG1900" class="apexcharts-grid">
                                                        <g id="SvgjsG1901" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1904" x1="0" y1="0" x2="436" y2="0"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1905" x1="0" y1="19.25" x2="436" y2="19.25"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1906" x1="0" y1="38.5" x2="436" y2="38.5"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1902" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1908" x1="0" y1="38.5" x2="436" y2="38.5"
                                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                        <line id="SvgjsLine1907" x1="0" y1="1" x2="0" y2="38.5"
                                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1903" class="apexcharts-grid-borders"
                                                        style="display: none;"></g>
                                                    <g id="SvgjsG1890"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1891" class="apexcharts-series" zIndex="0"
                                                            seriesName="series-1" data:longestSeries="true" rel="1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1898"
                                                                d="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997C 436 18.479999999999997 436 18.479999999999997 436 38.5 L 0 38.5z"
                                                                fill="url(#SvgjsLinearGradient1894)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskb6xqols8l)"
                                                                pathTo="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997C 436 18.479999999999997 436 18.479999999999997 436 38.5 L 0 38.5z"
                                                                pathFrom="M 0 57.75 L 0 57.75 L 54.5 57.75 L 109 57.75 L 163.5 57.75 L 218 57.75 L 272.5 57.75 L 327 57.75 L 381.5 57.75 L 436 57.75z">
                                                            </path>
                                                            <path id="SvgjsPath1899"
                                                                d="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997"
                                                                fill="none" fill-opacity="1" stroke="#85cc41"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="1.5"
                                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskb6xqols8l)"
                                                                pathTo="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997"
                                                                pathFrom="M 0 57.75 L 0 57.75 L 54.5 57.75 L 109 57.75 L 163.5 57.75 L 218 57.75 L 272.5 57.75 L 327 57.75 L 381.5 57.75 L 436 57.75"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1892"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <path id="SvgjsPath1926" d="M 0, 0 
               m -0, 0 
               a 0,0 0 1,0 0,0 
               a 0,0 0 1,0 -0,0" fill="#85cc41" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="0" cy="0" shape="circle"
                                                                        class="apexcharts-marker wtehbvf4l no-pointer-events"
                                                                        default-marker-size="0"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1893" class="apexcharts-datalabels" data:realIndex="0">
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1909" x1="0" y1="0" x2="436" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1910" x1="0" y1="0" x2="436" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1911" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g id="SvgjsG1912" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1923" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1924" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1925" class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                                    style="order: 1;"><span class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(133, 204, 65);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Montserrat, sans-serif; font-size: 12px;">
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
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-end gap-2 justify-content-between flex-wrap mb-3">
                                        <div>
                                            <span class="avatar avatar-rounded bg-secondary-transparent">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none"></rect>
                                                    <polyline points="32.7 76.92 128 129.08 223.3 76.92" fill="none"
                                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></polyline>
                                                    <line x1="128" y1="129.09" x2="128" y2="231.97" fill="none"
                                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></line>
                                                    <path
                                                        d="M219.84,182.84l-88,48.18a8,8,0,0,1-7.68,0l-88-48.18a8,8,0,0,1-4.16-7V80.18a8,8,0,0,1,4.16-7l88-48.18a8,8,0,0,1,7.68,0l88,48.18a8,8,0,0,1,4.16,7v95.64A8,8,0,0,1,219.84,182.84Z"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="24"></path>
                                                    <polyline points="81.56 48.31 176 100 176 152" fill="none"
                                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></polyline>
                                                </svg>
                                            </span>
                                            <h4 class="mb-0 mt-3 fw-smeibold">{{ $services }}</h4>
                                            <div class="fs-12 text-muted fw-medium">Total Services</div>
                                        </div>
                                        <div class="text-end">
                                            <span class="d-block text-success lh-1 fs-12 fw-medium"><i
                                                    class="ti ti-trending-up me-1 align-middle fs-16 d-inline-block"></i>6.5%</span>
                                            
                                        </div>
                                    </div>
                                    <div id="total-products" style="min-height: 40px;">
                                        <div id="apexchartsf6bpl3aa"
                                            class="apexcharts-canvas apexchartsf6bpl3aa apexcharts-theme-"
                                            style="width: 436px; height: 40px;"><svg id="SvgjsSvg1975" width="436"
                                                height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)">
                                                <foreignObject x="0" y="0" width="436" height="40">
                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                        style="max-height: 20px;"></div>
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <g id="SvgjsG1982" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g id="SvgjsG1983" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g id="SvgjsG2016" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1977" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0.75)">
                                                    <defs id="SvgjsDefs1976">
                                                        <clipPath id="gridRectMaskf6bpl3aa">
                                                            <rect id="SvgjsRect1979" width="436" height="38.5" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMaskf6bpl3aa">
                                                            <rect id="SvgjsRect1980" width="441.5" height="44" x="-2.75"
                                                                y="-2.75" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskf6bpl3aa">
                                                            <rect id="SvgjsRect1981" width="436" height="38.5" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskf6bpl3aa"></clipPath>
                                                        <clipPath id="nonForecastMaskf6bpl3aa"></clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1988" x1="0" y1="0" x2="0"
                                                            y2="1">
                                                            <stop id="SvgjsStop1989" stop-opacity="1"
                                                                stop-color="rgba(244, 110, 244, 0.4)" offset="0"></stop>
                                                            <stop id="SvgjsStop1990" stop-opacity="1"
                                                                stop-color="rgba(244, 110, 244, 0.2)" offset="0.6"></stop>
                                                            <stop id="SvgjsStop1991" stop-opacity="1"
                                                                stop-color="rgba(244, 110, 244, 0)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG1994" class="apexcharts-grid">
                                                        <g id="SvgjsG1995" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1998" x1="0" y1="0" x2="436" y2="0"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1999" x1="0" y1="19.25" x2="436" y2="19.25"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2000" x1="0" y1="38.5" x2="436" y2="38.5"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1996" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine2002" x1="0" y1="38.5" x2="436" y2="38.5"
                                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                        <line id="SvgjsLine2001" x1="0" y1="1" x2="0" y2="38.5"
                                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1997" class="apexcharts-grid-borders"
                                                        style="display: none;"></g>
                                                    <g id="SvgjsG1984"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1985" class="apexcharts-series" zIndex="0"
                                                            seriesName="series-1" data:longestSeries="true" rel="1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1992"
                                                                d="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997C 436 18.479999999999997 436 18.479999999999997 436 38.5 L 0 38.5z"
                                                                fill="url(#SvgjsLinearGradient1988)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskf6bpl3aa)"
                                                                pathTo="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997C 436 18.479999999999997 436 18.479999999999997 436 38.5 L 0 38.5z"
                                                                pathFrom="M 0 57.75 L 0 57.75 L 54.5 57.75 L 109 57.75 L 163.5 57.75 L 218 57.75 L 272.5 57.75 L 327 57.75 L 381.5 57.75 L 436 57.75z">
                                                            </path>
                                                            <path id="SvgjsPath1993"
                                                                d="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997"
                                                                fill="none" fill-opacity="1" stroke="#f46ef4"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="1.5"
                                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskf6bpl3aa)"
                                                                pathTo="M 0 20.020000000000003C 19.075 20.020000000000003 35.425 15.399999999999999 54.5 15.399999999999999C 73.575 15.399999999999999 89.925 26.95 109 26.95C 128.075 26.95 144.425 1.9249999999999972 163.5 1.9249999999999972C 182.575 1.9249999999999972 198.925 17.325000000000003 218 17.325000000000003C 237.075 17.325000000000003 253.425 14.630000000000003 272.5 14.630000000000003C 291.575 14.630000000000003 307.925 24.255000000000003 327 24.255000000000003C 346.075 24.255000000000003 362.425 0.769999999999996 381.5 0.769999999999996C 400.575 0.769999999999996 416.925 18.479999999999997 436 18.479999999999997"
                                                                pathFrom="M 0 57.75 L 0 57.75 L 54.5 57.75 L 109 57.75 L 163.5 57.75 L 218 57.75 L 272.5 57.75 L 327 57.75 L 381.5 57.75 L 436 57.75"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1986"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <path id="SvgjsPath2020" d="M 0, 0 
               m -0, 0 
               a 0,0 0 1,0 0,0 
               a 0,0 0 1,0 -0,0" fill="#f46ef4" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="0" cy="0" shape="circle"
                                                                        class="apexcharts-marker wmnciyxsi no-pointer-events"
                                                                        default-marker-size="0"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1987" class="apexcharts-datalabels" data:realIndex="0">
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine2003" x1="0" y1="0" x2="436" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2004" x1="0" y1="0" x2="436" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG2005" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g id="SvgjsG2006" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG2017" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG2018" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG2019" class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                                    style="order: 1;"><span class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(244, 110, 244);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Montserrat, sans-serif; font-size: 12px;">
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
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
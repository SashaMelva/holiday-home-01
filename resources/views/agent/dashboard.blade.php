@extends('layouts.agent')

@section('content')
    <section>
        <div class="container vstack gap-4">
            <!-- Title START -->
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-4 mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-house-door" viewBox="0 0 16 16">
                            <path
                                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                        </svg>
                        Главная
                    </h1>
                </div>
            </div>
            <!-- Title END -->

            <!-- Counter START -->
            <div class="row g-4">
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body border">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-xl bg-success rounded-3 text-white">
                                <i class="bi bi-journals"></i>
                            </div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4>56</h4>
                                <span>Total Listings</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body border">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-xl bg-info rounded-3 text-white">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4>$2,55,365</h4>
                                <span>Earning</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body border">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-xl bg-warning rounded-3 text-white">
                                <i class="bi bi-bar-chart-line-fill"></i>
                            </div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4>15K</h4>
                                <span>Visitors</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body border">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-xl bg-primary rounded-3 text-white">
                                <i class="bi bi-star"></i>
                            </div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4>12K</h4>
                                <span>Total Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter END -->

            <!-- Graph START -->
            <div class="row g-4">
                <!-- Booking Chart START -->
                <div class="col-lg-7 col-xl-8">
                    <!-- Chart START -->
                    <div class="card border h-100">
                        <!-- Card header -->
                        <div class="card-header border-bottom">
                            <h5 class="card-header-title">Booking stats</h5>
                        </div>
                        <!-- Card body -->
                        <div class="card-body" style="position: relative;">
                            <!-- Apex chart -->
                            <div id="apexChartTrafficStats" class="mt-2" style="min-height: 335px;">
                                <div id="apexcharts1o9rdl87"
                                     class="apexcharts-canvas apexcharts1o9rdl87 apexcharts-theme-light"
                                     style="width: 689px; height: 320px;">
                                    <svg id="SvgjsSvg1260" width="689" height="320" xmlns="http://www.w3.org/2000/svg"
                                         version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable"
                                         xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                         style="background: transparent;">
                                        <g id="SvgjsG1262" class="apexcharts-inner apexcharts-graphical"
                                           transform="translate(53.5, 30)">
                                            <defs id="SvgjsDefs1261">
                                                <clipPath id="gridRectMask1o9rdl87">
                                                    <rect id="SvgjsRect1268" width="621.8500003814697" height="257.966"
                                                          x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                          stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask1o9rdl87"></clipPath>
                                                <clipPath id="nonForecastMask1o9rdl87"></clipPath>
                                                <clipPath id="gridRectMarkerMask1o9rdl87">
                                                    <rect id="SvgjsRect1269" width="617.8500003814697" height="257.966"
                                                          x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                          stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1274" x1="0" y1="0" x2="0"
                                                                y2="1">
                                                    <stop id="SvgjsStop1275" stop-opacity="0.65"
                                                          stop-color="rgba(33,99,232,0.65)" offset="0"></stop>
                                                    <stop id="SvgjsStop1276" stop-opacity="0.5"
                                                          stop-color="rgba(144,177,244,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1277" stop-opacity="0.5"
                                                          stop-color="rgba(144,177,244,0.5)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1267" x1="0" y1="0" x2="0" y2="253.966" stroke="#b6b6b6"
                                                  stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                  width="1" height="253.966" fill="#b1b9c4" filter="none"
                                                  fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG1280" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1281" class="apexcharts-xaxis-texts-g"
                                                   transform="translate(0, -4)">
                                                    <text id="SvgjsText1283" font-family="Helvetica, Arial, sans-serif"
                                                          x="0" y="282.966" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1284">Jan</tspan>
                                                        <title>Jan</title></text>
                                                    <text id="SvgjsText1286" font-family="Helvetica, Arial, sans-serif"
                                                          x="55.80454548922452" y="282.966" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1287">Feb</tspan>
                                                        <title>Feb</title></text>
                                                    <text id="SvgjsText1289" font-family="Helvetica, Arial, sans-serif"
                                                          x="111.60909097844906" y="282.966" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1290">Mar</tspan>
                                                        <title>Mar</title></text>
                                                    <text id="SvgjsText1292" font-family="Helvetica, Arial, sans-serif"
                                                          x="167.4136364676736" y="282.966" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1293">Apr</tspan>
                                                        <title>Apr</title></text>
                                                    <text id="SvgjsText1295" font-family="Helvetica, Arial, sans-serif"
                                                          x="223.2181819568981" y="282.966" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1296">May</tspan>
                                                        <title>May</title></text>
                                                    <text id="SvgjsText1298" font-family="Helvetica, Arial, sans-serif"
                                                          x="279.0227274461226" y="282.966" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1299">Jun</tspan>
                                                        <title>Jun</title></text>
                                                    <text id="SvgjsText1301" font-family="Helvetica, Arial, sans-serif"
                                                          x="334.82727293534714" y="282.966" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1302">Jul</tspan>
                                                        <title>Jul</title></text>
                                                    <text id="SvgjsText1304" font-family="Helvetica, Arial, sans-serif"
                                                          x="390.6318184245717" y="282.966" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1305">Aug</tspan>
                                                        <title>Aug</title></text>
                                                    <text id="SvgjsText1307" font-family="Helvetica, Arial, sans-serif"
                                                          x="446.43636391379624" y="282.966" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1308">Sep</tspan>
                                                        <title>Sep</title></text>
                                                    <text id="SvgjsText1310" font-family="Helvetica, Arial, sans-serif"
                                                          x="502.2409094030208" y="282.966" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1311">Oct</tspan>
                                                        <title>Oct</title></text>
                                                    <text id="SvgjsText1313" font-family="Helvetica, Arial, sans-serif"
                                                          x="558.0454548922454" y="282.966" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1314">Nov</tspan>
                                                        <title>Nov</title></text>
                                                    <text id="SvgjsText1316" font-family="Helvetica, Arial, sans-serif"
                                                          x="613.85000038147" y="282.966" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1317">Dec</tspan>
                                                        <title>Dec</title></text>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1332" class="apexcharts-grid">
                                                <g id="SvgjsG1333" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1347" x1="0" y1="0" x2="613.8500003814697" y2="0"
                                                          stroke="#e0e0e0" stroke-dasharray="4"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1348" x1="0" y1="50.7932" x2="613.8500003814697"
                                                          y2="50.7932" stroke="#e0e0e0" stroke-dasharray="4"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1349" x1="0" y1="101.5864" x2="613.8500003814697"
                                                          y2="101.5864" stroke="#e0e0e0" stroke-dasharray="4"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1350" x1="0" y1="152.37959999999998"
                                                          x2="613.8500003814697" y2="152.37959999999998"
                                                          stroke="#e0e0e0" stroke-dasharray="4"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1351" x1="0" y1="203.1728" x2="613.8500003814697"
                                                          y2="203.1728" stroke="#e0e0e0" stroke-dasharray="4"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1352" x1="0" y1="253.966" x2="613.8500003814697"
                                                          y2="253.966" stroke="#e0e0e0" stroke-dasharray="4"
                                                          class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1334" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1335" x1="0" y1="254.966" x2="0" y2="260.966"
                                                      stroke="#e0e0e0" stroke-dasharray="0"
                                                      class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1336" x1="55.80454548922452" y1="254.966"
                                                      x2="55.80454548922452" y2="260.966" stroke="#e0e0e0"
                                                      stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1337" x1="111.60909097844905" y1="254.966"
                                                      x2="111.60909097844905" y2="260.966" stroke="#e0e0e0"
                                                      stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1338" x1="167.41363646767357" y1="254.966"
                                                      x2="167.41363646767357" y2="260.966" stroke="#e0e0e0"
                                                      stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1339" x1="223.2181819568981" y1="254.966"
                                                      x2="223.2181819568981" y2="260.966" stroke="#e0e0e0"
                                                      stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1340" x1="279.02272744612264" y1="254.966"
                                                      x2="279.02272744612264" y2="260.966" stroke="#e0e0e0"
                                                      stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1341" x1="334.8272729353472" y1="254.966"
                                                      x2="334.8272729353472" y2="260.966" stroke="#e0e0e0"
                                                      stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1342" x1="390.63181842457175" y1="254.966"
                                                      x2="390.63181842457175" y2="260.966" stroke="#e0e0e0"
                                                      stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1343" x1="446.4363639137963" y1="254.966"
                                                      x2="446.4363639137963" y2="260.966" stroke="#e0e0e0"
                                                      stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1344" x1="502.24090940302085" y1="254.966"
                                                      x2="502.24090940302085" y2="260.966" stroke="#e0e0e0"
                                                      stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1345" x1="558.0454548922454" y1="254.966"
                                                      x2="558.0454548922454" y2="260.966" stroke="#e0e0e0"
                                                      stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1346" x1="613.85000038147" y1="254.966"
                                                      x2="613.85000038147" y2="260.966" stroke="#e0e0e0"
                                                      stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1354" x1="0" y1="253.966" x2="613.8500003814697"
                                                      y2="253.966" stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1353" x1="0" y1="1" x2="0" y2="253.966"
                                                      stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1270" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1271" class="apexcharts-series" seriesName="Users"
                                                   data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1278"
                                                          d="M 0 253.966L 0 228.5694C 19.53159092122858 228.5694 36.27295456799594 152.125634 55.80454548922452 152.125634C 75.33613641045311 152.125634 92.07750005722046 176.50637 111.60909097844905 176.50637C 131.14068189967762 176.50637 147.882045546445 126.729034 167.41363646767357 126.729034C 186.94522738890214 126.729034 203.68659103566952 150.093906 223.2181819568981 150.093906C 242.74977287812666 150.093906 259.49113652489405 101.07846800000002 279.0227274461226 101.07846800000002C 298.5543183673512 101.07846800000002 315.29568201411854 99.30070599999999 334.82727293534714 99.30070599999999C 354.3588638565757 99.30070599999999 371.10022750334304 25.142634000000015 390.63181842457163 25.142634000000015C 410.16340934580023 25.142634000000015 426.9047729925676 38.60283200000001 446.4363639137962 38.60283200000001C 465.9679548350248 38.60283200000001 482.70931848179214 101.07846800000002 502.2409094030207 101.07846800000002C 521.7725003242492 101.07846800000002 538.5138639710166 48.50750600000001 558.0454548922452 48.50750600000001C 577.5770458134738 48.50750600000001 594.3184094602411 25.142634000000015 613.8500003814697 25.142634000000015C 613.8500003814697 25.142634000000015 613.8500003814697 25.142634000000015 613.8500003814697 253.966M 613.8500003814697 25.142634000000015z"
                                                          fill="url(#SvgjsLinearGradient1274)" fill-opacity="1"
                                                          stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                          stroke-dasharray="0" class="apexcharts-area" index="0"
                                                          clip-path="url(#gridRectMask1o9rdl87)"
                                                          pathTo="M 0 253.966L 0 228.5694C 19.53159092122858 228.5694 36.27295456799594 152.125634 55.80454548922452 152.125634C 75.33613641045311 152.125634 92.07750005722046 176.50637 111.60909097844905 176.50637C 131.14068189967762 176.50637 147.882045546445 126.729034 167.41363646767357 126.729034C 186.94522738890214 126.729034 203.68659103566952 150.093906 223.2181819568981 150.093906C 242.74977287812666 150.093906 259.49113652489405 101.07846800000002 279.0227274461226 101.07846800000002C 298.5543183673512 101.07846800000002 315.29568201411854 99.30070599999999 334.82727293534714 99.30070599999999C 354.3588638565757 99.30070599999999 371.10022750334304 25.142634000000015 390.63181842457163 25.142634000000015C 410.16340934580023 25.142634000000015 426.9047729925676 38.60283200000001 446.4363639137962 38.60283200000001C 465.9679548350248 38.60283200000001 482.70931848179214 101.07846800000002 502.2409094030207 101.07846800000002C 521.7725003242492 101.07846800000002 538.5138639710166 48.50750600000001 558.0454548922452 48.50750600000001C 577.5770458134738 48.50750600000001 594.3184094602411 25.142634000000015 613.8500003814697 25.142634000000015C 613.8500003814697 25.142634000000015 613.8500003814697 25.142634000000015 613.8500003814697 253.966M 613.8500003814697 25.142634000000015z"
                                                          pathFrom="M -1 253.966L -1 253.966L 55.80454548922452 253.966L 111.60909097844905 253.966L 167.41363646767357 253.966L 223.2181819568981 253.966L 279.0227274461226 253.966L 334.82727293534714 253.966L 390.63181842457163 253.966L 446.4363639137962 253.966L 502.2409094030207 253.966L 558.0454548922452 253.966L 613.8500003814697 253.966"></path>
                                                    <path id="SvgjsPath1279"
                                                          d="M 0 228.5694C 19.53159092122858 228.5694 36.27295456799594 152.125634 55.80454548922452 152.125634C 75.33613641045311 152.125634 92.07750005722046 176.50637 111.60909097844905 176.50637C 131.14068189967762 176.50637 147.882045546445 126.729034 167.41363646767357 126.729034C 186.94522738890214 126.729034 203.68659103566952 150.093906 223.2181819568981 150.093906C 242.74977287812666 150.093906 259.49113652489405 101.07846800000002 279.0227274461226 101.07846800000002C 298.5543183673512 101.07846800000002 315.29568201411854 99.30070599999999 334.82727293534714 99.30070599999999C 354.3588638565757 99.30070599999999 371.10022750334304 25.142634000000015 390.63181842457163 25.142634000000015C 410.16340934580023 25.142634000000015 426.9047729925676 38.60283200000001 446.4363639137962 38.60283200000001C 465.9679548350248 38.60283200000001 482.70931848179214 101.07846800000002 502.2409094030207 101.07846800000002C 521.7725003242492 101.07846800000002 538.5138639710166 48.50750600000001 558.0454548922452 48.50750600000001C 577.5770458134738 48.50750600000001 594.3184094602411 25.142634000000015 613.8500003814697 25.142634000000015"
                                                          fill="none" fill-opacity="1" stroke="#2163e8"
                                                          stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                          stroke-dasharray="0" class="apexcharts-area" index="0"
                                                          clip-path="url(#gridRectMask1o9rdl87)"
                                                          pathTo="M 0 228.5694C 19.53159092122858 228.5694 36.27295456799594 152.125634 55.80454548922452 152.125634C 75.33613641045311 152.125634 92.07750005722046 176.50637 111.60909097844905 176.50637C 131.14068189967762 176.50637 147.882045546445 126.729034 167.41363646767357 126.729034C 186.94522738890214 126.729034 203.68659103566952 150.093906 223.2181819568981 150.093906C 242.74977287812666 150.093906 259.49113652489405 101.07846800000002 279.0227274461226 101.07846800000002C 298.5543183673512 101.07846800000002 315.29568201411854 99.30070599999999 334.82727293534714 99.30070599999999C 354.3588638565757 99.30070599999999 371.10022750334304 25.142634000000015 390.63181842457163 25.142634000000015C 410.16340934580023 25.142634000000015 426.9047729925676 38.60283200000001 446.4363639137962 38.60283200000001C 465.9679548350248 38.60283200000001 482.70931848179214 101.07846800000002 502.2409094030207 101.07846800000002C 521.7725003242492 101.07846800000002 538.5138639710166 48.50750600000001 558.0454548922452 48.50750600000001C 577.5770458134738 48.50750600000001 594.3184094602411 25.142634000000015 613.8500003814697 25.142634000000015"
                                                          pathFrom="M -1 253.966L -1 253.966L 55.80454548922452 253.966L 111.60909097844905 253.966L 167.41363646767357 253.966L 223.2181819568981 253.966L 279.0227274461226 253.966L 334.82727293534714 253.966L 390.63181842457163 253.966L 446.4363639137962 253.966L 502.2409094030207 253.966L 558.0454548922452 253.966L 613.8500003814697 253.966"></path>
                                                    <g id="SvgjsG1272" class="apexcharts-series-markers-wrap"
                                                       data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1360" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker w5yep2u5f no-pointer-events"
                                                                    stroke="#ffffff" fill="#2163e8" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1273" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1355" x1="0" y1="0" x2="613.8500003814697" y2="0"
                                                  stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                  class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1356" x1="0" y1="0" x2="613.8500003814697" y2="0"
                                                  stroke-dasharray="0" stroke-width="0"
                                                  class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1357" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1358" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1359" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1361" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1362" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <rect id="SvgjsRect1266" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                              opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                              fill="#fefefe"></rect>
                                        <g id="SvgjsG1318" class="apexcharts-yaxis" rel="0"
                                           transform="translate(23.5, 0)">
                                            <g id="SvgjsG1319" class="apexcharts-yaxis-texts-g">
                                                <text id="SvgjsText1320" font-family="Helvetica, Arial, sans-serif"
                                                      x="20" y="31.5" text-anchor="end" dominant-baseline="auto"
                                                      font-size="11px" font-weight="400" fill="#373d3f"
                                                      class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1321">1000</tspan>
                                                    <title>1000</title></text>
                                                <text id="SvgjsText1322" font-family="Helvetica, Arial, sans-serif"
                                                      x="20" y="82.2932" text-anchor="end" dominant-baseline="auto"
                                                      font-size="11px" font-weight="400" fill="#373d3f"
                                                      class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1323">800</tspan>
                                                    <title>800</title></text>
                                                <text id="SvgjsText1324" font-family="Helvetica, Arial, sans-serif"
                                                      x="20" y="133.0864" text-anchor="end" dominant-baseline="auto"
                                                      font-size="11px" font-weight="400" fill="#373d3f"
                                                      class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1325">600</tspan>
                                                    <title>600</title></text>
                                                <text id="SvgjsText1326" font-family="Helvetica, Arial, sans-serif"
                                                      x="20" y="183.87959999999998" text-anchor="end"
                                                      dominant-baseline="auto" font-size="11px" font-weight="400"
                                                      fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1327">400</tspan>
                                                    <title>400</title></text>
                                                <text id="SvgjsText1328" font-family="Helvetica, Arial, sans-serif"
                                                      x="20" y="234.6728" text-anchor="end" dominant-baseline="auto"
                                                      font-size="11px" font-weight="400" fill="#373d3f"
                                                      class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1329">200</tspan>
                                                    <title>200</title></text>
                                                <text id="SvgjsText1330" font-family="Helvetica, Arial, sans-serif"
                                                      x="20" y="285.466" text-anchor="end" dominant-baseline="auto"
                                                      font-size="11px" font-weight="400" fill="#373d3f"
                                                      class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1331">0</tspan>
                                                    <title>0</title></text>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1263" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 160px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(33, 99, 232);"></span>
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
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 730px; height: 396px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Chart END -->
                </div>
                <!-- Booking Chart END -->

                <!-- Booking graph START -->
                <div class="col-lg-4">
                    <div class="card border h-100">

                        <!-- Card header -->
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <h5 class="card-header-title">Booking Traffic</h5>
                            <a href="#" class="btn btn-link p-0 mb-0">View all</a>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body p-3">
                            <!-- Chart -->
                            <div class="col-sm-6 mx-auto" style="position: relative;">
                                <div class="d-flex justify-content-center" id="ChartTrafficViews"
                                     style="min-height: 196.9px;">
                                    <div id="apexcharts6gt85kgh"
                                         class="apexcharts-canvas apexcharts6gt85kgh apexcharts-theme-light"
                                         style="width: 200px; height: 196.9px;">
                                        <svg id="SvgjsSvg1363" width="200" height="196.89999999999998"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG1365" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1364">
                                                    <clipPath id="gridRectMask6gt85kgh">
                                                        <rect id="SvgjsRect1367" width="206" height="202" x="-3" y="-1"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask6gt85kgh"></clipPath>
                                                    <clipPath id="nonForecastMask6gt85kgh"></clipPath>
                                                    <clipPath id="gridRectMarkerMask6gt85kgh">
                                                        <rect id="SvgjsRect1368" width="204" height="204" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG1369" class="apexcharts-pie">
                                                    <g id="SvgjsG1370" transform="translate(0, 0) scale(1)">
                                                        <circle id="SvgjsCircle1371" r="62.114634146341466" cx="100"
                                                                cy="100" fill="transparent"></circle>
                                                        <g id="SvgjsG1372" class="apexcharts-slices">
                                                            <g id="SvgjsG1373"
                                                               class="apexcharts-series apexcharts-pie-series"
                                                               seriesName="Organic" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1374"
                                                                      d="M 100 4.439024390243901 A 95.5609756097561 95.5609756097561 0 1 1 9.116111442819232 129.5299654624645 L 40.9254724378325 119.19447755060193 A 62.114634146341466 62.114634146341466 0 1 0 100 37.885365853658534 L 100 4.439024390243901 z"
                                                                      fill="rgba(81,67,217,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="butt"
                                                                      stroke-width="2" stroke-dasharray="0"
                                                                      class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                      index="0" j="0" data:angle="252"
                                                                      data:startAngle="0" data:strokeWidth="2"
                                                                      data:value="70"
                                                                      data:pathOrig="M 100 4.439024390243901 A 95.5609756097561 95.5609756097561 0 1 1 9.116111442819232 129.5299654624645 L 40.9254724378325 119.19447755060193 A 62.114634146341466 62.114634146341466 0 1 0 100 37.885365853658534 L 100 4.439024390243901 z"
                                                                      stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG1375"
                                                               class="apexcharts-series apexcharts-pie-series"
                                                               seriesName="Google" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath1376"
                                                                      d="M 9.116111442819232 129.5299654624645 A 95.5609756097561 95.5609756097561 0 0 1 22.689546732657448 43.83066784190465 L 49.74820537622734 63.48993409723802 A 62.114634146341466 62.114634146341466 0 0 0 40.9254724378325 119.19447755060193 L 9.116111442819232 129.5299654624645 z"
                                                                      fill="rgba(12,188,135,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="butt"
                                                                      stroke-width="2" stroke-dasharray="0"
                                                                      class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                      index="0" j="1" data:angle="54"
                                                                      data:startAngle="252" data:strokeWidth="2"
                                                                      data:value="15"
                                                                      data:pathOrig="M 9.116111442819232 129.5299654624645 A 95.5609756097561 95.5609756097561 0 0 1 22.689546732657448 43.83066784190465 L 49.74820537622734 63.48993409723802 A 62.114634146341466 62.114634146341466 0 0 0 40.9254724378325 119.19447755060193 L 9.116111442819232 129.5299654624645 z"
                                                                      stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG1377"
                                                               class="apexcharts-series apexcharts-pie-series"
                                                               seriesName="Socialxmedia" rel="3" data:realIndex="2">
                                                                <path id="SvgjsPath1378"
                                                                      d="M 22.689546732657448 43.83066784190465 A 95.5609756097561 95.5609756097561 0 0 1 70.4700345375355 9.116111442819232 L 80.80552244939807 40.9254724378325 A 62.114634146341466 62.114634146341466 0 0 0 49.74820537622734 63.48993409723802 L 22.689546732657448 43.83066784190465 z"
                                                                      fill="rgba(247,195,46,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="butt"
                                                                      stroke-width="2" stroke-dasharray="0"
                                                                      class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                      index="0" j="2" data:angle="36"
                                                                      data:startAngle="306" data:strokeWidth="2"
                                                                      data:value="10"
                                                                      data:pathOrig="M 22.689546732657448 43.83066784190465 A 95.5609756097561 95.5609756097561 0 0 1 70.4700345375355 9.116111442819232 L 80.80552244939807 40.9254724378325 A 62.114634146341466 62.114634146341466 0 0 0 49.74820537622734 63.48993409723802 L 22.689546732657448 43.83066784190465 z"
                                                                      stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG1379"
                                                               class="apexcharts-series apexcharts-pie-series"
                                                               seriesName="Referral" rel="4" data:realIndex="3">
                                                                <path id="SvgjsPath1380"
                                                                      d="M 70.4700345375355 9.116111442819232 A 95.5609756097561 95.5609756097561 0 0 1 99.98332146347657 4.439025845720778 L 99.98915895125978 37.88536679971851 A 62.114634146341466 62.114634146341466 0 0 0 80.80552244939807 40.9254724378325 L 70.4700345375355 9.116111442819232 z"
                                                                      fill="rgba(214,41,62,1)" fill-opacity="1"
                                                                      stroke-opacity="1" stroke-linecap="butt"
                                                                      stroke-width="2" stroke-dasharray="0"
                                                                      class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                      index="0" j="3" data:angle="18"
                                                                      data:startAngle="342" data:strokeWidth="2"
                                                                      data:value="5"
                                                                      data:pathOrig="M 70.4700345375355 9.116111442819232 A 95.5609756097561 95.5609756097561 0 0 1 99.98332146347657 4.439025845720778 L 99.98915895125978 37.88536679971851 A 62.114634146341466 62.114634146341466 0 0 0 80.80552244939807 40.9254724378325 L 70.4700345375355 9.116111442819232 z"
                                                                      stroke="#ffffff"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1381" x1="0" y1="0" x2="200" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1382" x1="0" y1="0" x2="200" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG1366" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(81, 67, 217);"></span>
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
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(12, 188, 135);"></span>
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
                                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(247, 195, 46);"></span>
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
                                            <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(214, 41, 62);"></span>
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
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 160px; height: 198px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>

                            <!-- Content -->
                            <ul class="list-group list-group-borderless align-items-center mt-3">
                                <li class="list-group-item"><i class="text-primary fas fa-circle me-2"></i>Organic</li>
                                <li class="list-group-item"><i class="text-success fas fa-circle me-2"></i>Google</li>
                                <li class="list-group-item"><i class="text-warning fas fa-circle me-2"></i>Social media
                                </li>
                                <li class="list-group-item"><i class="text-danger fas fa-circle me-2"></i>Referral
                                    program
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Booking graph END -->
            </div>
            <!-- Graph END -->

            <!-- Booking table START -->
            <div class="row">
                <div class="col-12">
                    <div class="card border rounded-3">
                        <!-- Card header START -->
                        <div class="card-header border-bottom">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <h5 class="mb-2 mb-sm-0">Upcoming Bookings</h5>
                                <a href="#" class="btn btn-sm btn-primary mb-0">View All</a>
                            </div>
                        </div>
                        <!-- Card header END -->

                        <!-- Card body START -->
                        <div class="card-body">
                            <!-- Search and select START -->
                            <div class="row g-3 align-items-center justify-content-between mb-3">
                                <!-- Search -->
                                <div class="col-md-8">
                                    <form class="rounded position-relative">
                                        <input class="form-control pe-5" type="search" placeholder="Search"
                                               aria-label="Search">
                                        <button
                                            class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y"
                                            type="submit"><i class="fas fa-search fs-6"></i></button>
                                    </form>
                                </div>

                                <!-- Select option -->
                                <div class="col-md-3">
                                    <!-- Short by filter -->
                                    <form>
                                        <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                             aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select
                                                    class="form-select js-choice choices__input"
                                                    aria-label=".form-select-sm" tabindex="-1" data-choice="active"
                                                    hidden="">
                                                    <option value="" data-custom-properties="[object Object]">Sort by
                                                    </option>
                                                </select>
                                                <div class="choices__list choices__list--single">
                                                    <div
                                                        class="choices__item choices__placeholder choices__item--selectable"
                                                        data-item="" data-id="1" data-value=""
                                                        data-custom-properties="[object Object]" aria-selected="true">
                                                        Sort by
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                <div class="choices__list" role="listbox">
                                                    <div id="choices--clcx-item-choice-1"
                                                         class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                         role="option" data-choice="" data-id="1" data-value=""
                                                         data-select-text="Press to select" data-choice-selectable=""
                                                         aria-selected="true">Sort by
                                                    </div>
                                                    <div id="choices--clcx-item-choice-2"
                                                         class="choices__item choices__item--choice choices__item--selectable"
                                                         role="option" data-choice="" data-id="2" data-value="Free"
                                                         data-select-text="Press to select" data-choice-selectable="">
                                                        Free
                                                    </div>
                                                    <div id="choices--clcx-item-choice-3"
                                                         class="choices__item choices__item--choice choices__item--selectable"
                                                         role="option" data-choice="" data-id="3" data-value="Newest"
                                                         data-select-text="Press to select" data-choice-selectable="">
                                                        Newest
                                                    </div>
                                                    <div id="choices--clcx-item-choice-4"
                                                         class="choices__item choices__item--choice choices__item--selectable"
                                                         role="option" data-choice="" data-id="4" data-value="Oldest"
                                                         data-select-text="Press to select" data-choice-selectable="">
                                                        Oldest
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Search and select END -->

                            <!-- Hotel room list START -->
                            <div class="table-responsive border-0">
                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                    <!-- Table head -->
                                    <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="border-0 rounded-start">#</th>
                                        <th scope="col" class="border-0">Name</th>
                                        <th scope="col" class="border-0">Type</th>
                                        <th scope="col" class="border-0">Date</th>
                                        <th scope="col" class="border-0">status</th>
                                        <th scope="col" class="border-0">Payment</th>
                                        <th scope="col" class="border-0 rounded-end">Action</th>
                                    </tr>
                                    </thead>

                                    <!-- Table body START -->
                                    <tbody class="border-top-0">
                                    <!-- Table item -->
                                    <tr>
                                        <td><h6 class="mb-0">01</h6></td>
                                        <td><h6 class="mb-0"><a href="#">Deluxe Pool View</a></h6></td>
                                        <td> With Breakfast</td>
                                        <td> Nov 22 - 25</td>
                                        <td>
                                            <div class="badge text-bg-success">Booked</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-success bg-opacity-10 text-success">Full payment</div>
                                        </td>
                                        <td><a href="#" class="btn btn-sm btn-light mb-0">View</a></td>
                                    </tr>

                                    <!-- Table item -->
                                    <tr>
                                        <td><h6 class="mb-0">02</h6></td>
                                        <td><h6 class="mb-0"><a href="#">Deluxe Pool View with Breakfast</a></h6></td>
                                        <td> Free Cancellation | Breakfast only</td>
                                        <td> Nov 24 - 28</td>
                                        <td>
                                            <div class="badge text-bg-success">Booked</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-orange bg-opacity-10 text-orange">On Property</div>
                                        </td>
                                        <td><a href="#" class="btn btn-sm btn-light mb-0">View</a></td>
                                    </tr>

                                    <!-- Table item -->
                                    <tr>
                                        <td><h6 class="mb-0">03</h6></td>
                                        <td><h6 class="mb-0"><a href="#">Luxury Room with Balcony</a></h6></td>
                                        <td> Free Cancellation | Breakfast + Lunch/Dinner</td>
                                        <td> Nov 24 - 28</td>
                                        <td>
                                            <div class="badge text-bg-info">Reserved</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-info bg-opacity-10 text-info">Half Payment</div>
                                        </td>
                                        <td><a href="#" class="btn btn-sm btn-light mb-0">View</a></td>
                                    </tr>

                                    <!-- Table item -->
                                    <tr>
                                        <td><h6 class="mb-0">04</h6></td>
                                        <td><h6 class="mb-0"><a href="#">Deluxe Room Twin Bed With Balcony</a></h6></td>
                                        <td> Free Cancellation</td>
                                        <td> Nov 28 - 30</td>
                                        <td>
                                            <div class="badge text-bg-success">Booked</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-success bg-opacity-10 text-success">Full Payment</div>
                                        </td>
                                        <td><a href="#" class="btn btn-sm btn-light mb-0">View</a></td>
                                    </tr>

                                    <!-- Table item -->
                                    <tr>
                                        <td><h6 class="mb-0">05</h6></td>
                                        <td><h6 class="mb-0"><a href="#">Room With Free Cancellation | Breakfast +
                                                    Lunch</a></h6></td>
                                        <td> Free Cancellation</td>
                                        <td> Nov 28 - 30</td>
                                        <td>
                                            <div class="badge text-bg-info">Reserved</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-success bg-opacity-10 text-success">Full Payment</div>
                                        </td>
                                        <td><a href="#" class="btn btn-sm btn-light mb-0">View</a></td>
                                    </tr>
                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                            </div>
                            <!-- Hotel room list END -->
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START -->
                        <div class="card-footer pt-0">
                            <!-- Pagination and content -->
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                <!-- Content -->
                                <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                                <!-- Pagination -->
                                <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                                    <ul class="pagination pagination-sm pagination-primary-soft mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Prev</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Card footer END -->
                    </div>
                </div>
            </div>
            <!-- Booking table END -->
        </div>
    </section>
@endsection

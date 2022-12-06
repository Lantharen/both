@extends('layouts.base')

@section('page-title', 'Charts :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107628 page-type-qmod---chart pg-stock-data-charts ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Charts</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                        </div>
                    </div>
                </div>
            </header>

            @include('pages.includes.nav')

            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-md-offset-2 clearfix">
                        <aside id="tertiaryNav">
                            <nav id="tertiary-navigation" class="visible-sm visible-xs">
                                <ul>
                                    <li class="sidebar-title">
                                        <h3>Stock Data</h3>
                                    </li>
                                    <li class="">
                                        <a href="/stock-data/quote" target="_self">Quote</a>

                                    </li>
                                    <li class="active active-landing">
                                        <a href="/stock-data/charts" target="_self">Charts</a>

                                    </li>
                                    <li class="">
                                        <a href="/stock-data/historical-data" target="_self">Historical Data</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <div class="detailed-quote" data-name="qmod">
                                <div data-qmod-tool="interactivechart" data-qmod-params="{&quot;lang&quot;:&quot;en&quot;,&quot;symbol&quot;:&quot;MARA&quot;,&quot;volumeEnabled&quot;:true,&quot;chartType&quot;:0,&quot;chartTypeEnabled&quot;:true,&quot;marketSessionEnabled&quot;:true,&quot;compareEnabled&quot;:false,&quot;compareOptionsEnabled&quot;:true,&quot;eventsEnabled&quot;:true,&quot;dateRange&quot;:1,&quot;marketSession&quot;:1,&quot;compareOption&quot;:0,&quot;dateRangeList&quot;:[{&quot;visible&quot;:true},{&quot;visible&quot;:true},{&quot;visible&quot;:true},{&quot;visible&quot;:true},{&quot;visible&quot;:true},{&quot;visible&quot;:true},{&quot;visible&quot;:true},{&quot;visible&quot;:false},{&quot;visible&quot;:true},{&quot;visible&quot;:false},{&quot;visible&quot;:false}]}" class="qtool" data-template-i-d="1670338980083">
                                    <div class="qmod-ui-tool qmod-simplechart">
                                        <div class="qmod-header"><h2>Charting</h2>
                                            <h3 class="company">Marathon Digital Holdings Inc.</h3>
                                            <p class="symbol">NASDAQ Capital Market: MARA</p>
                                            <div class="clear"></div>
                                        </div><!--end quote-header--><!-- rivets: unless data.datatype | = 'n/a' -->
                                        <div class="qmod-block-wrapper">
                                            <div rv-class-qmod-loading="scope.binders.loader" class="">
                                                <div class="qmod-chart-display">
                                                    <div class="qmod-chart-btns">
                                                        <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm"><!-- rivets: if scope.binders.adjType.enabled --><!-- rivets: if scope.binders.chartEvents.enabled -->
                                                            <div rv-show="scope.binders.chartEvents.visible" class="qmod-dropdown qmod-events-dropdown">
                                                                <a class="qmod-dropdown_toggle qmod-dropdown-sm qmod-group"><span>Events</span><i class="fa fa-chevron-down qmod-pull-right qmod-f-right"></i></a>
                                                                <ul class="qmod-dropdown-menu qmod-dropdown-sm qmod-dropdown-menu-toggles"><!-- rivets: each-event -->
                                                                    <li>
                                                                        <div>
                                                                            <span class="qmod-icon-toggle-icon"><i rv-ifclass="event.enabled" data-qmod-true-class="fa-toggle-on qmod-ch-up" data-qmod-false-class="fa-toggle-off qmod-ch-down" rv-on-click="scope.binders.chartEvents.toggle" class="fa fa-toggle-off qmod-ch-down"></i></span><span>Earnings</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <span class="qmod-icon-toggle-icon"><i rv-ifclass="event.enabled" data-qmod-true-class="fa-toggle-on qmod-ch-up" data-qmod-false-class="fa-toggle-off qmod-ch-down" rv-on-click="scope.binders.chartEvents.toggle" class="fa fa-toggle-off qmod-ch-down"></i></span><span>Dividends</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <span class="qmod-icon-toggle-icon"><i rv-ifclass="event.enabled" data-qmod-true-class="fa-toggle-on qmod-ch-up" data-qmod-false-class="fa-toggle-off qmod-ch-down" rv-on-click="scope.binders.chartEvents.toggle" class="fa fa-toggle-off qmod-ch-down"></i></span><span>Splits</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- rivets: if scope.binders.compareOptions.enabled -->
                                                            <div rv-show="scope.binders.compareOptions.visible" class="qmod-dropdown">
                                                                <a class="qmod-dropdown_toggle qmod-dropdown-sm qmod-group"><span>Price</span><i class="fa fa-chevron-down qmod-pull-right qmod-f-right"></i></a>
                                                                <ul class="qmod-dropdown-menu qmod-dropdown-sm"><!-- rivets: each-compare -->
                                                                    <li>
                                                                        <a rv-on-click="scope.binders.compareOptions.change" rv-class-qmod-active="scope.binders.compareOptions.selected|= index" class=" qmod-active">Price</a>
                                                                    </li>
                                                                    <li>
                                                                        <a rv-on-click="scope.binders.compareOptions.change" rv-class-qmod-active="scope.binders.compareOptions.selected|= index">% Change</a>
                                                                    </li>
                                                                    <li>
                                                                        <a rv-on-click="scope.binders.compareOptions.change" rv-class-qmod-active="scope.binders.compareOptions.selected|= index">$ Change</a>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- rivets: if scope.binders.marketSession.enabled -->
                                                            <div rv-show="scope.binders.dateRange.getSelected < selected | getIndex 'type' | = 'int'" class="qmod-dropdown">
                                                                <a class="qmod-dropdown_toggle qmod-dropdown-sm"><span>Market</span><i class="fa fa-chevron-down qmod-pull-right qmod-f-right"></i></a>
                                                                <ul class="qmod-dropdown-menu qmod-dropdown-sm"><!-- rivets: each-strat -->
                                                                    <li>
                                                                        <a rv-on-click="scope.binders.marketSession.change" rv-class-qmod-active="scope.binders.marketSession.selected|= index">All</a>
                                                                    </li>
                                                                    <li>
                                                                        <a rv-on-click="scope.binders.marketSession.change" rv-class-qmod-active="scope.binders.marketSession.selected|= index" class=" qmod-active">Market</a>
                                                                    </li>
                                                                    <li>
                                                                        <a rv-on-click="scope.binders.marketSession.change" rv-class-qmod-active="scope.binders.marketSession.selected|= index">Pre-Market</a>
                                                                    </li>
                                                                    <li>
                                                                        <a rv-on-click="scope.binders.marketSession.change" rv-class-qmod-active="scope.binders.marketSession.selected|= index">Post-Market</a>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- rivets: if scope.binders.chartType.enabled -->
                                                            <div class="qmod-dropdown">
                                                                <a class="qmod-dropdown_toggle qmod-dropdown-sm"><span>Line</span><i class="fa fa-chevron-down qmod-pull-right qmod-f-right"></i></a>
                                                                <ul class="qmod-dropdown-menu qmod-dropdown-sm"><!-- rivets: each-strat -->
                                                                    <li><!-- rivets: if strat.visible| call scope.binders.symbolList.list --><a rv-on-click="scope.binders.chartType.change" rv-class-qmod-active="scope.binders.chartType.selected|= index" class=" qmod-active">Line</a>
                                                                    </li>
                                                                    <li><!-- rivets: if strat.visible| call scope.binders.symbolList.list --><a rv-on-click="scope.binders.chartType.change" rv-class-qmod-active="scope.binders.chartType.selected|= index">Area</a>
                                                                    </li>
                                                                    <li><!-- rivets: if strat.visible| call scope.binders.symbolList.list --><a rv-on-click="scope.binders.chartType.change" rv-class-qmod-active="scope.binders.chartType.selected|= index">OHLC</a>
                                                                    </li>
                                                                    <li><!-- rivets: if strat.visible| call scope.binders.symbolList.list --><a rv-on-click="scope.binders.chartType.change" rv-class-qmod-active="scope.binders.chartType.selected|= index">Candlestick</a>
                                                                    </li>
                                                                    <li><!-- rivets: if strat.visible| call scope.binders.symbolList.list --><a rv-on-click="scope.binders.chartType.change" rv-class-qmod-active="scope.binders.chartType.selected|= index">Hollow Candle</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="qmod-legend qmod-legend-list"><!-- rivets: if scope.binders.symbolList.compareEnabled --></ul>
                                                </div>
                                            </div>
                                            <div class="qmod-main-chart" data-highcharts-chart="0" role="region" aria-label="Frequency:10M. Use up and down arrows to navigate.">
                                                <div role="region" aria-label="Chart screen reader information." style="position: absolute; left: -9999px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                                    <div tabindex="0">Use regions/landmarks to skip ahead to chart.</div>
                                                    <h3>Summary.</h3>
                                                    <div>Frequency:10M</div>
                                                    <h3>Long description.</h3>
                                                    <div>No description available.</div>
                                                    <h3>Structure.</h3>
                                                    <div>Chart type: Empty chart.</div>
                                                    <div>The chart has 1 X axis displaying values.</div>
                                                    <div>The chart has 2 Y axes displaying values and values.</div>
                                                </div>
                                                <h3 style="position: absolute; left: -9999px; top: auto; width: 1px; height: 1px; overflow: hidden;">Chart graphic.</h3>
                                                <div id="highcharts-hjz570f-0" class="highcharts-container " style="position: relative; overflow: hidden; width: 720px; height: 220px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    <svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="720" height="220">
                                                        <title id="highcharts-title-0">Frequency:10M</title>
                                                        <desc>Interactive stock chart provided by quotemedia</desc>
                                                        <defs>
                                                            <clipPath id="highcharts-hjz570f-1">
                                                                <rect x="0" y="0" width="642" height="158" fill="none"></rect>
                                                            </clipPath>
                                                            <clipPath id="highcharts-hjz570f-3">
                                                                <rect x="0" y="0" width="642" height="130" fill="none"></rect>
                                                            </clipPath>
                                                            <clipPath id="highcharts-hjz570f-4">
                                                                <rect x="0" y="0" width="642" height="24" fill="none"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <rect fill="none" class="highcharts-background" x="0" y="0" width="720" height="220" rx="0" ry="0"></rect>
                                                        <rect fill="none" class="highcharts-plot-background" x="10" y="20" width="642" height="158"></rect>
                                                        <rect fill="none" class="highcharts-plot-border" x="10" y="20" width="642" height="158"></rect>
                                                        <g class="highcharts-grid highcharts-xaxis-grid ">
                                                            <path fill="none" class="highcharts-grid-line" d="M 9.5 20 L 9.5 150 M 9.5 154 L 9.5 178" opacity="1"></path>
                                                            <path fill="none" class="highcharts-grid-line" d="M 137.5 20 L 137.5 150 M 137.5 154 L 137.5 178" opacity="1"></path>
                                                            <path fill="none" class="highcharts-grid-line" d="M 263.5 20 L 263.5 150 M 263.5 154 L 263.5 178" opacity="1"></path>
                                                            <path fill="none" class="highcharts-grid-line" d="M 390.5 20 L 390.5 150 M 390.5 154 L 390.5 178" opacity="1"></path>
                                                            <path fill="none" class="highcharts-grid-line" d="M 517.5 20 L 517.5 150 M 517.5 154 L 517.5 178" opacity="1"></path>
                                                            <path fill="none" class="highcharts-grid-line" d="M 643.5 20 L 643.5 150 M 643.5 154 L 643.5 178" opacity="1"></path>
                                                        </g>
                                                        <g class="highcharts-grid highcharts-yaxis-grid ">
                                                            <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 128.5 L 652 128.5" opacity="1"></path>
                                                            <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 80.5 L 652 80.5" opacity="1"></path>
                                                            <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 33.5 L 652 33.5" opacity="1"></path>
                                                        </g>
                                                        <g class="highcharts-grid highcharts-yaxis-grid ">
                                                            <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 178.5 L 652 178.5" opacity="1"></path>
                                                            <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 153.5 L 652 153.5" opacity="1"></path>
                                                        </g>
                                                        <g class="highcharts-axis highcharts-xaxis ">
                                                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M -17.5 178 L -17.5 188" opacity="1"></path>
                                                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 137.5 178 L 137.5 188" opacity="1"></path>
                                                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 263.5 178 L 263.5 188" opacity="1"></path>
                                                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 390.5 178 L 390.5 188" opacity="1"></path>
                                                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 517.5 178 L 517.5 188" opacity="1"></path>
                                                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 643.5 178 L 643.5 188" opacity="1"></path>
                                                            <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" d="M 10 178.5 L 652 178.5"></path>
                                                        </g>
                                                        <g class="highcharts-axis highcharts-yaxis ">
                                                            <text x="692" text-anchor="middle" transform="translate(0,0) rotate(90 692 85)" class="highcharts-axis-title" style="color:null;font-size:null;" y="85">Price</text>
                                                            <path fill="none" class="highcharts-axis-line" d="M 682 20 L 682 150"></path>
                                                        </g>
                                                        <g class="highcharts-axis highcharts-yaxis ">
                                                            <text x="692" text-anchor="middle" transform="translate(0,0) rotate(90 692 166)" class="highcharts-axis-title" style="color:null;font-size:null;" y="166">Volume</text>
                                                            <path fill="none" class="highcharts-axis-line" d="M 682 154 L 682 178"></path>
                                                        </g>
                                                        <g class="highcharts-series-group">
                                                            <g class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-color-undefined highcharts-dense-data highcharts-tracker " transform="translate(10,154) scale(1 1)" clip-path="url(#highcharts-hjz570f-4)" role="region" tabindex="-1" aria-label="MARA, series 2 of 2. column series with 203 columns. Volume series for MARA. Y axis, Volume">
                                                                <rect x="1" y="6" width="2" height="19" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="4" y="13" width="2" height="12" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="7" y="17" width="2" height="8" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="10" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="13" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="17" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="20" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="23" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="26" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="29" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="32" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="36" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="39" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="42" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="45" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="48" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="51" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="55" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="58" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="61" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="64" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="67" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="70" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="74" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="77" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="80" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="83" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="86" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="89" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="93" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="96" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="99" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="102" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="105" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="108" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="112" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="115" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="118" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="121" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="124" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="127" y="13" width="2" height="12" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="130" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="134" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="137" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="140" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="143" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="146" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="149" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="153" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="156" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="159" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="162" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="165" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="168" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="172" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="175" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="178" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="181" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="184" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="187" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="191" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="194" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="197" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="200" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="203" y="18" width="2" height="7" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="206" y="18" width="2" height="7" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="210" y="18" width="2" height="7" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="213" y="11" width="2" height="14" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="216" y="12" width="2" height="13" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="219" y="11" width="2" height="14" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="222" y="15" width="2" height="10" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="225" y="18" width="2" height="7" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="229" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="232" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="235" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="238" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="241" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="244" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="248" y="9" width="2" height="16" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="251" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="254" y="14" width="2" height="11" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="257" y="12" width="2" height="13" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="260" y="13" width="2" height="12" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="263" y="13" width="2" height="12" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="266" y="12" width="2" height="13" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="270" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="273" y="17" width="2" height="8" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="276" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="279" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="282" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="285" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="289" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="292" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="295" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="298" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="301" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="304" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="308" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="311" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="314" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="317" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="320" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="323" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="327" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="330" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="333" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="336" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="339" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="342" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="346" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="349" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="352" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="355" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="358" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="361" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="365" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="368" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="371" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="374" y="18" width="2" height="7" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="377" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="380" y="12" width="2" height="13" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="383" y="13" width="2" height="12" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="387" y="10" width="2" height="15" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="390" y="16" width="2" height="9" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="393" y="18" width="2" height="7" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="396" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="399" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="402" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="406" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="409" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="412" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="415" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="418" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="421" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="425" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="428" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="431" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="434" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="437" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="440" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="444" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="447" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="450" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="453" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="456" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="459" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="463" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="466" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="469" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="472" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="475" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="478" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="482" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="485" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="488" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="491" y="16" width="2" height="9" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="494" y="14" width="2" height="11" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="497" y="18" width="2" height="7" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="501" y="8" width="2" height="17" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="504" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="507" y="8" width="2" height="17" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="510" y="9" width="2" height="16" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="513" y="15" width="2" height="10" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="516" y="17" width="2" height="8" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="519" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="523" y="17" width="2" height="8" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="526" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="529" y="17" width="2" height="8" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="532" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="535" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="538" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="542" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="545" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="548" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="551" y="4" width="2" height="21" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="554" y="8" width="2" height="17" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="557" y="19" width="2" height="6" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="561" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="564" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="567" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="570" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="573" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="576" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="580" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="583" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="586" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="589" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="592" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="595" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="599" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="602" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="605" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="608" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="611" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="614" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="618" y="22" width="2" height="3" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="621" y="21" width="2" height="4" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="624" y="20" width="2" height="5" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="627" y="18" width="2" height="7" fill="rgba(0,75,141,1)" class="highcharts-point "></rect>
                                                                <rect x="630" y="23" width="2" height="2" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="633" y="12" width="2" height="13" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="636" y="15" width="2" height="10" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                                <rect x="640" y="24" width="2" height="1" fill="rgba(0,75,141,1)" class="highcharts-point"></rect>
                                                            </g>
                                                            <g class="highcharts-markers highcharts-series-1 highcharts-column-series highcharts-color-undefined " transform="translate(10,154) scale(1 1)" clip-path="none"></g>
                                                            <g class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-undefined " transform="translate(10,20) scale(1 1)" clip-path="url(#highcharts-hjz570f-3)">
                                                                <path fill="none" d="M 1.5812807881773 115.12506399473419 L 4.7438423645345 101.45286330724784 L 7.9064039408917 111.91143128793975 L 11.068965517249 109.05909456593284 L 14.231527093606 110.96065238060413 L 17.394088669963 103.82981057558693 L 20.55665024632 104.30520002925473 L 23.719211822678 98.12513713157321 L 26.881773399035 108.10831565859723 L 30.044334975392 118.56688363928914 L 33.206896551749 118.93768741315003 L 36.369458128106 117.14071527828565 L 39.532019704463 113.33759964894315 L 42.694581280821 114.28837855627884 L 45.857142857178 110.32363051268923 L 49.019704433535 111.43604183427195 L 52.182266009892 112.86221019527535 L 55.344827586249 114.28837855627884 L 58.507389162607 112.65303883566158 L 61.669950738964 112.37731295253421 L 64.832512315321 114.28837855627884 L 67.995073891678 114.95392379141374 L 71.157635468035 115.71454691728225 L 74.320197044392 119.04227309295695 L 77.48275862075 118.56688363928914 L 80.645320197107 117.14071527828565 L 83.807881773464 117.14071527828565 L 86.970443349821 114.64016675199296 L 90.133004926178 115.43882103415488 L 93.295566502536 116.18993637095005 L 96.458128078893 119.99305200029255 L 99.62068965525 119.51766254662476 L 102.78325123161 119.51766254662476 L 105.94581280796 116.97908286403865 L 109.10837438432 116.66532582461785 L 112.27093596068 116.0758429020698 L 115.43349753704 117.14071527828565 L 118.59605911339 115.71454691728225 L 121.75862068975 117.61610473195354 L 124.92118226611 116.18993637095005 L 128.08374384246 111.43604183427195 L 131.24630541882 117.61610473195354 L 134.40886699518 118.1390331309881 L 137.57142857154 116.18993637095005 L 140.73399014789 119.04227309295695 L 143.89655172425 114.28837855627884 L 147.05911330061 118.56688363928914 L 150.22167487696 121.41922036129597 L 153.38423645332 118.09149418562134 L 156.54679802968 114.76376800994665 L 159.70935960604 111.91143128793975 L 162.87192118214 113.33759964894315 L 166.0344827585 110.48526292693634 L 169.19704433486 112.4058363197543 L 172.35960591121 117.61610473195354 L 175.52216748757 120.46844145396037 L 178.68472906393 124.0909090909091 L 181.84729064028 123.32077817596726 L 185.00985221664 122.36999926863166 L 188.172413793 119.69831053901852 L 191.33497536936 119.86945074233896 L 194.49753694571 116.66532582461785 L 197.66009852207 122.84538872229946 L 200.82266009843 123.71059752797488 L 203.98522167478 111.22687047465809 L 207.14778325114 112.38682074160755 L 210.3103448275 102.6793680977108 L 213.47290640386 93.37124259489502 L 216.63546798021 76.25722226285379 L 219.79802955657 82.9126746142032 L 222.96059113293 90.51890587288821 L 226.12315270928 92.42046368755942 L 229.28571428564 92.20178453887223 L 232.448275862 89.66320485628611 L 235.61083743836 84.3388429752066 L 238.77339901471 80.06033789219629 L 241.93596059107 82.9126746142032 L 245.09852216743 81.0111167995319 L 248.26108374378 76.7326117165216 L 251.42364532014 76.25722226285379 L 254.5862068965 81.9618957068676 L 257.74876847286 62.93680977108164 L 260.91133004921 58.19242302347696 L 264.07389162557 47.73385504278505 L 267.23645320193 78.15878007752508 L 270.39901477829 86.57317340744535 L 273.56157635464 79.10955898486068 L 276.724137931 81.9618957068676 L 279.88669950736 74.35566444818258 L 283.04926108371 74.83105390185038 L 286.21182266007 80.5357273458641 L 289.37438423643 74.83105390185038 L 292.53694581279 71.02793827250788 L 295.69950738914 73.40488554084689 L 298.8620689655 67.74775104219992 L 302.02463054186 75.31595114459152 L 305.18719211821 78.6341695311929 L 308.34975369457 75.781832809186 L 311.51231527093 76.93227528706211 L 314.67487684729 80.91603890879838 L 317.83743842364 80.86849996343156 L 321 75.36349008995828 L 324.16256157636 80.5357273458641 L 327.32512315271 79.10955898486068 L 330.48768472907 79.10955898486068 L 333.65024630543 82.80808893439627 L 336.81280788179 83.8634535215388 L 339.97536945814 83.8634535215388 L 343.1379310345 84.8142324288744 L 346.30049261086 84.3388429752066 L 349.46305418721 82.4372851605354 L 352.62561576357 81.0111167995319 L 355.78817733993 81.0111167995319 L 358.95073891629 78.6341695311929 L 362.11330049264 83.388064067871 L 365.275862069 81.08717911211875 L 368.43842364536 79.5849484385285 L 371.60098522171 81.4865062531997 L 374.76354679807 87.66656915088132 L 377.92610837443 87.66656915088132 L 381.08866995079 83.8634535215388 L 384.25123152714 87.66656915088132 L 387.4137931035 87.1911796972135 L 390.57635467986 80.06033789219629 L 393.73891625622 71.40824983544209 L 396.90147783257 69.6683244350179 L 400.06403940893 62.946317560155066 L 403.22660098529 69.60176991150439 L 406.38916256164 62.470928106487264 L 409.551724138 67.70021209683318 L 412.71428571436 67.69070430775984 L 415.87684729072 67.70021209683318 L 419.03940886707 66.74943318949758 L 422.20197044343 59.32384992320634 L 425.36453201979 58.19242302347696 L 428.52709359614 50.32948145981133 L 431.6896551725 44.40612886711034 L 434.85221674886 52.487749579463156 L 438.01477832522 55.34008630147005 L 441.17733990157 56.76625466247347 L 444.33990147793 57.717033569809075 L 447.50246305429 59.143201930812566 L 450.66502463064 58.667812477144764 L 453.827586207 57.717033569809075 L 456.99014778336 56.35741973231917 L 460.15270935972 54.86469684780225 L 463.31527093607 56.290865208805656 L 466.47783251243 55.815475755137854 L 469.64039408879 52.58282747019675 L 472.80295566514 51.06158121845975 L 475.9655172415 52.96313903313096 L 479.12807881786 51.53697067212755 L 482.29064039396 49.54033496672275 L 485.45320197032 45.832297228113745 L 488.61576354668 38.653916477729794 L 491.77832512304 30.325093249469703 L 494.94088669939 24.91516126673001 L 498.10344827575 22.509690631170912 L 501.26600985211 21.016967746654004 L 504.42857142846 23.013603452058803 L 507.59113300482 5.9090909090909065 L 510.75369458118 37.27528706209314 L 513.91625615754 47.73385504278505 L 517.07881773389 54.332260659694285 L 520.24137931025 59.143201930812566 L 523.40394088661 55.34008630147005 L 526.56650246296 52.487749579463156 L 529.72906403932 47.73385504278505 L 532.89162561568 41.55379214510344 L 536.05418719204 43.93073941344254 L 539.21674876839 49.63541285745626 L 542.37931034475 46.79258392452277 L 545.54187192111 53.91391794046656 L 548.70443349746 57.717033569809075 L 551.86699507382 75.781832809186 L 555.02955665018 84.8142324288744 L 558.19211822654 86.71579024354571 L 561.35467980289 84.3388429752066 L 564.51724137925 86.20236963358448 L 567.67980295561 90.32875009142103 L 570.84236453196 91.94507423389162 L 574.00492610832 92.59160389087985 L 577.16748768468 89.0927375118847 L 580.33004926104 94.33152929130404 L 583.49261083739 95.27280040956632 L 586.65517241375 97.64974767790534 L 589.81773399011 103.89636509910044 L 592.98029556646 103.01214071527826 L 596.14285714282 100.16931178234478 L 599.30541871918 101.45286330724784 L 602.46798029554 102.40364221458353 L 605.63054187189 103.35442112191913 L 608.79310344825 99.55130549257663 L 611.95566502461 100.50208439991223 L 615.11822660097 99.07591603890882 L 618.28078817732 98.60052658524103 L 621.44334975368 98.12513713157321 L 624.60591133004 97.64974767790534 L 627.76847290639 94.79741095589851 L 630.93103448275 95.27280040956632 L 634.09359605911 113.98412930593139 L 637.25615763547 119.51766254662476 L 640.41871921182 119.51766254662476" class="highcharts-graph" stroke="#0a64a6" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" role="region" tabindex="-1" aria-label="MARA, series 1 of 2. line with 203 data points. line series for MARA. Y axis, Price"></path>
                                                                <path fill="none" d="M -8.418719211822701 115.12506399473419 L 1.5812807881773 115.12506399473419 L 4.7438423645345 101.45286330724784 L 7.9064039408917 111.91143128793975 L 11.068965517249 109.05909456593284 L 14.231527093606 110.96065238060413 L 17.394088669963 103.82981057558693 L 20.55665024632 104.30520002925473 L 23.719211822678 98.12513713157321 L 26.881773399035 108.10831565859723 L 30.044334975392 118.56688363928914 L 33.206896551749 118.93768741315003 L 36.369458128106 117.14071527828565 L 39.532019704463 113.33759964894315 L 42.694581280821 114.28837855627884 L 45.857142857178 110.32363051268923 L 49.019704433535 111.43604183427195 L 52.182266009892 112.86221019527535 L 55.344827586249 114.28837855627884 L 58.507389162607 112.65303883566158 L 61.669950738964 112.37731295253421 L 64.832512315321 114.28837855627884 L 67.995073891678 114.95392379141374 L 71.157635468035 115.71454691728225 L 74.320197044392 119.04227309295695 L 77.48275862075 118.56688363928914 L 80.645320197107 117.14071527828565 L 83.807881773464 117.14071527828565 L 86.970443349821 114.64016675199296 L 90.133004926178 115.43882103415488 L 93.295566502536 116.18993637095005 L 96.458128078893 119.99305200029255 L 99.62068965525 119.51766254662476 L 102.78325123161 119.51766254662476 L 105.94581280796 116.97908286403865 L 109.10837438432 116.66532582461785 L 112.27093596068 116.0758429020698 L 115.43349753704 117.14071527828565 L 118.59605911339 115.71454691728225 L 121.75862068975 117.61610473195354 L 124.92118226611 116.18993637095005 L 128.08374384246 111.43604183427195 L 131.24630541882 117.61610473195354 L 134.40886699518 118.1390331309881 L 137.57142857154 116.18993637095005 L 140.73399014789 119.04227309295695 L 143.89655172425 114.28837855627884 L 147.05911330061 118.56688363928914 L 150.22167487696 121.41922036129597 L 153.38423645332 118.09149418562134 L 156.54679802968 114.76376800994665 L 159.70935960604 111.91143128793975 L 162.87192118214 113.33759964894315 L 166.0344827585 110.48526292693634 L 169.19704433486 112.4058363197543 L 172.35960591121 117.61610473195354 L 175.52216748757 120.46844145396037 L 178.68472906393 124.0909090909091 L 181.84729064028 123.32077817596726 L 185.00985221664 122.36999926863166 L 188.172413793 119.69831053901852 L 191.33497536936 119.86945074233896 L 194.49753694571 116.66532582461785 L 197.66009852207 122.84538872229946 L 200.82266009843 123.71059752797488 L 203.98522167478 111.22687047465809 L 207.14778325114 112.38682074160755 L 210.3103448275 102.6793680977108 L 213.47290640386 93.37124259489502 L 216.63546798021 76.25722226285379 L 219.79802955657 82.9126746142032 L 222.96059113293 90.51890587288821 L 226.12315270928 92.42046368755942 L 229.28571428564 92.20178453887223 L 232.448275862 89.66320485628611 L 235.61083743836 84.3388429752066 L 238.77339901471 80.06033789219629 L 241.93596059107 82.9126746142032 L 245.09852216743 81.0111167995319 L 248.26108374378 76.7326117165216 L 251.42364532014 76.25722226285379 L 254.5862068965 81.9618957068676 L 257.74876847286 62.93680977108164 L 260.91133004921 58.19242302347696 L 264.07389162557 47.73385504278505 L 267.23645320193 78.15878007752508 L 270.39901477829 86.57317340744535 L 273.56157635464 79.10955898486068 L 276.724137931 81.9618957068676 L 279.88669950736 74.35566444818258 L 283.04926108371 74.83105390185038 L 286.21182266007 80.5357273458641 L 289.37438423643 74.83105390185038 L 292.53694581279 71.02793827250788 L 295.69950738914 73.40488554084689 L 298.8620689655 67.74775104219992 L 302.02463054186 75.31595114459152 L 305.18719211821 78.6341695311929 L 308.34975369457 75.781832809186 L 311.51231527093 76.93227528706211 L 314.67487684729 80.91603890879838 L 317.83743842364 80.86849996343156 L 321 75.36349008995828 L 324.16256157636 80.5357273458641 L 327.32512315271 79.10955898486068 L 330.48768472907 79.10955898486068 L 333.65024630543 82.80808893439627 L 336.81280788179 83.8634535215388 L 339.97536945814 83.8634535215388 L 343.1379310345 84.8142324288744 L 346.30049261086 84.3388429752066 L 349.46305418721 82.4372851605354 L 352.62561576357 81.0111167995319 L 355.78817733993 81.0111167995319 L 358.95073891629 78.6341695311929 L 362.11330049264 83.388064067871 L 365.275862069 81.08717911211875 L 368.43842364536 79.5849484385285 L 371.60098522171 81.4865062531997 L 374.76354679807 87.66656915088132 L 377.92610837443 87.66656915088132 L 381.08866995079 83.8634535215388 L 384.25123152714 87.66656915088132 L 387.4137931035 87.1911796972135 L 390.57635467986 80.06033789219629 L 393.73891625622 71.40824983544209 L 396.90147783257 69.6683244350179 L 400.06403940893 62.946317560155066 L 403.22660098529 69.60176991150439 L 406.38916256164 62.470928106487264 L 409.551724138 67.70021209683318 L 412.71428571436 67.69070430775984 L 415.87684729072 67.70021209683318 L 419.03940886707 66.74943318949758 L 422.20197044343 59.32384992320634 L 425.36453201979 58.19242302347696 L 428.52709359614 50.32948145981133 L 431.6896551725 44.40612886711034 L 434.85221674886 52.487749579463156 L 438.01477832522 55.34008630147005 L 441.17733990157 56.76625466247347 L 444.33990147793 57.717033569809075 L 447.50246305429 59.143201930812566 L 450.66502463064 58.667812477144764 L 453.827586207 57.717033569809075 L 456.99014778336 56.35741973231917 L 460.15270935972 54.86469684780225 L 463.31527093607 56.290865208805656 L 466.47783251243 55.815475755137854 L 469.64039408879 52.58282747019675 L 472.80295566514 51.06158121845975 L 475.9655172415 52.96313903313096 L 479.12807881786 51.53697067212755 L 482.29064039396 49.54033496672275 L 485.45320197032 45.832297228113745 L 488.61576354668 38.653916477729794 L 491.77832512304 30.325093249469703 L 494.94088669939 24.91516126673001 L 498.10344827575 22.509690631170912 L 501.26600985211 21.016967746654004 L 504.42857142846 23.013603452058803 L 507.59113300482 5.9090909090909065 L 510.75369458118 37.27528706209314 L 513.91625615754 47.73385504278505 L 517.07881773389 54.332260659694285 L 520.24137931025 59.143201930812566 L 523.40394088661 55.34008630147005 L 526.56650246296 52.487749579463156 L 529.72906403932 47.73385504278505 L 532.89162561568 41.55379214510344 L 536.05418719204 43.93073941344254 L 539.21674876839 49.63541285745626 L 542.37931034475 46.79258392452277 L 545.54187192111 53.91391794046656 L 548.70443349746 57.717033569809075 L 551.86699507382 75.781832809186 L 555.02955665018 84.8142324288744 L 558.19211822654 86.71579024354571 L 561.35467980289 84.3388429752066 L 564.51724137925 86.20236963358448 L 567.67980295561 90.32875009142103 L 570.84236453196 91.94507423389162 L 574.00492610832 92.59160389087985 L 577.16748768468 89.0927375118847 L 580.33004926104 94.33152929130404 L 583.49261083739 95.27280040956632 L 586.65517241375 97.64974767790534 L 589.81773399011 103.89636509910044 L 592.98029556646 103.01214071527826 L 596.14285714282 100.16931178234478 L 599.30541871918 101.45286330724784 L 602.46798029554 102.40364221458353 L 605.63054187189 103.35442112191913 L 608.79310344825 99.55130549257663 L 611.95566502461 100.50208439991223 L 615.11822660097 99.07591603890882 L 618.28078817732 98.60052658524103 L 621.44334975368 98.12513713157321 L 624.60591133004 97.64974767790534 L 627.76847290639 94.79741095589851 L 630.93103448275 95.27280040956632 L 634.09359605911 113.98412930593139 L 637.25615763547 119.51766254662476 L 640.41871921182 119.51766254662476 L 650.41871921182 119.51766254662476" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class="highcharts-tracker"></path>
                                                            </g>
                                                            <g class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-undefined highcharts-tracker " transform="translate(10,20) scale(1 1)" clip-path="none">
                                                                <path fill="#0a64a6" d="M 188 119.69831053901852 A 0 0 0 1 1 188 119.69831053901852 Z" class="highcharts-halo highcharts-color-undefined" fill-opacity="0.25"></path>
                                                                <path fill="#0a64a6" d="M 193 119.69831053901852 A 5 5 0 1 1 192.9999975000002 119.69331053985185 Z" stroke="white" stroke-width="1" visibility="hidden"></path>
                                                            </g>
                                                        </g>
                                                        <text x="10" text-anchor="start" class="highcharts-title" style="color:#666;font-size:13px;fill:#666;" y="20" aria-hidden="true">
                                                            <tspan>Frequency:10M</tspan>
                                                        </text>
                                                        <g class="highcharts-axis-labels highcharts-xaxis-labels ">
                                                            <text x="28.65911330048137" style="color:null;cursor:default;font-size:null;" text-anchor="middle" transform="translate(0,0)" y="203" opacity="1">
                                                                <tspan>Nov …</tspan>
                                                                <title>Nov 29</title></text>
                                                            <text x="137.81266713594124" style="color:null;cursor:default;font-size:null;" text-anchor="middle" transform="translate(0,0)" y="203" opacity="1">
                                                                <tspan>Nov 30</tspan>
                                                            </text>
                                                            <text x="264.315130189976" style="color:null;cursor:default;font-size:null;" text-anchor="middle" transform="translate(0,0)" y="203" opacity="1">
                                                                <tspan>Dec 1</tspan>
                                                            </text>
                                                            <text x="390.81759324426315" style="color:null;cursor:default;font-size:null;" text-anchor="middle" transform="translate(0,0)" y="203" opacity="1">
                                                                <tspan>Dec 2</tspan>
                                                            </text>
                                                            <text x="517.5187079306864" style="color:null;cursor:default;font-size:null;" text-anchor="middle" transform="translate(0,0)" y="203" opacity="1">
                                                                <tspan>Dec 5</tspan>
                                                            </text>
                                                            <text x="643.822519352585" style="color:null;cursor:default;font-size:null;" text-anchor="middle" transform="translate(0,0)" y="203" opacity="1">
                                                                <tspan>Dec 6</tspan>
                                                            </text>
                                                        </g>
                                                        <g class="highcharts-axis-labels highcharts-yaxis-labels ">
                                                            <text x="679" style="color:null;cursor:default;font-size:null;" text-anchor="end" transform="translate(0,0)" y="125" opacity="1">
                                                                <tspan>6</tspan>
                                                            </text>
                                                            <text x="679" style="color:null;cursor:default;font-size:null;" text-anchor="end" transform="translate(0,0)" y="77" opacity="1">
                                                                <tspan>6.5</tspan>
                                                            </text>
                                                            <text x="679" style="color:null;cursor:default;font-size:null;" text-anchor="end" transform="translate(0,0)" y="30" opacity="1">
                                                                <tspan>7</tspan>
                                                            </text>
                                                        </g>
                                                        <g class="highcharts-axis-labels highcharts-yaxis-labels ">
                                                            <text x="0" style="color:null;cursor:default;font-size:null;" text-anchor="end" transform="translate(0,0)" y="-9999">
                                                                <tspan>0</tspan>
                                                            </text>
                                                            <text x="679" style="color:null;cursor:default;font-size:null;" text-anchor="end" transform="translate(0,0)" y="169" opacity="1">
                                                                <tspan>2 400k</tspan>
                                                            </text>
                                                        </g>
                                                        <text x="715" class="highcharts-credits" text-anchor="end" style="cursor:pointer;color:#7d7d7d;font-size:11px;fill:#7d7d7d;" y="215" aria-hidden="true">
                                                            <tspan>©</tspan>
                                                            <tspan class="qmod-copy-quote" dx="0">quote</tspan>
                                                            <tspan class="qmod-copy-media" dx="0">media</tspan>
                                                        </text>
                                                        <g class="highcharts-label highcharts-tooltip highcharts-color-undefined" style="cursor:default;pointer-events:none;white-space:nowrap;padding:0;" transform="translate(210,-9999)" opacity="0" visibility="visible">
                                                            <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3 0 L 261 0 C 264 0 264 0 264 3 L 264 82 C 264 85 264 85 261 85 L 3 85 C 0 85 0 85 0 82 L 0 3 C 0 0 0 0 3 0"></path>
                                                        </g>
                                                    </svg>
                                                    <div class="highcharts-label highcharts-tooltip" style="position: absolute; left: 210px; top: -9999px; opacity: 0; pointer-events: none; visibility: visible;">
                                                        <span style="position: absolute; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;"><div class="qmod-tt-title"><span class="qmod-tt-title-date">Wednesday, Nov 30, 2022</span> <span class="qmod-tt-title-time">12:40PM</span></div><table><tbody><tr><th class="qmod-textl">Symbol</th><th class="qmod-textr">Last</th><th class="qmod-textr">Volume</th></tr><tr><td class="qmod-chart-symbol"><i style="color:#0a64a6" class="fa fa-fw fa-circle"></i>&nbsp;MARA</td><td class="qmod-textr">5.8731</td><td class="qmod-textr">112.58k</td></tr></tbody></table></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="qmod-chart-buttons-rs chart-tabs">
                                                <ul class="qmod-legend"><!-- rivets: each-time -->
                                                    <li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected">
                                                        <span class="qmod-btn-text">1D</span>
                                                    </li>
                                                    <li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected" class=" qmod-active">
                                                        <span class="qmod-btn-text">5D</span>
                                                    </li>
                                                    <li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected">
                                                        <span class="qmod-btn-text">1M</span>
                                                    </li>
                                                    <li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected">
                                                        <span class="qmod-btn-text">3M</span>
                                                    </li>
                                                    <li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected">
                                                        <span class="qmod-btn-text">6M</span>
                                                    </li>
                                                    <li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected">
                                                        <span class="qmod-btn-text">1Y</span>
                                                    </li>
                                                    <li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected">
                                                        <span class="qmod-btn-text">2Y</span>
                                                    </li>
                                                    <li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected" style="display: none;">
                                                        <span class="qmod-btn-text">3Y</span>
                                                    </li>
                                                    <li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected">
                                                        <span class="qmod-btn-text">5Y</span>
                                                    </li>
                                                    <li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected" style="display: none;">
                                                        <span class="qmod-btn-text">10Y</span>
                                                    </li>
                                                    <li rv-show="time.visible" rv-on-click="scope.binders.dateRange.change" rv-class-qmod-active="index|= scope.binders.dateRange.selected" style="display: none;">
                                                        <span class="qmod-btn-text"></span>
                                                    </li>
                                                </ul>
                                            </div><!--end chart tabs--></div>
                                    </div><!-- rivets: if data.datatype | = 'n/a' --></div>
                            </div>

                        </main>
                    </div>
                </div>
            </div><!-- //container-->
        </div>
        <div class="eq-container">
            <div class="module-quick-links">
                <ul>
                    <li><a href="/news-events/email-alerts" class="email">Email Alerts</a></li>
                    <li><a href="/company-information/contacts" class="contacts">Contacts</a></li>
                    <li>
                        <a href="https://ir.example.com/news-events/press-releases/rss" class="rss" target="_blank" rel="noopener">RSS News Feed</a>
                    </li>
                </ul>
            </div>
        </div>

        @include('pages.includes.footer')

    </div>

@endsection

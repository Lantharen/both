@extends('layouts.base')

@section('page-title', 'Historical Data :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107629 page-type-qmod---historical-data pg-stock-data-historical-data ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Historical Data</h1>
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
                                    <li class="">
                                        <a href="/stock-data/charts" target="_self">Charts</a>

                                    </li>
                                    <li class="active active-landing">
                                        <a href="/stock-data/historical-data" target="_self">Historical Data</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <div class="historical-data">
                                <div data-name="qmod" data-qmod-tool="pricehistory" data-qmod-params="{&quot;lang&quot;:&quot;en&quot;,&quot;paging&quot;:false,&quot;showLogo&quot;:false,&quot;lowHigh&quot;:false,&quot;symbol&quot;:&quot;MARA&quot;}" class="qtool" data-template-i-d="1670339879263">
                                    <div class="qmod-ui-tool qmod-pricehistory">
                                        <div rv-show="modal.show" class="qmod-modal-overlay" style="display: none;">
                                            <div class="qmod-ui-modal">
                                                <div class="qmod-ui-modal-titlebar">
                                                    <div class="qmod-ui-modal-title">Settings</div>
                                                    <div class="qmod-ui-titlebar-buttons">
                                                        <button rv-on-click="modal.close" class="qmod-btn qmod-modal-close">
                                                            <i class="fa fa-times"></i><span class="sr-only">Close window</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="qmod-ui-modal-body">
                                                    <div class="qmod-container qmod-pricehistory-settings">
                                                        <div class="pure-g">
                                                            <div class="pure-u-1 pure-u-sm-1-2">
                                                                <span class="qmod-field-label">Columns</span></div>
                                                            <div class="pure-u-1 pure-u-sm-1-2">
                                                                <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm qmod-dd-inline-label qmod-adjust-by">
                                                                    <span class="qmod-dropdown-label">Adjusted By:</span>
                                                                    <div class="qmod-toggle-wrap qmod-dropdown">
                                                                        <span rv-on-click="scope.binders.toggleSplits" data-value="toggle" rv-class-qmod-toggle-active="scope.binders.toggle| = &quot;S&quot;" class="qmod-toggle-btn qmod-full">Splits &amp; Dividends</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- rivets: each-col -->
                                                            <div class="pure-u-1 pure-u-md-1-3">
                                                                <div class="qmod-option-wrap">
                                                                    <span class="qmod-field-label-sm">Price Data</span>
                                                                    <div class="pure-g"><!-- rivets: each-dp -->
                                                                        <div class="pure-u-1-2">
                                                                            <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm qmod-dd-inline-label qmod-toggle-column">
                                                                                <span class="qmod-icon-toggle-icon"><i data-qmod-true-class="fa-toggle-on" data-qmod-false-class="fa-toggle-off" rv-ifclass="dp.enabled" rv-data-parent="col.ind" rv-data-child="index" rv-data-col="dp.val" rv-on-click="scope.binders.toggleCols" class="fa fa-toggle-on" data-parent="0" data-child="0" data-col="1"></i></span><span class="qmod-dropdown-label">Open</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="pure-u-1-2">
                                                                            <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm qmod-dd-inline-label qmod-toggle-column">
                                                                                <span class="qmod-icon-toggle-icon"><i data-qmod-true-class="fa-toggle-on" data-qmod-false-class="fa-toggle-off" rv-ifclass="dp.enabled" rv-data-parent="col.ind" rv-data-child="index" rv-data-col="dp.val" rv-on-click="scope.binders.toggleCols" class="fa fa-toggle-on" data-parent="0" data-child="1" data-col="2"></i></span><span class="qmod-dropdown-label">High</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="pure-u-1-2">
                                                                            <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm qmod-dd-inline-label qmod-toggle-column">
                                                                                <span class="qmod-icon-toggle-icon"><i data-qmod-true-class="fa-toggle-on" data-qmod-false-class="fa-toggle-off" rv-ifclass="dp.enabled" rv-data-parent="col.ind" rv-data-child="index" rv-data-col="dp.val" rv-on-click="scope.binders.toggleCols" class="fa fa-toggle-on" data-parent="0" data-child="2" data-col="3"></i></span><span class="qmod-dropdown-label">Low</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="pure-u-1-2">
                                                                            <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm qmod-dd-inline-label qmod-toggle-column">
                                                                                <span class="qmod-icon-toggle-icon"><i data-qmod-true-class="fa-toggle-on" data-qmod-false-class="fa-toggle-off" rv-ifclass="dp.enabled" rv-data-parent="col.ind" rv-data-child="index" rv-data-col="dp.val" rv-on-click="scope.binders.toggleCols" class="fa fa-toggle-on" data-parent="0" data-child="3" data-col="4"></i></span><span class="qmod-dropdown-label">Close</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="pure-u-1-2">
                                                                            <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm qmod-dd-inline-label qmod-toggle-column">
                                                                                <span class="qmod-icon-toggle-icon"><i data-qmod-true-class="fa-toggle-on" data-qmod-false-class="fa-toggle-off" rv-ifclass="dp.enabled" rv-data-parent="col.ind" rv-data-child="index" rv-data-col="dp.val" rv-on-click="scope.binders.toggleCols" class="fa fa-toggle-on" data-parent="0" data-child="4" data-col="5"></i></span><span class="qmod-dropdown-label">VWAP</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pure-u-1 pure-u-md-1-3">
                                                                <div class="qmod-option-wrap">
                                                                    <span class="qmod-field-label-sm">Price Data – Other</span>
                                                                    <div class="pure-g"><!-- rivets: each-dp -->
                                                                        <div class="pure-u-1-2">
                                                                            <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm qmod-dd-inline-label qmod-toggle-column">
                                                                                <span class="qmod-icon-toggle-icon"><i data-qmod-true-class="fa-toggle-on" data-qmod-false-class="fa-toggle-off" rv-ifclass="dp.enabled" rv-data-parent="col.ind" rv-data-child="index" rv-data-col="dp.val" rv-on-click="scope.binders.toggleCols" class="fa fa-toggle-on" data-parent="1" data-child="0" data-col="6"></i></span><span class="qmod-dropdown-label">Volume</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="pure-u-1-2">
                                                                            <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm qmod-dd-inline-label qmod-toggle-column">
                                                                                <span class="qmod-icon-toggle-icon"><i data-qmod-true-class="fa-toggle-on" data-qmod-false-class="fa-toggle-off" rv-ifclass="dp.enabled" rv-data-parent="col.ind" rv-data-child="index" rv-data-col="dp.val" rv-on-click="scope.binders.toggleCols" class="fa fa-toggle-on" data-parent="1" data-child="1" data-col="7"></i></span><span class="qmod-dropdown-label">% Chg</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="pure-u-1-2">
                                                                            <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm qmod-dd-inline-label qmod-toggle-column">
                                                                                <span class="qmod-icon-toggle-icon"><i data-qmod-true-class="fa-toggle-on" data-qmod-false-class="fa-toggle-off" rv-ifclass="dp.enabled" rv-data-parent="col.ind" rv-data-child="index" rv-data-col="dp.val" rv-on-click="scope.binders.toggleCols" class="fa fa-toggle-on" data-parent="1" data-child="2" data-col="8"></i></span><span class="qmod-dropdown-label">$ Chg</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="pure-u-1-2">
                                                                            <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm qmod-dd-inline-label qmod-toggle-column">
                                                                                <span class="qmod-icon-toggle-icon"><i data-qmod-true-class="fa-toggle-on" data-qmod-false-class="fa-toggle-off" rv-ifclass="dp.enabled" rv-data-parent="col.ind" rv-data-child="index" rv-data-col="dp.val" rv-on-click="scope.binders.toggleCols" class="fa fa-toggle-on" data-parent="1" data-child="3" data-col="9"></i></span><span class="qmod-dropdown-label">Trade Val</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="pure-u-1-2">
                                                                            <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm qmod-dd-inline-label qmod-toggle-column">
                                                                                <span class="qmod-icon-toggle-icon"><i data-qmod-true-class="fa-toggle-on" data-qmod-false-class="fa-toggle-off" rv-ifclass="dp.enabled" rv-data-parent="col.ind" rv-data-child="index" rv-data-col="dp.val" rv-on-click="scope.binders.toggleCols" class="fa fa-toggle-on" data-parent="1" data-child="4" data-col="10"></i></span><span class="qmod-dropdown-label"># Trades</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="pure-u-1-2">
                                                                            <div class="qmod-dd-wrap qmod-dd-inline qmod-dd-sm qmod-dd-inline-label qmod-toggle-column">
                                                                                <span class="qmod-icon-toggle-icon"><i data-qmod-true-class="fa-toggle-on" data-qmod-false-class="fa-toggle-off" rv-ifclass="dp.enabled" rv-data-parent="col.ind" rv-data-child="index" rv-data-col="dp.val" rv-on-click="scope.binders.toggleCols" class="fa fa-toggle-off" data-parent="1" data-child="5" data-col="11"></i></span><span class="qmod-dropdown-label">Open Interest</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pure-u-1">
                                                                <span class="qmod-field-label qmod-last-label"><button rv-on-click="modal.close" class="qmod-btn qmod-btn-sm qmod-btn-go qmod-darkblue">Save</button></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- rivets: unless data.entitlement | = 'NA' -->
                                        <div class="qmod-quotehead"><!-- rivets: if historyData.eoddata -->
                                            <div class="qmod-block-wrapper">
                                                <div class="qmod-header"><h2>Price History</h2>
                                                    <h3 class="company">Marathon Digital Holdings Inc.</h3>
                                                    <p class="symbol">NASDAQ Capital Market: MARA</p>
                                                    <div class="clear"></div>
                                                </div><!--end quote-header-->
                                                <div class="qmod-pricehistory-chart">
                                                    <div class="phistory-chart" data-highcharts-chart="0">
                                                        <div id="highcharts-mt73lzz-0" class="highcharts-container " style="position: relative; overflow: hidden; width: 720px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                            <svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="720" height="400">
                                                                <desc>Created with Highstock 5.0.7</desc>
                                                                <defs>
                                                                    <clipPath id="highcharts-mt73lzz-1">
                                                                        <rect x="0" y="0" width="670" height="329" fill="none"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="highcharts-mt73lzz-4">
                                                                        <rect x="0" y="0" width="670" height="263" fill="none"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="highcharts-mt73lzz-5">
                                                                        <rect x="0" y="0" width="670" height="49" fill="none"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="720" height="400" rx="0" ry="0"></rect>
                                                                <rect fill="none" class="highcharts-plot-background" x="10" y="20" width="670" height="329"></rect>
                                                                <g class="highcharts-grid highcharts-xaxis-grid ">
                                                                    <path fill="none" class="highcharts-grid-line" d="M 57.5 20 L 57.5 283 M 57.5 300 L 57.5 349" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-grid-line" d="M 163.5 20 L 163.5 283 M 163.5 300 L 163.5 349" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-grid-line" d="M 248.5 20 L 248.5 283 M 248.5 300 L 248.5 349" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-grid-line" d="M 333.5 20 L 333.5 283 M 333.5 300 L 333.5 349" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-grid-line" d="M 450.5 20 L 450.5 283 M 450.5 300 L 450.5 349" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-grid-line" d="M 535.5 20 L 535.5 283 M 535.5 300 L 535.5 349" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-grid-line" d="M 663.5 20 L 663.5 283 M 663.5 300 L 663.5 349" opacity="1"></path>
                                                                </g>
                                                                <g class="highcharts-grid highcharts-yaxis-grid ">
                                                                    <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 283.5 L 680 283.5" opacity="1"></path>
                                                                    <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 217.5 L 680 217.5" opacity="1"></path>
                                                                    <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 152.5 L 680 152.5" opacity="1"></path>
                                                                    <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 86.5 L 680 86.5" opacity="1"></path>
                                                                    <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 19.5 L 680 19.5" opacity="1"></path>
                                                                </g>
                                                                <g class="highcharts-grid highcharts-yaxis-grid ">
                                                                    <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 349.5 L 680 349.5" opacity="1"></path>
                                                                    <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 10 299.5 L 680 299.5" opacity="1"></path>
                                                                </g>
                                                                <rect fill="none" class="highcharts-plot-border" x="10" y="20" width="670" height="329"></rect>
                                                                <g class="highcharts-axis highcharts-xaxis ">
                                                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 57.5 349 L 57.5 359" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 163.5 349 L 163.5 359" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 248.5 349 L 248.5 359" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 333.5 349 L 333.5 359" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 450.5 349 L 450.5 359" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 535.5 349 L 535.5 359" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 663.5 349 L 663.5 359" opacity="1"></path>
                                                                    <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" d="M 10 349.5 L 680 349.5"></path>
                                                                </g>
                                                                <g class="highcharts-axis highcharts-yaxis ">
                                                                    <path fill="none" class="highcharts-axis-line" d="M 710 20 L 710 283"></path>
                                                                </g>
                                                                <g class="highcharts-axis highcharts-yaxis ">
                                                                    <text x="690" text-anchor="middle" transform="translate(0,0) rotate(90 690 324.5)" class="highcharts-axis-title" style="color:#434348;fill:#434348;" y="324.5">Volume</text>
                                                                    <path fill="none" class="highcharts-axis-line" d="M 680 300 L 680 349"></path>
                                                                </g>
                                                                <g class="highcharts-series-group">
                                                                    <g class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-color-undefined highcharts-tracker" transform="translate(10,300) scale(1 1)" clip-path="url(#highcharts-mt73lzz-5)">
                                                                        <rect x="7.5" y="31.5" width="16" height="18" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="39.5" y="9.5" width="16" height="40" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="71.5" y="18.5" width="16" height="31" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="103.5" y="14.5" width="16" height="35" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="135.5" y="22.5" width="16" height="27" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="167.5" y="34.5" width="16" height="15" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="199.5" y="31.5" width="16" height="18" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="231.5" y="26.5" width="16" height="23" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="263.5" y="29.5" width="16" height="20" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="294.5" y="21.5" width="16" height="28" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="326.5" y="17.5" width="16" height="32" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="358.5" y="21.5" width="16" height="28" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="390.5" y="27.5" width="16" height="22" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="422.5" y="40.5" width="16" height="9" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="454.5" y="31.5" width="16" height="18" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="486.5" y="34.5" width="16" height="15" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="518.5" y="21.5" width="16" height="28" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="550.5" y="29.5" width="16" height="20" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="582.5" y="22.5" width="16" height="27" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                        <rect x="613.5" y="19.5" width="16" height="30" fill="rgba(0,90,165,1)" class="highcharts-point" stroke="#ffffff" stroke-width="1"></rect>
                                                                    </g>
                                                                    <g class="highcharts-markers highcharts-series-1 highcharts-column-series highcharts-color-undefined " transform="translate(10,300) scale(1 1)" clip-path="none"></g>
                                                                    <g class="highcharts-series highcharts-series-2 highcharts-spline-series highcharts-color-0 " transform="translate(10,20) scale(1 1)" clip-path="url(#highcharts-mt73lzz-4)">
                                                                        <path fill="none" d="M 15.952380952381 51.39677499999999 C 15.952380952381 51.39677499999999 35.0952380952382 74.20873750000001 47.857142857143 74.20873750000001 C 60.6190476190478 74.20873750000001 67.0000000000002 69.34652500000001 79.761904761905 69.34652500000001 C 92.523809523811 69.34652500000001 98.904761904764 70.08621249999977 111.66666666667 72.57484999999997 C 124.42857142857402 75.06348749999977 130.80952380952598 81.78971249999998 143.57142857143 81.78971249999998 C 156.333333333334 81.78971249999998 162.714285714286 74.70514999999995 175.47619047619 73.74519999999998 C 188.238095238094 72.78525000000002 194.61904761904597 72.78525000000002 207.38095238095 72.78525000000002 C 220.14285714285398 72.78525000000002 226.523809523806 98.33570000000176 239.28571428571 109.78606249999999 C 252.04761904761799 121.23642500000179 258.428571428572 123.68758499999902 271.19047619048 130.03706250000002 C 283.95238095238403 136.38653999999903 290.33333333333604 132.25218000000004 303.09523809524 141.53345000000002 C 315.857142857144 150.81472000000002 322.238095238096 167.6158175 335 176.4434125 C 347.761904761904 185.2710075 354.142857142856 185.671425 366.90476190476 185.671425 C 379.66666666666396 185.671425 386.04761904761597 180.477175 398.80952380952 180.477175 C 411.571428571428 180.477175 417.952380952382 185.48272249999945 430.71428571429 188.8603 C 443.476190476194 192.23787749999946 449.857142857146 195.81336249999998 462.61904761905 197.3650625 C 475.38095238095394 198.9167625 481.76190476190595 198.9167625 494.52380952381 198.9167625 C 507.28571428571394 198.9167625 513.666666666666 197.0810225 526.42857142857 194.4128875 C 539.190476190474 191.7447525 545.5714285714259 188.3698049999996 558.33333333333 185.5760875 C 571.095238095238 182.78236999999956 577.476190476192 180.4443 590.2380952381 180.4443 C 603.000000000004 180.4443 622.14285714286 182.8737625 622.14285714286 182.8737625" class="highcharts-graph" stroke="#0B73BE" stroke-width="2" stroke-dasharray="8,6"></path>
                                                                        <path fill="none" d="M 5.9523809523810005 51.39677499999999 L 15.952380952381 51.39677499999999 C 15.952380952381 51.39677499999999 35.0952380952382 74.20873750000001 47.857142857143 74.20873750000001 C 60.6190476190478 74.20873750000001 67.0000000000002 69.34652500000001 79.761904761905 69.34652500000001 C 92.523809523811 69.34652500000001 98.904761904764 70.08621249999977 111.66666666667 72.57484999999997 C 124.42857142857402 75.06348749999977 130.80952380952598 81.78971249999998 143.57142857143 81.78971249999998 C 156.333333333334 81.78971249999998 162.714285714286 74.70514999999995 175.47619047619 73.74519999999998 C 188.238095238094 72.78525000000002 194.61904761904597 72.78525000000002 207.38095238095 72.78525000000002 C 220.14285714285398 72.78525000000002 226.523809523806 98.33570000000176 239.28571428571 109.78606249999999 C 252.04761904761799 121.23642500000179 258.428571428572 123.68758499999902 271.19047619048 130.03706250000002 C 283.95238095238403 136.38653999999903 290.33333333333604 132.25218000000004 303.09523809524 141.53345000000002 C 315.857142857144 150.81472000000002 322.238095238096 167.6158175 335 176.4434125 C 347.761904761904 185.2710075 354.142857142856 185.671425 366.90476190476 185.671425 C 379.66666666666396 185.671425 386.04761904761597 180.477175 398.80952380952 180.477175 C 411.571428571428 180.477175 417.952380952382 185.48272249999945 430.71428571429 188.8603 C 443.476190476194 192.23787749999946 449.857142857146 195.81336249999998 462.61904761905 197.3650625 C 475.38095238095394 198.9167625 481.76190476190595 198.9167625 494.52380952381 198.9167625 C 507.28571428571394 198.9167625 513.666666666666 197.0810225 526.42857142857 194.4128875 C 539.190476190474 191.7447525 545.5714285714259 188.3698049999996 558.33333333333 185.5760875 C 571.095238095238 182.78236999999956 577.476190476192 180.4443 590.2380952381 180.4443 C 603.000000000004 180.4443 622.14285714286 182.8737625 622.14285714286 182.8737625 L 632.14285714286 182.8737625" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class="highcharts-tracker"></path>
                                                                    </g>
                                                                    <g class="highcharts-markers highcharts-series-2 highcharts-spline-series highcharts-color-0 highcharts-tracker" transform="translate(10,20) scale(1 1)" clip-path="none"></g>
                                                                    <g class="highcharts-series highcharts-series-0 highcharts-candlestick-series highcharts-color-undefined highcharts-tracker" transform="translate(10,20) scale(1 1)" clip-path="url(#highcharts-mt73lzz-1)">
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 7.5 49.5 L 7.5 35.5 L 23.5 35.5 L 23.5 49.5 Z M 15.5 35.5 L 15.5 34 M 15.5 49.5 L 15.5 64" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 39.5 67.5 L 39.5 66.5 L 55.5 66.5 L 55.5 67.5 Z M 47.5 66.5 L 47.5 44 M 47.5 67.5 L 47.5 92" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#a5d6a7" stroke="#4caf50" stroke-width="1" d="M 71.5 86.5 L 71.5 79.5 L 87.5 79.5 L 87.5 86.5 Z M 79.5 79.5 L 79.5 45 M 79.5 86.5 L 79.5 89" class="highcharts-point highcharts-point-up"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 103.5 66.5 L 103.5 65.5 L 119.5 65.5 L 119.5 66.5 Z M 111.5 65.5 L 111.5 58 M 111.5 66.5 L 111.5 85" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#a5d6a7" stroke="#4caf50" stroke-width="1" d="M 135.5 84.5 L 135.5 73.5 L 151.5 73.5 L 151.5 84.5 Z M 143.5 73.5 L 143.5 67 M 143.5 84.5 L 143.5 102" class="highcharts-point highcharts-point-up"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 166.5 82.5 L 166.5 80.5 L 182.5 80.5 L 182.5 82.5 Z M 174.5 80.5 L 174.5 65 M 174.5 82.5 L 174.5 82" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 198.5 82.5 L 198.5 68.5 L 214.5 68.5 L 214.5 82.5 Z M 206.5 68.5 L 206.5 61 M 206.5 82.5 L 206.5 85" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 230.5 121.5 L 230.5 87.5 L 246.5 87.5 L 246.5 121.5 Z M 238.5 87.5 L 238.5 82 M 238.5 121.5 L 238.5 125" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 262.5 131.5 L 262.5 123.5 L 278.5 123.5 L 278.5 131.5 Z M 270.5 123.5 L 270.5 122 M 270.5 131.5 L 270.5 134" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 294.5 149.5 L 294.5 119.5 L 310.5 119.5 L 310.5 149.5 Z M 302.5 119.5 L 302.5 118 M 302.5 149.5 L 302.5 150" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 326.5 191.5 L 326.5 161.5 L 342.5 161.5 L 342.5 191.5 Z M 334.5 161.5 L 334.5 155 M 334.5 191.5 L 334.5 192" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 358.5 183.5 L 358.5 182.5 L 374.5 182.5 L 374.5 183.5 Z M 366.5 182.5 L 366.5 179 M 366.5 183.5 L 366.5 194" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#a5d6a7" stroke="#4caf50" stroke-width="1" d="M 390.5 182.5 L 390.5 181.5 L 406.5 181.5 L 406.5 182.5 Z M 398.5 181.5 L 398.5 172 M 398.5 182.5 L 398.5 187" class="highcharts-point highcharts-point-up"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 422.5 190.5 L 422.5 186.5 L 438.5 186.5 L 438.5 190.5 Z M 430.5 186.5 L 430.5 184 M 430.5 190.5 L 430.5 193" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 454.5 198.5 L 454.5 197.5 L 470.5 197.5 L 470.5 198.5 Z M 462.5 197.5 L 462.5 191 M 462.5 198.5 L 462.5 203" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 486.5 201.5 L 486.5 201.5 L 502.5 201.5 L 502.5 201.5 Z M 494.5 201.5 L 494.5 194 M 494.5 201.5 L 494.5 205" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#a5d6a7" stroke="#4caf50" stroke-width="1" d="M 517.5 196.5 L 517.5 187.5 L 533.5 187.5 L 533.5 196.5 Z M 525.5 187.5 L 525.5 186 M 525.5 196.5 L 525.5 204" class="highcharts-point highcharts-point-up"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 549.5 190.5 L 549.5 186.5 L 565.5 186.5 L 565.5 190.5 Z M 557.5 186.5 L 557.5 176 M 557.5 190.5 L 557.5 193" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#a5d6a7" stroke="#4caf50" stroke-width="1" d="M 581.5 190.5 L 581.5 167.5 L 597.5 167.5 L 597.5 190.5 Z M 589.5 167.5 L 589.5 166 M 589.5 190.5 L 589.5 195" class="highcharts-point highcharts-point-up"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 613.5 193.5 L 613.5 165.5 L 629.5 165.5 L 629.5 193.5 Z M 621.5 165.5 L 621.5 160 M 621.5 193.5 L 621.5 197" class="highcharts-point highcharts-point-down"></path>
                                                                        <path fill="#ef9a9a" stroke="#f44336" stroke-width="1" d="M 645.5 205.5 L 645.5 193.5 L 661.5 193.5 L 661.5 205.5 Z M 653.5 193.5 L 653.5 192 M 653.5 205.5 L 653.5 205" class="highcharts-point highcharts-point-down"></path>
                                                                    </g>
                                                                    <g class="highcharts-markers highcharts-series-0 highcharts-candlestick-series highcharts-color-undefined " transform="translate(10,20) scale(1 1)" clip-path="none"></g>
                                                                </g>
                                                                <g class="highcharts-plot-lines-4">
                                                                    <path fill="none" stroke-dasharray="none" d="M 10 213.5 L 680 213.5"></path>
                                                                </g>
                                                                <g class="highcharts-axis-labels highcharts-yaxis-labels ">
                                                                    <text x="707" style="color:#434348;cursor:default;font-size:11px;font-weight:bold;fill:#434348;" text-anchor="end" transform="translate(0,0)" y="287" opacity="1">
                                                                        <tspan>4</tspan>
                                                                    </text>
                                                                    <text x="707" style="color:#434348;cursor:default;font-size:11px;font-weight:bold;fill:#434348;" text-anchor="end" transform="translate(0,0)" y="221" opacity="1">
                                                                        <tspan>6</tspan>
                                                                    </text>
                                                                    <text x="707" style="color:#434348;cursor:default;font-size:11px;font-weight:bold;fill:#434348;" text-anchor="end" transform="translate(0,0)" y="156" opacity="1">
                                                                        <tspan>8</tspan>
                                                                    </text>
                                                                    <text x="707" style="color:#434348;cursor:default;font-size:11px;font-weight:bold;fill:#434348;" text-anchor="end" transform="translate(0,0)" y="90" opacity="1">
                                                                        <tspan>10</tspan>
                                                                    </text>
                                                                    <text x="707" style="color:#434348;cursor:default;font-size:11px;font-weight:bold;fill:#434348;" text-anchor="end" transform="translate(0,0)" y="24" opacity="1">
                                                                        <tspan>12</tspan>
                                                                    </text>
                                                                </g>
                                                                <g class="highcharts-axis-labels highcharts-xaxis-labels ">
                                                                    <text x="57.85714285714286" style="color:#434348;cursor:default;font-size:11px;fill:#434348;" text-anchor="middle" transform="translate(0,0)" y="368" opacity="1">
                                                                        <tspan>Nov, 8</tspan>
                                                                    </text>
                                                                    <text x="164.20634920634922" style="color:#434348;cursor:default;font-size:11px;fill:#434348;" text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                                                        <tspan>Nov, 12</tspan>
                                                                    </text>
                                                                    <text x="249.2857142857143" style="color:#434348;cursor:default;font-size:11px;fill:#434348;" text-anchor="middle" transform="translate(0,0)" y="368" opacity="1">
                                                                        <tspan>Nov, 16</tspan>
                                                                    </text>
                                                                    <text x="334.3650793650794" style="color:#434348;cursor:default;font-size:11px;fill:#434348;" text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                                                        <tspan>Nov, 20</tspan>
                                                                    </text>
                                                                    <text x="451.3492063492064" style="color:#434348;cursor:default;font-size:11px;fill:#434348;" text-anchor="middle" transform="translate(0,0)" y="368" opacity="1">
                                                                        <tspan>Nov, 26</tspan>
                                                                    </text>
                                                                    <text x="536.4285714285714" style="color:#434348;cursor:default;font-size:11px;fill:#434348;" text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                                                        <tspan>Nov, 30</tspan>
                                                                    </text>
                                                                    <text x="664.047619047619" style="color:#434348;cursor:default;font-size:11px;fill:#434348;" text-anchor="middle" transform="translate(0,0)" y="368" opacity="1">
                                                                        <tspan>Dec, 6</tspan>
                                                                    </text>
                                                                </g>
                                                                <g class="highcharts-axis-labels highcharts-yaxis-labels "></g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="qmod-modifiers">
                                                    <div class="pure-g">
                                                        <div class="pure-u-1 pure-u-md-1-2">
                                                            <div class="qmod-mod-pad qmod-mod-pad-calendar">
                                                                <div class="qmod-btn-icon qmod-calendar-control">
                                                                    <label class="sr-only" for="qmod-fromdate">From Date</label>
                                                                    <div class="inner-addon right-addon">
                                                                        <i class="fa fa-calendar"></i><input type="text" id="qmod-fromdate" name="qmod-fromdate" rv-placeholder="tplLang.fromdate | toLang tLang" class="qmod-datepicker" placeholder="From Date">
                                                                    </div>
                                                                </div>
                                                                <div class="qmod-btn-icon qmod-calendar-control">
                                                                    <label class="sr-only" for="qmod-todate">To Date</label>
                                                                    <div class="inner-addon right-addon">
                                                                        <i class="fa fa-calendar"></i><input type="text" id="qmod-todate" name="qmod-todate" rv-placeholder="tplLang.todate | toLang tLang" class="qmod-datepicker" placeholder="To Date">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pure-u-1 pure-u-md-1-2">
                                                            <div class="qmod-mod-pad qmod-mod-pad-buttons">
                                                                <button rv-on-click="data.loadNewsDates" class="btn">Show Result
                                                                    <div style="display:none;" class="qmod-news-loader-newsdate anim-spin fa fa-spinner"></div>
                                                                </button>
                                                                <button rv-on-click="data.resetNewsDates" class="btn">Show Latest
                                                                    <div style="display:none;" class="qmod-news-loader-newsdate anim-spin fa fa-spinner"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div rv-class-qmod-op-overlay="scope.binders.loader" class="qmod-pricehistory-table-wrap">
                                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                                        <table width="100%" class="qmod-table qmod-table-hover qmod-pricehistory-table nowrap dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
                                                            <thead>
                                                            <tr role="row">
                                                                <th class="qmod-control control sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label="Qmod control">
                                                                    <span class="sr-only">Qmod control</span></th>
                                                                <th data-priority="0" class="qmod-textl qmod-ph-table-head-date sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 83px;" aria-sort="descending" aria-label="Date: activate to sort column ascending">Date</th>
                                                                <th data-priority="0" class="qmod-textr qmod-ph-table-head-open sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 75px;" aria-label="Open: activate to sort column ascending">Open</th>
                                                                <th class="qmod-textr qmod-ph-table-head-high sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 75px;" aria-label="High: activate to sort column ascending">High</th>
                                                                <th class="qmod-textr qmod-ph-table-head-low sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 73px;" aria-label="Low: activate to sort column ascending">Low</th>
                                                                <th data-priority="0" class="qmod-textr qmod-ph-table-head-close sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 78px;" aria-label="Close: activate to sort column ascending">Close</th>
                                                                <th class="qmod-textr qmod-ph-table-head-vwap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 75px;" aria-label="VWAP: activate to sort column ascending">VWAP</th>
                                                                <th data-priority="0" class="qmod-textr qmod-ph-table-head-volume sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 82px;" aria-label="Volume: activate to sort column ascending">Volume</th>
                                                                <th class="qmod-textr qmod-ph-table-head-changepercent sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 53px;" aria-label="% Chg: activate to sort column ascending">% Chg</th>
                                                                <th class="qmod-textr qmod-ph-table-head-change sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 40px;" aria-label="$ Chg: activate to sort column ascending">$ Chg</th>
                                                                <th class="qmod-textr qmod-ph-table-head-totalvalue sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Trade Val: activate to sort column ascending">Trade Val</th>
                                                                <th class="qmod-textr qmod-ph-table-head-totaltrades sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="# Trades: activate to sort column ascending"># Trades</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody><!-- rivets: each-history -->
                                                            <tr role="row" class="odd">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1670277600">2022-12-06</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="6.12">6.12</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="6.16">6.16</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="5.76">5.76</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="5.77">5.77</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="--">--</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="--">--</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="--">--</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="--">--</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="--">--</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="--">--</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1670191200">2022-12-05</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="6.99">6.99</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="7.145">7.145</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="6.01">6.01</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="6.14">6.14</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="6.4373">6.4373</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="24158577">24.16m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-11.143">-11.14%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.77">-0.77</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="155788517">155,788,517.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="76788">76,788</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1669932000">2022-12-02</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="6.23">6.23</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="6.94">6.94</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="6.06">6.06</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="6.91">6.91</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="6.5112">6.5112</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="21987588">21.99m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="11.272">11.27%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="0.7">0.70</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="142902487">142,902,487.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="69169">69,169</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1669845600">2022-12-01</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="6.35">6.35</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="6.64">6.64</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="6.12">6.12</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="6.21">6.21</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="6.3551">6.3551</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="16154990">16.15m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-1.741">-1.74%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.11">-0.11</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="102599141">102,599,141.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="52795">52,795</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1669759200">2022-11-30</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="6.05">6.05</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="6.35">6.35</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="5.78">5.78</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="6.32">6.32</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="6.0863">6.0863</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="23052499">23.05m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="7.301">7.30%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="0.43">0.43</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="140396026">140,396,026.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="75210">75,210</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1669672800">2022-11-29</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="5.9">5.90</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="6.11">6.11</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="5.75">5.75</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="5.89">5.89</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="5.9493">5.9493</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="12013046">12.01m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-1.505">-1.51%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.09">-0.09</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="71487681">71,487,681.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="40216">40,216</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1669586400">2022-11-28</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="6.021">6.021</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="6.18">6.18</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="5.83">5.83</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="5.98">5.98</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="5.9965">5.9965</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="14293649">14.29m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-3.859">-3.86%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.24">-0.24</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="85712136.5">85,712,136.50</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="52180">52,180</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1669327200">2022-11-25</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="6.35">6.35</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="6.41">6.41</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="6.13">6.13</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="6.22">6.22</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="6.2552">6.2552</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="7127047">7.13m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-4.012">-4.01%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.26">-0.26</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="44614298.5">44,614,298.50</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="27207">27,207</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1669154400">2022-11-23</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="6.46">6.46</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="6.753">6.753</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="6.31">6.31</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="6.48">6.48</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="6.5102">6.5102</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="18227804">18.23m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="0.935">0.94%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="0.06">0.06</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="120203527">120,203,527.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="64519">64,519</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1669068000">2022-11-22</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="6.4699">6.4699</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="6.55">6.55</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="6.11">6.11</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="6.42">6.42</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="6.3522">6.3522</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="23179244">23.18m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="3.716">3.72%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="0.23">0.23</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="147264776">147,264,776.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="88618">88,618</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1668981600">2022-11-21</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="7.1">7.10</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="7.29">7.29</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="6.16">6.16</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="6.19">6.19</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="6.6329">6.6329</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="25771830">25.77m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-17.135">-17.14%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-1.28">-1.28</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="170936259">170,936,259.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="117220">117,220</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1668722400">2022-11-18</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="8.38">8.38</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="8.4">8.40</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="7.45">7.45</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="7.47">7.47</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="7.6948">7.6948</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="23126730">23.13m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-6.974">-6.97%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.56">-0.56</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="177996042">177,996,042.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="84482">84,482</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1668636000">2022-11-17</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="8.27">8.27</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="8.3">8.30</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="7.91">7.91</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="8.03">8.03</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="8.0445">8.0445</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="16515553">16.52m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-3.369">-3.37%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.28">-0.28</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="132938944">132,938,944.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="63117">63,117</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1668549600">2022-11-16</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="9.35">9.35</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="9.5">9.50</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="8.2">8.20</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="8.31">8.31</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="8.6605">8.6605</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="18481445">18.48m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-12.526">-12.53%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-1.19">-1.19</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="160148122">160,148,122.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="87102">87,102</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1668463200">2022-11-15</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="9.92">9.92</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="10.14">10.14</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="9.409">9.409</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="9.5">9.50</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="9.786">9.786</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="14864532">14.86m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-0.21">-0.21%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.02">-0.02</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="145487069">145,487,069.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="66089">66,089</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1668376800">2022-11-14</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="9.58">9.58</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="10.025">10.025</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="9.51">9.51</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="9.52">9.52</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="9.7568">9.7568</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="12472564">12.47m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-2.559">-2.56%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.25">-0.25</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="121664331">121,664,331.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="52775">52,775</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1668117600">2022-11-11</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="9.45">9.45</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="9.95">9.95</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="8.89">8.89</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="9.77">9.77</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="9.5121">9.5121</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="21901873">21.90m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-2.104">-2.10%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.21">-0.21</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="208584562">208,584,562.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="82362">82,362</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1668031200">2022-11-10</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="10.03">10.03</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="10.23">10.23</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="9.42">9.42</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="9.98">9.98</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="9.7924">9.7924</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="28320963">28.32m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="3.85">3.85%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="0.37">0.37</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="277361551">277,361,551.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="111426">111,426</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1667944800">2022-11-09</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="9.39">9.39</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="10.63">10.63</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="9.3">9.30</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="9.61">9.61</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="9.8906">9.8906</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="25489211">25.49m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-3.514">-3.51%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.35">-0.35</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="251766273">251,766,273.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="108130">108,130</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1667858400">2022-11-08</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="9.98">9.98</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="10.65">10.65</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="9.2">9.20</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="9.96">9.96</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="9.7427">9.7427</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="32449645">32.45m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-5.143">-5.14%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.54">-0.54</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="316141743">316,141,743.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="148663">148,663</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="qmod-control control" tabindex="0"></td>
                                                                <td class="qmod-textl qmod-ph-table-data-date sorting_1">
                                                                    <span rv-data-qmod-sort="history.date | momentjs 'true' 'X'" data-qmod-sort="1667772000">2022-11-07</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-open">
                                                                    <span rv-data-qmod-sort="history.open" data-qmod-sort="10.925">10.925</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-high">
                                                                    <span rv-data-qmod-sort="history.high" data-qmod-sort="10.965">10.965</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-low">
                                                                    <span rv-data-qmod-sort="history.low" data-qmod-sort="10.05">10.05</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-close">
                                                                    <span rv-data-qmod-sort="history.close" data-qmod-sort="10.5">10.50</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-vwap">
                                                                    <span rv-data-qmod-sort="history.vwap" data-qmod-sort="10.4366">10.437</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-sharevolume">
                                                                    <span rv-data-qmod-sort="history.sharevolume" data-qmod-sort="14330340">14.33m</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-changepercent">
                                                                    <span rv-data-qmod-sort="history.changepercent" rv-html="history.changepercent | numeraljs '0,0.00' '--' tLang '0.00' | postFix '%' | str_replace '--%' '--'" data-qmod-sort="-3.137">-3.14%</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-change">
                                                                    <span rv-data-qmod-sort="history.change" data-qmod-sort="-0.34">-0.34</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totalvalue" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totalvalue" data-qmod-sort="149652473">149,652,473.00</span>
                                                                </td>
                                                                <td class="qmod-textr qmod-ph-table-data-totaltrades" style="display: none;">
                                                                    <span rv-data-qmod-sort="history.totaltrades" data-qmod-sort="66990">66,990</span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 21 of 21 entries</div>
                                                    </div>
                                                </div>
                                            </div><!-- rivets: unless historyData.eoddata --></div>
                                    </div>
                                </div>
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


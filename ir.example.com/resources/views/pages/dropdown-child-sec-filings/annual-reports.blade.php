@extends('layouts.base')

@section('page-title', 'Annual Reports :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107633 page-type-sec-filings pg-sec-filings-annual-reports ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Annual Reports</h1>
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
                                        <h3>SEC Filings</h3>
                                    </li>
                                    <li class="">
                                        <a href="/sec-filings" target="_self">Overview</a>

                                    </li>
                                    <li class="">
                                        <a href="/sec-filings/all-sec-filings" target="_self">All SEC Filings</a>

                                    </li>
                                    <li class="active active-landing">
                                        <a href="/sec-filings/annual-reports" target="_self">Annual Reports</a>

                                    </li>
                                    <li class="">
                                        <a href="/sec-filings/quarterly-reports" target="_self">Quarterly Reports</a>

                                    </li>
                                    <li class="">
                                        <a href="/sec-filings/section-16-filings" target="_self">Section 16 Filings</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <form action="https://ir.marathondh.com/sec-filings/annual-reports" id="sec-filing-filter">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <label for="form_type">Filing Type:</label>
                                        <div class="dropdown bootstrap-select bs3">
                                            <select class="selectpicker" name="form_type" id="form_type" title="Filter by Filing Type" data-style="main-select" tabindex="-98">
                                                <option class="bs-title-option" value=""></option>
                                                <option value="">View All</option>
                                                <option value="10-K">10-K</option>
                                                <option value="10-K/A">10-K/A</option>
                                                <option value="NT 10-K">NT 10-K</option>
                                            </select>
                                            <div class="dropdown-menu open">
                                                <div class="inner open" role="listbox" id="bs-select-1" tabindex="-1">
                                                    <ul class="dropdown-menu inner " role="presentation"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <label for="year">Year:</label>
                                        <div class="dropdown bootstrap-select bs3">
                                            <select class="selectpicker" name="year" id="year" title="Filter by Year" data-style="main-select" tabindex="-98">
                                                <option class="bs-title-option" value=""></option>
                                                <option value="">View All</option>
                                                <option>2022</option>
                                                <option>2021</option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                                <option>2013</option>
                                                <option>2012</option>
                                                <option>2011</option>
                                                <option>2010</option>
                                            </select>
                                            <div class="dropdown-menu open">
                                                <div class="inner open" role="listbox" id="bs-select-2" tabindex="-1">
                                                    <ul class="dropdown-menu inner " role="presentation"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <table class="content-table spr-ir-sec-filings">
                                <thead>
                                <tr>
                                    <th class="spr-sec-date">Date</th>
                                    <th class="spr-sec-form">Form</th>
                                    <th class="spr-sec-desc">Description</th>
                                    <th class="spr-sec-view-pdf">PDF</th>
                                    <th class="spr-sec-view-docs">XBRL</th>
                                    <th class="spr-sec-pages">Pages</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="spr-sec-date">03/10/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-006446/form10-k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25279-0001493152-22-006446">10-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-006446/form10-k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25279-0001493152-22-006446">Annual report pursuant to Section 13 and 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-006446/ex23-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25279-0001493152-22-006446">EX-23.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-006446/ex23-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25279-0001493152-22-006446">EX-23.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-006446/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25279-0001493152-22-006446">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-006446/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25279-0001493152-22-006446">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-006446/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25279-0001493152-22-006446">EX-32.1</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001493152-22-006446/0001493152-22-006446.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/xbrl_doc_only/9895" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-22-006446/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001493152-22-006446/0001493152-22-006446-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">59</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">03/01/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-005745/formnt10-k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25275-0001493152-22-005745">NT 10-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-005745/formnt10-k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25275-0001493152-22-005745">Notice under Rule 12b25 of inability to timely file all or part of a Form 10-K, 10-KSB, or 10-KT</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001493152-22-005745/0001493152-22-005745.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">3</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">03/16/21</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-21-006139/form10-k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25157-0001493152-21-006139">10-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-21-006139/form10-k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25157-0001493152-21-006139">Annual report pursuant to Section 13 and 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-006139/ex23-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25157-0001493152-21-006139">EX-23.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-006139/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25157-0001493152-21-006139">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-006139/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25157-0001493152-21-006139">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-006139/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25157-0001493152-21-006139">EX-32.1</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001493152-21-006139/0001493152-21-006139.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/xbrl_doc_only/9735" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-21-006139/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001493152-21-006139/0001493152-21-006139-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">54</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">03/24/20</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-20-004558/form10-k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25032-0001493152-20-004558">10-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-20-004558/form10-k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25032-0001493152-20-004558">Annual report pursuant to Section 13 and 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-004558/ex23-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25032-0001493152-20-004558">EX-23.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-004558/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25032-0001493152-20-004558">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-004558/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25032-0001493152-20-004558">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-004558/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25032-0001493152-20-004558">EX-32.1</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001493152-20-004558/0001493152-20-004558.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/xbrl_doc_only/9545" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-20-004558/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001493152-20-004558/0001493152-20-004558-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">73</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">03/25/19</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-19-003868/form10-k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24966-0001493152-19-003868">10-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-19-003868/form10-k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-24966-0001493152-19-003868">Annual report pursuant to Section 13 and 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-19-003868/ex23-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24966-0001493152-19-003868">EX-23.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-19-003868/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24966-0001493152-19-003868">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-19-003868/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24966-0001493152-19-003868">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-19-003868/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24966-0001493152-19-003868">EX-32.1</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001493152-19-003868/0001493152-19-003868.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/xbrl_doc_only/9407" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-19-003868/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001493152-19-003868/0001493152-19-003868-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">78</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">04/16/18</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-18-005254/form10-k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24845-0001493152-18-005254">10-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-18-005254/form10-k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-24845-0001493152-18-005254">Annual report pursuant to Section 13 and 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-18-005254/ex23-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24845-0001493152-18-005254">EX-23.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-18-005254/ex23-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24845-0001493152-18-005254">EX-23.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-18-005254/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24845-0001493152-18-005254">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-18-005254/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24845-0001493152-18-005254">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-18-005254/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24845-0001493152-18-005254">EX-32.1</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001493152-18-005254/0001493152-18-005254.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/xbrl_doc_only/9268" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-18-005254/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001493152-18-005254/0001493152-18-005254-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">124</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">04/02/18</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-18-004495/nt10-k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24841-0001493152-18-004495">NT 10-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-18-004495/nt10-k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-24841-0001493152-18-004495">Notice under Rule 12b25 of inability to timely file all or part of a Form 10-K, 10-KSB, or 10-KT</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001493152-18-004495/0001493152-18-004495.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">4</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">04/05/17</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001104659-17-021458/a17-1184_110k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24253-0001104659-17-021458">10-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001104659-17-021458/a17-1184_110k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-24253-0001104659-17-021458">Annual report pursuant to Section 13 and 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001104659-17-021458/a17-1184_1ex23d1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24253-0001104659-17-021458">EX-23.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001104659-17-021458/a17-1184_1ex23d2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24253-0001104659-17-021458">EX-23.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001104659-17-021458/a17-1184_1ex31d1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24253-0001104659-17-021458">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001104659-17-021458/a17-1184_1ex31d2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24253-0001104659-17-021458">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001104659-17-021458/a17-1184_1ex32d1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24253-0001104659-17-021458">EX-32.1</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001104659-17-021458/0001104659-17-021458.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/xbrl_doc_only/9016" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="http://content.stockpr.com/sec/0001104659-17-021458/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001104659-17-021458/0001104659-17-021458-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">78</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">04/03/17</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001104659-17-020764/a17-1184_3nt10k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-24252-0001104659-17-020764">NT 10-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001104659-17-020764/a17-1184_3nt10k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-24252-0001104659-17-020764">Notice under Rule 12b25 of inability to timely file all or part of a Form 10-K, 10-KSB, or 10-KT</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001104659-17-020764/0001104659-17-020764.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">2</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">03/30/16</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001104659-16-108696/a16-6075_110k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-23907-0001104659-16-108696">10-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001104659-16-108696/a16-6075_110k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-23907-0001104659-16-108696">Annual report pursuant to Section 13 and 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001104659-16-108696/a16-6075_1ex23d1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-23907-0001104659-16-108696">EX-23.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001104659-16-108696/a16-6075_1ex31d1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-23907-0001104659-16-108696">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001104659-16-108696/a16-6075_1ex31d2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-23907-0001104659-16-108696">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001104659-16-108696/a16-6075_1ex32d1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-23907-0001104659-16-108696">EX-32.1</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001104659-16-108696/0001104659-16-108696.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/xbrl_doc_only/8851" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="http://content.stockpr.com/sec/0001104659-16-108696/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports/content/0001104659-16-108696/0001104659-16-108696-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">77</td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="rss-icon">
                                <a href="https://ir.marathondh.com/sec-filings/annual-reports/rss" target="_blank" rel="noopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/rssfeed.gif" alt="RSS"></a>
                            </div>

                            <div class="pagination-wrapper">

                                <ul class="pagination">


                                    <li class="active">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports?page=1">1</a></li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports?page=2">2</a></li>


                                    <li>
                                        <a href="https://ir.marathondh.com/sec-filings/annual-reports?page=2"><span class="glyphicon glyphicon-menu-right"><span class="sr-only">Next</span></span></a>
                                    </li>

                                </ul>

                            </div>
                            <div class="clear"></div>
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

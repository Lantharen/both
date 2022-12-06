@extends('layouts.base')

@section('page-title', 'Quarterly Reports :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107634 page-type-sec-filings pg-sec-filings-quarterly-reports ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Quarterly Reports</h1>
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
                                    <li class="">
                                        <a href="/sec-filings/annual-reports" target="_self">Annual Reports</a>

                                    </li>
                                    <li class="active active-landing">
                                        <a href="/sec-filings/quarterly-reports" target="_self">Quarterly Reports</a>

                                    </li>
                                    <li class="">
                                        <a href="/sec-filings/section-16-filings" target="_self">Section 16 Filings</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <form action="https://ir.marathondh.com/sec-filings/quarterly-reports" id="sec-filing-filter">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <label for="form_type">Filing Type:</label>
                                        <div class="dropdown bootstrap-select bs3">
                                            <select class="selectpicker" name="form_type" id="form_type" title="Filter by Filing Type" data-style="main-select" tabindex="-98">
                                                <option class="bs-title-option" value=""></option>
                                                <option value="">View All</option>
                                                <option value="10-Q">10-Q</option>
                                                <option value="10-Q/A">10-Q/A</option>
                                                <option value="NT 10-Q">NT 10-Q</option>
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
                                    <td class="spr-sec-date">11/14/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/form10-q.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25323-0001493152-22-031756">10-Q</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/form10-q.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25323-0001493152-22-031756">Quarterly report pursuant to Section 13 or 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/ex3-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25323-0001493152-22-031756">EX-3.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/ex10-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25323-0001493152-22-031756">EX-10.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25323-0001493152-22-031756">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25323-0001493152-22-031756">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25323-0001493152-22-031756">EX-32.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/ex32-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25323-0001493152-22-031756">EX-32.2</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-22-031756/0001493152-22-031756.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/xbrl_doc_only/10020" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-22-031756/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-22-031756/0001493152-22-031756-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">64</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">11/09/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-031046/formnt10-q.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25322-0001493152-22-031046">NT 10-Q</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-031046/formnt10-q.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25322-0001493152-22-031046">Notice under Rule 12b25 of inability to timely file all or part of a form 10-Q or 10-QSB</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-22-031046/0001493152-22-031046.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">3</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">08/09/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-021799/form10-q.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25305-0001493152-22-021799">10-Q</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-021799/form10-q.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25305-0001493152-22-021799">Quarterly report pursuant to Section 13 or 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-021799/ex10-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25305-0001493152-22-021799">EX-10.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-021799/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25305-0001493152-22-021799">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-021799/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25305-0001493152-22-021799">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-021799/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25305-0001493152-22-021799">EX-32.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-021799/ex32-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25305-0001493152-22-021799">EX-32.2</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-22-021799/0001493152-22-021799.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/xbrl_doc_only/9975" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-22-021799/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-22-021799/0001493152-22-021799-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">154</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">05/06/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-012398/form10-q.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25291-0001493152-22-012398">10-Q</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-012398/form10-q.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25291-0001493152-22-012398">Quarterly report pursuant to Section 13 or 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-012398/ex10-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25291-0001493152-22-012398">EX-10.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-012398/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25291-0001493152-22-012398">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-012398/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25291-0001493152-22-012398">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-012398/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25291-0001493152-22-012398">EX-32.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-012398/ex32-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25291-0001493152-22-012398">EX-32.2</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-22-012398/0001493152-22-012398.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/xbrl_doc_only/9941" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-22-012398/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-22-012398/0001493152-22-012398-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">41</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">11/15/21</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-21-028278/form10-q.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25237-0001493152-21-028278">10-Q</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-21-028278/form10-q.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25237-0001493152-21-028278">Quarterly report pursuant to Section 13 or 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-028278/ex10-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25237-0001493152-21-028278">EX-10.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-028278/ex10-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25237-0001493152-21-028278">EX-10.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-028278/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25237-0001493152-21-028278">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-028278/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25237-0001493152-21-028278">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-028278/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25237-0001493152-21-028278">EX-32.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-028278/ex32-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25237-0001493152-21-028278">EX-32.2</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-21-028278/0001493152-21-028278.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/xbrl_doc_only/9854" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-21-028278/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-21-028278/0001493152-21-028278-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">84</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">08/13/21</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-21-019732/form10-q.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25202-0001493152-21-019732">10-Q</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-21-019732/form10-q.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25202-0001493152-21-019732">Quarterly report pursuant to Section 13 or 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-019732/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25202-0001493152-21-019732">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-019732/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25202-0001493152-21-019732">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-019732/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25202-0001493152-21-019732">EX-32.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-019732/ex32-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25202-0001493152-21-019732">EX-32.2</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-21-019732/0001493152-21-019732.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/xbrl_doc_only/9814" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-21-019732/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-21-019732/0001493152-21-019732-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">23</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">05/12/21</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-21-011136/form10-qa.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25183-0001493152-21-011136">10-Q/A</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-21-011136/form10-qa.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25183-0001493152-21-011136">Quarterly report pursuant to Section 13 or 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-011136/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25183-0001493152-21-011136">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-011136/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25183-0001493152-21-011136">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-011136/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25183-0001493152-21-011136">EX-32.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-011136/ex32-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25183-0001493152-21-011136">EX-32.2</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-21-011136/0001493152-21-011136.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/xbrl_doc_only/9780" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-21-011136/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-21-011136/0001493152-21-011136-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">23</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">05/10/21</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-21-010910/form10-q.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25178-0001493152-21-010910">10-Q</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-21-010910/form10-q.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25178-0001493152-21-010910">Quarterly report pursuant to Section 13 or 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-010910/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25178-0001493152-21-010910">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-010910/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25178-0001493152-21-010910">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-010910/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25178-0001493152-21-010910">EX-32.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-21-010910/ex32-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25178-0001493152-21-010910">EX-32.2</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-21-010910/0001493152-21-010910.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">23</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">11/13/20</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-20-021199/form10-qa.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25104-0001493152-20-021199">10-Q/A</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-20-021199/form10-qa.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25104-0001493152-20-021199">Quarterly report pursuant to Section 13 or 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-021199/ex10-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25104-0001493152-20-021199">EX-10.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-021199/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25104-0001493152-20-021199">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-021199/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25104-0001493152-20-021199">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-021199/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25104-0001493152-20-021199">EX-32.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-021199/ex32-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25104-0001493152-20-021199">EX-32.2</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-20-021199/0001493152-20-021199.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/xbrl_doc_only/9697" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-20-021199/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-20-021199/0001493152-20-021199-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">125</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">11/12/20</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-20-021124/form10-q.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25099-0001493152-20-021124">10-Q</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-20-021124/form10-q.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25099-0001493152-20-021124">Quarterly report pursuant to Section 13 or 15(d)</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-021124/ex31-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25099-0001493152-20-021124">EX-31.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-021124/ex31-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25099-0001493152-20-021124">EX-31.2</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-021124/ex32-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25099-0001493152-20-021124">EX-32.1</a><br>
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-20-021124/ex32-2.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25099-0001493152-20-021124">EX-32.2</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-20-021124/0001493152-20-021124.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/xbrl_doc_only/9659" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-20-021124/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/content/0001493152-20-021124/0001493152-20-021124-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">27</td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="rss-icon">
                                <a href="https://ir.marathondh.com/sec-filings/quarterly-reports/rss" target="_blank" rel="noopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/rssfeed.gif" alt="RSS"></a>
                            </div>

                            <div class="pagination-wrapper">

                                <ul class="pagination">


                                    <li class="active">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports?page=1">1</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports?page=2">2</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports?page=3">3</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports?page=4">4</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports?page=5">5</a>
                                    </li>


                                    <li>
                                        <a href="https://ir.marathondh.com/sec-filings/quarterly-reports?page=2"><span class="glyphicon glyphicon-menu-right"><span class="sr-only">Next</span></span></a>
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

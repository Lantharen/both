@extends('layouts.base')

@section('page-title', 'All SEC Filings :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107632 page-type-sec-filings pg-sec-filings-all-sec-filings ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>All SEC Filings</h1>
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
                                    <li class="active active-landing">
                                        <a href="/sec-filings/all-sec-filings" target="_self">All SEC Filings</a>

                                    </li>
                                    <li class="">
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
                            <form action="https://ir.marathondh.com/sec-filings/all-sec-filings" id="sec-filing-filter">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <label for="form_type">Filing Type:</label>
                                        <div class="dropdown bootstrap-select bs3">
                                            <select class="selectpicker" name="form_type" id="form_type" title="Filter by Filing Type" data-style="main-select" tabindex="-98">
                                                <option class="bs-title-option" value=""></option>
                                                <option value="">View All</option>
                                                <option value="10-K">10-K</option>
                                                <option value="10-K/A">10-K/A</option>
                                                <option value="10-Q">10-Q</option>
                                                <option value="10-Q/A">10-Q/A</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="4/A">4/A</option>
                                                <option value="424B3">424B3</option>
                                                <option value="424B4">424B4</option>
                                                <option value="424B5">424B5</option>
                                                <option value="425">425</option>
                                                <option value="8-A12B">8-A12B</option>
                                                <option value="8-A12G">8-A12G</option>
                                                <option value="8-K">8-K</option>
                                                <option value="8-K/A">8-K/A</option>
                                                <option value="CERTNAS">CERTNAS</option>
                                                <option value="CORRESP">CORRESP</option>
                                                <option value="CT ORDER">CT ORDER</option>
                                                <option value="D">D</option>
                                                <option value="DEF 14A">DEF 14A</option>
                                                <option value="DEF 14C">DEF 14C</option>
                                                <option value="DEFA14A">DEFA14A</option>
                                                <option value="EFFECT">EFFECT</option>
                                                <option value="NT 10-K">NT 10-K</option>
                                                <option value="NT 10-Q">NT 10-Q</option>
                                                <option value="POS AM">POS AM</option>
                                                <option value="PRE 14A">PRE 14A</option>
                                                <option value="PRE 14C">PRE 14C</option>
                                                <option value="PRER14A">PRER14A</option>
                                                <option value="PRER14C">PRER14C</option>
                                                <option value="RW">RW</option>
                                                <option value="S-1">S-1</option>
                                                <option value="S-1/A">S-1/A</option>
                                                <option value="S-1MEF">S-1MEF</option>
                                                <option value="S-3">S-3</option>
                                                <option value="S-3/A">S-3/A</option>
                                                <option value="S-3ASR">S-3ASR</option>
                                                <option value="S-4">S-4</option>
                                                <option value="S-4/A">S-4/A</option>
                                                <option value="S-8">S-8</option>
                                                <option value="SC 13D">SC 13D</option>
                                                <option value="SC 13D/A">SC 13D/A</option>
                                                <option value="SC 13G">SC 13G</option>
                                                <option value="SC 13G/A">SC 13G/A</option>
                                                <option value="UPLOAD">UPLOAD</option>
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
                                    <td class="spr-sec-date">11/28/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-033853/form8-k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25330-0001493152-22-033853">8-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-033853/form8-k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25330-0001493152-22-033853">Current report filing</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-033853/ex10-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25330-0001493152-22-033853">EX-10.1</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-033853/0001493152-22-033853.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/xbrl_doc_only/10071" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-22-033853/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-033853/0001493152-22-033853-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">12</td>
                                </tr>
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
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-031756/0001493152-22-031756.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/xbrl_doc_only/10020" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-22-031756/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-031756/0001493152-22-031756-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
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
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-031046/0001493152-22-031046.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">3</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">11/07/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-030768/form8-k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25321-0001493152-22-030768">8-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-030768/form8-k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25321-0001493152-22-030768">Current report filing</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-030768/0001493152-22-030768.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/xbrl_doc_only/10019" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-22-030768/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-030768/0001493152-22-030768-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">2</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">10/17/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-028520/form8-k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25320-0001493152-22-028520">8-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-028520/form8-k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25320-0001493152-22-028520">Current report filing</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-028520/0001493152-22-028520.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/xbrl_doc_only/10018" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-22-028520/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-028520/0001493152-22-028520-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">2</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">10/11/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-028089/ownership.html" class="fancybox fancybox.iframe" data-fancybox="#document-25319-0001493152-22-028089">4</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-028089/ownership.html" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25319-0001493152-22-028089">Statement of changes in beneficial ownership of securities</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-028089/0001493152-22-028089.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">1</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">09/20/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-026375/form8-k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25317-0001493152-22-026375">8-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-026375/form8-k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25317-0001493152-22-026375">Current report filing</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-026375/ex99-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25317-0001493152-22-026375">EX-99.1</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-026375/0001493152-22-026375.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/xbrl_doc_only/10017" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-22-026375/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-026375/0001493152-22-026375-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">3</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">09/13/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-025681/form8-k.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25315-0001493152-22-025681">8-K</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-025681/form8-k.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25315-0001493152-22-025681">Current report filing</a>
                                        <div class="spr-expander">
                                            <strong class="spr-sec-doc-list-head spr-toggle-expandable">Documents
                                                <span class="glyphicon glyphicon-menu-down"></span></strong>
                                            <div class="spr-expandable" style="display: none;">
                                                <a href="/sec-filings/all-sec-filings/content/0001493152-22-025681/ex99-1.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25315-0001493152-22-025681">EX-99.1</a><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-025681/0001493152-22-025681.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/xbrl_doc_only/10016" title="XBRL Viewer" class="fancybox fancybox.iframe" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-table.png" alt="Document Table"></a>
                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-22-025681/Financial_Report.xlsx" title="XBRL Tables as Spreadsheet" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-excel.png" alt="XBRL"></a>
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-025681/0001493152-22-025681-xbrl.zip" title="Download Raw XBRL Files" target="_blank" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-xaml.png" alt="XAML"></a>
                                    </td>
                                    <td class="spr-sec-pages">38</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">09/12/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-025646/formdef14a.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25314-0001493152-22-025646">DEF 14A</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-025646/formdef14a.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25314-0001493152-22-025646">Definitive proxy statements</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-025646/0001493152-22-025646.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">16</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">09/02/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-024987/formpre14a.htm" class="fancybox fancybox.iframe" data-fancybox="#document-25313-0001493152-22-024987">PRE 14A</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-024987/formpre14a.htm" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25313-0001493152-22-024987">Preliminary proxy statement not related to a contested matter or merger/acquisition</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings/content/0001493152-22-024987/0001493152-22-024987.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">16</td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="rss-icon">
                                <a href="https://ir.example.com/sec-filings/all-sec-filings/rss" target="_blank" rel="noopener"><img src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/rssfeed.gif') }}" alt="RSS"></a>
                            </div>

                            <div class="pagination-wrapper">

                                <ul class="pagination">


                                    <li class="active">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings?page=1">1</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings?page=2">2</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings?page=3">3</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings?page=4">4</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings?page=5">5</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings?page=6">6</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings?page=7">7</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings?page=8">8</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings?page=9">9</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings?page=10">10</a>
                                    </li>

                                    <li><a href="https://ir.marathondh.com/sec-filings/all-sec-filings?page=65">…65</a>
                                    </li>

                                    <li>
                                        <a href="https://ir.marathondh.com/sec-filings/all-sec-filings?page=2"><span class="glyphicon glyphicon-menu-right"><span class="sr-only">Next</span></span></a>
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


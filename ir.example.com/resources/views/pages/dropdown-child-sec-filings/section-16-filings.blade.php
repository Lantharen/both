@extends('layouts.base')

@section('page-title', 'Section 16 Filings :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107635 page-type-sec-filings pg-sec-filings-section-16-filings ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Section 16 Filings</h1>
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
                                    <li class="">
                                        <a href="/sec-filings/quarterly-reports" target="_self">Quarterly Reports</a>

                                    </li>
                                    <li class="active active-landing">
                                        <a href="/sec-filings/section-16-filings" target="_self">Section 16 Filings</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <form action="https://ir.marathondh.com/sec-filings/section-16-filings" id="sec-filing-filter">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <label for="form_type">Filing Type:</label>
                                        <div class="dropdown bootstrap-select bs3">
                                            <select class="selectpicker" name="form_type" id="form_type" title="Filter by Filing Type" data-style="main-select" tabindex="-98">
                                                <option class="bs-title-option" value=""></option>
                                                <option value="">View All</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="4/A">4/A</option>
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
                                    <td class="spr-sec-date">10/11/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-028089/ownership.html" class="fancybox fancybox.iframe" data-fancybox="#document-25319-0001493152-22-028089">4</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-028089/ownership.html" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25319-0001493152-22-028089">Statement of changes in beneficial ownership of securities</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings/content/0001493152-22-028089/0001493152-22-028089.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">1</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">08/25/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-024091/ownership.html" class="fancybox fancybox.iframe" data-fancybox="#document-25312-0001493152-22-024091">4</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-024091/ownership.html" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25312-0001493152-22-024091">Statement of changes in beneficial ownership of securities</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings/content/0001493152-22-024091/0001493152-22-024091.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">2</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">05/31/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-015476/ownership.html" class="fancybox fancybox.iframe" data-fancybox="#document-25302-0001493152-22-015476">4</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-015476/ownership.html" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25302-0001493152-22-015476">Statement of changes in beneficial ownership of securities</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings/content/0001493152-22-015476/0001493152-22-015476.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">2</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">05/23/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-014750/ownership.html" class="fancybox fancybox.iframe" data-fancybox="#document-25301-0001493152-22-014750">4</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-014750/ownership.html" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25301-0001493152-22-014750">Statement of changes in beneficial ownership of securities</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings/content/0001493152-22-014750/0001493152-22-014750.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">2</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">05/18/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-014359/ownership.html" class="fancybox fancybox.iframe" data-fancybox="#document-25300-0001493152-22-014359">4</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-014359/ownership.html" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25300-0001493152-22-014359">Statement of changes in beneficial ownership of securities</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings/content/0001493152-22-014359/0001493152-22-014359.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">2</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">05/18/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-014339/ownership.html" class="fancybox fancybox.iframe" data-fancybox="#document-25299-0001493152-22-014339">4</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-014339/ownership.html" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25299-0001493152-22-014339">Statement of changes in beneficial ownership of securities</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings/content/0001493152-22-014339/0001493152-22-014339.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">2</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">05/18/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-014334/ownership.html" class="fancybox fancybox.iframe" data-fancybox="#document-25298-0001493152-22-014334">4</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-014334/ownership.html" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25298-0001493152-22-014334">Statement of changes in beneficial ownership of securities</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings/content/0001493152-22-014334/0001493152-22-014334.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">2</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">05/16/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-013455/ownership.html" class="fancybox fancybox.iframe" data-fancybox="#document-25297-0001493152-22-013455">4</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-013455/ownership.html" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25297-0001493152-22-013455">Statement of changes in beneficial ownership of securities</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings/content/0001493152-22-013455/0001493152-22-013455.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">2</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">05/05/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-012297/ownership.html" class="fancybox fancybox.iframe" data-fancybox="#document-25290-0001493152-22-012297">3</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-012297/ownership.html" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25290-0001493152-22-012297">Initial statement of beneficial ownership of securities</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings/content/0001493152-22-012297/0001493152-22-012297.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">2</td>
                                </tr>
                                <tr>
                                    <td class="spr-sec-date">03/04/22</td>
                                    <td class="spr-sec-form">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-006021/ownership.html" class="fancybox fancybox.iframe" data-fancybox="#document-25278-0001493152-22-006021">4</a>
                                    </td>
                                    <td class="spr-sec-desc">
                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-006021/ownership.html" class="fancybox fancybox.iframe doc-title" data-fancybox="#document-25278-0001493152-22-006021">Statement of changes in beneficial ownership of securities</a>
                                    </td>
                                    <td class="spr-sec-view-pdf">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings/content/0001493152-22-006021/0001493152-22-006021.pdf" target="_blank" title="PDF" rel="undefinednoopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/document-pdf-text.png" alt="PDF"></a>
                                    </td>
                                    <td class="spr-sec-view-docs">
                                    </td>
                                    <td class="spr-sec-pages">2</td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="rss-icon">
                                <a href="https://ir.marathondh.com/sec-filings/section-16-filings/rss" target="_blank" rel="noopener"><img src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/rssfeed.gif" alt="RSS"></a>
                            </div>

                            <div class="pagination-wrapper">

                                <ul class="pagination">


                                    <li class="active">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings?page=1">1</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings?page=2">2</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings?page=3">3</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings?page=4">4</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings?page=5">5</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings?page=6">6</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings?page=7">7</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings?page=8">8</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings?page=9">9</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings?page=10">10</a>
                                    </li>

                                    <li>
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings?page=14">…14</a>
                                    </li>

                                    <li>
                                        <a href="https://ir.marathondh.com/sec-filings/section-16-filings?page=2"><span class="glyphicon glyphicon-menu-right"><span class="sr-only">Next</span></span></a>
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
                    <li>
                        <a href="/news-events/email-alerts" class="email">Email Alerts</a>
                    </li>
                    <li>
                        <a href="/company-information/contacts" class="contacts">Contacts</a>
                    </li>
                    <li>
                        <a href="https://ir.example.com/news-events/press-releases/rss" class="rss" target="_blank" rel="noopener">RSS News Feed</a>
                    </li>
                </ul>
            </div>
        </div>

        @include('pages.includes.footer')

    </div>

@endsection

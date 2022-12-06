@extends('layouts.base')

@section('page-title', 'Press Releases :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107610 page-type-ir-section-ir-news pg-news-events-press-releases ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Press Releases</h1>
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
                                        <h3>News &amp; Events</h3>
                                    </li>
                                    <li class="">
                                        <a href="/news-events" target="_self">Overview</a>

                                    </li>
                                    <li class="active active-landing">
                                        <a href="/news-events/press-releases" target="_self">Press Releases</a>

                                    </li>
                                    <li class="">
                                        <a href="/news-events/in-the-news" target="_self">In The News</a>

                                    </li>
                                    <li class="">
                                        <a href="/news-events/ir-calendar" target="_self">IR Calendar</a>

                                    </li>
                                    <li class="">
                                        <a href="/news-events/email-alerts" target="_self">Email Alerts</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">

                            <div class="year-filter">
                                <form class="redirect-select">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <label class="sr-only" for="year">Year</label>
                                            <div class="dropdown bootstrap-select bs3">
                                                <select class="selectpicker" id="year" data-style="main-select" name="year" tabindex="-98">
                                                    <option selected="" value="-1">All Years</option>
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
                                                </select>

                                                <div class="dropdown-menu open">
                                                    <div class="inner open" role="listbox" id="bs-select-1" tabindex="-1">
                                                        <ul class="dropdown-menu inner " role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="sr-only" for="category">Category</label>
                                            <div class="dropdown bootstrap-select bs3">
                                                <select class="selectpicker" id="category" data-style="main-select" name="category" tabindex="-98">
                                                    <option value="all">
                                                        All Releases
                                                    </option>
                                                    <option value="financial">
                                                        Financial Releases
                                                    </option>
                                                </select>

                                                <div class="dropdown-menu open">
                                                    <div class="inner open" role="listbox" id="bs-select-2" tabindex="-1">
                                                        <ul class="dropdown-menu inner " role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div>

                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-11-08T16:05:00">Nov 08, 2022 4:05pm EST</time>
                                    </div>
                                    <h2 class="media-heading">
                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1297/marathon-digital-holdings-reports-third-quarter-2022-results">
                                            Marathon Digital Holdings Reports Third Quarter 2022 Results </a>
                                    </h2>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-11-02T16:05:00">Nov 02, 2022 4:05pm EDT</time>
                                    </div>
                                    <h2 class="media-heading">
                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1296/marathon-digital-holdings-announces-bitcoin-production-and">
                                            Marathon Digital Holdings Announces Bitcoin Production and Mining Operation Updates for October 2022 </a>
                                    </h2>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-10-26T16:05:00">Oct 26, 2022 4:05pm EDT</time>
                                    </div>
                                    <h2 class="media-heading">
                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1295/marathon-digital-holdings-schedules-conference-call-for">
                                            Marathon Digital Holdings Schedules Conference Call for Third Quarter 2022 Financial Results </a>
                                    </h2>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-10-06T08:35:00">Oct 06, 2022 8:35am EDT</time>
                                    </div>
                                    <h2 class="media-heading">
                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1294/marathon-digital-holdings-announces-bitcoin-production-and">
                                            Marathon Digital Holdings Announces Bitcoin Production and Mining Operation Updates for September 2022 </a>
                                    </h2>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-09-06T16:05:00">Sep 06, 2022 4:05pm EDT</time>
                                    </div>
                                    <h2 class="media-heading">
                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1293/marathon-digital-holdings-announces-bitcoin-production-and">
                                            Marathon Digital Holdings Announces Bitcoin Production and Mining Operation Updates for August 2022 </a>
                                    </h2>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-08-08T16:05:00">Aug 08, 2022 4:05pm EDT</time>
                                    </div>
                                    <h2 class="media-heading">
                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1292/marathon-digital-holdings-reports-second-quarter-2022">
                                            Marathon Digital Holdings Reports Second Quarter 2022 Results Along with Bitcoin Production and Mining Operation Updates for July 2022 </a>
                                    </h2>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-08-01T16:05:00">Aug 01, 2022 4:05pm EDT</time>
                                    </div>
                                    <h2 class="media-heading">
                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1291/marathon-digital-holdings-expands-credit-facilities">
                                            Marathon Digital Holdings Expands Credit Facilities, Increasing Debt Funding Capacity by $100 Million </a>
                                    </h2>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-07-29T08:30:00">Jul 29, 2022 8:30am EDT</time>
                                    </div>
                                    <h2 class="media-heading">
                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1290/marathon-digital-holdings-schedules-conference-call-for">
                                            Marathon Digital Holdings Schedules Conference Call for Second Quarter 2022 Financial Results and Announces Q&amp;A Platform for Shareholders </a>
                                    </h2>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-07-18T16:05:00">Jul 18, 2022 4:05pm EDT</time>
                                    </div>
                                    <h2 class="media-heading">
                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1289/marathon-digital-holdings-secures-hosting-capacity-to">
                                            Marathon Digital Holdings Secures Hosting Capacity To Support All 23.3 EH/s of Bitcoin Mining </a>
                                    </h2>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-07-07T16:05:00">Jul 07, 2022 4:05pm EDT</time>
                                    </div>
                                    <h2 class="media-heading">
                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1288/marathon-digital-holdings-announces-bitcoin-production-and">
                                            Marathon Digital Holdings Announces Bitcoin Production and Mining Operation Updates for June 2022 </a>
                                    </h2>
                                </div>
                            </article>
                            <div class="pagination-wrapper">

                                <ul class="pagination">


                                    <li class="active">
                                        <a href="https://ir.marathondh.com/news-events/press-releases?page=1">1</a></li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/news-events/press-releases?page=2">2</a></li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/news-events/press-releases?page=3">3</a></li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/news-events/press-releases?page=4">4</a></li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/news-events/press-releases?page=5">5</a></li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/news-events/press-releases?page=6">6</a></li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/news-events/press-releases?page=7">7</a></li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/news-events/press-releases?page=8">8</a></li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/news-events/press-releases?page=9">9</a></li>
                                    <li class="">
                                        <a href="https://ir.marathondh.com/news-events/press-releases?page=10">10</a>
                                    </li>

                                    <li><a href="https://ir.marathondh.com/news-events/press-releases?page=35">…35</a>
                                    </li>

                                    <li>
                                        <a href="https://ir.marathondh.com/news-events/press-releases?page=2"><span class="glyphicon glyphicon-menu-right"><span class="sr-only">Next</span></span></a>
                                    </li>

                                </ul>

                            </div>
                            <div class="clear"></div>
                            <div class="spr-ir-rss-icon rss-icon">
                                <a href="https://ir.example.com/news-events/press-releases/rss" target="_blank" rel="noopener">
                                    <img src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/rssfeed.gif') }}" alt="RSS">
                                </a>
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

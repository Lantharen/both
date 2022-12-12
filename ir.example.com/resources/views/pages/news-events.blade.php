@extends('layouts.base')

@section('page-title', 'News & Events :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107608 page-type-ir-landing---news-events pg-overview-news-events ir has-sub-nav fl-builder-breakpoint-large', \Termwind\style('padding-top: 125px;')
)

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>News &amp; Events</h1>
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
                                    <li class="active active-landing">
                                        <a href="/news-events" target="_self">Overview</a>

                                    </li>
                                    <li class="">
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


                            <h2>Recent News
                                <a class="view-all-cta block-link" href="https://ir.example.com/news-events/press-releases">View All News</a>
                            </h2>
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-11-08">Nov 8, 2022 4:05pm EST</time>
                                    </div><!-- .date -->
                                    <h2 class="media-heading">
                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1297/marathon-digital-holdings-reports-third-quarter-2022-results" title="Read More">Marathon Digital Holdings Reports Third Quarter 2022 Results</a>
                                    </h2>
                                </div>
                            </article> <!-- .text -->
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-11-02">Nov 2, 2022 4:05pm EDT</time>
                                    </div><!-- .date -->
                                    <h2 class="media-heading">
                                        <a href="https://ir.marathondh.com/news-events/press-releases/detail/1296/marathon-digital-holdings-announces-bitcoin-production-and" title="Read More">Marathon Digital Holdings Announces Bitcoin Production and Mining Operation Updates for October 2022</a>
                                    </h2>
                                </div>
                            </article> <!-- .text -->
                            <p>
                                <a class="btn landing-btn" href="https://ir.example.com/news-events/press-releases">View All News</a>
                            </p>
                            <h2>Recent Events
                                <a class="view-all-cta block-link" href="/news-events/ir-calendar">View IR Calendar</a>
                            </h2>


                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-11-08T16:30:00">Nov 8, 2022 4:30 pm EST</time>
                                    </div><!-- .date -->
                                    <h2 class="media-heading">
                                        <a href="/news-events/ir-calendar/detail/4069/q3-2022-financial-results-conference-call" target="_self">
                                            Q3 2022 Financial Results Conference Call </a>
                                    </h2>
                                </div>
                            </article> <!-- .text -->
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-11-04T08:00:00">Nov 4, 2022 8:00 am EST</time>
                                    </div><!-- .date -->
                                    <h2 class="media-heading">
                                        2022 Annual Meeting of Shareholders </h2>
                                </div>
                            </article> <!-- .text -->
                            <p>
                                <a class="btn landing-btn" href="/news-events/ir-calendar">View IR Calendar</a>
                            </p>

                            <h2>Email Alerts</h2>
                            <p>Sign up for email alerts for Press Releases &amp; SEC Filings</p>
                            <p>
                                <a href="/news-events/email-alerts" class="btn">Sign Up</a>
                            </p>
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

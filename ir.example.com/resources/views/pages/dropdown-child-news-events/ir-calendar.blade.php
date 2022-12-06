@extends('layouts.base')

@section('page-title', 'IR Calendar :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-113289 page-type-media-listing pg-news-events-in-the-news ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>IR Calendar</h1>
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
                                    <li class="">
                                        <a href="/news-events/press-releases" target="_self">Press Releases</a>

                                    </li>
                                    <li class="">
                                        <a href="/news-events/in-the-news" target="_self">In The News</a>

                                    </li>
                                    <li class="active active-landing">
                                        <a href="/news-events/ir-calendar" target="_self">IR Calendar</a>

                                    </li>
                                    <li class="">
                                        <a href="/news-events/email-alerts" target="_self">Email Alerts</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">

                            <h2>Upcoming Events</h2>

                            <p>
                                There are no upcoming events scheduled at this time.
                                <a href="/news-events/email-alerts">Sign up here</a> to receive notices about
                                upcoming events and press releases.
                            </p>


                            <h2>Past Events</h2>


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
                            <article class="media">
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-08-08T16:30:00">Aug 8, 2022 4:30 pm EST</time>
                                    </div><!-- .date -->
                                    <h2 class="media-heading">
                                        <a href="/news-events/ir-calendar/detail/4065/q2-2022-financial-results-conference-call" target="_self">
                                            Q2 2022 Financial Results Conference Call </a>
                                    </h2>
                                </div>
                            </article> <!-- .text -->
                            <p><a href="/news-events/ir-calendar/past" class="block-link">View All Past Events</a></p>
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
                    <li><a href="https://ir.example.com/news-events/press-releases/rss" class="rss" target="_blank" rel="noopener">RSS News Feed</a></li>
                </ul>
            </div>
        </div>

        @include('pages.includes.footer')

    </div>

@endsection

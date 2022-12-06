@extends('layouts.base')

@section('page-title', 'Presentations :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107616 page-type-media-listing pg-company-information-presentations ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Presentations</h1>
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
                                        <h3>Company Info</h3>
                                    </li>
                                    <li class="">
                                        <a href="/company-information" target="_self">Overview</a>

                                    </li>
                                    <li class="active active-landing">
                                        <a href="/company-information/presentations" target="_self">Presentations</a>

                                    </li>
                                    <li class="">
                                        <a href="/company-information/management-team" target="_self">Management Team</a>

                                    </li>
                                    <li class="">
                                        <a href="/company-information/contacts" target="_self">Contacts</a>

                                    </li>
                                    <li class="">
                                        <a href="/company-information/faq" target="_self">FAQ</a>

                                    </li>
                                    <li class="">
                                        <a href="/company-information/analyst-coverage" target="_self">Analyst Coverage</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">

                            <article class="media">
                                <div class="media-left" aria-hidden="true">
                                    <a href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/db/212/3886/pdf/2022+October+-+MARA+IR+Presentation+FINAL.pdf" target="_blank" rel="noopener">
                                        <img src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/db/212/3886/pdf_thumbnail.jpg') }}" alt="Investor Presentation" class="media-object">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="date">
                                        <time datetime="2022-10-19T00:00:00">Oct 19, 2022</time>
                                    </div>
                                    <h2 class="media-heading">
                                        <a href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/db/212/3886/pdf/2022+October+-+MARA+IR+Presentation+FINAL.pdf" target="_blank" rel="noopener">
                                            Investor Presentation </a>
                                    </h2>
                                </div>
                            </article>
                            <div class="spr-ir-rss-icon rss-icon">
                                <a href="/company-information/presentations/rss" target="_blank" rel="noopener">
                                    <img src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/rssfeed.gif') }}" alt="RSS">
                                </a>
                            </div>
                            <div class="pagination-wrapper">
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
                    <li><a href="https://ir.example.com/news-events/press-releases/rss" class="rss" target="_blank" rel="noopener">RSS News Feed</a></li>
                </ul>
            </div>
        </div>

        @include('pages.includes.footer')

    </div>

@endsection

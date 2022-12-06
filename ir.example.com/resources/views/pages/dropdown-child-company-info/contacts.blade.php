@extends('layouts.base')

@section('page-title', 'Contacts :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107617 page-type-ir-contacts pg-company-information-contacts ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Contacts</h1>
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
                                    <li class="">
                                        <a href="/company-information/presentations" target="_self">Presentations</a>

                                    </li>
                                    <li class="">
                                        <a href="/company-information/management-team" target="_self">Management Team</a>

                                    </li>
                                    <li class="active active-landing">
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
                            <h2>Investor Relations</h2>
                            <div class="row">
                                <div class="col-sm-6 ir-contact-col">
                                    <div class="text ir-contact-text">
                                        <p>
                                            T: 800-804-1690<br>
                                            <a class="exposed-link" href="mailto:ir@mara.com">ir@mara.com</a><br></p>
                                    </div>
                                </div>
                            </div>
                            <h2>Transfer Agent</h2>
                            <div class="row">
                                <div class="col-sm-6 ir-contact-col">
                                    <div class="text ir-contact-text">
                                        <p>
                                            Equity Stock Transfer<br> Nora Marckwordt<br> T: 917-746-4595<br> F: 347-584-3644<br>
                                            <a class="exposed-link" href="https://www.equitystock.com" target="_blank" rel="noopener">https://www.equitystock.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h2>Auditor</h2>
                            <div class="row">
                                <div class="col-sm-6 ir-contact-col">
                                    <div class="text ir-contact-text">
                                        <p>
                                            Marcum LLP<br>
                                            <a class="exposed-link" href="https://www.marcumllp.com/" target="_blank" rel="noopener">https://www.marcumllp.com/</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h2>Legal Counsel</h2>
                            <div class="row">
                                <div class="col-sm-6 ir-contact-col">
                                    <div class="text ir-contact-text">
                                        <p>
                                            Jolie Kahn, Esq.<br> 12 E. 49th Street<br> 11th floor<br> New York, NY 10017<br>
                                        </p>
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

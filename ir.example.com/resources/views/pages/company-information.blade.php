@extends('layouts.base')

@section('page-title', 'Company Information :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107613 page-type-ir-landing---company-information pg-overview-company-information ir has-sub-nav fl-builder-breakpoint-large', \Termwind\style('padding-top: 125px;')
)

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Company Information</h1>
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
                                    <li class="active active-landing">
                                        <a href="/company-information" target="_self">Overview</a>

                                    </li>
                                    <li class="">
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

                            <h2>Company Profile</h2>
                            <div class="text">
                                <p>Marathon is a digital asset technology company that mines cryptocurrencies, with a focus on the blockchain ecosystem and the generation of digital assets. We currently operate our proprietary Data Center in Hardin MT with a maximum power capacity of 105 Megawatts. The Company also owns 2,060 advanced ASIC Bitcoin Miners at a co-hosted facility in North Dakota.</p>
                                <p>Marathon is on-track to deploy&nbsp;133,000 miners, which are expected to generate approximately&nbsp;13.3 Exahash&nbsp;by mid 2022.</p>
                            </div>

                            <h2>Latest Presentation</h2>
                            <div class="presentation-module">
                                <h3>
                                    <a href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/db/212/3886/pdf/2022+October+-+MARA+IR+Presentation+FINAL.pdf" target="_blank" rel="noopener">Investor Presentation</a>
                                </h3>
                                <a class="block-link" href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/db/212/3886/pdf/2022+October+-+MARA+IR+Presentation+FINAL.pdf" target="_blank" rel="noopener">View This Presentation</a>

                            </div>
                            <h2>Contact Information</h2>
                            <div class="contact-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <strong>Investor Relations</strong><br> T: 800-804-1690<br>
                                            <a href="mailto:ir@mara.com">ir@mara.com</a><br></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <strong>Company Contact</strong><br>
                                            Marathon Digital Holdings<br> 1180 North Town Center Drive<br> Suite 100<br> Las Vegas, NV 89144
                                            <br>
                                            Toll-Free: 800-804-1690<br>
                                            F: 703-997-7320
                                            <br><a href="mailto:info@mara.com">info@mara.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div><!-- //container-->
        </div>
        <div class="eq-container"><div class="module-quick-links">
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

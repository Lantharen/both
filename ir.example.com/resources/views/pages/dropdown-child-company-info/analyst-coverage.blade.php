@extends('layouts.base')

@section('page-title', 'Analyst Coverage :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-113290 page-type-analyst-coverage pg-company-information-analyst-coverage ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Analyst Coverage</h1>
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
                                    <li class="">
                                        <a href="/company-information/contacts" target="_self">Contacts</a>

                                    </li>
                                    <li class="">
                                        <a href="/company-information/faq" target="_self">FAQ</a>

                                    </li>
                                    <li class="active active-landing">
                                        <a href="/company-information/analyst-coverage" target="_self">Analyst Coverage</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <table class="content-table">
                                <thead>
                                <tr>
                                    <th>Firm</th>
                                    <th>Analyst</th>
                                    <th>Contact Info</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>H.C. Wainwright &amp; Co.</td>
                                    <td>Kevin Dede</td>
                                    <td>
                                        <a href="mailto:kdede@hcwresearch.com">kdede@hcwresearch.com</a>
                                        <br> 415-779-5876
                                    </td>
                                </tr>
                                <tr>
                                    <td>B. Riley</td>
                                    <td>Lucas N. Pipes, CFA</td>
                                    <td>
                                        <a href="mailto:lpipes@brileyfin.com">lpipes@brileyfin.com</a> <br> 703-312-1855
                                    </td>
                                </tr>
                                <tr>
                                    <td>DA Davidson</td>
                                    <td>Christopher Brendler</td>
                                    <td>
                                        <a href="mailto:cbrendler@dadco.com">cbrendler@dadco.com</a> <br> 410-369-1179
                                    </td>
                                </tr>
                                <tr>
                                    <td>BTIG</td>
                                    <td>Greg Lewis</td>
                                    <td>
                                        <a href="mailto:glewis@btig.com">glewis@btig.com</a> <br> 212-588-6543
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jefferies</td>
                                    <td>Jonathan Petersen, Equity Analyst</td>
                                    <td>
                                        <a href="mailto:jpetersen@jefferies.com">jpetersen@jefferies.com</a>
                                        <br> 212-284-1705
                                    </td>
                                </tr>
                                <tr>
                                    <td>Compass Point</td>
                                    <td>Chase White, CFA</td>
                                    <td>
                                        <a href="mailto:cwhite@compasspointllc.com">cwhite@compasspointllc.com</a>
                                        <br> 202-540-7306
                                    </td>
                                </tr>
                                <tr>
                                    <td>Chardan</td>
                                    <td>Brian Dobson</td>
                                    <td>
                                        <a href="mailto:bdobson@chardan.com">bdobson@chardan.com</a> <br> 646-465-9088
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cowen</td>
                                    <td>Stephen Glagola</td>
                                    <td>
                                        <a href="mailto:stephen.glagola@cowen.com">stephen.glagola@cowen.com</a>
                                        <br> 415-646-7224
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <p>Marathon Digital Holdings is followed by the analysts listed above. Please note that any opinions, estimates or forecasts regarding Marathon Digital Holdings's performance made by these analysts are theirs alone and do not represent opinions, forecasts or predictions of Marathon Digital Holdings or its management. Marathon Digital Holdings does not by its reference above or distribution imply its endorsement of or concurrence with such information, conclusions or recommendations.</p>
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

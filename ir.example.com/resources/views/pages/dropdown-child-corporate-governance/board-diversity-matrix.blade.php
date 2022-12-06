@extends('layouts.base')

@section('page-title', 'Board Diversity Matrix :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-113320 page-type-default pg-corporate-governance-board-diversity-matrix ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Board Diversity Matrix</h1>
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
                                        <h3>Governance</h3>
                                    </li>
                                    <li class="">
                                        <a href="/corporate-governance" target="_self">Overview</a>

                                    </li>
                                    <li class="">
                                        <a href="/corporate-governance/board-of-directors" target="_self">Board of Directors</a>

                                    </li>
                                    <li class="">
                                        <a href="/corporate-governance/board-committees" target="_self">Board Committees</a>

                                    </li>
                                    <li class="">
                                        <a href="/corporate-governance/governance-documents" target="_self">Governance Documents</a>

                                    </li>
                                    <li class="active active-landing">
                                        <a href="/corporate-governance/board-diversity-matrix" target="_self">Board Diversity Matrix</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <table class="content-table content-table--diversity-matrix">
                                <thead>
                                <tr>
                                    <th colspan="5" style="text-align: center;">Marathon Digital Holdings, Inc. Board Diversity Matrix</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>As of</td>
                                    <td colspan="4" class="as-of numbers-only empty" style="text-align: center;">August 5, 2022</td>
                                </tr>
                                <tr class="neutral-bg">
                                    <td colspan="5"><strong>Board Size:</strong></td>
                                </tr>
                                <tr>
                                    <td>Total Number of Directors</td>
                                    <td colspan="4" class="total-number-of-directors numbers-only empty" style="text-align: center;">7</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td style="text-align: center;"><strong>Female</strong></td>
                                    <td style="text-align: center;"><strong>Male</strong></td>
                                    <td style="text-align: center;"><strong>Non-Binary</strong></td>
                                    <td style="text-align: center;"><strong>Did Not Disclose Gender</strong></td>
                                </tr>
                                <tr class="neutral-bg">
                                    <td colspan="5"><strong>Gender:</strong></td>
                                </tr>
                                <tr>
                                    <td>Directors</td>
                                    <td class="female numbers-only empty" style="text-align: center;">1</td>
                                    <td class="male numbers-only empty" style="text-align: center;">6</td>
                                    <td class="non-binary numbers-only empty" style="text-align: center;">-</td>
                                    <td class="did-not-disclose numbers-only empty" style="text-align: center;">-</td>
                                </tr>
                                <tr class="neutral-bg">
                                    <td colspan="5">
                                        <strong>Number of Directors who identify in Any of the Categories Below:</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>African American or Black</td>
                                    <td class="female numbers-only empty" style="text-align: center;">-</td>
                                    <td class="male numbers-only empty" style="text-align: center;">-</td>
                                    <td class="non-binary numbers-only empty" style="text-align: center;">-</td>
                                    <td class="did-not-disclose numbers-only empty" style="text-align: center;">-</td>
                                </tr>
                                <tr>
                                    <td>Alaskan Native or American Indian</td>
                                    <td class="female numbers-only empty" style="text-align: center;">-</td>
                                    <td class="male numbers-only empty" style="text-align: center;">-</td>
                                    <td class="non-binary numbers-only empty" style="text-align: center;">-</td>
                                    <td class="did-not-disclose numbers-only empty" style="text-align: center;">-</td>
                                </tr>
                                <tr>
                                    <td>Asian (other than South Asian)</td>
                                    <td class="female numbers-only empty" style="text-align: center;">-</td>
                                    <td class="male numbers-only empty" style="text-align: center;">-</td>
                                    <td class="non-binary numbers-only empty" style="text-align: center;">-</td>
                                    <td class="did-not-disclose numbers-only empty" style="text-align: center;">-</td>
                                </tr>
                                <tr>
                                    <td>South Asian</td>
                                    <td class="female numbers-only empty" style="text-align: center;">1</td>
                                    <td class="male numbers-only empty" style="text-align: center;">-</td>
                                    <td class="non-binary numbers-only empty" style="text-align: center;">-</td>
                                    <td class="did-not-disclose numbers-only empty" style="text-align: center;">-</td>
                                </tr>
                                <tr>
                                    <td>Hispanic or Latinx</td>
                                    <td class="female numbers-only empty" style="text-align: center;">-</td>
                                    <td class="male numbers-only empty" style="text-align: center;">-</td>
                                    <td class="non-binary numbers-only empty" style="text-align: center;">-</td>
                                    <td class="did-not-disclose numbers-only empty" style="text-align: center;">-</td>
                                </tr>
                                <tr>
                                    <td>Native Hawaiian or Pacific Islander</td>
                                    <td class="female numbers-only empty" style="text-align: center;">-</td>
                                    <td class="male numbers-only empty" style="text-align: center;">-</td>
                                    <td class="non-binary numbers-only empty" style="text-align: center;">-</td>
                                    <td class="did-not-disclose numbers-only empty" style="text-align: center;">-</td>
                                </tr>
                                <tr>
                                    <td>White</td>
                                    <td class="female numbers-only empty" style="text-align: center;">-</td>
                                    <td class="male numbers-only empty" style="text-align: center;">6</td>
                                    <td class="non-binary numbers-only empty" style="text-align: center;">-</td>
                                    <td class="did-not-disclose numbers-only empty" style="text-align: center;">-</td>
                                </tr>
                                <tr>
                                    <td>Two or More Races or Ethnicities</td>
                                    <td class="female numbers-only empty" style="text-align: center;">-</td>
                                    <td class="male numbers-only empty" style="text-align: center;">-</td>
                                    <td class="non-binary numbers-only empty" style="text-align: center;">-</td>
                                    <td class="did-not-disclose numbers-only empty" style="text-align: center;">-</td>
                                </tr>
                                <tr class="neutral-bg">
                                    <td>LGBTQ+</td>
                                    <td colspan="4" class="lgbtq numbers-only center empty" style="text-align: center;">-</td>
                                </tr>
                                <tr>
                                    <td>Persons with Disabilities</td>
                                    <td colspan="4" class="did-not-disclose numbers-only center empty" style="text-align: center;">-</td>
                                </tr>
                                </tbody>
                            </table>
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
                        <a href="https://ir.marathondh.com/news-events/press-releases/rss" class="rss" target="_blank" rel="noopener">RSS News Feed</a>
                    </li>
                </ul>
            </div>
        </div>

        @include('pages.includes.footer')

    </div>

@endsection




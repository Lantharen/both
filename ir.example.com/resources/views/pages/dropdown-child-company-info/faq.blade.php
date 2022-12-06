@extends('layouts.base')

@section('page-title', 'FAQ :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107618 page-type-faqs pg-company-information-faq ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>FAQ</h1>
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
                                    <li class="active active-landing">
                                        <a href="/company-information/faq" target="_self">FAQ</a>

                                    </li>
                                    <li class="">
                                        <a href="/company-information/analyst-coverage" target="_self">Analyst Coverage</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">


                            <dl class="spr-ir-faq">
                                <dt class="question"><strong>What is Marathon Digital Holdings stock symbol?</strong>
                                </dt>
                                <dd class="answer"><p>Our stock is traded on the Nasdaq under the symbol MARA.</p></dd>
                                <dt class="question">
                                    <strong>Can I buy stock directly from Marathon Digital Holdings?</strong></dt>
                                <dd class="answer">
                                    <p>No, You will need to contact a licensed stock broker or use an online trading account.</p>
                                </dd>
                                <dt class="question"><strong>How can I buy stock in Marathon Digital Holdings?</strong>
                                </dt>
                                <dd class="answer">
                                    <p>Through a licensed stock broker or by using an online trading account.</p></dd>
                                <dt class="question">
                                    <strong>How do I change the address on my shareholder account?</strong></dt>
                                <dd class="answer">
                                    <p>Through your brokerage account or by contacting our transfer agent.</p></dd>
                                <dt class="question"><strong>When was Marathon Digital Holdings incorporated?</strong>
                                </dt>
                                <dd class="answer"><p>2010</p></dd>
                                <dt class="question">
                                    <strong>When did Marathon Digital Holdings become a public company?</strong></dt>
                                <dd class="answer"><p>March 9, 2011</p></dd>
                                <dt class="question"><strong>Where is Marathon Digital Holdings located?</strong></dt>
                                <dd class="answer"><p>1180 North Town Center Drive<br>Suite 100,<br>Las Vegas, NV 89144
                                    </p></dd>
                                <dt class="question"><strong>When is Marathon Digital Holdings fiscal year end?</strong>
                                </dt>
                                <dd class="answer"><p>December 31st</p></dd>
                                <dt class="question"><strong>Who is Marathon Digital Holdings transfer agent?</strong>
                                </dt>
                                <dd class="answer">
                                    <p>Equity Stock Transfer<br>Nora Marckwordt<br>Phone: 917-746-4595<br>Fax: 347-584-3644<br><a href="http://www.equitystock.com/" target="_blank" rel="noopener">www.equitystock.com</a>
                                    </p></dd>
                                <dt class="question">
                                    <strong>Who are Marathon Digital Holdings independent auditors?</strong></dt>
                                <dd class="answer">
                                    <p>Marcum LLP<br><a href="https://www.marcumllp.com/" target="_blank" rel="noopener">https://www.marcumllp.com/</a>
                                    </p></dd>
                                <dt class="question">
                                    <strong>Who is Marathon Digital Holdings outside legal counsel?</strong></dt>
                                <dd class="answer">
                                    <p>Jolie Kahn, Esq.<br>12 E. 49th Street<br>11th floor<br>New York, NY 10017</p>
                                </dd>
                                <dt class="question">
                                    <strong>Who can I contact for general information about Marathon Digital Holdings?</strong>
                                </dt>
                                <dd class="answer"><p>T: 800-804-1690<br>E: ir@mara.com</p></dd>
                            </dl>
                        </main>
                    </div>
                </div>
            </div><!-- //container-->
        </div>
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

        @include('pages.includes.footer')

    </div>

@endsection

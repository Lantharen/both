@extends('layouts.base')

@section('page-title', 'Email Alerts :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107612 page-type-contact-capture-form-email-alerts pg-news-events-email-alerts ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Email Alerts</h1>
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
                                    <li class="">
                                        <a href="/news-events/ir-calendar" target="_self">IR Calendar</a>

                                    </li>
                                    <li class="active active-landing">
                                        <a href="/news-events/email-alerts" target="_self">Email Alerts</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <p>Please fill out the form below to receive company press releases via email when they occur.</p>
                            <noscript>
                                <div class="alert alert-warning">
                                    <strong>We're sorry</strong>, but this form has spam protection that requires JavaScript to be enabled to work
                                    correctly. If you'd like to contact us
                                    via this form, please
                                    <a href="https://support.google.com/adsense/answer/12654?hl=en" target="_blank" rel="noopener">enable
                                        scripts in your browser</a> and reload the page.
                                </div>
                            </noscript>
                            <div data-name="recaptcha">
                                <form method="post" class="email-alerts-form email-alerts validate-form" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name:*</label>
                                                <input type="text" name="first_name" id="first_name" class="required form-control" minlength="2" maxlength="40">
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name">Last Name:*</label>
                                                <input type="text" name="last_name" id="last_name" class="required form-control" minlength="2" maxlength="40">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email:*</label>
                                                <input type="email" name="email" id="email" maxlength="40" class="required form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="type_id">Contact Type:</label>
                                                <div class="dropdown bootstrap-select form-control bs3">
                                                    <select name="type_id" id="type_id" class="form-control selectpicker" data-style="main-select" tabindex="-98">
                                                        <option value="1">Individual Investor</option>
                                                        <option value="2">Analyst</option>
                                                        <option value="4">Broker/Investment Advisor</option>
                                                        <option value="3">Portfolio Manager</option>
                                                        <option value="11">Banker/Financing Source</option>
                                                        <option value="6">Press/Media</option>
                                                        <option value="9">Consultant</option>
                                                        <option value="5">Employee</option>
                                                        <option value="12">Customer/Client</option>
                                                        <option value="10">Student</option>
                                                        <option value="8">Other</option>
                                                    </select>
                                                        <span class="bs-caret">

                                                        </span>

                                                    <div class="dropdown-menu open">
                                                        <div class="inner open" role="listbox" id="bs-select-1" tabindex="-1">
                                                            <ul class="dropdown-menu inner " role="presentation"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row email-alerts-notifications-row">
                                        <div class="col-md-7">
                                            <fieldset class="column">
                                                <div class="padding">
                                                    <h4>Choose Notifications</h4>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <h5>Company Information</h5>
                                                                <div class="eq-checkbox">
                                                                    <input type="checkbox" value="1" name="ir-updates" checked="checked" id="all-press-releases">
                                                                    <label for="all-press-releases">All Press Releases</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 sec-filings-col">
                                                            <h5>SEC Filings</h5>
                                                            <fieldset>
                                                                <div class="eq-checkbox">
                                                                    <input type="checkbox" value="1" name="sec_alert_all" id="ir-sec-all">
                                                                    <label for="ir-sec-all">All SEC Filings</label>
                                                                </div>
                                                                <div class="eq-checkbox">
                                                                    <input type="checkbox" value="1" name="sec_alert_annual_quarterly" class="ir-sec-sub" id="sec-annual-reports">
                                                                    <label for="sec-annual-reports">Annual &amp; Quarterly Reports</label>
                                                                </div>
                                                                <div class="eq-checkbox">
                                                                    <input type="checkbox" value="1" name="sec_alert_current" class="ir-sec-sub" id="sec-current-reports">
                                                                    <label for="sec-current-reports">Current Reports</label>
                                                                </div>
                                                                <div class="eq-checkbox">
                                                                    <input type="checkbox" value="1" name="sec_alert_insider" class="ir-sec-sub" id="sec-insider-transactions">
                                                                    <label for="sec-insider-transactions">Insider Transactions</label>
                                                                </div>
                                                                <div class="eq-checkbox">
                                                                    <input type="checkbox" value="1" name="sec_alert_proxy" class="ir-sec-sub" id="sec-proxy-information">
                                                                    <label for="sec-proxy-information">Proxy Information</label>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="g-recaptcha" data-sitekey="6LciiZUaAAAAAHcmI5b4boscqn3xez8biSbu-_7I" data-callback="onInvisibleRecaptchaSubmit" data-size="invisible">
                                                <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                                    <div class="grecaptcha-logo">
                                                        <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LciiZUaAAAAAHcmI5b4boscqn3xez8biSbu-_7I&amp;co=aHR0cHM6Ly9pci5tYXJhdGhvbmRoLmNvbTo0NDM.&amp;hl=ru&amp;v=Km9gKuG06He-isPsP6saG8cn&amp;size=invisible&amp;cb=ophs3m1p5h5t" width="256" height="60" role="presentation" name="a-rvkymtryip4h" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                    </div>
                                                    <div class="grecaptcha-error"></div>
                                                    <label for="g-recaptcha-response" class="sr-only" aria-hidden="true">Captcha</label><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;" aria-hidden="true"></textarea>
                                                </div>
                                                <iframe style="display: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="field">
                                                <input type="hidden" name="a" value=""><br>
                                                <button class="btn spr_ir_submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <p>We respect your privacy. We do not sell, rent, or loan any information to any third party. Any information you give
                                    us is held with the utmost care and security, and will be used only in ways to which you have consented. </p>
                            </div>

                            <script id="recaptcha" src="https://www.google.com/recaptcha/api.js?onload=recaptchaOnloadCallback" async="" defer=""></script>
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

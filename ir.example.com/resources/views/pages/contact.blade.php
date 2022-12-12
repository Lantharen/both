@extends('layouts.base')

@section('page-title', 'Contact :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-10 page-type-contact pg-overview-contact ir has-sub-nav fl-builder-breakpoint-large', \Termwind\style('padding-top: 125px;')
)

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Contact</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                        </div>
                    </div>
                </div>
            </header>

            @include('pages.includes.nav')

            <main id="mainContent">
                <noscript>
                    <div class="alert alert-warning">
                        <strong>We're sorry</strong>, but this form has spam protection that requires
                        JavaScript to be enabled to work correctly. If you'd like to contact us
                        via this form, please
                        <a href="https://support.google.com/adsense/answer/12654?hl=en" target="_blank" rel="noopener">enable scripts in your browser</a>
                        and reload the page.
                    </div>
                </noscript>
                <div class="module module-contact-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="module-content text center">
                                    <h2>Get In Touch With Us</h2></div>


                                <div class="module-contact-info">
                                    <div class="row">
                                        <div class="col-sm-4 contact-info-col">
                                            <h4>Address</h4>
                                            <p>
                                                1180 North Town Center Drive<br> Suite 100<br> Las Vegas, NV 89144 </p>
                                        </div>
                                        <div class="col-sm-4 contact-info-col">
                                            <h4>Phone &amp; Fax</h4>
                                            <p>
                                                Toll-Free: 800-804-1690<br>
                                                Fax: 703-997-7320
                                            </p>
                                        </div>

                                        <div class="col-sm-4 contact-info-col">
                                            <h4>Email</h4>
                                            <p>
                                                info
                                                <wbr>
                                                @mara.com
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div data-name="recaptcha" class="contact-form-wrapper">
                                    <form method="post" action="/form-submit" id="contact-form" class="contact-form validate-form" novalidate="novalidate">
                                        <input type="hidden" name="f" value="contact-form">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="first_name">First Name*</label>
                                                <input type="text" name="first_name" id="first_name" value="" minlength="2" maxlength="40" class="required form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name">Last Name*</label>
                                                <input type="text" name="last_name" id="last_name" value="" minlength="2" maxlength="40" class="required form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email*</label>
                                                <input type="email" name="email" id="email" value="" maxlength="40" class="required form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="comments">Comments:</label>
                                                <textarea name="comments" id="comments" cols="30" rows="6" class="form-control"></textarea>
                                            </div>
                                            <div class="g-recaptcha" data-sitekey="6LciiZUaAAAAAHcmI5b4boscqn3xez8biSbu-_7I" data-callback="onInvisibleRecaptchaSubmit" data-size="invisible">
                                                <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                                    <div class="grecaptcha-logo">
                                                        <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LciiZUaAAAAAHcmI5b4boscqn3xez8biSbu-_7I&amp;co=aHR0cHM6Ly9pci5tYXJhdGhvbmRoLmNvbTo0NDM.&amp;hl=ru&amp;v=Km9gKuG06He-isPsP6saG8cn&amp;size=invisible&amp;cb=g5aiooly155g" width="256" height="60" role="presentation" name="a-qnkc1fruyfud" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                    </div>
                                                    <div class="grecaptcha-error"></div>
                                                    <label for="g-recaptcha-response" class="sr-only" aria-hidden="true">Captcha</label><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;" aria-hidden="true"></textarea>
                                                </div>
                                                <iframe style="display: none;"></iframe>
                                            </div>
                                            <button class="btn" type="submit">Submit</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script id="recaptcha" src="https://www.google.com/recaptcha/api.js?onload=recaptchaOnloadCallback" async="" defer=""></script>
            </main>
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

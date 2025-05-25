<!-- footer begin -->
<footer class="section-dark">
    <div class="container relative z-2">
        <div class="row gx-5">
            <!-- Company Info & Social -->
            <div class="col-lg-4 col-sm-6">
                <img src="{{ asset('assets/img/logo-white.png') }}" class="w-150px" alt="{{ env('APP_NAME') }}">
                <div class="spacer-20"></div>
                <p>{{ get_setting('footer_about_text', null, App::getLocale()) }}</p>
                <div class="social-icons mb-sm-30">
                    @if (get_setting('show_social_links'))
                        @if (get_setting('facebook_link'))<a href="{{ get_setting('facebook_link') }}"><i class="fa-brands fa-facebook-f"></i></a>@endif
                        @if (get_setting('twitter_link'))<a href="{{ get_setting('twitter_link') }}"><i class="fa-brands fa-x-twitter"></i></a>@endif
                        @if (get_setting('instagram_link'))<a href="{{ get_setting('instagram_link') }}"><i class="fa-brands fa-instagram"></i></a>@endif
                        @if (get_setting('youtube_link'))<a href="{{ get_setting('youtube_link') }}"><i class="fa-brands fa-youtube"></i></a>@endif
                        @if (get_setting('whatsapp_link'))<a href="{{ get_setting('whatsapp_link') }}"><i class="fa-brands fa-whatsapp"></i></a>@endif
                    @endif
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="widget">
                            <h5>{{ translate('Company') }}</h5>
                            <ul>
                                <li><a href="{{ route('home') }}">{{ translate('Home') }}</a></li>
                                <li><a href="/services">{{ translate('Our Services') }}</a></li>
                                <li><a href="/projects">{{ translate('Projects') }}</a></li>
                                <li><a href="/about">{{ translate('About Us') }}</a></li>
                                <li><a href="/blog">{{ translate('Blog') }}</a></li>
                                <li><a href="/contact">{{ translate('Contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="widget">
                            <h5>{{ translate('Our Services') }}</h5>
                            <ul>
                                <li><a href="#">{{ translate('Garden Design') }}</a></li>
                                <li><a href="#">{{ translate('Garden Maintenance') }}</a></li>
                                <li><a href="#">{{ translate('Planting Services') }}</a></li>
                                <li><a href="#">{{ translate('Tree Care') }}</a></li>
                                <li><a href="#">{{ translate('Irrigation Services') }}</a></li>
                                <li><a href="#">{{ translate('Specialty Services') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                <div class="widget">
                    <div class="fw-bold text-white">
                        <i class="icofont-clock-time me-2 id-color-2"></i>{{ translate("We're Open") }}
                    </div>
                    {{ get_setting('footer_hours', null, App::getLocale()) ?? 'Monday - Friday 08.00 - 18.00' }}

                    <div class="spacer-20"></div>

                    <div class="fw-bold text-white">
                        <i class="icofont-location-pin me-2 id-color-2"></i>{{ translate('Office Location') }}
                    </div>
                    {{ get_setting('contact_address', null, App::getLocale()) }}

                    <div class="spacer-20"></div>

                    <div class="fw-bold text-white">
                        <i class="icofont-envelope me-2 id-color-2"></i>{{ translate('Send a Message') }}
                    </div>
                    <a href="mailto:{{ get_setting('contact_email') }}" class="text-white">{{ get_setting('contact_email') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex justify-content-between">
                        <div class="de-flex-col">
                            {{ get_setting('frontend_copyright_text', null, App::getLocale()) }}
                        </div>
                        <ul class="menu-simple">
                            <li><a href="{{ route('terms') }}">{{ translate('Terms & Conditions') }}</a></li>
                            <li><a href="{{ route('privacypolicy') }}">{{ translate('Privacy Policy') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img src="{{ asset('front/images/misc/silhuette-1-black.webp') }}" class="abs bottom-0 op-3" style="left: 0" alt="">
</footer>
<!-- footer end -->
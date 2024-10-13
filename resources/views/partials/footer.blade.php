<footer class="main-footer">
    <div class="bg-image" style="background-image: url({{ asset('huaxia/images/background/5.jpg') }})"></div>
    <div class="anim-icons">
        <span class="icon icon-plane-3 bounce-x"></span>
    </div>

    <div class="contacts-outer">
        <div class="auto-container">
            <div class="row">

                <div class="contact-info-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon flaticon-international-shipping-2"></i></div>
                        <h4 class="title">{{ __('footer.address') }}</h4>
                        <div class="text">{{ __('footer.address_content') }}</div>
                    </div>
                </div>

                <div class="contact-info-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon flaticon-stock-1"></i></div>
                        <h4 class="title">{{ __('footer.contact') }}</h4>
                        <div class="text">
                            <a
                                href="https://html.kodesolution.com/cdn-cgi/l/email-protection#57393232333f323b271734383a2736392e7934383a"><span
                                    class="__cf_email__"
                                    data-cfemail="1b757e7e7f737e776b5b7874766b7a756235787476">[email&#160;protected]</span></a>
                            <a href="tel:+84 968633588">+84 968633588</a>
                        </div>
                    </div>
                </div>

                <div class="contact-info-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon flaticon-24-hours-2"></i></div>
                        <h4 class="title">{{ __('footer.time') }}</h4>
                        <div class="text">{{ __('footer.time_content') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">

                <div class="footer-column col-xl-3 col-lg-12 col-md-6 col-sm-12">
                    <div class="footer-widget about-widget">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('huaxia/images/logo-navi.png') }}" alt /></a>
                        </div>
                        <div class="text">{{ __('footer.sub_title_1') }}</div>
                        <a href="{{ route('about') }}" class="theme-btn btn-style-one hvr-light small"><span
                                class="btn-title">{{ __('footer.about') }}</span></a>
                    </div>
                </div>

                <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">{{ __('footer.service') }}</h3>
                        <ul class="user-links">
                            @foreach ($services as $service)
                                <li><a href="{{ route('post.detail', ['alias' => $service->slug]) }}">{{ $service->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
                </div>

                <div class="footer-column col-xl-3 col-lg-5 col-md-6 col-sm-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">{{ __('footer.news') }}</h3>
                        <div class="widget-content">
                            <div class="subscribe-form">
                                <div class="text">{{ __('footer.news_content') }}</div>
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <input type="email" name="email" class="email" value
                                            placeholder="{{ __('footer.news_form_placeholder') }}" required />
                                        <button type="button" class="theme-btn btn-style-one">
                                            <span class="btn-title"><i class="fa fa-paper-plane"></i></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="copyright-text">
                    <p>&copy; {{ __('footer.copy_right') }} <a href="{{ route('home') }}">kodesolution.com</a></p>
                </div>
                <ul class="social-icon-two">
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

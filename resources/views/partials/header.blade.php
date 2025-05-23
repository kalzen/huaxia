<header class="main-header header-style-one">

    <div class="header-top">
        <div class="top-left">

            <ul class="list-style-one">
                <li><i class="fa fa-map-marker-alt"></i>
                    {{ __('nav.address') }}</li>
                <li><i class="fa fa-clock"></i> {{ __('nav.work_time') }}: 8am - 5pm</li>
                <li><i class="fa fa-phone-volume"></i> <a
                        href="tel:{{ str_replace(' ', '', $shared_config['hotline']->value) }}">{{ $shared_config['hotline']->value }}</a>
                </li>
            </ul>
        </div>
        <div class="top-right">
            <ul class="social-icon-one">
                <li>
                    <a href="{{ $shared_config['facebook']->value }}"><span class="fab fa-facebook-square"></span></a>
                </li>
                <li>
                    <a href="{{ $shared_config['youtube']->value }}"><span class="fab fa-youtube"></span></a>
                </li>
                <li>
                    <a href="{{ $shared_config['instagram']->value }}"><span class="fab fa-instagram"></span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="header-lower">

        <div class="main-box">
            <div class="logo-box" style="background-color: white !important">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset($shared_config['logo']->value) }}" alt
                            title="Huaxia" /></a>
                </div>
            </div>

            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">
                        <li>
                            <a href="{{ route('home') }}">{{ __('nav.home') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">{{ __('nav.about') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('service') }}">{{ __('nav.services') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('post.list') }}">{{ __('nav.post') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">{{ __('nav.contact') }}</a>
                        </li>
                        <li class="dropdown">
                            <a>{{ __('nav.language') }}</a>
                            <ul>

                                <li>
                                    <a href="{{ route('language', ['locale' => 'vi']) }}">{{ __('nav.lang.vi') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('language', ['locale' => 'en']) }}">{{ __('nav.lang.en') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('language', ['locale' => 'cn']) }}">{{ __('nav.lang.cn') }}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <div class="outer-box">
                    <button class="ui-btn ui-btn search-btn">
                        <span class="icon lnr lnr-icon-search"></span>
                    </button>
                    <!-- <a href="#" class="ui-btn"><i class="lnr-icon-shopping-cart"></i></a> -->
                    <a href="#" class="theme-btn btn-style-one alternate"><span
                            class="btn-title">{{ __('nav.button') }}</span></a>

                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>


    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('huaxia/images/favicon.png') }}" alt
                            title="Huaxia" /></a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>
            <ul class="navigation clearfix">

            </ul>
            <ul class="contact-list-one">
                <li>

                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">{{ __('nav.call_callout') }}</span>
                        <a
                            href="tel:{{ str_replace(' ', '', $shared_config['hotline']->value) }}">{{ $shared_config['hotline']->value }}</a>
                    </div>
                </li>
                <li>

                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">{{ __('nav.email_callout') }}</span>
                        <a href="{{ $shared_config['email']->value }}"><span>{{ $shared_config['email']->value }}</span></a>
                    </div>
                </li>
                <li>

                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">{{ __('nav.work_time_callout') }}</span>
                        {{ __('nav.work_time_mobile') }}
                    </div>
                </li>
            </ul>
            <ul class="social-links">
                <li>
                    <a href="{{ $shared_config['facebook']->value }}"><span class="fab fa-facebook-square"></span></a>
                </li>
                <li>
                    <a href="{{ $shared_config['youtube']->value }}"><span class="fab fa-youtube"></span></a>
                </li>
                <li>
                    <a href="{{ $shared_config['instagram']->value }}"><span class="fab fa-instagram"></span></a>
                </li>
            </ul>
        </nav>
    </div>


    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>
        <div class="search-inner">
            <form method="post" action="{{ route('home') }}">
                <div class="form-group">
                    <input type="search" name="search-field" value placeholder="{{ __('nav.search') }}" required />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>


    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">

                <div class="logo">
                    <a href="{{ route('home') }}" title><img src="{{ asset('huaxia/images/logo-navi.png') }}" alt
                            title /></a>
                </div>

                <div class="nav-outer">

                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">

                            </ul>
                        </div>
                    </nav>


                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>

</header>

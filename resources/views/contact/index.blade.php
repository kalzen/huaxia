@extends('layouts.master')
@section('meta')
    <title>Liên hệ - {{ env('APP_NAME') }}</title>
    <meta name="keywords" content="{{ env('APP_NAME') }}" />
    <meta name="description" content="{{ env('APP_NAME') }}" />
    <meta property="og:image" content="{{ env('APP_LOGO') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ env('APP_NAME') }}">
    <meta property="og:description" content="{{ env('APP_NAME') }}">
@stop
@section('content')
    <div class="content-wrap ">
        <section class="page-title" style="background-image: url({{ asset('huaxia/images/background/2.jpg') }})">
            <div class="auto-container">
                <div class="title-outer">
                    <h1 class="title">
                        {{ __('contact.page_title') }}
                    </h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">
                                {{ __('contact.page_title_breadcrumb_1') }}
                            </a></li>
                        <li>{{ __('contact.page_title_breadcrumb_2') }}</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="contact-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-details__right">
                            <div class="sec-title">
                                <span class="sub-title">{{ __('contact.subtitle_1') }}</span>
                                <h2>{{ __('contact.subtitle_2') }}</h2>
                            </div>
                            <ul class="list-unstyled contact-details__info">
                                <li>
                                    <div class="icon">
                                        <span class="lnr-icon-phone-plus"></span>
                                    </div>
                                    <div class="text">
                                        <h6>{{ __('contact.box_title_1') }}</h6>
                                        <a href="tel:0968633588"><span>{{ __('contact.box_subtitle_1') }}</span>
                                            +84 968633588
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="lnr-icon-envelope1"></span>
                                    </div>
                                    <div class="text">
                                        <h6>{{ __('contact.box_title_2') }}</h6>
                                        <a
                                            href="https://html.kodesolution.com/cdn-cgi/l/email-protection#07696262636f626b774764686a7766697e2964686a"><span
                                                class="__cf_email__"
                                                data-cfemail="59373c3c3d313c3529193a363429383720773a3634">[email&#160;protected]</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="lnr-icon-location"></span>
                                    </div>
                                    <div class="text">
                                        <h6>{{ __('contact.box_title_3') }}</h6>
                                        <span>{{ __('contact.box_title_3') }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="sec-title">
                            <span class="sub-title">{{ __('contact.subtitle_3') }}</span>
                            <h2>{{ __('contact.subtitle_4') }}</h2>
                        </div>
                        @if (@session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form id="contact_form" name="contact_form" action="{{ route('message') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>{{ __('contact.form_label_1') }}<small>*</small></label>
                                        <input name="form_name" class="form-control" type="text"
                                            placeholder="{{ __('contact.form_placeholder_1') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>{{ __('contact.form_label_2') }}<small>*</small></label>
                                        <input name="form_email" class="form-control required email" type="email"
                                            placeholder="{{ __('contact.form_placeholder_2') }}" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>{{ __('contact.form_label_4') }}</label>
                                        <input name="form_phone" class="form-control" type="text"
                                            placeholder="{{ __('contact.form_placeholder_4') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>{{ __('home.why_choose_us_form_4') }}</label>
                                <select class="form-control" name="service">
                                    <option value selected disabled required>
                                        {{ __('home.why_choose_us_form_select') }}
                                    </option>
                                    <option value="1">{{ __('home.why_choose_us_form_select_1') }}</option>
                                    <option value="2">{{ __('home.why_choose_us_form_select_2') }}</option>
                                    <option value="3">{{ __('home.why_choose_us_form_select_3') }}</option>
                                    <option value="4">{{ __('home.why_choose_us_form_select_4') }}</option>
                                    <option value="5">{{ __('home.why_choose_us_form_select_5') }}</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <input name="form_botcheck" class="form-control" type="hidden" value />
                                <button type="submit" class="theme-btn btn-style-one"
                                    data-loading-text="Please wait..."><span
                                        class="btn-title">{{ __('contact.form_button') }}</span></button>
                                <button type="reset" class="theme-btn btn-style-one"><span
                                        class="btn-title">{{ __('contact.form_reset') }}</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid p-0">
                <div class="row">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d739.7506130319392!2d106.6969995001695!3d20.867639274713923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7ae7cd8ac77b%3A0xefcd637da20f063b!2zMyBQIEzDqiBUaMOhbmggVMO0bmcsIE3DoXkgVMahLCBOZ8O0IFF1eeG7gW4sIEjhuqNpIFBow7JuZywgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1728842233321!5m2!1sen!2s"
                        data-tm-width="100%" height="500" frameborder="0" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        $(function() {
            console.log('Contact ready')
        })
    </script>
@endsection

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
                                <div class="text">Lorem ipsum is simply free text available dolor sit amet, consectetur
                                    notted adipisicing elit sed do eiusmod tempor incididunt simply free ut labore et
                                    dolore magna aliqua.</div>
                            </div>
                            <ul class="list-unstyled contact-details__info">
                                <li>
                                    <div class="icon">
                                        <span class="lnr-icon-phone-plus"></span>
                                    </div>
                                    <div class="text">
                                        <h6>{{ __('contact.box_title_1') }}</h6>
                                        <a href="tel:980089850"><span>{{ __('contact.box_subtitle_1') }}</span> +92
                                            (020)-9850</a>
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

                        <form id="contact_form" name="contact_form" class
                            action="https://html.kodesolution.com/2022/tronis-html/includes/sendmail.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>{{ __('contact.form_label_1') }}<small>*</small></label>
                                        <input name="form_name" class="form-control" type="text"
                                            placeholder="{{ __('contact.form_placeholder_1') }}" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>{{ __('contact.form_label_2') }}<small>*</small></label>
                                        <input name="form_email" class="form-control required email" type="email"
                                            placeholder="{{ __('contact.form_placeholder_2') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>{{ __('contact.form_label_3') }}<small>*</small></label>
                                        <input name="form_subject" class="form-control required" type="text"
                                            placeholder="{{ __('contact.form_placeholder_3') }}" />
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
                                <label>{{ __('contact.form_label_5') }}</label>
                                <textarea name="form_message" class="form-control required" rows="5" placeholder="{{ __('contact.form_placeholder_5') }}"></textarea>
                            </div>
                            <div class="mb-3">
                                <input name="form_botcheck" class="form-control" type="hidden" value />
                                <button type="submit" class="theme-btn btn-style-one"
                                    data-loading-text="Please wait..."><span class="btn-title">{{ __('contact.form_button') }}</span></button>
                                <button type="reset" class="theme-btn btn-style-one"><span class="btn-title">{{ __('contact.form_reset') }}</span></button>
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
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843149788316!2d144.9537131159042!3d-37.81714274201087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sbn!2sbd!4v1583760510840!5m2!1sbn!2sbd"
                        data-tm-width="100%" height="500" frameborder="0" allowfullscreen></iframe>
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

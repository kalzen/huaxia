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
                                        <a href="{{ str_replace(' ', '', $config['hotline']->value) }}"><span>{{ __('contact.box_subtitle_1') }}</span>
                                            {{ $config['hotline']->value }}
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
                                            href="{{ $config['email']->value }}"><span
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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="contact_form" name="contact_form" action="{{ route('message') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>{{ __('contact.form_label_1') }}<small>*</small></label>
                                        <input name="name" class="form-control" type="text"
                                            placeholder="{{ __('contact.form_placeholder_1') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>{{ __('contact.form_label_2') }}<small>*</small></label>
                                        <input name="email" class="form-control required" type="email"
                                            placeholder="{{ __('contact.form_placeholder_2') }}" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>{{ __('contact.form_label_4') }}</label>
                                        <input name="mobile" class="form-control" type="text"
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
                                    <option value="{{ __('home.why_choose_us_form_select_1') }}">
                                        {{ __('home.why_choose_us_form_select_1') }}
                                    </option>
                                    <option value="{{ __('home.why_choose_us_form_select_2') }}">
                                        {{ __('home.why_choose_us_form_select_2') }}
                                    </option>
                                    <option value="{{ __('home.why_choose_us_form_select_3') }}">
                                        {{ __('home.why_choose_us_form_select_3') }}
                                    </option>
                                    <option value="{{ __('home.why_choose_us_form_select_4') }}">
                                        {{ __('home.why_choose_us_form_select_4') }}
                                    </option>
                                    <option value="{{ __('home.why_choose_us_form_select_5') }}">
                                        {{ __('home.why_choose_us_form_select_5') }}
                                    </option>
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
                    <iframe src="{{ $config['map']->value }}" data-tm-width="100%" height="500" frameborder="0"
                        allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

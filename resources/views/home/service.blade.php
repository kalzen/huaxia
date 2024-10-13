@extends('layouts.master')
@section('content')
    <section class="page-title" style="background-image: url({{ asset('huaxia/images/background/2.jpg') }})">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">{{ __('service.page_title') }}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ __('service.page_title_breadcrumb_1') }}</a></li>
                    <li>{{ __('service.page_title_breadcrumb_2') }}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="services-section mt-5">
        <div class="bg-image" style="background-image: url({{ asset('huaxia/images/background/1.jpg') }})"></div>
        <div class="anim-icons">
            <span class="icon icon-wave-line"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">{{ __('home.service_company') }}</span>
                <h2>{{ __('home.service_title') }}</h2>
                <h3>{{ __('home.service_sub_title') }}</h3>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('post.detail', ['alias' => $service->slug]) }}"><img
                                            src="{{ asset($service->images->first()->url) }}" alt /></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <span class="sub-title"></span>
                                <h4 class="title">
                                    <a
                                        href="{{ route('post.detail', ['alias' => $service->slug]) }}">{{ $service->title }}</a>
                                </h4>
                                <div class="text">
                                    {{ $service->description }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

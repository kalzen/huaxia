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

    <section class="services-section">
        <div class="auto-container">
            <div class="row">

                <div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box ">
                        <div class="image-box">
                            <figure class="image"><a href="page-service-details.html"><img
                                        src="{{ asset('huaxia/images/resource/service-1.jpg') }}" alt></a></figure>
                        </div>
                        <div class="content-box">
                            <i class="icon flaticon-airplane-2"></i>
                            <span class="sub-title">{{ __('service.service_box_subtitle_1') }}</span>
                            <h4 class="title"><a href="page-service-details.html">{!! __('service.service_box_title_1') !!}</a></h4>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                        </div>
                    </div>
                </div>

                <div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box ">
                        <div class="image-box">
                            <figure class="image"><a href="page-service-details.html"><img
                                        src="{{ asset('huaxia/images/resource/service-2.jpg') }}" alt></a></figure>
                        </div>
                        <div class="content-box">
                            <i class="icon flaticon-cargo-boat"></i>
                            <span class="sub-title">{{ __('service.service_box_subtitle_2') }}</span>
                            <h4 class="title"><a href="page-service-details.html">{!! __('service.service_box_title_2') !!}</a></h4>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                        </div>
                    </div>
                </div>

                <div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box ">
                        <div class="image-box">
                            <figure class="image"><a href="page-service-details.html"><img
                                        src="{{ asset('huaxia/images/resource/service-3.jpg') }}" alt></a></figure>
                        </div>
                        <div class="content-box">
                            <i class="icon flaticon-delivery-truck-3"></i>
                            <span class="sub-title">{{ __('service.service_box_subtitle_3') }}</span>
                            <h4 class="title"><a href="page-service-details.html">{!! __('service.service_box_title_3') !!}</a></h4>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                        </div>
                    </div>
                </div>

                <div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                    <div class="inner-box ">
                        <div class="image-box">
                            <figure class="image"><a href="page-service-details.html"><img
                                        src="{{ asset('huaxia/images/resource/service-4.jpg') }}" alt></a></figure>
                        </div>
                        <div class="content-box">
                            <i class="icon flaticon-delivery-box-4"></i>
                            <span class="sub-title">{{ __('service.service_box_subtitle_4') }}</span>
                            <h4 class="title"><a href="page-service-details.html">{!! __('service.service_box_title_4') !!}</a></h4>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

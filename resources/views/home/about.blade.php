@extends('layouts.master')
@section('content')
    <div class="content-wrap ">
        <section class="page-title" style="background-image: url({{ asset('huaxia/images/background/2.jpg') }})">
            <div class="auto-container">
                <div class="title-outer">
                    <h1 class="title">{{ __('about.page_title') }}</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">{{ __('about.page_title_breadcrumb_1') }}</a></li>
                        <li>{{ __('about.page_title_breadcrumb_2') }}</li>
                    </ul>
                </div>
            </div>
        </section>


        <section class="about-section">
            <div class="anim-icons">
                <div class="float-image wow fadeInRight"><img src="{{ asset('huaxia/images/resource/float-img-1.png') }}"
                        alt /></div>
                <span class="icon icon-dots-1 bounce-x"></span>
                <span class="icon icon-dotted-map zoom-one"></span>
            </div>
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="sub-title">{{ __('home.company_name_upper') }}</span>
                                <h2>{!! __('about.title') !!}</h2>
                                <div class="text">
                                    {!! __('about.description') !!}
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="about-block">
                                    <i class="icon flaticon-worldwide-shipping"></i>
                                    <h4 class="title">{{ __('home.about_box_title_1') }}</h4>
                                    <p class="text">{{ __('home.about_box_description_1') }}.</p>
                                </div>
                                <div class="about-block">
                                    <i class="icon flaticon-3d-cube"></i>
                                    <h4 class="title">{{ __('home.about_box_title_2') }}</h4>
                                    <p class="text">{{ __('home.about_box_description_2') }}.</p>
                                </div>
                            </div>
                            <div class="btm-box">
                                <a href="page-about.html" class="theme-btn btn-style-one"><span
                                        class="btn-title">{{ __('home.about_button') }}</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <figure class="image-1"><img src="{{ asset('huaxia/images/resource/about-1.jpg') }}" alt />
                            </figure>
                            <figure class="image-2"><img src="{{ asset('huaxia/images/resource/about-2.jpg') }}" alt />
                            </figure>
                            <div class="experience">
                                <strong><i class="icon flaticon-global"></i> 40<br />
                                    {{ __('home.about_experience_year') }}</strong>
                                {{ __('home.about_experience') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-section-two">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="sub-title">{{ __('about.company_name_upper') }}</span>
                                <h2>{{ __('about.vision_&_mission') }}</h2>
                                <h4 class="py-0">{{ __('about.vision_sub_title') }}</h4>
                                <div class="text">{{ __('about.vision_description') }}.</div>
    
                                <h4>{{ __('about.mission_title') }}</h4>
                                <div class="text">{{ __('about.mission_description') }}.</div>
                            </div>
                            <div class="btm-box">
                                <a href="page-about.html" class="theme-btn btn-style-one">
                                    <span class="btn-title">{{ __('about.about_button') }}</span></a>
                            </div>
                        </div>
                    </div>
    
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <figure class="image-1 wow fadeInUp">
                                <img src="{{ asset('huaxia/images/resource/offer-img-2.jpg') }}" alt />
                            </figure>
                            <figure class="image-2 wow fadeInRight">
                                <img src="{{ asset('huaxia/images/resource/service-7.jpg') }}" alt />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="scroll-to-top scroll-to-target" data-target="html">
            <span class="fa fa-angle-up"></span>
        </div>
    @endsection

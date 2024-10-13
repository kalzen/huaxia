@extends('layouts.master')
@section('content')
    <section class="page-title" style="background-image: url({{ asset('huaxia/images/background/2.jpg') }})">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">{{ __('vision&mission.page_title') }}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ __('vision&mission.page_title_breadcrumb_1') }}</a></li>
                    <li>{{ __('vision&mission.page_title_breadcrumb_2') }}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="auto-container">
            <h1>{{ __('vision&mission.vision&mission') }}</h1>
            <h4 class="py-0">{{ __('vision&mission.vision_subtitle') }}</h4>
            <p class="blog-details__text-2">
                {{ __('vision&mission.vision_content') }}
            </p>
            <h4>{{ __('home.mission_title') }}</h4>
            <p class="blog-details__text-2">
                {{ __('vision&mission.mission_content') }}
            </p>
    </section>
@endsection

@extends('layouts.master')
@section('meta')
    @if (isset($category))
        <title>{{ $category->name }} - {{ env('APP_NAME') }}</title>
        <meta name="keywords" content="{{ $category->tags->pluck('name')->join(', ') }}" />
        <meta name="description" content="{{ $category->description }}" />
        <meta property="og:image" content="{{ $category->image ? $category->image->url : '' }}">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{{ $category->name }}">
        <meta property="og:description" content="{{ $category->description }}">
    @else
        <title>Tin tức - {{ env('APP_NAME') }}</title>
        <meta name="keywords" content="{{ env('APP_NAME') }}" />
        <meta name="description" content="{{ env('APP_NAME') }}" />
        <meta property="og:image" content="{{ env('APP_LOGO') }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ env('APP_NAME') }}">
        <meta property="og:description" content="{{ env('APP_NAME') }}">
    @endif
@endsection
@section('content')
    <div class="body-page">
        <section class="page-title" style="background-image: url({{ asset('huaxia/images/background/2.jpg') }})">
            <div class="auto-container">
                <div class="title-outer">
                    <h1 class="title">{{ __('post.page_title') }}</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">{{ __('post.page_title_breadcrumb_1') }}</a></li>
                        <li>{{ __('post.page_title_breadcrumb_2') }}</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="news-section">
            <div class="auto-container">
                <div class="row">
                    @if ($posts->isEmpty())
                        <div class="col-lg-12">
                            <div class="alert alert-warning">
                                {{ __('post.no_post') }}
                            </div>
                        </div>
                    @endif
                    @foreach ($posts as $post)
                        <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a
                                            href="{{ route('post.detail', ['alias' => $post->slug]) }}"><img
                                                src="{{ asset($post->images->first()->url) }}" alt></a></figure>
                                    <span class="date">
                                        <b>{{ \Carbon\Carbon::parse($post->created_at)->format('d') }}</b>
                                        T{{ \Carbon\Carbon::parse($post->created_at)->format('n') }}
                                    </span>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info">
                                        <li><i class="fa fa-user"></i>Bởi Admin</li>
                                    </ul>
                                    <h4 class="title">
                                        <a href="{{ route('post.detail', ['alias' => $post->slug]) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h4>
                                    <a href="{{ route('post.detail', ['alias' => $post->slug]) }}" class="read-more">Đọc
                                        thêm<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
{{-- @section('scripts')
    <script>
        $(function() {
            console.log('Post index ready')
        })
    </script>
@endsection --}}

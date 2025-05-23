@extends('layouts.master')
@section('meta')
    <title>{{ $post->title }}</title>
    <meta name="keywords" content="{{ collect($post->tags)->pluck('name')->join(',') }}" />
    <meta name="description" content="{{ substr(strip_tags($post->description), 0, 300) }}" />
    <meta property="og:image" content="{{ $post->images()->first()->url ?? '' }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ substr(strip_tags($post->description), 0, 300) }}">
@stop
@section('content')
    <section class="page-title" style="background-image: url({{ asset('huaxia/images/background/2.jpg') }})">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">{{ __('postDetail.page_title') }}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ __('postDetail.page_title_breadcrumb_1') }}</a></li>
                    <li><a href="{{ route('post.list') }}">{{ __('postDetail.page_title_breadcrumb_2') }}</a></li>
                    <li>{{ $post->title }}</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            <img src="{{ asset($post->images->first()->url) }}" alt>
                            <div class="blog-details__date">
                                <span class="day">{{ \Carbon\Carbon::parse($post->created_at)->format('d') }}</span>
                                <span class="month">T{{ \Carbon\Carbon::parse($post->created_at)->format('n') }}</span>
                            </div>
                        </div>
                        <div class="blog-details__content">
                            <ul class="list-unstyled blog-details__meta">
                                <li><a href="news-details.html"><i
                                            class="fas fa-user-circle"></i>{{ __('postDetail.creator') }}</a></li>
                            </ul>
                            <h3 class="blog-details__title">{{ $post->title }}</h3>
                            <p class="blog-details__text-2">{!! $post->content !!}</p>
                        </div>
                        <div class="blog-details__bottom">
                            <p class="blog-details__tags"> <span>{{ __('postDetail.tag') }}:</span>
                                @foreach ($post->tags as $tag)
                                    <a href="news-details.html">{{ $tag->name }}</a>
                                @endforeach
                            </p>
                            <div class="blog-details__social-list"> <a href="news-details.html"><i
                                        class="fab fa-twitter"></i></a> <a href="news-details.html"><i
                                        class="fab fa-facebook"></i></a> <a href="news-details.html"><i
                                        class="fab fa-pinterest-p"></i></a> <a href="news-details.html"><i
                                        class="fab fa-instagram"></i></a> </div>
                        </div>
                        <div class="nav-links">
                            {{-- <div class="prev">
                                <a href="news-details.html" rel="prev">Cargo flow through better supply in UK</a>
                            </div>
                            <div class="next">
                                <a href="news-details.html" rel="next">Why is supply chain visibility so
                                    important?</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="{{ __('postDetail.search_placeholder') }}">
                                <button type="submit"><i class="lnr-icon-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">{{ __('postDetail.latest_post') }}</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($most_view as $post)
                                    <li>
                                        <div class="sidebar__post-image"> <img
                                                src="{{ asset($post->images->first()->url) }}" alt>
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3> <span class="sidebar__post-content-meta">
                                                    <i class="fas fa-user-circle"></i>{{ __('postDetail.creator') }}</span>
                                                <a href="{{ route('post.detail', ['alias' => $post->slug]) }}">{{ $post->title }}</a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__category">
                            <h3 class="sidebar__title">{{ __('postDetail.category') }}</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                @foreach ($categories as $category)
                                    <li class="{{ $post->categories[0]->id == $category->id ? 'active' : '' }}">
                                        <a href="">{{ $category->name }}
                                            <span class="icon-right-arrow"></span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

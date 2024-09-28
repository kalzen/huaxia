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

                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="news-details.html"><img src="{{ asset('huaxia/images/resource/news-2.jpg') }}"
                                            alt></a></figure>
                                <span class="date"><b>28</b>T9</span>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li><i class="fa fa-user"></i>Bởi Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Bình luận</li>
                                </ul>
                                <h4 class="title">
                                    <a href="news-details.html">
                                    Chúng tôi rất cẩn thận khi xử lý hàng hóa có giá trị
                                    </a>
                                </h4>
                                <a href="news-details.html" class="read-more">Đọc thêm<i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="news-details.html"><img src="{{ asset('huaxia/images/resource/news-2.jpg') }}"
                                            alt></a></figure>
                                <span class="date"><b>28</b>T9</span>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li><i class="fa fa-user"></i>Bởi Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Bình luận</li>
                                </ul>
                                <h4 class="title"><a href="news-details.html">Dòng chảy hàng hóa thông qua chuỗi cung ứng tốt hơn ở Anh</a>
                                </h4>
                                <a href="news-details.html" class="read-more">Đọc thêm<i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="news-details.html"><img src="{{ asset('huaxia/images/resource/news-3.jpg') }}"
                                            alt></a></figure>
                                <span class="date"><b>28</b>T9</span>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li><i class="fa fa-user"></i>Bởi Admin</li>
                                    <li><i class="fa fa-comments"></i>2 Bình luận</li>
                                </ul>
                                <h4 class="title"><a href="news-details.html">Tại sao khả năng hiển thị chuỗi cung ứng lại quan trọng?</a></h4>
                                <a href="news-details.html" class="read-more">Đọc thêm<i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
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

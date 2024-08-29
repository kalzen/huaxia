@extends('layouts.master')
@section('meta')
<title>{{$post->title}}</title>
<meta name="keywords" content="{{collect($post->tags)->pluck('name')->join(',')}}"/>
<meta name="description" content="{{substr(strip_tags($post->description),0,300)}}"/>
<meta property="og:image" content="{{$post->images()->first()->url??''}}">
<meta property="og:type" content="article">
<meta property="og:title" content="{{$post->title}}">
<meta property="og:description" content="{{substr(strip_tags($post->description),0,300)}}">
@stop
@section('content')

<section class="blog-details">
<div class="container">
<div class="row">
<div class="col-xl-8 col-lg-7">
<div class="blog-details__left">
<div class="blog-details__img">
<img src="{{$post->images->first()->url}}" alt="">
<div class="blog-details__date">
{{$post->categories->first()->name}}
</div>
</div>
<div class="blog-details__content">
<ul class="list-unstyled blog-details__meta">
<li><a href="#"><i class="fas fa-user-circle"></i> Admin</a> </li>
</li>
</ul>
<h3 class="blog-details__title">{{$post->title}}</h3>
{!!$post->content!!}
</div>


<div class="col-xl-4 col-lg-5">
<div class="sidebar">
<div class="sidebar__single sidebar__search">
<form action="#" class="sidebar__search-form">
<input type="search" placeholder="Search here">
<button type="submit"><i class="lnr-icon-search"></i></button>
</form>
</div>
<div class="sidebar__single sidebar__post">
<h3 class="sidebar__title">Latest Posts</h3>
<ul class="sidebar__post-list list-unstyled">
<li>
<div class="sidebar__post-image"> <img src="images/resource/news-2.jpg" alt=""> </div>
<div class="sidebar__post-content">
<h3> <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span> <a href="news-details.html">Cargo flow through better supply UK</a>
</h3>
</div>
</li>
<li>
<div class="sidebar__post-image"> <img src="images/resource/news-1.jpg" alt=""> </div>
<div class="sidebar__post-content">
<h3> <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span> <a href="news-details.html">Why is supply chain visibility so?</a>
</h3>
</div>
</li>
<li>
<div class="sidebar__post-image"> <img src="images/resource/news-3.jpg" alt=""> </div>
<div class="sidebar__post-content">
<h3> <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span> <a href="news-details.html">We very careful handling</a>
</h3>
</div>
</li>
</ul>
</div>
<div class="sidebar__single sidebar__category">
<h3 class="sidebar__title">Categories</h3>
<ul class="sidebar__category-list list-unstyled">
<li><a href="news-details.html">Logistics<span class="icon-right-arrow"></span></a> </li>
<li class="active"><a href="news-details.html">Cargo<span class="icon-right-arrow"></span></a></li>
<li><a href="news-details.html">Delivery<span class="icon-right-arrow"></span></a> </li>
<li><a href="news-details.html">Transport<span class="icon-right-arrow"></span></a> </li>
<li><a href="news-details.html">Warehouses<span class="icon-right-arrow"></span></a> </li>
<li><a href="news-details.html">Delivery<span class="icon-right-arrow"></span></a> </li>
</ul>
</div>
<div class="sidebar__single sidebar__tags">
<h3 class="sidebar__title">Tags</h3>
<div class="sidebar__tags-list"> <a href="#">Business</a> <a href="#">Cargo</a> <a href="#">Delivery</a> <a href="#">Logistics</a> <a href="#">Transport</a> <a href="#">Trends</a> </div>
</div>
<div class="sidebar__single sidebar__comments">
<h3 class="sidebar__title">Recent Comments</h3>
<ul class="sidebar__comments-list list-unstyled">
<li>
<div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
<div class="sidebar__comments-text-box">
<p>A wordpress commenter on <br>
launch new mobile app
</p>
</div>
</li>
<li>
<div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
<div class="sidebar__comments-text-box">
<p> <span>John Doe</span> on template:</p>
<h5>comments</h5>
</div>
</li>
<li>
<div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
<div class="sidebar__comments-text-box">
<p>A wordpress commenter on <br>
launch new mobile app
</p>
</div>
</li>
<li>
<div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
<div class="sidebar__comments-text-box">
<p> <span>John Doe</span> on template:</p>
<h5>comments</h5>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection
@extends('layouts.app')
@section('meta')
    @if(isset($catalogue))
    <title>{{$catalogue->name}} - {{env('APP_NAME')}}</title>
    <meta name="keywords" content="{{$catalogue->tags->pluck('name')->join(', ')}}"/>
    <meta name="description" content="{{$catalogue->description}}"/>
    <meta property="og:image" content="{{$catalogue->image->url??''}}">
    <meta property="og:type" content="product">
    <meta property="og:title" content="{{$catalogue->name}}">
    <meta property="og:description" content="{{$catalogue->description}}">
    @else
    <title>Sản phẩm - {{env('APP_NAME')}}</title>
    <meta name="keywords" content="{{env('APP_NAME')}}"/>
    <meta name="description" content="{{env('APP_NAME')}}"/>
    <meta property="og:image" content="{{env('APP_LOGO')}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{env('APP_NAME')}}">
    <meta property="og:description" content="{{env('APP_NAME')}}">
    @endif
@stop
@section('styles')

@endsection
@section('content')
    <!-- Main Content - start -->
    <main>
        <!-- Breadcrumbs -->
        <div class="b-crumbs-wrap">
            <div class="cont b-crumbs">
                <ul>
                    <li>
                        <a href="/">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{route('product.list')}}">Sản phẩm</a>
                    </li>
                    @if(isset($catalogue))
                    <li>
                        <span>{{$catalogue->name}}</span>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="cont maincont">
            @if(isset($catalogue))
            <h1>
                <span>{{$catalogue->name}}</span>
            </h1>
            @else
            <h1>
                <span>Sản phẩm</span>
            </h1>
            @endif
            <p class="section-count">{{number_format($products->total(),0)}} sản phẩm</p>
            <span class="maincont-line1 maincont-line12"></span>
            <span class="maincont-line2 maincont-line22"></span>
            <!-- Catalog Sections -->
            <ul class="cont-sections">
                <li class="active">
                    <a href="{{route('product.list')}}">Tất cả</a>
                </li>
                @foreach(collect($catalogues)->take(3) as $catalogue_item)
                <li class="">
                    <a href="{{$catalogue_item->url}}">{{$catalogue_item->name}}</a>
                </li>
                @endforeach
            </ul>
            <!-- Catalog Filter - start -->
            <div class="section-top">
                <a href="#" class="section-menu-btn" id="section-menu-btn">Danh mục</a>
                <div class="section-sort">
                    <p>Sắp xếp</p>
                    <div class="dropdown-wrap">
                        <p class="dropdown-title section-sort-ttl">
                            @if(request('sort')=='price-asc')
                                Giá: tăng dần
                            @elseif(request('sort')=='price-desc')
                                Giá: giảm dần
                            @else
                                Mới nhất
                            @endif
                        </p>
                        <ul class="dropdown-list">
                            <li class="{{request('sort')==''?'active':''}}">
                                <a href="javascript:sort('');">Mới nhất</a>
                            </li>
                            <li class="{{request('sort')=='price-desc'?'active':''}}">
                                <a href="javascript:sort('price-desc');">Giá: giảm dần</a>
                            </li>
                            <li class="{{request('sort')=='price-asc'?'active':''}}">
                                <a href="javascript:sort('price-asc');">Giá: tăng dần</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="section-menu-wrap" id="section-menu-wrap">
                    <div class="section-menu">
                        <p class="section-menu-ttl">Danh mục</p>
                        <ul class="section-menu-list">
                            @foreach($catalogues as $catalogue_item)
                            <li>
                                <a href="{{$catalogue_item->url}}">{{$catalogue_item->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Catalog Filter - end -->
            <!-- Catalog Items - start -->
            <div class="section-gallery">
                @foreach($products as $product)
                <div class="sectgl">
                    <a href="{{$product->url}}" class="sectgl-link">
                        <p class="sectgl-img">
                            <img src="{{$product->images->first()->url??''}}" alt="{{$product->title}}">
                        </p>
                        <h3>
                            <span>{{$product->title}}</span>
                        </h3>
                    </a>
                    <p class="sectgl-info">
                        <a href="{{$product->catalogues->first()->url??''}}" class="sectgl-categ">{{$product->catalogues->first()->name??''}}</a>
                        <span class="sectgl-price">{{$product->price}}</span>
                    </p>
                </div>
                @endforeach
            </div>
            <!-- Catalog Items - end -->
            <div class="">
                {{$products->appends(request()->only(['keyword','sort']))->links()}}
            </div>
        </div>
        @include('home.__ads_01')
    </main>
    <!-- Main Content - end -->
@endsection
@section('scripts')
<script>
    function sort(order) {
        $('#header-search').find('[name=sort]').remove()
        $('#header-search').append(`<input name="sort" type="hidden" value="${order}"/>`)
        $('#header-search').trigger('submit')
    }
    $(function(){
        console.log('Product list ready')
    })
</script>
<script>
    "use strict";
    $(document).ready(function() {
        var $range_cost = $("#range_cost");
        $range_cost.ionRangeSlider({
            type: "double",
            grid: true,
            min: 0,
            max: 20000,
            from: 100,
            to: 10000,
            prefix: "$",
        });
        $range_cost.on("change", function() {
            var $this = $(this)
                , value = $this.prop("value").split(";");

            $('#range_cost_ttl').html("$" + value[0] + " - $" + value[1]);
        });
    });
</script>
@endsection
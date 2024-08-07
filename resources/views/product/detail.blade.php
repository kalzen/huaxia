@extends('layouts.app')
@section('meta')
<title>{{$product->title}}</title>
<meta name="keywords" content="{{collect($product->tags)->pluck('name')->join(',')}}"/>
<meta name="description" content="{{substr(strip_tags($product->description),0,300)}}"/>
<meta property="og:image" content="{{$product->images()->first()->url??''}}">
<meta property="og:type" content="product">
<meta property="og:title" content="{{$product->title}}">
<meta property="og:description" content="{{substr(strip_tags($product->description),0,300)}}">
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
                    <li>
                        <a href="{{$product->catalogues()->first()->url??''}}">{{$product->catalogues()->first()->name??''}}</a>
                    </li>
                    <li>
                        <span>{{$product->title}}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cont maincont">
            <h1>
                <span>{{$product->title}}</span>
            </h1>
            <span class="maincont-line1"></span>
            <span class="maincont-line2"></span>
            <!-- Product - start -->
            <div class="prod">
                <!-- Product Slider - start -->
                <div class="prod-slider-wrap">
                    <div class="flexslider prod-slider" id="prod-slider">
                        <ul class="slides">
                            @foreach($product->images as $image)
                            <li>
                                <!-- <a> & <img> Without Spaces -->
                                <a data-fancybox-group="prod" class="fancy-img" href="{{$image->url}}">
                                    <img src="{{$image->url}}" alt="{{$product->title}}">
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="flexslider prod-thumbs" id="prod-thumbs">
                        <ul class="slides">
                            @foreach($product->images as $image)
                            <li>
                                <img src="{{$image->url}}" alt="{{$product->title}}">
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Product Slider - end -->
                <!-- Product Content - start -->
                <div class="prod-cont">
                    <div class="prod-desc">
                        <p class="prod-desc-ttl">
                            <span>Mô tả</span>
                        </p>
                        <div>
                            {!! substr($product->description,0,500) !!}
                        </div>
                    </div>
                    <div class="prod-info">
                        <div class="prod-price-wrap">
                            <p>Giá</p>
                            <p class="prod-price">{{$product->price}}</p>
                        </div>
                    </div>
                    <div class="prod-actions">
                        <a class="btn mdl-inquiry">Báo giá chi tiết</a>
                    </div>
                </div>
                <!-- Product Content - end -->
            </div>
            <!-- Product - end -->
            <!-- Product Tabs - start -->
            <div class="prod-tabs-wrap">
                <ul class="prod-tabs">
                    <li data-prodtab-num="1" id="prod-desc" class="active">
                        <a data-prodtab="#prod-tab-1" href="#">Mô tả</a>
                    </li>
                    <li data-prodtab-num="2" id="prod-props">
                        <a data-prodtab="#prod-tab-2" href="#">Thông số kỹ thuật</a>
                    </li>
                </ul>
                <div class="prod-tab-cont">
                    <p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Chi tiết</p>
                    <div class="prod-tab prod-tab-desc" id="prod-tab-1">
                        <div class="">{!! $product->content !!}</div>
                    </div>
                    <p data-prodtab-num="2" class="prod-tab-mob" data-prodtab="#prod-tab-2">Thông số kỹ thuật</p>
                    <div class="prod-tab" id="prod-tab-2">
                        <div class="zabuto_calendar">
                            <table class="table">
                                <tbody>
                                    @foreach($product->attributes as $attribute_item)
                                    <tr>
                                        <td>{{$attribute_item->name}}</td>
                                        <td>{{$attribute_item->pivot->value??''}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Tabs - end -->
        </div>
    </main>
    
    <!-- Modal Form -->
    <div id="modal-inquiry" class="modal-form">
        <form method="POST" class="js-form prod-addreview-form" style="display: block;">
            @csrf
            <p class="modal-form-ttl">Báo giá chi tiết</p>
            <p class="modal-form-ttlp">Loại xe: <span>{{$product->title}}</span></p>
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <input type="text" name="name" required placeholder="Họ tên">
            <input type="text" name="phone" required placeholder="Số điện thoại">
            <select name="address" required class="form-control">
                <option value="">Chọn quận/huyện</option>
                <option value="Thủy Nguyên">Thủy Nguyên</option>
                <option value="Hải An">Hải An</option>
                <option value="An Dương">An Dương</option>
                <option value="Ngô Quyền">Ngô Quyền</option>
                <option value="Tiên Lãng">Tiên Lãng</option>
                <option value="Kiến Thụy">Kiến Thụy</option>
                <option value="Đồ Sơn">Đồ Sơn</option>
                <option value="An Lão">An Lão</option>
                <option value="Bạch Long Vỹ">Bạch Long Vỹ</option>
                <option value="Lê Chân">Lê Chân</option>
                <option value="Dương Kinh">Dương Kinh</option>
                <option value="Vĩnh Bảo">Vĩnh Bảo</option>
                <option value="Cát Hải">Cát Hải</option>
                <option value="Hồng Bàng">Hồng Bàng</option>
                <option value="Kiến An">Kiến An</option>
            </select>
            <textarea name="note" placeholder="Yêu cầu chi tiết"></textarea>
            <input type="submit" value="Đặt ngay">
        </form>
    </div>
@endsection
@section('scripts')
<script>
    $(function(){
        console.log('Product detail ready')
    })
</script>
@endsection
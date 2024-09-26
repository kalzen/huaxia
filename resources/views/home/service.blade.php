@extends('layouts.master')
@section('content')
    <section class="page-title" style="background-image: url({{ asset('huaxia/images/background/2.jpg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Services</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Services</li>
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
                            <span class="sub-title">Dịch vụ 1</span>
                            <h4 class="title"><a href="page-service-details.html">Vận chuyển <br /> hàng không</a></h4>
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
                            <span class="sub-title">Dịch vụ 2</span>
                            <h4 class="title"><a href="page-service-details.html">Vận chuyển <br /> đường biển</a></h4>
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
                            <span class="sub-title">Dịch vụ 3</span>
                            <h4 class="title"><a href="page-service-details.html">Dịch vụ <br /> đường bộ</a></h4>
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
                            <span class="sub-title">Dịch vụ 4</span>
                            <h4 class="title"><a href="page-service-details.html">Giải pháp <br /> khác</a></h4>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

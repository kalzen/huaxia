@extends('layouts.master')
@section('content')
<section class="main-slider">
            <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
                <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                    <ul>

                        <li data-index="rs-1" data-transition="zoomout">

                            <img src="{{asset('huaxia/images/main-slider/1.jpg')}}" alt class="rev-slidebg" />
                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme ipad-hidden rs-parallaxlevel-1"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="shape" data-height="auto" data-whitespace="nowrap" data-width="none"
                                data-hoffset="['110','110','110','110']" data-voffset="['110','90','90','90']"
                                data-x="['right','right','right','right']"
                                data-y="['bottom','bottom','bottom','bottom']"
                                data-frames="[{&quot;from&quot;:&quot;x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1000,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <i class="float-icon flaticon-cargo-boat"></i>
                            </div>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1 ipad-hidden"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="shape" data-height="none" data-whitespace="nowrap" data-width="none"
                                data-hoffset="['0','0','0','0']" data-voffset="['110','90','90','90']"
                                data-x="['right','right','right','right']"
                                data-y="['bottom','bottom','bottom','bottom']"
                                data-frames="[{&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:3000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <i class="float-icon flaticon-airplane-2"></i>
                            </div>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-3" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="shape" data-height="none"
                                data-whitespace="nowrap" data-width="none" data-hoffset="['-10','-10','-10','100']"
                                data-voffset="['-170','-170','-120','-100']"
                                data-x="['center','center','center','center']"
                                data-y="['middle','middle','middle','middle']"
                                data-frames="[{&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:2000,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:3000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <figure><img src="{{asset('huaxia/images/main-slider/plane-icon.png')}}" alt /></figure>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['750','750','750','650']"
                                data-whitespace="normal" data-hoffset="['0','0','0','0']"
                                data-voffset="['-195','-160','-160','-140']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <span class="title">{{__('Huaxia Việt Nam')}}</span>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="text" data-height="none"
                                data-width="['750','750','750','650']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['-70','-40','-40','-30']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <h2>{{__('Vận chuyển hàng hoá Quốc tế')}}</h2>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="text" data-height="none"
                                data-width="['700','750','700','450']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['100','120','120','120']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <a href="#" class="theme-btn btn-style-one hvr-light"><span
                                        class="btn-title">{{__('Xem thêm')}}</span></a>
                            </div>
                        </li>

                        <li data-index="rs-2" data-transition="zoomout">

                            <img src="{{asset('huaxia/images/main-slider/2.jpg')}}" alt class="rev-slidebg" />
                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme ipad-hidden rs-parallaxlevel-1"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="shape" data-height="auto" data-whitespace="nowrap" data-width="none"
                                data-hoffset="['110','110','110','110']" data-voffset="['110','90','90','90']"
                                data-x="['right','right','right','right']"
                                data-y="['bottom','bottom','bottom','bottom']"
                                data-frames="[{&quot;from&quot;:&quot;x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1000,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <i class="float-icon flaticon-cargo-boat"></i>
                            </div>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1 ipad-hidden"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="shape" data-height="none" data-whitespace="nowrap" data-width="none"
                                data-hoffset="['0','0','0','0']" data-voffset="['110','90','90','90']"
                                data-x="['right','right','right','right']"
                                data-y="['bottom','bottom','bottom','bottom']"
                                data-frames="[{&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:3000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <i class="float-icon flaticon-airplane-2"></i>
                            </div>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-3" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="shape" data-height="none"
                                data-whitespace="nowrap" data-width="none" data-hoffset="['-10','-10','-10','100']"
                                data-voffset="['-170','-170','-120','-100']"
                                data-x="['center','center','center','center']"
                                data-y="['middle','middle','middle','middle']"
                                data-frames="[{&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:2000,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:3000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <figure><img src="{{asset('huaxia/images/main-slider/plane-icon.png')}}" alt /></figure>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['750','750','750','650']"
                                data-whitespace="normal" data-hoffset="['0','0','0','0']"
                                data-voffset="['-195','-160','-160','-140']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <span class="title">{{__('Huaxia Việt Nam')}}</span>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="text" data-height="none"
                                data-width="['750','750','750','650']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['-70','-40','-40','-30']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <h2>{{__('Vận chuyển hàng hoá Quốc tế')}}</h2>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="text" data-height="none"
                                data-width="['700','750','700','450']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['100','120','120','120']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <a href="page-about.html" class="theme-btn btn-style-one hvr-light"><span
                                        class="btn-title">{{__('Xem thêm')}}</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <section class="features-section">
            <div class="auto-container">
                <div class="row">

                    <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="icon flaticon-logistics-delivery-6"></i>
                                <span class="count">01</span>
                            </div>
                            <div class="content-box">
                                <h4 class="title">
                                    <a href="page-about.html">{!!__('Tối ưu </br> chi phí')!!}</a>
                                </h4>
                                <div class="text">Lorem ipsum dolor amet consectetur adipiscing elit do eiusmod.</div>
                            </div>
                        </div>
                    </div>

                    <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="icon flaticon-fast-delivery-1"></i>
                                <span class="count">02</span>
                            </div>
                            <div class="content-box">
                                <h4 class="title">
                                    <a href="page-about.html">{!!__('Vận chuyển </br> nhanh chóng')!!}</a>
                                </h4>
                                <div class="text">Lorem ipsum dolor amet consectetur adipiscing elit do eiusmod.</div>
                            </div>
                        </div>
                    </div>

                    <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="icon flaticon-container-2"></i>
                                <span class="count">03</span>
                            </div>
                            <div class="content-box">
                                <h4 class="title"><a href="page-about.html">{!!__('Kho hàng </br> đảm bảo')!!}</a></h4>
                                <div class="text">Lorem ipsum dolor amet consectetur adipiscing elit do eiusmod.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="about-section pt-0">
            <div class="anim-icons">
                <div class="float-image wow fadeInRight"><img src="{{asset('huaxia/images/resource/float-img-1.png')}}" alt /></div>
                <span class="icon icon-dots-1 bounce-x"></span>
                <span class="icon icon-dotted-map zoom-one"></span>
            </div>
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="sub-title">{{__('HUAXIA VIETNAM')}}</span>
                                <h2>{!!__('Chúng tôi cung cấp các dịch vụ vận chuyển </br> trọn gói')!!}</h2>
                                <div class="text">{{__('Công ty TNHH Quản lý chuỗi cung ứng Huaxia Việt Nam luôn nỗ lực phấn đấu trở thành công ty giao nhận hàng được khách hàng gửi gắm niềm tiên và sự tín nhiệm cao, hỗ trợ kết nối các doanh nghiệp Việt Nam vươn ra thế giới với dịch vụ chat lượng cao, nhân sự chuyên nghiệp, tận tâm, tạo ra giá trị gia tăng, đóng góp tích cực vào sự phát triển của chuỗi cung ứng')}}</div>
                            </div>
                            <div class="content-box">
                                <div class="about-block">
                                    <i class="icon flaticon-worldwide-shipping"></i>
                                    <h4 class="title">{{__('Vận chuyển hàng hoá quốc tế')}}</h4>
                                    <p class="text">We’re always provide people a complete solution focused of any
                                        business.</p>
                                </div>
                                <div class="about-block">
                                    <i class="icon flaticon-3d-cube"></i>
                                    <h4 class="title">{{__('Xúc tiến thương mại')}}</h4>
                                    <p class="text">We’re always provide people a complete solution focused of any
                                        business.</p>
                                </div>
                            </div>
                            <div class="btm-box">
                                <a href="page-about.html" class="theme-btn btn-style-one"><span
                                        class="btn-title">{{__('Tìm hiểu thêm')}}</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <figure class="image-1"><img src="{{asset('huaxia/images/resource/about-1.jpg')}}" alt /></figure>
                            <figure class="image-2"><img src="{{asset('huaxia/images/resource/about-2.jpg')}}" alt /></figure>
                            <div class="experience">
                                <strong><i class="icon flaticon-global"></i> 40<br />
                                    {{__('Năm')}}</strong>
                                {{__('Kinh nghiệm')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="services-section">
            <div class="bg-image" style="background-image: url(images/background/1.jpg)"></div>
            <div class="anim-icons">
                <span class="icon icon-wave-line"></span>
            </div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="sub-title">{{__('Công ty TNHH Quản lý chuỗi cung ứng Huaxia Việt Nam')}}</span>
                    <h2>{{__('Dịch vụ của chúng tôi')}}</h2>
                </div>
                <div class="row">
                    @foreach($services as $service)
                    <div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('post.detail',['alias' => $service->slug])}}"><img src="{{$service->images()->first()->url}}"
                                            alt /></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <i class="icon flaticon-airplane-2"></i>
                                <span class="sub-title">{{__('Dịch vụ')}}</span>
                                <h4 class="title"><a href="{{ route('post.detail',['alias' => $service->slug])}}">{{$service->title}}</a></h4>
                                <div class="text">{{$service->description}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


        <section class="tracking-section pull-down">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="arrow-box wow fadeInRight">
                        <img src="{{asset('huaxia/images/icons/arrow-2.png')}}" alt class="icon" />
                        <span class="title">{{__('File sẽ được gửi trong vài giây')}}</span>
                    </div>
                    <div class="tracking-form">
                        <h4 class="title">{!!__('Nhận profile </br> công ty')!!}</h4>

                        <form method="post" action="#">
                            <div class="row">
                                <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                    <span class="icon lnr-icon-user"></span>
                                    <input type="text" name="field_name" placeholder="{{__('Họ và tên')}}" />
                                </div>

                                <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                    <span class="icon lnr-icon-envelope1"></span>
                                    <input type="text" name="field_name" placeholder="{{__('Email của bạn')}}" />
                                </div>

                                <div class="form-group col-lg-4 col-md-12 col-sm-12 text-end">
                                    <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">{{__('Đăng ký')}}</span></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>


        <section class="call-to-action" style="background-image: url({{asset('huaxia/images/background/2.jpg')}})">
            <div class="auto-container">
                <div class="outer-box">
                    <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now lightbox-image"><i
                            class="icon fa fa-play"></i><span class="ripple"></span></a>
                    <div class="sec-title light mb-0">
                        <div class="sub-title">{{__(Công ty TNHH Quản lý chuỗi cung ứng Huaxia Việt Nam)}}</div>
                        <h1>{!!__('Bạn muốn tìm kiếm <br />công ty vận chuyển hàng hoá đa quốc gia?')!!}</h1>
                        <a href="#" class="theme-btn btn-style-one hvr-light"><span
                                class="btn-title">{{__('Liên hệ ngay')}}</span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-choose-us pull-up pb-0">
            <div class="bg-image" style="background-image: url({{asset('huaxia/images/background/4.jpg')}})"></div>
            <div class="anim-icons">
                <div class="float-image"><img src="{{asset('huaxia/images/resource/delivery-boy.png')}}" alt /></div>
            </div>
            <div class="auto-container">
                <div class="row">

                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title light">
                                <span class="sub-title">{{__('Vì sao nên chọn chúng tôi')}}</span>
                                <h2>{{__('Nhanh gọn, thủ tục dễ dàng, vận chuyển nhanh chóng')}}</h2>
                            </div>

                            <div class="feature-block-two">
                                <div class="inner-box">
                                    <i class="icon flaticon-delivery-box-4"></i>
                                    <h4 class="title">{{__('Vận chuyển nhanh chóng')}}</h4>
                                    <p class="text">Aenean placerat ut lacus nec pulvinar. Donec eu leo, ante at,
                                        commodo diam.</p>
                                </div>
                            </div>

                            <div class="feature-block-two">
                                <div class="inner-box">
                                    <i class="icon flaticon-international-shipping-3"></i>
                                    <h4 class="title">{{__('Vận chuyển đa quốc gia')}}</h4>
                                    <p class="text">Interdum et malesuada fames ac ante ipsum primis in faucibus donec
                                        tempor nisi neque.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <div class="contact-form wow fadeInLeft">

                                <form method="post" action="#"
                                    id="contact-form">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Your Name:</label>
                                            <input type="text" name="full_name" placeholder required />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Your Email:</label>
                                            <input type="text" name="Email" placeholder required />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Phone No::</label>
                                            <input type="text" name="Phone" placeholder required />
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>DIST (Miles):</label>
                                            <div class="range-slider-one">
                                                <input type="text" class="range-amount" name="field-name" readonly />
                                                <div class="distance-range-slider"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Freight type:</label>
                                            <select class="custom-select">
                                                <option value>Select</option>
                                                <option value>Air Freight</option>
                                                <option value>Ocean Freight</option>
                                                <option value>Rail transport</option>
                                                <option value>Cargo ship</option>
                                                <option value>Bulk cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Load:</label>
                                            <select class="custom-select">
                                                <option value>Select</option>
                                                <option value>Door to Door</option>
                                                <option value>International shipping</option>
                                                <option value>Multi Modal</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-style-two hvr-light" type="submit"
                                                name="submit-form"><span class="btn-title">Submit
                                                    Request</span></button>
                                        </div>
                                    </div>
                                </form>
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
                                <span class="sub-title">{{__('Giới thiệu về chúng tôi')}}</span>
                                <h2>{{__('Công ty TNHH Quản lý chuỗi cung ứng Huaxia Việt Nam')}}</h2>
                                <h4>Simplify your freight and logistics needs with a personal approch.</h4>
                                <div class="text">Explain to you how all this mistaken denouncing pleasure and praising
                                    pain was born and we will give you a complete account of the system, and expound the
                                    actual teachings.</div>
                            </div>
                            <div class="row">

                                <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <i class="icon flaticon-delivery-courier"></i>
                                        <h4 class="title">Cost Optimisation</h4>
                                    </div>
                                </div>

                                <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <i class="icon flaticon-delivery-insurance-3"></i>
                                        <h4 class="title">Reduced <br />Transit Time</h4>
                                    </div>
                                </div>

                                <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <i class="icon flaticon-delivery-box-3"></i>
                                        <h4 class="title">Delivery <br />on Time</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="founder-info">
                                <div class="thumb"><img src="{{asset('huaxia/images/resource/ceo.jpg')}}" alt /></div>
                                <h5 class="name">Ông. Mai Công Luật</h5>
                                <span class="designation">Giám đốc điều hành</span>
                            </div>
                        </div>
                    </div>

                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <figure class="image-1 wow fadeInUp"><img src="{{asset('huaxia/images/resource/about-3.jpg')}}" alt /></figure>
                            <figure class="image-2 wow fadeInRight">
                                <img src="{{asset('huaxia/images/resource/about-4.jpg')}}" alt />
                                <div class="icon-box"><i class="icon flaticon-delivery-box-4"></i></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="testimonial-section pt-0">
            <div class="anim-icons">
                <span class="icon icon-bg-dots"></span>
                <span class="icon icon-plane-2 bounce-y"></span>
            </div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="sub-title">{{__('Khách hàng nói gì về chúng tôi')}}</span>
                    <h2>Here are some clients <br />feedbacks</h2>
                </div>
                <div class="outer-box">

                    <div class="testimonial-carousel owl-carousel owl-theme">

                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star-half-alt"></i></div>
                                    <div class="text">“All of our lorries are fitted with Satellite Tracking and
                                        Temperature Controlled monitoring systems so that the transportation of high
                                        value and temperature sensitive loads can be monitored at all times.</div>
                                </div>
                                <div class="thumb"><img src="{{asset('huaxia/images/resource/testi-thumb-1.jpg')}}" alt /></div>
                                <span class="designation">Co Founder</span>
                                <h4 class="name">Jhon D. William</h4>
                            </div>
                        </div>

                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star-half-alt"></i></div>
                                    <div class="text">“All of our lorries are fitted with Satellite Tracking and
                                        Temperature Controlled monitoring systems so that the transportation of high
                                        value and temperature sensitive loads can be monitored at all times.</div>
                                </div>
                                <div class="thumb"><img src="{{asset('huaxia/images/resource/testi-thumb-2.jpg')}}" alt /></div>
                                <span class="designation">Co Founder</span>
                                <h4 class="name">Aleesha Brown</h4>
                            </div>
                        </div>

                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star-half-alt"></i></div>
                                    <div class="text">“All of our lorries are fitted with Satellite Tracking and
                                        Temperature Controlled monitoring systems so that the transportation of high
                                        value and temperature sensitive loads can be monitored at all times.</div>
                                </div>
                                <div class="thumb"><img src="{{asset('huaxia/images/resource/testi-thumb-3.jpg')}}" alt /></div>
                                <span class="designation">Co Founder</span>
                                <h4 class="name">Mike Hardon</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="offer-section">
            <div class="auto-container">
                <div class="row">

                    <div class="content-column col-lg-5 col-md-12">
                        <div class="inner-column">
                            <div class="sec-title light">
                                <span class="sub-title">Special Logistics</span>
                                <h2>Best services for businesses</h2>
                                <div class="text">There are many variations of passages of Lorem Ipsum available, but
                                    the majority have suffered alteration in some form.</div>
                            </div>
                            <ul class="list-style-two">
                                <li><i class="fa fa-plane"></i> Urgent transport solutions</li>
                                <li><i class="fa fa-plane"></i> Top quality services with reasonable price</li>
                                <li><i class="fa fa-plane"></i> Reliable & experienced staffs</li>
                            </ul>
                            <a href="page-services.html" class="theme-btn btn-style-two hvr-light"><span
                                    class="btn-title">Explore More</span></a>
                        </div>
                    </div>

                    <div class="image-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset('huaxia/images/resource/offer-img-1.jpg')}}" alt /></figure>
                                <figure class="image"><img src="{{asset('huaxia/images/resource/offer-img-2.jpg')}}" alt /></figure>
                                <div class="fact-counter-one bounce-y">
                                    <h4 class="counter-title">Trusted by</h4>
                                    <div class="count-box"><span class="count-text" data-speed="3000"
                                            data-stop="4890">0</span></div>
                                </div>
                                <div class="caption-box wow fadeIn">
                                    <div class="inner">
                                        <i class="icon flaticon-logistics-3"></i>
                                        <h4 class="title">Moving your <br />products across borders</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="news-section">
            <div class="anim-icons">
                <div class="float-image wow zoomInLeft"><img src="{{asset('huaxia/images/resource/float-img-2.png')}}" alt /></div>
            </div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="sub-title">OUR NEWS FROM BLOG</span>
                    <h2>
                        Latest news, advices<br />
                        & best posts from the blog
                    </h2>
                </div>
                <div class="row">

                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="news-details.html"><img src="{{asset('huaxia/images/resource/news-1.jpg')}}" alt /></a>
                                </figure>
                                <span class="date"><b>28</b> SEP</span>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li><i class="fa fa-user"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h4 class="title"><a href="news-details.html">We very careful handling the valuable
                                        goods</a></h4>
                                <a href="news-details.html" class="read-more">Read More <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="news-details.html"><img src="{{asset('huaxia/images/resource/news-2.jpg')}}" alt /></a>
                                </figure>
                                <span class="date"><b>28</b> SEP</span>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li><i class="fa fa-user"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h4 class="title"><a href="news-details.html">Why is supply chain visibility so
                                        important?</a></h4>
                                <a href="news-details.html" class="read-more">Read More <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="news-details.html"><img src="{{asset('huaxia/images/resource/news-3.jpg')}}" alt /></a>
                                </figure>
                                <span class="date"><b>28</b> SEP</span>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li><i class="fa fa-user"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h4 class="title"><a href="news-details.html">Cargo flow through better supply in UK</a>
                                </h4>
                                <a href="news-details.html" class="read-more">Read More <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="clients-section">
            <div class="anim-icon">
                <span class="icon dotted-line-1"></span>
                <span class="icon dotted-line-2"></span>
            </div>
            <div class="auto-container">

                <div class="sponsors-outer">

                    <ul class="clients-carousel owl-carousel owl-theme">
                        <li class="slide-item">
                            <a href="#"><img src="{{asset('huaxia/images/clients/1.jpg')}}" alt /></a>
                        </li>
                        <li class="slide-item">
                            <a href="#"><img src="{{asset('huaxia/images/clients/2.jpg')}}" alt /></a>
                        </li>
                        <li class="slide-item">
                            <a href="#"><img src="{{asset('huaxia/images/clients/3.jpg')}}" alt /></a>
                        </li>
                        <li class="slide-item">
                            <a href="#"><img src="{{asset('huaxia/images/clients/4.jpg')}}" alt /></a>
                        </li>
                        <li class="slide-item">
                            <a href="#"><img src="{{asset('huaxia/images/clients/5.jpg')}}" alt /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

@endsection
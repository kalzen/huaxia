@extends('layouts.master')
@section('content')
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>

                    <li data-index="rs-1" data-transition="zoomout">

                        <img src="{{ asset('huaxia/images/main-slider/1.jpg') }}" alt class="rev-slidebg" />
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme ipad-hidden rs-parallaxlevel-1"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="shape" data-height="auto"
                            data-whitespace="nowrap" data-width="none" data-hoffset="['110','110','110','110']"
                            data-voffset="['110','90','90','90']" data-x="['right','right','right','right']"
                            data-y="['bottom','bottom','bottom','bottom']"
                            data-frames="[{&quot;from&quot;:&quot;x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1000,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <i class="float-icon flaticon-cargo-boat"></i>
                        </div>
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-1 ipad-hidden" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on" data-type="shape" data-height="none" data-whitespace="nowrap"
                            data-width="none" data-hoffset="['0','0','0','0']" data-voffset="['110','90','90','90']"
                            data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']"
                            data-frames="[{&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:3000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <i class="float-icon flaticon-airplane-2"></i>
                        </div>
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-3" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on" data-type="shape" data-height="none" data-whitespace="nowrap"
                            data-width="none" data-hoffset="['-10','-10','-10','100']"
                            data-voffset="['-170','-170','-120','-100']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames="[{&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:2000,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:3000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <figure><img src="{{ asset('huaxia/images/main-slider/plane-icon.png') }}" alt /></figure>
                        </div>
                        <div class="tp-caption mb-4" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','650']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-195','-160','-160','-140']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <span class="title">{{ __('home.company_name') }}</span>
                        </div>
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','650']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-70','-40','-40','-30']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <h2>{{ __('home.slider_text') }}</h2>
                        </div>
                        <div class="tp-caption mt-4" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','750','700','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['100','120','120','120']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <a href="#" class="theme-btn btn-style-one hvr-light">
                                <span class="btn-title">{{ __('home.slider_button') }}</span>
                            </a>
                        </div>
                    </li>

                    <li data-index="rs-2" data-transition="zoomout">

                        <img src="{{ asset('huaxia/images/main-slider/2.jpg') }}" alt class="rev-slidebg" />
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme ipad-hidden rs-parallaxlevel-1"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="shape" data-height="auto"
                            data-whitespace="nowrap" data-width="none" data-hoffset="['110','110','110','110']"
                            data-voffset="['110','90','90','90']" data-x="['right','right','right','right']"
                            data-y="['bottom','bottom','bottom','bottom']"
                            data-frames="[{&quot;from&quot;:&quot;x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1000,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <i class="float-icon flaticon-cargo-boat"></i>
                        </div>
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-1 ipad-hidden" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on" data-type="shape" data-height="none" data-whitespace="nowrap"
                            data-width="none" data-hoffset="['0','0','0','0']" data-voffset="['110','90','90','90']"
                            data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']"
                            data-frames="[{&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:3000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <i class="float-icon flaticon-airplane-2"></i>
                        </div>
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-3" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on" data-type="shape" data-height="none" data-whitespace="nowrap"
                            data-width="none" data-hoffset="['-10','-10','-10','100']"
                            data-voffset="['-170','-170','-120','-100']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames="[{&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:2000,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:3000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <figure><img src="{{ asset('huaxia/images/main-slider/plane-icon.png') }}" alt /></figure>
                        </div>
                        <div class="tp-caption mb-4" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','650']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-195','-160','-160','-140']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <span class="title">{{ __('home.company_name') }}</span>
                        </div>
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','650']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-70','-40','-40','-30']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <h2>{{ __('home.slider_text') }}</h2>
                        </div>
                        <div class="tp-caption mt-4" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','750','700','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['100','120','120','120']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <a href="page-about.html" class="theme-btn btn-style-one hvr-light"><span
                                    class="btn-title">{{ __('home.slider_button') }}</span></a>
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
                                <a href="page-about.html">{!! __('home.feature_title_1') !!}</a>
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
                                <a href="page-about.html">{!! __('home.feature_title_2') !!}</a>
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
                            <h4 class="title"><a href="page-about.html">{!! __('home.feature_title_3') !!}</a></h4>
                            <div class="text">Lorem ipsum dolor amet consectetur adipiscing elit do eiusmod.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-section pt-0">
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
                            <h2>{!! __('home.about_title') !!}</h2>
                            <div class="text">
                                {{ __('home.about_description') }}
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


    <section class="services-section">
        <div class="bg-image" style="background-image: url(images/background/1.jpg)"></div>
        <div class="anim-icons">
            <span class="icon icon-wave-line"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">{{ __('home.service_company') }}</span>
                <h2>{{ __('home.service_title') }}</h2>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('post.detail', ['alias' => $service->slug]) }}"><img
                                            src="{{ $service->images()->first()->url }}" alt /></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <i class="icon flaticon-airplane-2"></i>
                                <span class="sub-title">{{ __('Dịch vụ') }}</span>
                                <h4 class="title"><a
                                        href="{{ route('post.detail', ['alias' => $service->slug]) }}">{{ $service->title }}</a>
                                </h4>
                                <div class="text">{{ $service->description }}</div>
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
                    <img src="{{ asset('huaxia/images/icons/arrow-2.png') }}" alt class="icon" />
                    <span class="title">{{ __('home.tracking_tool_tip') }}</span>
                </div>
                <div class="tracking-form">
                    <h4 class="title">{!! __('home.tracking_title') !!}</h4>

                    <form method="post" action="#">
                        <div class="row">
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                <span class="icon lnr-icon-user"></span>
                                <input type="text" name="field_name"
                                    placeholder="{{ __('home.tracking_placeholder_1') }}" />
                            </div>

                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                <span class="icon lnr-icon-envelope1"></span>
                                <input type="text" name="field_name"
                                    placeholder="{{ __('home.tracking_placeholder_2') }}" />
                            </div>

                            <div class="form-group col-lg-4 col-md-12 col-sm-12 text-end">
                                <button type="submit" class="theme-btn btn-style-one"><span
                                        class="btn-title">{{ __('home.tracking_button') }}</span></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


    <section class="call-to-action" style="background-image: url({{ asset('huaxia/images/background/2.jpg') }})">
        <div class="auto-container">
            <div class="outer-box">
                <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now lightbox-image"><i
                        class="icon fa fa-play"></i><span class="ripple"></span></a>
                <div class="sec-title light mb-0">
                    <div class="sub-title">{{ __('home.call_action_company') }}</div>
                    <h1>{!! __('home.call_action_title') !!}</h1>
                    <a href="#" class="theme-btn btn-style-one hvr-light"><span
                            class="btn-title">{{ __('home.call_action_button') }}</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us pull-up pb-0">
        <div class="bg-image" style="background-image: url({{ asset('huaxia/images/background/4.jpg') }})"></div>
        <div class="anim-icons">
            <div class="float-image"><img src="{{ asset('huaxia/images/resource/delivery-boy.png') }}" alt /></div>
        </div>
        <div class="auto-container">
            <div class="row">

                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="sub-title">{{ __('home.why_choose_us') }}</span>
                            <h2>{{ __('home.why_choose_us_description') }}</h2>
                        </div>

                        <div class="feature-block-two">
                            <div class="inner-box">
                                <i class="icon flaticon-delivery-box-4"></i>
                                <h4 class="title">{{ __('home.why_choose_us_title_1') }}</h4>
                                <p class="text">Aenean placerat ut lacus nec pulvinar. Donec eu leo, ante at,
                                    commodo diam.</p>
                            </div>
                        </div>

                        <div class="feature-block-two">
                            <div class="inner-box">
                                <i class="icon flaticon-international-shipping-3"></i>
                                <h4 class="title">{{ __('home.why_choose_us_title_2') }}</h4>
                                <p class="text">Interdum et malesuada fames ac ante ipsum primis in faucibus donec
                                    tempor nisi neque.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <div class="contact-form wow fadeInLeft">

                            <form method="post" action="#" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>{{ __('home.why_choose_us_form_1') }}</label>
                                        <input type="text" name="full_name" placeholder required />
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>{{ __('home.why_choose_us_form_2') }}:</label>
                                        <input type="text" name="Email" placeholder required />
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>{{ __('home.why_choose_us_form_3') }}:</label>
                                        <input type="text" name="Phone" placeholder required />
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>{{ __('home.why_choose_us_form_4') }}</label>
                                        <div class="range-slider-one">
                                            <input type="text" class="range-amount" name="field-name" readonly />
                                            <div class="distance-range-slider"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>{{ __('home.why_choose_us_form_5') }}</label>
                                        <select class="custom-select">
                                            <option value>{{ __('home.why_choose_us_form_select_1') }}</option>
                                            <option value>{{ __('home.why_choose_us_form_select_2') }}</option>
                                            <option value>{{ __('home.why_choose_us_form_select_3') }}</option>
                                            <option value>{{ __('home.why_choose_us_form_select_4') }}</option>
                                            <option value>{{ __('home.why_choose_us_form_select_5') }}</option>
                                            <option value>{{ __('home.why_choose_us_form_select_6') }}</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>{{ __('home.why_choose_us_form_6') }}</label>
                                        <select class="custom-select">
                                            <option value>{{ __('home.why_choose_us_form_select_7') }}</option>
                                            <option value>{{ __('home.why_choose_us_form_select_8') }}</option>
                                            <option value>{{ __('home.why_choose_us_form_select_9') }}</option>
                                            <option value>{{ __('home.why_choose_us_form_select_10') }}</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-two hvr-light" type="submit"
                                            name="submit-form"><span class="btn-title">
                                                {{ __('home.why_choose_us_button') }}
                                            </span>
                                        </button>
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
                            <span class="sub-title">{{ __('home.about_2_title') }}</span>
                            <h2>{{ __('home.about_2_company') }}</h2>
                            <h4>{{ __('home.about_2_title_2') }}.</h4>
                            <div class="text">{{ __('home.about_2_description') }}</div>
                        </div>
                        <div class="row">

                            <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <i class="icon flaticon-delivery-courier"></i>
                                    <h4 class="title">{{ __('home.about_2_box_1') }}</h4>
                                </div>
                            </div>

                            <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <i class="icon flaticon-delivery-insurance-3"></i>
                                    <h4 class="title">{{ __('home.about_2_box_2') }}</h4>
                                </div>
                            </div>

                            <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <i class="icon flaticon-delivery-box-3"></i>
                                    <h4 class="title">{{ __('home.about_2_box_3') }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="founder-info">
                            <div class="thumb"><img src="{{ asset('huaxia/images/resource/ceo.jpg') }}" alt /></div>
                            <h5 class="name">{{ __('home.about_2_ceo_name') }}</h5>
                            <span class="designation">{{ __('home.about_2_ceo_title') }}</span>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <figure class="image-1 wow fadeInUp"><img src="{{ asset('huaxia/images/resource/about-3.jpg') }}"
                                alt /></figure>
                        <figure class="image-2 wow fadeInRight">
                            <img src="{{ asset('huaxia/images/resource/about-4.jpg') }}" alt />
                            <div class="icon-box"><i class="icon flaticon-delivery-box-4"></i></div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="anim-icons">
            <div class="float-image wow zoomInLeft"><img src="{{ asset('huaxia/images/resource/float-img-2.png') }}"
                    alt /></div>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">{{ __('home.news_title') }}</span>
                <h2>
                    {!! __('home.news_big_title') !!}
                </h2>
            </div>
            <div class="row">

                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="news-details.html"><img src="{{ asset('huaxia/images/resource/news-1.jpg') }}"
                                        alt /></a>
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
                            <a href="news-details.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="news-details.html"><img src="{{ asset('huaxia/images/resource/news-2.jpg') }}"
                                        alt /></a>
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
                            <a href="news-details.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="news-details.html"><img src="{{ asset('huaxia/images/resource/news-3.jpg') }}"
                                        alt /></a>
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
                            <a href="news-details.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
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
                        <a href="#"><img src="{{ asset('huaxia/images/clients/1.jpg') }}" alt /></a>
                    </li>
                    <li class="slide-item">
                        <a href="#"><img src="{{ asset('huaxia/images/clients/2.jpg') }}" alt /></a>
                    </li>
                    <li class="slide-item">
                        <a href="#"><img src="{{ asset('huaxia/images/clients/3.jpg') }}" alt /></a>
                    </li>
                    <li class="slide-item">
                        <a href="#"><img src="{{ asset('huaxia/images/clients/4.jpg') }}" alt /></a>
                    </li>
                    <li class="slide-item">
                        <a href="#"><img src="{{ asset('huaxia/images/clients/5.jpg') }}" alt /></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Huaxia Việt Nam</title>

    <link href="{{asset('huaxia/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('huaxia/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('huaxia/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('huaxia/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('huaxia/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('huaxia/css/responsive.css')}}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{asset('huaxia/images/favicon.png')}}" type="image/x-icon" />
    <link rel="icon" href="{{asset('huaxia/images/favicon.png')}}" type="image/x-icon" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if lt IE 9]><script src="{{asset('huaxia/js/html5shiv.js')}}"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('huaxia/js/respond.js')}}"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">

        <div class="preloader"></div>

        @include('partials.header')
        @yield('content')
        @include('partials.footer')

    </div>


    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <script src="{{asset('huaxia/js/jquery.js')}}"></script>
    <script src="{{asset('huaxia/js/popper.min.js')}}"></script>

    <script src="{{asset('huaxia/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('huaxia/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('huaxia/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('huaxia/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('huaxia/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('huaxia/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('huaxia/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('huaxia/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('huaxia/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('huaxia/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('huaxia/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('huaxia/js/main-slider-script.js')}}"></script>

    <script src="{{asset('huaxia/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('huaxia/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('huaxia/js/jquery-ui.js')}}"></script>
    <script src="{{asset('huaxia/js/wow.js')}}"></script>
    <script src="{{asset('huaxia/js/appear.js')}}"></script>
    <script src="{{asset('huaxia/js/select2.min.js')}}"></script>
    <script src="{{asset('huaxia/js/swiper.min.js')}}"></script>
    <script src="{{asset('huaxia/js/owl.js')}}"></script>
    <script src="{{asset('huaxia/js/script.js')}}"></script>
</body>

</html>
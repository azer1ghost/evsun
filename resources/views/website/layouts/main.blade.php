<!doctype html>
<html lang="{{config('app.locale')}}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{setting('site.title')}} | @yield('title')</title>
        <meta name="description" content="@yield('description', setting('site.description'))">
        <meta name="keywords" content="@yield('keywords')">
        <meta name="MobileOptimized" content="320" />

        <!--=== Favicon Link ===-->
        <link rel="shortcut icon" type="image/png" href="{{asset(Voyager::image(setting('site.favicon')))}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset(Voyager::image(setting('site.favicon')))}}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- Fonts CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
        <!-- Font awesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.pro.min.css') }}">
        <!-- Magnific popup CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <!-- OwlCarousel CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- Stellar Nav CSS -->
        <link rel="stylesheet"  href="{{ asset('assets/css/stellarnav.min.css') }}">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" crossorigin="anonymous" />

        @yield('styles')
    </head>
    <body>

        @include('website.components.loader')

        @include('website.components.header')

        @yield('content')

        @include('website.components.contact')

        <x-footer/>

        <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Isotope JS -->
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- OwlCarousel JS -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- Swiper JS -->
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <!-- wow JS -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <!-- stellarnav JS -->
        <script src="{{ asset('assets/js/stellarnav.min.js') }}"></script>
        <!-- aos JS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                jQuery('.stellarnav').stellarNav({
                    breakpoint: 990,
                });
            });
        </script>

        <script>
            $(window).on('load', function () {
                setTimeout(function () {
                    $('.main-loader').hide();
                }, 600)
            })
        </script>

        <script>
            AOS.init();
        </script>

        <!-- Custom JS -->
        <script src="{{ asset('assets/js/script.js') }}"></script>

        @yield('scripts')
    </body>
</html>

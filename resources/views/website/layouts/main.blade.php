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
    <link rel="stylesheet" href="{{ asset('assets/css/stellarnav.min.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" crossorigin="anonymous" />

    @yield('styles')
</head>

<body>

    @include('website.components.loader')

    @include('website.components.header')

    @yield('content')

    @include('website.components.scroll')


    <div class="modal" tabindex="-1" role="dialog" id="notifyModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content  alert @if($errors->any()) alert-danger @else alert-success @endif">
                <div class="modal-header">
                    <h5 class="modal-title">Bildiri??</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if(session()->has('success'))
                        {{session()->get('success')}}
                    @endif
                </div>
            </div>
        </div>
    </div>


    <x-footer />

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
    <script src="https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            jQuery('.stellarnav').stellarNav({
                breakpoint: 990,
                scrollbarFix: true
            });
        });
    </script>

    <script>
        $(window).on('load', function() {
            setTimeout(function() {
                $('#preloader').hide();
                $('.pace').hide();
            }, 600)
        })
    </script>

    <script>
        AOS.init();
    </script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @yield('scripts')

    @if ($errors->any() or session()->has('success'))
        <script>
            $('#notifyModal').modal('show')
        </script>
    @endif
</body>

</html>

@extends('website.layouts.main')

@section('title', $solution->getTranslatedAttribute('meta_title'))
@section('description', $solution->getTranslatedAttribute('meta_description'))
@section('keywords', $solution->getTranslatedAttribute('meta_keywords'))

@section('content')
@include('website.components.breadcrumb', ['image' => $solution->image, 'links' => [route('solutions') => meta('solutions')->get('title'), $solution->getTranslatedAttribute('title') ]]))

<section class="heller-details">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-12 order-last order-md-first mb-5">
                <h3 class="ss_h3_center text-center">Həllər</h3>
                <!-- dediyim kimi corusel ele/ bu foreach ozu loop-layacaq /kalslara filan oyna seliqye sal ifsyo -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($solutions as $single_solution)
                        <div class="swiper-slide">
                            <a href="{{route('solution', $single_solution)}}" @class(['service-div', 'active'=> (route('solution', $single_solution) == url()->current()) ])" >
                                <div class="service-img">
                                    <i class="{{$single_solution->icon}} fa-2x text-dark"></i>
                                </div>
                                <p>{{$single_solution->getTranslatedAttribute('title')}}</p>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="text-left mb-5">
                    <h1>{{$solution->getTranslatedAttribute('title')}}</h1>
                </div>
                {{-- <div class="service-image">--}}
                {{-- <img src="{{asset(Voyager::image($solution->image))}}"/>--}}
                {{-- </div>--}}
                <p>
                    {!!$solution->getTranslatedAttribute('detail')!!}
                </p>
            </div>
        </div>
    </div>
    <a href="#" class="ltx-go-top ltx-go-top-img floating show"><img width="18" height="28" src="http://efuel.like-themes.com/wp-content/uploads/2018/08/go-top.png" class="attachment-full size-full" alt=""><span>go top</span></a>
</section>
@endsection
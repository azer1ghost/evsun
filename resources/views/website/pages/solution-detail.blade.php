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
                                    <i class="{{$single_solution->getAttribute('icon')}} fa-2x text-dark"></i>
                                </div>
                                <p>{{$single_solution->getTranslatedAttribute('title')}}</p>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-12 row">
                <div class="col-md-4">
                   <div class="service-image">
                       <video width="500px" height="400px" preload="none" autoplay loop src="{!!asset(Voyager::image($solution->video))!!}"></video>
                   </div>
                </div>
                <div class="col-md-8">
                    <div class="text-left mb-5">
                        <h1>{{$solution->getTranslatedAttribute('title')}}</h1>
                    </div>
                    <p>
                        {!!$solution->getTranslatedAttribute('detail')!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

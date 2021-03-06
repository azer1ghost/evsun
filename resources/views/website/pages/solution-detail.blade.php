@extends('website.layouts.main')

@section('title', $solution->getTranslatedAttribute('meta_title'))
@section('description', $solution->getTranslatedAttribute('meta_description'))
@section('keywords', $solution->getTranslatedAttribute('meta_keywords'))

@section('content')
@include('website.components.breadcrumb', ['image' => $solution->image, 'links' => [route('solutions') => meta('solutions')->get('title'), $solution->getTranslatedAttribute('title') ]]))

<section class="heller-details">
    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <h3 class="ss_h3_center text-center">Həllər</h3>
                <!-- dediyim kimi corusel ele/ bu foreach ozu loop-layacaq /kalslara filan oyna seliqye sal ifsyo -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($solutions as $single_solution)
                        <div class="swiper-slide">
                            <a href="@if(URL::current() != route('solution', $single_solution)) {{route('solution', $single_solution)}} @else javascript:void(0) @endif "  @class(['service-div', 'active'=> (route('solution', $single_solution) == url()->current()) ])" >
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
            <div class="col-lg-12 row no-gutters p-0">
                <div class="col-md-4 m-0">
                   <video width="100%" class="p-2" preload="none" muted autoplay playsinline loop>
                       <source src="{!!asset(Voyager::image($solution->video))!!}" type="video/mp4">
{{--                       <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">--}}
                   </video>
                </div>
                <div class="col-md-8 pr-3 pl-3 mt-3">
                    <div class="text-left mb-3">
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

@if(meta('solutions')->get('show_contact'))
    @include('website.components.contact')
@endif
@endsection

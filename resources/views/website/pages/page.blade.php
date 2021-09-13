@extends('website.layouts.main')

@section('title', $page->getTranslatedAttribute('title'))
@section('description', $page->getTranslatedAttribute('meta_description'))
@section('keywords', $page->getTranslatedAttribute('meta_keywords'))

@section('content')
    @include('website.components.breadcrumb', ['image' => $page->image, 'links' =>  [$page->getTranslatedAttribute('heading') ]])
    <div class="solar_aboutus_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 mt-5 mb-5">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach(json_decode($page->images) ?? [$page->image] as $image)
                                <div class="swiper-slide">
                                    <div class="solar_about_img">
                                        <img loading="lazy"  src="{{ asset(Voyager::image($image)) }}" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 mt-0 mt-md-5 ">
                    <div class="solar_our_vison_detail mb-5">
                        <h1 class="text_span mb-3">{{$page->getTranslatedAttribute('title')}}</h1>
                        <p>
                            {!!$page->getTranslatedAttribute('body') !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($page->get('show_contact'))
        @include('website.components.contact')
    @endif
@endsection

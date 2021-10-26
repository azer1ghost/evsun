@extends('website.layouts.main')

@section('title', $page->getTranslatedAttribute('title'))
@section('description', $page->getTranslatedAttribute('meta_description'))
@section('keywords', $page->getTranslatedAttribute('meta_keywords'))

@section('content')
    @include('website.components.breadcrumb', ['image' => $page->image, 'links' =>  [$page->getTranslatedAttribute('heading') ]])

    <div class="solar_aboutus_page">
        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <div class="col-lg-4 bg-danger float-left mr-3 mb-2" style="height: 100px">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach(json_decode($page->images) ?? [$page->image] as $image)
                                    <div class="swiper-slide" >
                                        <div class="solar_about_img">
                                            <img src="{{ asset(Voyager::image($image)) }}" />
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <h1 class="text_span mb-3">{{$page->getTranslatedAttribute('title')}}</h1>
                    <p >{!!$page->getTranslatedAttribute('body') !!}</p>
                </div>
            </div>

        </div>
    </div>

    <x-instagram-feed/>

    @if($page->getAttribute('show_contact'))
        @include('website.components.contact')
    @endif
@endsection

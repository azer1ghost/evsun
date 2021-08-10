@extends('website.layouts.main')

@section('title', $page->getTranslatedAttribute('title'))
@section('description', $page->getTranslatedAttribute('meta_description'))
@section('keywords', $page->getTranslatedAttribute('meta_keywords'))


@section('content')
    @include('website.components.breadcrumb', ['links' =>  [$page->getTranslatedAttribute('title') ]])
    <div class="solar_aboutus_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="swiper-container">
                        <img src="http://kamleshyadav.com/html/solar-supplier/index5/assets/images/aboutus.png" alt=""/>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 mt-5">
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
@endsection

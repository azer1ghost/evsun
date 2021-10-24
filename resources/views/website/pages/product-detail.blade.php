@extends('website.layouts.main')

@section('title', $product->getTranslatedAttribute('name'))
@section('description', $product->getTranslatedAttribute('meta_description'))
@section('keywords', $product->getTranslatedAttribute('meta_keywords'))

@section('scripts')
<script>
    $(document).ready(function() {
        $('#imageGallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:9,
            slideMargin:0,
            enableDrag: true,
        });
    });
</script>
@endsection

@section('content')

@if(true)
@include('website.components.breadcrumb', ['image' => meta('products')->image(), 'links' => array(route('products') => meta('products')->get('title'), str_limit($product->getTranslatedAttribute('name'), 20))])
@endif

<div class="p-2 p-lg-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-3">
            <ul id="imageGallery" >
                <li  data-thumb="http://sachinchoolur.github.io/lightslider/img/cS-1.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-1.jpg">
                    <img src="http://sachinchoolur.github.io/lightslider/img/cS-1.jpg" />
                </li>
                <li data-thumb="http://sachinchoolur.github.io/lightslider/img/cS-4.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-4.jpg">
                    <img src="http://sachinchoolur.github.io/lightslider/img/cS-4.jpg" />
                </li>
            </ul>
        </div>

{{--        @foreach(json_decode($product->getAttribute('images')) ?? [] as $image)--}}
{{--             {{ asset(Voyager::image($image)) }}--}}
{{--        @endforeach--}}

        <div class="col-lg-7  col-12">
            <div class="prod-page-main">
                <div class="prod-page-name">
                    <h1>{{$product->getTranslatedAttribute('name')}} </h1>
                    <p> @lang('static.category'): <span>{{$product->getRelationValue('category')->getTranslatedAttribute('name')}} </span></p>
                </div>
                <div class="prod-page-details">
                    <p class="prod-page-details-head">@lang('static.specification')</p>
                    <p>{!! $product->getTranslatedAttribute('detail') !!}</p>
                </div>

                <div class="prod-page-btn">
                    <a href="{{route('contact')}}" class="prod-modal-btn ss_btn my-4">@lang('static.contact_us')</a>
                </div>

                <div class="prod-page-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="props-tab" data-toggle="tab" href="#props" role="tab" aria-controls="props" aria-selected="true">@lang('static.features')</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="props" role="tabpanel" aria-labelledby="props-tab">
                            <div class="prod-page-details mt-3">
                                <ul>
                                    @foreach($product->getRelationValue('attributes') as $attribute)
                                        <li>
                                            <p> {{$attribute->getTranslatedAttribute('name')}} : {{$attribute->pivot->value()->first()->getTranslatedAttribute('content')}} </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <h3 class="ss_h3_center text-center">@lang('static.similar') @lang('static.products')</h3>
        </div>
        <div class="col-lg-12 my-5 prod-page-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($similar_products as $sm_product)
                    <div class="swiper-slide">
                        <div class="product-itm">
                            <a href="{{route('product', $sm_product)}}">
                                <img src="{!! asset( Voyager::image(json_decode($sm_product->images)[0]) ) !!}" />
                                <p>{{$sm_product->getTranslatedAttribute('name')}}
                                    <span>{{$sm_product->getRelationValue('category')->getTranslatedAttribute('name')}}</span>
                                </p>
                            </a>
                            <div class="prod-actions">
                                <a data-toggle="modal" data-target=".bd-example-modal-lg" class="prod-view" href="#"><i class="fas fa-search"></i> </a>
                                <a class="prod-link" href="{{route('product', $sm_product)}}"><i class="fas fa-link"></i> </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@if(meta('products')->get('show_contact'))
    @include('website.components.contact')
@endif
@endsection

@extends('website.layouts.main')

@section('title', $product->getTranslatedAttribute('name'))
@section('description', $product->getTranslatedAttribute('meta_description'))
@section('keywords', $product->getTranslatedAttribute('meta_keywords'))

@section('scripts')
<script>
    $('.slider-single').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        adaptiveHeight: true,
        infinite: false,
        useTransform: true,
        nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-circle-right"></i></button>',
        prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-circle-left"></i></button>',
        speed: 400,
        cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
    });

    $('.slider-nav')
        .on('init', function(event, slick) {
            $('.slider-nav .slick-slide.slick-current').addClass('is-active');
        })
        .slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: false,
            focusOnSelect: false,
            infinite: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            }, {
                breakpoint: 420,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            }]
        });

    $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
        $('.slider-nav').slick('slickGoTo', currentSlide);
        var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
        $('.slider-nav .slick-slide.is-active').removeClass('is-active');
        $(currrentNavSlideElem).addClass('is-active');
    });

    $('.slider-nav').on('click', '.slick-slide', function(event) {
        event.preventDefault();
        var goToSingleSlide = $(this).data('slick-index');

        $('.slider-single').slick('slickGoTo', goToSingleSlide);
    });

    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });
</script>
@endsection

@section('content')

@if(true)
@include('website.components.breadcrumb', ['image' => meta('products')->image(), 'links' => array(route('products') => meta('products')->get('title'), str_limit($product->getTranslatedAttribute('name'), 20))])
@endif

<div class="p-2 p-lg-4">
    <div class="row">
        <div class="col-lg-5">
            <div class="prod-slideri">
                <ul id="lightSlider">
                    @foreach(json_decode($product->getAttribute('images')) ?? [] as $image)
                        <li data-thumb="{{ asset(Voyager::image($image)) }}">
                            <img data-toggle="modal" data-target=".bd-example-modal-lg-{{$loop->iteration}}" src="{{ asset(Voyager::image($image)) }}" />
                        </li>
                        <div class="modal fade bd-example-modal-lg-{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="prod-modal-image">
                                                <img src="{{ asset(Voyager::image($image)) }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- <div class="col-lg-5 col-12">
            <div class="slider slider-single">
                <div data-toggle="modal" data-target=".bd-example-modal-lg" class="slider-for-img">
                    <img src="https://tesla-cdn.thron.com/delivery/public/image/tesla/088d64b2-afcc-43c6-9fa1-8f37e567a3d0/bvlatuR/std/2880x2400/desktop_model_3_v2" />
                </div>
                <div data-toggle="modal" data-target=".bd-example-modal-lg" class="slider-for-img">
                    <img src="https://tesla-cdn.thron.com/delivery/public/image/tesla/088d64b2-afcc-43c6-9fa1-8f37e567a3d0/bvlatuR/std/2880x2400/desktop_model_3_v2" />
                </div>
            </div>
            <div class="slider slider-nav">
                <div class="slider-nav-img">
                    <img src="https://tesla-cdn.thron.com/delivery/public/image/tesla/088d64b2-afcc-43c6-9fa1-8f37e567a3d0/bvlatuR/std/2880x2400/desktop_model_3_v2" />
                </div>
                <div class="slider-nav-img">
                    <img src="https://tesla-cdn.thron.com/delivery/public/image/tesla/088d64b2-afcc-43c6-9fa1-8f37e567a3d0/bvlatuR/std/2880x2400/desktop_model_3_v2" />
                </div>
            </div>
        </div> -->
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
                                            <p> {{$attribute->getTranslatedAttribute('name')}} : {{$attribute->pivot->value}} </p>
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
                                <img src="{!!asset(Voyager::image(json_decode($sm_product->images[0])))!!}" />
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

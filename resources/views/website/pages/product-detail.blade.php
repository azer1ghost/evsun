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
</script>
@endsection

@section('content')

@if(true)
@include('website.components.breadcrumb', ['image' => meta('products')->image(), 'links' => array(route('products') => meta('products')->get('title'), str_limit($product->getTranslatedAttribute('name'), 20))])
@endif

<div class="p-5">
    <div class="row">
        <div class="col-lg-5 col-12">
            <div class="slider slider-single">
                <div class="slider-for-img">
                    <img src="https://tesla-cdn.thron.com/delivery/public/image/tesla/088d64b2-afcc-43c6-9fa1-8f37e567a3d0/bvlatuR/std/2880x2400/desktop_model_3_v2" />
                </div>
                <div class="slider-for-img">
                    <img src="https://img.phonandroid.com/2021/07/tesla-model-s-retard.jpg" />
                </div>
                <div class="slider-for-img">
                    <img src="https://1news.az/images/articles/2015/01/22/thumb_20150122054323314.jpg?2021-02-17+09%3A23%3A27" />
                </div>
            </div>
            <div class="slider slider-nav">
                <div class="slider-nav-img">
                    <img src="https://tesla-cdn.thron.com/delivery/public/image/tesla/088d64b2-afcc-43c6-9fa1-8f37e567a3d0/bvlatuR/std/2880x2400/desktop_model_3_v2" />
                </div>
                <div class="slider-nav-img">
                    <img src="https://img.phonandroid.com/2021/07/tesla-model-s-retard.jpg" />
                </div>
                <div class="slider-nav-img">
                    <img src="https://1news.az/images/articles/2015/01/22/thumb_20150122054323314.jpg?2021-02-17+09%3A23%3A27" />
                </div>
            </div>
        </div>
        <div class="col-lg-7  col-12">
            <div class="prod-page-main">
                <div class="prod-page-name">
                    <h1>Productun adi bura </h1>
                    <p> Kateqoriya:<span>Productun kateqoriyasi bura </span></p>
                </div>
                <div class="prod-page-details">
                    <p class="prod-page-details-head">Xüsusiyyətləri</p>
                    <ul>
                        <li>
                            <p> Prod detail 1 </p>
                        </li>
                        <li>
                            <p> Prod detail 1 </p>
                        </li>
                        <li>
                            <p> Prod detail 1 </p>
                        </li>
                        <li>
                            <p> Prod detail 1 </p>
                        </li>
                    </ul>
                </div>

                <div class="prod-page-btn">
                    <a class="prod-modal-btn ss_btn my-4">Əlaqə saxla </a>
                </div>

                <div class="prod-page-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="true">Rəylər</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="props-tab" data-toggle="tab" href="#props" role="tab" aria-controls="props" aria-selected="false">Xüsusiyyətlər</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="comments" role="tabpanel" aria-labelledby="comments-tab">Reyler</div>
                        <div class="tab-pane fade" id="props" role="tabpanel" aria-labelledby="props-tab">
                            <div class="prod-page-details mt-3">
                                <p class="prod-page-details-head">Xüsusiyyətləri</p>
                                <ul>
                                    <li>
                                        <p> Prod detail 1 </p>
                                    </li>
                                    <li>
                                        <p> Prod detail 1 </p>
                                    </li>
                                    <li>
                                        <p> Prod detail 1 </p>
                                    </li>
                                    <li>
                                        <p> Prod detail 1 </p>
                                    </li>
                                    <li>
                                        <p> Prod detail 1 </p>
                                    </li>
                                    <li>
                                        <p> Prod detail 1 </p>
                                    </li>
                                    <li>
                                        <p> Prod detail 1 </p>
                                    </li>
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
            <h3 class="ss_h3_center text-center">Oxşar məhsullar</h3>
        </div>
        <div class="col-lg-12 my-5 prod-page-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-itm">
                            <a href="#">
                                <img src="https://static.wixstatic.com/media/f2e78a_adc40ca1d58d478cb98bc0351b75f150~mv2.png/v1/fill/w_640,h_378,al_c,q_85,usm_0.66_1.00_0.01/f2e78a_adc40ca1d58d478cb98bc0351b75f150~mv2.webp" />
                                <p>Produkt adi
                                    <span>Electric chargers</span>
                                </p>
                            </a>
                            <div class="prod-actions">
                                <a data-toggle="modal" data-target=".bd-example-modal-lg" class="prod-view" href="#"><i class="fas fa-search"></i> </a>
                                <a class="prod-link" href="#"><i class="fas fa-link"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-itm">
                            <a href="#">
                                <img src="https://static.wixstatic.com/media/f2e78a_adc40ca1d58d478cb98bc0351b75f150~mv2.png/v1/fill/w_640,h_378,al_c,q_85,usm_0.66_1.00_0.01/f2e78a_adc40ca1d58d478cb98bc0351b75f150~mv2.webp" />
                                <p>Produkt adi
                                    <span>Electric chargers</span>
                                </p>
                            </a>
                            <div class="prod-actions">
                                <a data-toggle="modal" data-target=".bd-example-modal-lg" class="prod-view" href="#"><i class="fas fa-search"></i> </a>
                                <a class="prod-link" href="#"><i class="fas fa-link"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
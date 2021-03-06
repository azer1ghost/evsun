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
                    <li data-thumb="https://s1.1zoom.me/prev/586/Geometry_Tracery_Texture_Blue_Light_Blue_585841_600x340.jpg">
                        <img data-toggle="modal" data-target=".bd-example-modal-lg" src="https://s1.1zoom.me/prev/586/Geometry_Tracery_Texture_Blue_Light_Blue_585841_600x340.jpg" />
                    </li>
                    <li data-thumb="https://s1.1zoom.me/prev/470/469089.jpg">
                        <img data-toggle="modal" data-target=".bd-example-modal-lg" src="https://s1.1zoom.me/prev/470/469089.jpg" />
                    </li>
                    <li data-thumb="https://www.heesenyachts.com/wp-content/uploads/2021/01/19650-Aura-ext-600x340.jpg">
                        <img data-toggle="modal" data-target=".bd-example-modal-lg" src="https://www.heesenyachts.com/wp-content/uploads/2021/01/19650-Aura-ext-600x340.jpg" />
                    </li>
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
                    <h1>Productun adi bura </h1>
                    <p> Kateqoriya:<span>Productun kateqoriyasi bura </span></p>
                </div>
                <div class="prod-page-details">
                    <p class="prod-page-details-head">X??susiyy??tl??ri</p>
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
                    <a class="prod-modal-btn ss_btn my-4">??laq?? saxla </a>
                </div>

                <div class="prod-page-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="true">R??yl??r</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="props-tab" data-toggle="tab" href="#props" role="tab" aria-controls="props" aria-selected="false">X??susiyy??tl??r</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="comments" role="tabpanel" aria-labelledby="comments-tab">Reyler</div>
                        <div class="tab-pane fade" id="props" role="tabpanel" aria-labelledby="props-tab">
                            <div class="prod-page-details mt-3">
                                <p class="prod-page-details-head">X??susiyy??tl??ri</p>
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
            <h3 class="ss_h3_center text-center">Ox??ar m??hsullar</h3>
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

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                            <img src="https://tesla-cdn.thron.com/delivery/public/image/tesla/088d64b2-afcc-43c6-9fa1-8f37e567a3d0/bvlatuR/std/2880x2400/desktop_model_3_v2" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(meta('products')->get('show_contact'))
    @include('website.components.contact')
@endif
@endsection

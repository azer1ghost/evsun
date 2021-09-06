<section style="background: rgb(18 66 165 / 5%);" class="ss_section_eight section_brands ss_section_sec_bg spacer_top spacer_bottom">
    <!--===== Section Eight Start =====-->
    <div class="container-fluid">
        <h3 class="ss_h3_center text-center">Brendlər</h3>
        <!-- <h1 class="text-center mb-5">Latest news</h1> -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($brands as $brand)
                <div class="swiper-slide">
                    <a target="_blank"  @if($brand->url) href="{{$brand->url}}" @endif class="ss_eight ss_box_wbg wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
                        <img class="img-fluid" src="{!!asset(Voyager::image($brand->image))!!}" alt="{{$brand->getAttribute('title')}}" />
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

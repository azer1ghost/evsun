<!-- Blog Area Start -->
<section class="ss_section_blog ss_section_sec_bg spacer_top spacer_bottom">
    <!--===== Section Eight Start =====-->
    <div class="container-fluid">
        @php
            $meta = meta('blog', ['heading']);
        @endphp
        <h3 class="ss_h3_center text-center">{{$meta->get('title')}}</h3>
        <h1 class="text-center mb-5">{{$meta->get('heading')}}</h1>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($posts as $post)
                <div data-aos="fade-up" class="swiper-slide " style="height: 100%!important;">
                    <div class="post-slide2" style="height: 100%!important;">
                        <div class="post-img">
                            <a href="{{route('post', $post)}}">
                                <img loading="lazy" src="{!!asset(Voyager::image($post->image))!!}" alt="{{$post->title}}" />
                            </a>
                            <div class="post-date">
                                <span class="date">{{$post->created_at->format('d')}}</span>
                                <span class="month">{{$post->created_at->monthName }}</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="{{route('post', $post)}}">{{$post->getTranslatedAttribute('title')}}</a></h3>
                            <p class="post-description">
                                {{str_limit($post->getTranslatedAttribute('excerpt'), 200)}}
                            </p>
                            <a href="{{route('post', $post)}}" class="read-more">@lang('static.read_more')</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->

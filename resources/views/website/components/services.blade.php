<!-- Service Area Start -->
<section class="ss_section_five ss_section_sec_bg spacer_top spacer_bottom">
    <!--===== Section Five Start =====-->
    <div class="container-fluid">
        @php
        $meta = meta('services', ['heading']);
        @endphp
        <h3 class="ss_h3_center text-center">{{$meta->get('title')}}</h3>
        <h1 class="text-center mb-5">{{$meta->get('heading')}}</h1>
        <div class="row justify-content-center">
            <!-- Service Area End -->
            @foreach($services as $service)
                <a href="{{route('service', $service)}}" class="tile col-lg-4 col-md-5 col-10 m-5 d-flex">
                    <img src='{{asset(Voyager::image($service->image))}}'/>
                    <div class="text row justify-content-center align-self-center">
                        <h1>Lorem ipsum.</h1>
                        <h2 class="animate-text">{{str_limit($service->getTranslatedAttribute('title'), 50)}}</h2>
                        <p class="animate-text">{{str_limit($service->getTranslatedAttribute('meta_description'))}}</p>
                    </div>
                </a>
            @endforeach
        </div>

{{--        <div class="col-xl-4 d-flex align-items-center col-lg-6 @if(!$loop->last) order-last d-flex align-items-center mt-lg-0 mt-md-4 @endif">--}}
{{--            <div class="ss_four_left">--}}
{{--                <a href="{{route('service', $service)}}" class="ss_box_bg wow fadeIn" data-wow-delay="@if($loop->first) 0.1s @else 0.3s @endif" data-wow-duration="1s">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-4">--}}
{{--                            <div class="ss_four_one">--}}
{{--                                <img class="img-fluid" src="{{asset(Voyager::image($service->icon))}}" alt="{{str_limit($service->getTranslatedAttribute('title'), 20)}}" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-8">--}}
{{--                            <div class="ss_four_two">--}}
{{--                                <h2>{{str_limit($service->getTranslatedAttribute('title'), 50)}}</h2>--}}
{{--                                <p>{{str_limit($service->getTranslatedAttribute('meta_description'))}}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--            <div class="col-xl-4 offset-xl-0 col-lg-6 offset-lg-3 d-flex align-items-center">--}}
{{--                <div class="ss_easy_use" data-aos-delay="300" data-aos-duration="800" data-aos="zoom-in">--}}
{{--                    <img class="img-fluid" src="{{asset(Voyager::image($meta->image()))}}" alt="{{$meta->get('title')}}" />--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>

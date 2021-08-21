<!-- Service Area Start -->
<section class="ss_section_five ss_section_sec_bg spacer_top spacer_bottom">
    <!--===== Section Five Start =====-->
    <div class="container-fluid">
        @php
        $meta = meta('services', ['heading']);
        @endphp
        <h3 class="ss_h3_center text-center">{{$meta->get('title')}}</h3>
        <h1 class="text-center mb-5">{{$meta->get('heading')}}</h1>
        <div class="row">
            <!-- Service Area End -->
            @foreach([0, 1] as $serviceLoop)
            <div class="col-xl-4 col-lg-6 @if(!$loop->last) order-xl-last mt-lg-0 mt-md-4 @endif">
                <div class="ss_four_left">
                    @foreach($services as $service)
                    @if(in_array($loop->iteration/$loop->parent->iteration, [1,2,3]))
                    @continue
                    @endif
                    <a href="{{route('service', $service)}}" class="ss_box_bg @if(!$loop->first) mt-4 @endif wow fadeIn" data-wow-delay="@if($loop->parent->first) 0.1s @else 0.3s @endif" data-wow-duration="1s">
                        <div class="row">
                            <div class="col-3">
                                <div class="ss_four_one">
                                    <img class="img-fluid" src="{{asset(Voyager::image($service->icon))}}" alt="{{str_limit($service->getTranslatedAttribute('title'), 20)}}" />
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="ss_four_two">
                                    <h2>{{str_limit($service->getTranslatedAttribute('title'), 20)}}</h2>
                                    <p>{{str_limit($service->getTranslatedAttribute('meta_description'))}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @if($loop->iteration === 3*$loop->parent->iteration)
                    @break
                    @endif
                    @endforeach
                </div>
            </div>
            @endforeach
            <div class="col-xl-4 offset-xl-0 col-lg-6 offset-lg-3 d-flex align-items-center">
                <div class="ss_easy_use" data-aos-delay="300" data-aos-duration="800" data-aos="zoom-in">
                    <img class="img-fluid" src="{{asset(Voyager::image($meta->image()))}}" alt="{{$meta->get('title')}}" />
                </div>
            </div>
        </div>
    </div>
</section>

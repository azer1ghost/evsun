@extends('website.layouts.main')

@section('title', $service->getTranslatedAttribute('meta_title'))
@section('description', $service->getTranslatedAttribute('meta_description'))
@section('keywords', $service->getTranslatedAttribute('meta_keywords'))

@section('styles')
<style>
    .ss_newsletter {
        background: rgb(249, 249, 249);
    }
</style>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        var header = document.querySelector(".ss_index_one");

        window.addEventListener("scroll", function() {
            if (this.window.pageYOffset > 70) {
                header.style.background = "#00000097";
            }
        });

        window.addEventListener("scroll", function() {
            if (this.window.pageYOffset < 70) {
                header.style.background = "#00000097";
            }
        });
    });
</script>
@endsection


@section('content')

@if(false)
    @include('website.components.breadcrumb', ['image' => $service->image, 'links' => [route('services') => meta('services')->get('title'), $service->getTranslatedAttribute('title') ]])
@endif

<div class="heller-img-left">
    <img src="{!!asset(Voyager::image($service->dynamic_image))!!}" />
</div>

<div class="container-heller m-5 p-5">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="heller-left">
                <div class="d-block">
                    <h1>{{$service->getTranslatedAttribute('title')}} </h1>
                    <p>{!! $service->getTranslatedAttribute('detail') !!}</p>
{{--                    <button class="heller-btn">--}}
{{--                        <p>Get Charging</p>--}}
{{--                    </button>--}}
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="heller-img">
                <img src="{!!asset(Voyager::image($service->image))!!}" />
            </div>
        </div>
    </div>
</div>

<div class="heller-alt-container">
    <div class="container-fluid">
        <h1 class="text-center mb-2">{{$service->getTranslatedAttribute('heading')}}</h1>
        <h3 class="ss_h3_center text-center">{{$service->getTranslatedAttribute('meta_title')}}</h3>
        <div class="heler-alt-content pt-5">
            <div class="row">
                <div data-aos-delay="300" data-aos-duration="800" data-aos="fade-right" class="order-xl-first col-lg-3 col-12 col-md-6">
                    <div class="heller-list-left">
                        <ul>
                            @foreach($services->take(3) as $subService)
                                <li>
                                    <a href="{{route('service', $subService)}}">
                                        <div class="d-flex align-items-center">
                                            <span> <i class="{{$subService->icon}}"></i> </span>
                                            <h2>{{str_limit($subService->getTranslatedAttribute('title'), 20)}}</h2>
                                        </div>
                                        <p>{{str_limit($subService->getTranslatedAttribute('detail'))}}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div data-aos-delay="300" data-aos-duration="800" data-aos="fade-left" class="order-xl-last col-lg-3 col-12 col-md-6">
                    <div class="heller-list-right">
                        <ul>
                            @foreach($services->slice(3)->all() as $subService)
                                <li>
                                    <a href="{{route('service', $subService)}}">
                                        <div class="d-flex align-items-center">
                                            <span> <i class="{{$subService->icon}}"></i> </span>
                                            <h2>{{str_limit($subService->getTranslatedAttribute('title'), 20)}}</h2>
                                        </div>
                                        <p>{{str_limit($subService->getTranslatedAttribute('detail'))}}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div data-aos-delay="300" data-aos-duration="800" data-aos="zoom-in" style="
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
" class="col-lg-6 col-12 col-md-6 heller-alt-img-div">
                    <img class="heller-alt-img" src="{!!asset(Voyager::image($service->image2))!!}" />
                    <img width="75%" src="{{asset('assets/images/advantage-bg.png')}}">
                </div>
            </div>
        </div>
    </div>
</div>
@if(meta('services')->get('show_contact'))
    @include('website.components.contact')
@endif

@endsection

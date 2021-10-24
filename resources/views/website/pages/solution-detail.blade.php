@extends('website.layouts.main')

@section('title', $service->getTranslatedAttribute('meta_title'))
@section('description', $service->getTranslatedAttribute('meta_description'))
@section('keywords', $service->getTranslatedAttribute('meta_keywords'))

@section('content')
    @include('website.components.breadcrumb', ['image' => $service->image, 'links' =>  [route('services') => meta('services')->get('title'), $service->getTranslatedAttribute('title') ]])

    <div class="container-fluid py-5">
{{--        <div class="floating-img">--}}
{{--            <img src="{!!asset(Voyager::image($service->banner))!!}" />--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-lg-4 order-last order-md-first ">
                <h3 class="ss_h3_center text-center">@lang('static.solutions')</h3>
                <div class="services-list">
                    @foreach($services as $single_service)
                        <a href="{{route('service', $single_service)}}" @class(['service-div', 'active' => (route('service', $single_service) == url()->current()) ])" >
{{--                            <div class="service-img">--}}
{{--                                <img src="{{asset(Voyager::image($single_service->icon))}}" />--}}
{{--                            </div>--}}
                            <p style="font-size: 20px">{{$single_service->getTranslatedAttribute('title')}}</p>
                        </a>
                    @endforeach
                    <div class="card">
                        <img class="card-img-top" src="{{asset(Voyager::image($next_service->image))}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$next_service->getTranslatedAttribute('title')}}</h5>
                            <p class="card-text">{{$next_service->getTranslatedAttribute('meta_description')}}</p>
                        </div>
                        <a class="btn btn-more" href="{{route('service', $next_service)}}" >@lang('static.read_more')</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="text-left mb-5">
                    <h1>{{$service->getTranslatedAttribute('title')}}</h1>
                </div>
{{--                <div class="service-image">--}}
{{--                    <img src="{{asset(Voyager::image($service->image))}}"/>--}}
{{--                </div>--}}
                <p>
                    {!! $service->getTranslatedAttribute('detail') !!}
                </p>
            </div>
        </div>
    </div>

    @if(meta('services')->get('show_contact'))
        @include('website.components.contact')
    @endif
@endsection

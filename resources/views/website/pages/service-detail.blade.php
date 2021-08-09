@extends('website.layouts.main')

@section('title', $service->getTranslatedAttribute('meta_title'))
@section('description', $service->getTranslatedAttribute('meta_description'))
@section('keywords', $service->getTranslatedAttribute('meta_keywords'))

@section('content')
    @include('website.components.breadcrumb', ['links' =>  [route('services') => "Xidmətlər", $service->getTranslatedAttribute('title') ]])

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-4 order-last order-md-first">
                <h3 class="ss_h3_center text-center">Xidmətlər</h3>
                <div class="services-list">
                    @foreach($services as $single_service)
                        <a href="{{route('service', $single_service)}}" @class(['service-div', 'active' => (route('service', $single_service) == url()->current()) ])" >
                            <div class="service-img">
                                <img src="{{asset(Voyager::image($single_service->icon))}}" />
                            </div>
                            <p>{{$single_service->getTranslatedAttribute('title')}}</p>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-8">
                <div class="text-left">
                    <h1>{{$service->getTranslatedAttribute('title')}}</h1>
                </div>
                <div class="service-image">
                    <img src="{{asset(Voyager::image($service->image))}}"/>
                </div>
                <p>
                    {!! $service->getTranslatedAttribute('detail') !!}
                </p>
            </div>
        </div>
    </div>
@endsection

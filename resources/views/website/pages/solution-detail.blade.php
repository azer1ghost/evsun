@extends('website.layouts.main')

@section('title', $service->getTranslatedAttribute('meta_title'))
@section('description', $service->getTranslatedAttribute('meta_description'))
@section('keywords', $service->getTranslatedAttribute('meta_keywords'))

@section('content')
    @include('website.components.breadcrumb', ['image' => $service->image, 'links' =>  [route('services') => meta('services')->get('title'), $service->getTranslatedAttribute('title') ]])

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12">
                <div class="col-lg-4 float-left" >
                    <h3 class="ss_h3_center text-center">@lang('static.solutions')</h3>
                    <div class="services-list">
                        @foreach($services as $single_service)
                            <a href="{{route('service', $single_service)}}" @class(['service-div', 'active' => (route('service', $single_service) == url()->current()) ])" >
                                <p style="font-size: 20px">{{$single_service->getTranslatedAttribute('title')}}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="mb-5">
                    <h1>{{$service->getTranslatedAttribute('title')}}</h1>
                </div>
                <p>{!! $service->getTranslatedAttribute('detail') !!}</p>
            </div>
        </div>
    </div>

    @if(meta('services')->get('show_contact'))
        @include('website.components.contact')
    @endif
@endsection

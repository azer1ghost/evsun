@extends('website.layouts.main')

@section('title', $solution->getTranslatedAttribute('meta_title'))
@section('description', $solution->getTranslatedAttribute('meta_description'))
@section('keywords', $solution->getTranslatedAttribute('meta_keywords'))

@section('content')
    @include('website.components.breadcrumb', ['links' =>  [route('solutions') => "Həllər", $solution->getTranslatedAttribute('title') ]]))

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-4 order-last order-md-first">
                <h3 class="ss_h3_center text-center">Həllər</h3>
                <div class="services-list">
                    @foreach($solutions as $single_solution)
                        <a href="{{route('solution', $single_solution)}}" @class(['service-div', 'active' => (route('solution', $single_solution) == url()->current()) ])" >
                            <div class="service-img">
                                <i class="{{$single_solution->icon}} fa-2x text-dark"></i>
                            </div>
                            <p>{{$single_solution->getTranslatedAttribute('title')}}</p>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-8">
                <div class="text-left">
                    <h1>{{$solution->getTranslatedAttribute('title')}}</h1>
                </div>
                <div class="service-image">
                    <img src="{{asset(Voyager::image($solution->image))}}"/>
                </div>
                <p>
                    {!!$solution->getTranslatedAttribute('detail')!!}
                </p>
            </div>
        </div>
    </div>
@endsection

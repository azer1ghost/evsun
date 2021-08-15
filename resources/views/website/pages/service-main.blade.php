@extends('website.layouts.main')

@section('title', $service->getTranslatedAttribute('meta_title'))
@section('description', $service->getTranslatedAttribute('meta_description'))
@section('keywords', $service->getTranslatedAttribute('meta_keywords'))

@section('content')

    @if(true)
        @include('website.components.breadcrumb', ['image' => $service->image, 'links' =>  [route('services') => meta('services')->get('title'), $service->getTranslatedAttribute('title') ]])
    @endif


    <div class="container m-5 p-5">
        <p>Bu banneri sondurmek ucun ucun yuxaridaki if - e false yaz</p>
        <h1>Burada serhife kodlarini yaza bilersen</h1>
        <p>head footer falan hamsi avto gelir/ sen kontentini yarat/</p>
    </div>

@endsection

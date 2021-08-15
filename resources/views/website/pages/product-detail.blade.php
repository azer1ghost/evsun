@extends('website.layouts.main')

@section('title', $product->getTranslatedAttribute('name'))
@section('description', $product->getTranslatedAttribute('meta_description'))
@section('keywords', $product->getTranslatedAttribute('meta_keywords'))

@section('content')

    @if(true)
        @include('website.components.breadcrumb', ['image' => meta('products')->image(), 'links' => array(route('products') => meta('products')->get('title'), str_limit($product->getTranslatedAttribute('name'), 20))])
    @endif

    <div class="container m-5 p-5">
        <p>Bu banneri sondurmek ucun ucun yuxaridaki if - e false yaz</p>
        <h1>Bu sehife product detail sehifesidir</h1>
    </div>

@endsection

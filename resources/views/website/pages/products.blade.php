@extends('website.layouts.main')

@php
    $meta = meta('products');
@endphp

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))
@section('keywords', $meta->get('meta_keywords'))

@section('content')

    @if(true)
        @include('website.components.breadcrumb', ['image' => $meta->image(), 'links' => array($meta->get('title')) ])
    @endif



    <div class="container m-5 p-5">
        <p>Bu banneri sondurmek ucun ucun yuxaridaki if - e false yaz</p>
        <h1>Burada serhife kodlarini yaza bilersen</h1>
        <p>head footer falan hamsi avto gelir/ sen kontentini yarat/</p>

        @foreach($products as $product)
            <ul class="list-group">
                <li class="list-group-item border border-danger ">
                    <b>Bu bir product - dur -></b>
                    <a href="{{route('product', $product->getAttribute('serial'))}}">{{str_limit($product->getAttribute('name'), 20)}}</a>
                </li>
            </ul>
        @endforeach


    </div>

@endsection

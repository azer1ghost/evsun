@extends('website.layouts.main')

@php
  $meta = meta('products');
@endphp

@section('styles')
    @livewireStyles
@endsection

@section('scripts')
    @livewireScripts
@endsection

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))
@section('keywords', $meta->get('meta_keywords'))

@section('content')
    @if(true)
        @include('website.components.breadcrumb', ['image' => $meta->image(), 'links' => array($meta->get('title')) ])
    @endif

    @livewire('products')

    @if(meta('products')->get('show_contact'))
        @include('website.components.contact')
    @endif
@endsection


@extends('website.layouts.main')

@php
    $meta = meta('homepage', ['excerpt', 'image', 'btnText', 'btnLink']);
@endphp

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))
@section('keywords', $meta->get('meta_keywords'))

@section('content')

    <x-slider/>

    <x-solutions/>

    <section class="ss_section_three spacer_bottom">
        <!--===== Section Three Start =====-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div  data-aos="fade-up" class="ss_three_left">
                        <img class="img-fluid" src="{!!asset(Voyager::image($meta->get('image')))!!}" alt="{{config('app.name')}}"/>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="ss_three_right">
                        <!-- <h3>best service</h3> -->
                        <h1>{{$meta->get('title')}}</h1>
                        <p>{!! $meta->get('excerpt') !!}</p>
                        <a href="{{$meta->get('btnLink')}}" class="ss_btn mt-4">{{$meta->get('btnText')}}</a>
                    </div>
                </div>
            </div>
            <div class="ss_shape_one">
                <div class="ss_shape"></div>
            </div>
            <div class="ss_shape_dot"></div>
        </div>
    </section>
    <!--===== Section Three End =====-->

    <x-services/>

    <x-brands/>

    <x-blog/>

@endsection

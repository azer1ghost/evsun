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


<div class="container-fluid py-5">
    <div class="row">
        <div class="col-lg-3">
            <div class="filter-sec">Filter</div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="fal fa-search"></i>
                    </button>
                </div>
            </div>
            <hr>
            <div class="filter-radio ">
                <p class="filter-head"> Kateqoriyalar </p>
                <ul class="list-group">
                    <a href="">
                        <li class="list-group-item">
                            Mavi
                        </li>
                    </a>
                    <a href="">
                        <li class="list-group-item">
                            Qara
                        </li>
                    </a>
                </ul>
            </div>
            <hr>
            <div class="filter-check">
                <p class="filter-head"> Xüsusiyyətlər </p>
                <ul>
                    @foreach($attributes as $attribute)
                    <li class="btn col-6">
                        <input type="checkbox" name="check" class="mr-3"/>
                        {{$attribute->name}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-12">
                    <ul class="nav justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">154 items avaliable</a>
                        </li>
                        <li class="nav-item">
                            <select name="hard-select" class="form-control">
                                <option value="">Select Any filter</option>
                                <option value="">option 1</option>
                                <option value="">option 2</option>
                                <option value="">option 3</option>
                            </select>
                        </li>
                    </ul>
                </div>
                @foreach($products as $product)
                <div class="col-xl-3 col-lg-4 col-12 col-md-4 py-3">
                    <div class="product-itm">
                        <a href="{{route('product', $product->getAttribute('serial'))}}">
                            <img src="https://static.wixstatic.com/media/f2e78a_adc40ca1d58d478cb98bc0351b75f150~mv2.png/v1/fill/w_640,h_378,al_c,q_85,usm_0.66_1.00_0.01/f2e78a_adc40ca1d58d478cb98bc0351b75f150~mv2.webp" />
                            <p>{{str_limit($product->getAttribute('name'), 20)}}
                                <span>Electric chargers</span>
                            </p>
                        </a>
                        <div class="prod-actions">
                            <a data-toggle="modal" data-target=".bd-example-modal-lg" class="prod-view" href="#"><i class="fas fa-search"></i> </a>
                            <a class="prod-link" href="#"><i class="fas fa-link"></i> </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="prod-view-modal">
                    <div class="prod-modal-img">
                        <img src="https://static.wixstatic.com/media/f2e78a_adc40ca1d58d478cb98bc0351b75f150~mv2.png/v1/fill/w_640,h_378,al_c,q_85,usm_0.66_1.00_0.01/f2e78a_adc40ca1d58d478cb98bc0351b75f150~mv2.webp" />
                    </div>
                    <div class="prod-modal-details">
                        <h4>PROD NAME </h4>
                        <p class="prod-modal-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse blanditiis a enim quia quibusdam recusandae omnis beatae optio id quis. </p>
                        <a class="prod-modal-btn ss_btn my-4">Məhsula bax </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

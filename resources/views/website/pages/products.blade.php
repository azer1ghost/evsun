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
            <div class="solar_blog_sidebar mb-3">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Axtar">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fal fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- <div class="filter-radio ">
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
            </div> -->
            <div class="solar_blog_sidebar mb-3">
                <div class="sidebar_category">
                    <h4>Kateqoriyalar</h4>
                    <ul>
                        <li>
                            <a href="http://evsun.test/blog/category-1">Kateqoriya 1</a><span>(20)</span>
                        </li>
                        <li>
                            <a href="http://evsun.test/blog/category-2">Kateqoriya 2</a><span>(76)</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="solar_blog_sidebar mb-3">
                <div class="filter-check">
                    <p class="filter-head"> Xüsusiyyətlər </p>
                    <ul>
                        @foreach($attributes as $attribute)
                        <li class="btn col-6">
                            <input type="checkbox" name="check" class="mr-3" />
                            {{$attribute->name}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-12">
                    <ul class="nav justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link active" style="color: gray" href="#"><i class="fal fa-long-arrow-right mr-1"></i> <strong>342</strong> items avaliable</a>
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
                            <img src="{!!asset(Voyager::image(json_decode($product->images[0])))!!}" />
                            <p>{{str_limit($product->getAttribute('name'), 20)}}
                                <span>{{$product->category->name}}</span>
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
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="prod-modal-image">
                            <img src="https://tesla-cdn.thron.com/delivery/public/image/tesla/088d64b2-afcc-43c6-9fa1-8f37e567a3d0/bvlatuR/std/2880x2400/desktop_model_3_v2" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="prod-page-main">
                            <div class="prod-page-name">
                                <h1>Productun adi bura </h1>
                                <p> Kateqoriya:<span>Productun kateqoriyasi bura </span></p>
                            </div>
                            <div class="prod-page-details">
                                <p class="prod-page-details-head">Xüsusiyyətləri</p>
                                <ul>
                                    <li>
                                        <p> Prod detail 1 </p>
                                    </li>
                                    <li>
                                        <p> Prod detail 1 </p>
                                    </li>
                                    <li>
                                        <p> Prod detail 1 </p>
                                    </li>
                                    <li>
                                        <p> Prod detail 1 </p>
                                    </li>
                                </ul>
                            </div>

                            <div class="prod-page-btn">
                                <a class="prod-modal-btn ss_btn my-4">Əlaqə saxla </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@if(meta('products')->get('show_contact'))
    @include('website.components.contact')
@endif
@endsection

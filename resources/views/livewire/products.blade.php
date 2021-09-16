<div class="container-fluid py-5">

    <div class="row">
        <div class="col-lg-3">
            <div class="filter-sec">Filter</div>
            <div class="solar_blog_sidebar mb-3">
                <div class="input-group mb-3">
                    <input type="text" wire:model.lazy="search" class="form-control" placeholder="@lang('static.search')">
                    <div class="input-group-append">
                        <a href="{{route('products')}}" class="btn btn-outline-secondary" type="button">
                            <i class="fal fa-times"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="solar_blog_sidebar mb-3">
                <div class="sidebar_category">
                    <h4>@lang('static.categories')</h4>
                    <ul>
                        @foreach($categories as $category)
                        <li>
                            <a href="{{route('products', ['category' => $category->id])}}"> {{$category->getTranslatedAttribute('name')}}</a><span>({{$category->products_count}})</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="solar_blog_sidebar mb-3">
                <div class="filter-check row">
                   <div class="col-12">
                       <p class="filter-head"> @lang('static.features') </p>
                   </div>
                    @foreach($attributes as $attribute)
                    <div class="form-group col-6">
                        <label for="attribute_{{$attribute->getAttribute('id')}}">{{$attribute->getTranslatedAttribute('name')}}</label>
                        <select wire:model="filters.{{$attribute->getTranslatedAttribute('key')}}" class="form-control" id="attribute_{{$attribute->getAttribute('id')}}">
                            <option value="" selected>@lang('static.notSelected')</option>
                            @foreach($attribute->getRelationValue('products') as $product)
                            <option>{{$product->pivot->value}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-12">
                    <ul class="nav justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link active" style="color: gray" href="#"><i class="fal fa-long-arrow-right mr-1"></i> <strong>{{$products->total()}}</strong> @lang('static.available')</a>
                        </li>
                        <li class="nav-item">
                            <select name="hard-select" class="form-control">
                                <option value="">Hard filter</option>
                                <option value="">First</option>
                                <option value="">Second</option>
                                <option value="">Third</option>
                            </select>
                        </li>
                    </ul>
                </div>
                @forelse($products as $product)
                    <div class="col-xl-3 col-lg-4 col-12 col-md-4 py-3">
                        <div class="product-itm">
                            <a href="{{route('product', $product->getAttribute('serial'))}}">
                                <img src="{!! asset( Voyager::image(json_decode($product->images)[0]) ) !!}" />
                                <p>{{str_limit($product->getTranslatedAttribute('name'), 50)}}
                                    <span>{{$product->category->getTranslatedAttribute('name')}}</span>
                                </p>
                            </a>
                            <div class="prod-actions">
                                <a data-toggle="modal" data-target="#quickView" wire:click.prevent="$emit('showModal', '{{$product->id }}')" class="prod-view" href="#"><i class="fas fa-search"></i> </a>
                                <a class="prod-link" href="{{route('product', $product->getAttribute('serial'))}}"><i class="fas fa-link"></i> </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 py-3 text-center">
                        <p>@lang('static.noProduct')</p>
                    </div>
                @endforelse
                <div class="col-12 py-3 text-center">
                @if($products->count() && $products->hasMorePages())
                    <button class="btn btn-outline-primary" wire:click.prevent="loadMore">@lang('static.loadMore')</button>
                @else
                    <p>@lang('static.thatAll')</p>
                @endif
                </div>
            </div>
        </div>
    </div>

    @livewire('quick-view')

</div>

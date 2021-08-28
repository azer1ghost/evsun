@extends('website.layouts.main')

@php
    $meta = meta('blog');
@endphp

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))
@section('keywords', $meta->get('meta_keywords'))

@section('styles')
    @livewireStyles
@endsection

@section('scripts')
    @livewireScripts
@endsection

@section('content')

    @include('website.components.breadcrumb', ['image' => $meta->image(), 'links' =>  [route('blog') => meta('blog')->get('title')]])

    <!-- Blog Page Area Start -->
    <div class="solar_blog_section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @forelse($posts as $post)
                    <div class="solar_blog_post">
                        <div class="solar_post_img post-slide2">
                            <img src="{!!asset(Voyager::image($post->image))!!}" alt="{{$post->title}}"/>
                            <div class="post-date">
                                <span class="date">{{$post->created_at->format('d')}}</span>
                                <span class="month">{{$post->created_at->monthName }}</span>
                            </div>
                        </div>
                        <div class="post-slide2 solar_post_detail">
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{route('post', $post)}}"> {{$post->getTranslatedAttribute('title')}}</a>
                                </h3>
                                <p class="post-description">
                                    {{$post->getTranslatedAttribute('excerpt')}}
                                </p>
                                <ul class="post-bar">
                                    <li>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$post->view_count ?? 0}}</a>
                                    </li>
                                </ul>
                                <a href="{{route('post', $post)}}" class="read-more">Ətraflı</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="solar_blog_post">
                        <div class="post-slide2 solar_post_detail p-5 m-5">
                            <h3 class="text-muted text-center">Hazırda bu kateqoriya altında paylaşım yoxdur.</h3>
                        </div>
                    </div>
                    @endforelse
                    <div class="solar_blog_post">
                        <div class="ml-3 mt-5 mb-5">
                        {{ $posts->links() }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <x-blog-sidebar/>
                </div>
            </div>
        </div>
    </div>
    <!-- blog Page Area End -->
@endsection

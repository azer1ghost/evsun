@extends('website.layouts.main')

@section('title', $post->getTranslatedAttribute('seo_title'))
@section('description', $post->getTranslatedAttribute('meta_description'))
@section('keywords', $post->getTranslatedAttribute('meta_keywords'))

@section('styles')
    @livewireStyles
@endsection

@section('scripts')
    @livewireScripts
@endsection

@section('content')
    @include('website.components.breadcrumb', ['image' => meta('blog')->image(), 'links' =>  [route('blog') => "Blog", $post->getTranslatedAttribute('title')]])
    <div class="solar_blog_section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="solar_blog_post">
                        <div class="solar_post_img post-slide2">
                            <img src="{!!asset(Voyager::image($post->image))!!}" alt="{{$post->getTranslatedAttribute('title')}}" />
                            <div class="post-date">
                                <span class="date">{{$post->created_at->format('d')}}</span>
                                <span class="month">{{$post->created_at->monthName}}</span>
                            </div>
                        </div>
                        <div class="post-slide2 solar_post_detail">
                            <div class="post-content">
                                <h3 class="post-title">
                                    <p>{{$post->getTranslatedAttribute('title')}}</p>
                                </h3>
                                <p class="post-description">
                                    <blackquote>
                                        {{$post->getTranslatedAttribute('excerpt')}}
                                    </blackquote>
                                    {!! $post->getTranslatedAttribute('body') !!}
                                </p>
                                <ul class="post-bar">
                                    <li>
                                        <a href="{{route('blog', $post->category)}}">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            {{optional($post->category)->getTranslatedAttribute('name') ?? "Katerqoriyasız"}}
                                        </a>
                                        <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>{{$post->view_count ?? 0}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                   <x-blog-sidebar/>
                </div>
            </div>
        </div>
    </div>
@endsection

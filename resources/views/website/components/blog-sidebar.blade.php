<div class="solar_blog_sidebar">
    <div class="sl_search_btn">
        <h4>@lang('static.search_in_blog')</h4>
        @livewire('search-posts')
    </div>
</div>
<div class="solar_blog_sidebar">
    <div class="sl_search_btn">
        <h4>@lang('static.blog_posts')</h4>
        @foreach($posts as $post)
            <div class="solar_list_post">
                <div class="solar_list_img">
                    <a href="{{route('post', $post)}}">
                        <img width="100px" src="{!!asset(Voyager::image($post->image))!!}" alt="{{$post->title}}" />
                    </a>
                </div>
                <div class="solar_listing">
                    <p>{{$post->created_at->format('d, F, Y')}}</p>
                    <a href="{{route('post', $post)}}">{{str_limit($post->getTranslatedAttribute('title'), 20)}}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="solar_blog_sidebar">
    <div class="sidebar_category">
        <h4>@lang('static.categories')</h4>
        <ul>
            @foreach($categories as $category)
            <li>
                <a href="{{route('blog', $category)}}">{{$category->getTranslatedAttribute('name')}}</a><span>({{$category->posts_count}})</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>

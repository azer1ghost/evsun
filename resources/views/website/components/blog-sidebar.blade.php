<div class="solar_blog_sidebar">
    <div class="sl_search_btn">
        <h4>Search Here</h4>
        @livewire('search-posts')
    </div>
</div>
<div class="solar_blog_sidebar">
    <div class="sl_search_btn">
        <h4>Blog post</h4>
        @foreach($posts as $post)
            <div href="{{route('post', $post)}}" class="solar_list_post">
                <div class="solar_list_img">
                    <img width="100px" src="{!!asset(Voyager::image($post->image))!!}" alt="{{$post->title}}" />
                </div>
                <div class="solar_listing">
                    <p>{{$post->created_at->format('d, F, Y')}}</p>
                    <a href="javascript:;">{{str_limit($post->getTranslatedAttribute('title'), 20)}}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="solar_blog_sidebar">
    <div class="sidebar_category">
        <h4>Categories</h4>
        <ul>
            @foreach($categories as $category)
            <li>
                <a href="{{route('blog', $category)}}">{{$category->getTranslatedAttribute('name')}}</a><span>({{$category->posts_count}})</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>

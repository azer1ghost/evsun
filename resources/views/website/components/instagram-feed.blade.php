<section class="insta_posts my-5">
    <div class="container">
        <h3 class="ss_h3_center text-center">@lang('static.instagram_posts')</h3>
        <div class="row">
            <div class="col-lg-6 col-12">
                @php($first_post = array_shift($instagram_posts))
                <a href="{{$first_post['permalink']}}" target="_blank" class="insta-post">
                    <div class="insta-cover"></div>
                    <i @class([
                                'fal',
                                'fa-link' => !$first_post['is_carousel'],
                                'fa-images'=> $first_post['is_carousel']
                                ])></i>
                    <img class="insta-icon" src="{{asset('assets/images/svg/insta.svg')}}" />
                    <img src="{{$first_post['url']}}"/>
                </a>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    @foreach($instagram_posts as $feed_post)
                    <div class="col-6">
                        <a href="{{$feed_post['permalink']}}" target="_blank" class="insta-post">
                            <div class="insta-cover"></div>
                            <i @class([
                                    'fal',
                                    'fa-link' => !$feed_post['is_carousel'],
                                    'fa-images'=> $feed_post['is_carousel']
                                    ])></i>
                            <img class="insta-icon" src="{{asset('assets/images/svg/insta.svg')}}" />
                            <img src="{{$feed_post['url']}}"/>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

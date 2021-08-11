<?php

namespace App\View\Components;

use Cache;
use Dymantic\InstagramFeed\Profile;
use Illuminate\View\Component;

class InstagramFeed extends Component
{
    public $instagram_posts;

    public function __construct()
    {
       // Cache::forget('instagram_feed_cache_time');

        $cache_time = Cache::remember("instagram_feed_cache_time", config('cache.instagram_feed_time'), function (){
            return now();
        });

        if($cache_time->diff(now())->d >= 1){
            $this->instagram_posts = Profile::find(1)->refreshFeed(5)->toArray();
        }else{
            $this->instagram_posts = Profile::find(1)->feed(5)->toArray();
        }

    }

    public function render()
    {
        return view('website.components.instagram-feed');
    }
}

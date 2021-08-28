<?php

namespace App\View\Components;

use Cache;
use Dymantic\InstagramFeed\Profile;
use Illuminate\View\Component;

class InstagramFeed extends Component
{
    public $instagram_posts = null;

    public function __construct()
    {
       // Cache::forget('instagram_feed_cache_time');

        $cache_time = Cache::remember("instagram_feed_cache_time", config('cache.instagram_feed_time'), function (){
            return now();
        });

        $instagram = Profile::find(1);

        if ($instagram){
            $instagram_posts = ($cache_time->diff(now())->d >= 1) ?
                $instagram->refreshFeed(5) :
                $instagram->feed(5);

            $this->instagram_posts = $instagram_posts->toArray();
        }

    }

    public function render()
    {
        if ($this->instagram_posts){
            return view('website.components.instagram-feed');
        } else {
            return "<h2 class='text-center text-danger border border-danger'>Please confirm your Instagram Account</h2>";
        }
    }
}

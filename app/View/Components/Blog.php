<?php

namespace App\View\Components;

use Cache;
use Illuminate\View\Component;
use TCG\Voyager\Models\Post;

class Blog extends Component
{
    public $posts;

    public function __construct()
    {
        $this->posts = Cache::remember("posts_homepage", config('cache.timeout'), function (){
            return Post::select(['id','title','slug','excerpt','image','created_at'])->published()->latest()->limit(4)->get();
        });
    }

    public function render()
    {
        return view('website.components.blog');
    }
}

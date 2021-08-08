<?php

namespace App\View\Components;

use Illuminate\View\Component;
use TCG\Voyager\Models\Post;

class Blog extends Component
{
    public $posts;

    public function __construct()
    {
        $this->posts = Post::select(['id','title','slug','excerpt','image','created_at'])->published()->latest()->limit(3)->get();
    }

    public function render()
    {
        return view('website.components.blog');
    }
}

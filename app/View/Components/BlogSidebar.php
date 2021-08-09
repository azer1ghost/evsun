<?php

namespace App\View\Components;

use Illuminate\View\Component;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class BlogSidebar extends Component
{
    public $categories;
    public $posts;

    public function __construct()
    {
        $this->categories = Category::withCount('posts')->get();
        $this->posts = Post::select(['id','title','slug','excerpt','image','created_at'])->published()->latest()->limit(3)->get();
    }

    public function render()
    {
        return view('website.components.blog-sidebar');
    }
}

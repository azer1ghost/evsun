<?php

namespace App\View\Components;

use Illuminate\View\Component;
use TCG\Voyager\Models\Category;

class BlogSidebar extends Component
{
    public $categories;

    public function __construct()
    {
        $this->categories = Category::withCount('posts')->get();
    }

    public function render()
    {
        return view('website.components.blog-sidebar');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use TCG\Voyager\Models\Post;

class SearchPosts extends Component
{
    public $query;
    public $posts;

    public function selectPost()
    {
       $this->redirect(route('posts', $posts['slug']));
    }

    public function updatedQuery()
    {
        $this->posts = Post::where('title', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.search-posts');
    }
}

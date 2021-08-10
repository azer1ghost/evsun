<?php

namespace App\View\Components;

use Cache;
use Illuminate\View\Component;

class Solutions extends Component
{
    public $solutions;

    public function __construct()
    {
        $this->solutions = Cache::remember('footer_socials', config('cache.timeout'), function () {
            return \App\Models\Solution::active()->orderBy('ordering')->get();
        });
    }

    public function render()
    {
        return view('website.components.solutions');
    }
}

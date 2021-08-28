<?php

namespace App\View\Components;

use Cache;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Slider extends Component
{
    public $slides;

    public function __construct()
    {
        $this->slides = Cache::remember("homepage_slides", config('cache.timeout'), function (){
            return \App\Models\Slide::active()->orderBy('ordering')->get();
        });

    }

    public function render(): View
    {
        return view('website.components.slider');
    }
}

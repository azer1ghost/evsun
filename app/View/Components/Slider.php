<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Slider extends Component
{
    public $slides;

    public function __construct()
    {
        $this->slides = \App\Models\Slide::active()->orderBy('ordering')->get();
    }

    public function render(): View
    {
        return view('website.components.slider');
    }
}

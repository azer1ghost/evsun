<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Solutions extends Component
{
    public $solutions;

    public function __construct()
    {
        $this->solutions = \App\Models\Solution::active()->orderBy('ordering')->get();
    }

    public function render()
    {
        return view('website.components.solutions');
    }
}

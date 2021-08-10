<?php

namespace App\View\Components;

use App\Models\Social;
use Cache;
use Illuminate\View\Component;

class Socials extends Component
{
    public $socials;

    public function __construct()
    {
        $this->socials = Cache::remember('footer_socials', config('cache.timeout'), function () {
            return Social::active()->orderBy('ordering')->get();
        });
    }

    public function render()
    {
        return view('website.components.socials');
    }
}

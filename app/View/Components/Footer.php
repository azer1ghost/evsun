<?php

namespace App\View\Components;

use App\Models\Service;
use Cache;
use Illuminate\View\Component;

class Footer extends Component
{
    public $services;

    public function __construct()
    {
        $this->services = Cache::remember('services', 60*10, function () {
            return Service::select(['title', 'slug'])->active()->orderBy('ordering')->get();
        });
    }

    public function render()
    {
        return view('website.components.footer');
    }
}

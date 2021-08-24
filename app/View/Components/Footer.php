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
        $this->services = Cache::remember('footer_services', config('cache.timeout'), function () {
                return Service::select(['title', 'slug'])->active()->whereNull('service_id')->orderBy('ordering')->get();
        });
    }

    public function render()
    {
        return view('website.components.footer');
    }
}

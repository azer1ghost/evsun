<?php

namespace App\View\Components;

use App\Models\Service;
use App\Models\Solution;
use Cache;
use Illuminate\View\Component;

class Footer extends Component
{
    public $services;
    public $solutions;

    public function __construct()
    {
        $this->services =  Service::select(['title', 'slug'])->active()->where('in_menu', true)->orderBy('service_id')->orderBy('ordering')->get();

//        $this->services = Cache::remember('footer_services_'.app()->getLocale(), config('cache.timeout'), function () {
//            return Service::select(['title', 'slug'])->active()->where('in_menu', true)->orderBy('service_id')->orderBy('ordering')->get();
//        });

        $this->solutions = Cache::remember('footer_solutions_'.app()->getLocale(), config('cache.timeout'), function () {
            return Solution::select(['title', 'slug'])->active()->orderBy('ordering')->get();
        });
    }

    public function render()
    {
        return view('website.components.footer');
    }
}

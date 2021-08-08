<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Services extends Component
{
    public $services;

    public function __construct()
    {
        $this->services = \App\Models\Service::active()->orderBy('ordering')->get();
    }

    public function render()
    {
        return view('website.components.services');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;
use TCG\Voyager\Facades\Voyager;

class Breadcrumb extends Component
{
    public $title;
    public $image;

    public function __construct($title, $image = null)
    {
        $this->title = $title;
        $this->image = $image ? Voyager::image($image) : "assets/img/breadcromb.jpg";
    }

    public function render()
    {
        return view('website.components.breadcrumb');
    }
}

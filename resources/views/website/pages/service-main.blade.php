@extends('website.layouts.main')

@section('title', $service->getTranslatedAttribute('meta_title'))
@section('description', $service->getTranslatedAttribute('meta_description'))
@section('keywords', $service->getTranslatedAttribute('meta_keywords'))

@section('content')

@if(true)
@include('website.components.breadcrumb', ['image' => $service->image, 'links' => [route('services') => meta('services')->get('title'), $service->getTranslatedAttribute('title') ]])
@endif


<div class="container-heller m-5 p-5">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="heller-left">
                <div class="heller-img-left">
                    <img src="http://efuel.like-themes.com/wp-content/uploads/2018/08/slider-flowing.jpg" />
                </div>
                <div class="d-block">
                    <h1>EV-Charging points
                        for your business </h1>
                    <p>Fusce ac justo ligula. Pellentesque ac metus a turpis bibendum scelerisque. Pellentesque ac orci eget urna vestibulum consequat rutrum vitae pu</p>
                    <button class="heller-btn">
                        <p>Get Charging</p>
                    </button>
                </div>
            </div>

        </div>
        <div class="col-lg-6 col-12">
            <div class="heller-img">
                <img src="http://efuel.like-themes.com/wp-content/uploads/2018/08/slider-car-full.jpg" />
            </div>
        </div>
    </div>
</div>

<div class="heller-alt-container">
    <div class="container-fluid">
        <h1 class="text-center mb-2">Heller heading</h1>
        <h3 class="ss_h3_center text-center">Heller list</h3>
        <div class="heler-alt-content pt-5">
            <div class="row">
                <div class="col-lg-4 col-12 col-md-6">
                    <div class="heller-list-left">
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <span> 01 </span>
                                        <h2>Yuksek keyfiyyet</h2>
                                    </div>
                                    <p>Sed sed condimentum massa. Morbi auctor vestibulum urna, ut interdum.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <span> 02 </span>
                                        <h2>Yuksek keyfiyyet</h2>
                                    </div>
                                    <p>Sed sed condimentum massa. Morbi auctor vestibulum urna, ut interdum.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <span> 02 </span>
                                        <h2>Yuksek keyfiyyet</h2>
                                    </div>
                                    <p>Sed sed condimentum massa. Morbi auctor vestibulum urna, ut interdum.</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-md-6 heller-alt-img-div">
                    <img class="heller-alt-img" src="http://efuel.like-themes.com/wp-content/uploads/2018/08/advantage-1-1.png" />
                    <img width="100%" src="http://efuel.like-themes.com/wp-content/uploads/2018/08/advantage-bg.png" srcset="http://efuel.like-themes.com/wp-content/uploads/2018/08/advantage-bg.png 568w, http://efuel.like-themes.com/wp-content/uploads/2018/08/advantage-bg-150x150.png 150w, http://efuel.like-themes.com/wp-content/uploads/2018/08/advantage-bg-300x300.png 300w, http://efuel.like-themes.com/wp-content/uploads/2018/08/advantage-bg-340x340.png 340w, http://efuel.like-themes.com/wp-content/uploads/2018/08/advantage-bg-100x100.png 100w, http://efuel.like-themes.com/wp-content/uploads/2018/08/advantage-bg-24x24.png 24w, http://efuel.like-themes.com/wp-content/uploads/2018/08/advantage-bg-48x48.png 48w, http://efuel.like-themes.com/wp-content/uploads/2018/08/advantage-bg-96x96.png 96w, http://efuel.like-themes.com/wp-content/uploads/2018/08/advantage-bg-58x58.png 58w" sizes="(max-width: 568px) 100vw, 568px">
                </div>
                <div class="col-lg-4 col-12 col-md-6">
                    <div class="heller-list-right">
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <span> 01 </span>
                                        <h2>Yuksek keyfiyyet</h2>
                                    </div>
                                    <p>Sed sed condimentum massa. Morbi auctor vestibulum urna, ut interdum.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <span> 02 </span>
                                        <h2>Yuksek keyfiyyet</h2>
                                    </div>
                                    <p>Sed sed condimentum massa. Morbi auctor vestibulum urna, ut interdum.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <span> 02 </span>
                                        <h2>Yuksek keyfiyyet</h2>
                                    </div>
                                    <p>Sed sed condimentum massa. Morbi auctor vestibulum urna, ut interdum.</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
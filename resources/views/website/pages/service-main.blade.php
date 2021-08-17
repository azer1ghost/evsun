@extends('website.layouts.main')

@section('title', $service->getTranslatedAttribute('meta_title'))
@section('description', $service->getTranslatedAttribute('meta_description'))
@section('keywords', $service->getTranslatedAttribute('meta_keywords'))

@section('styles')
    <style>

    </style>
@endsection

@section('scripts')
    <script>

    </script>
@endsection


@section('content')

    @if(false)
        @include('website.components.breadcrumb', ['image' => $service->image, 'links' => [route('services') => meta('services')->get('title'), $service->getTranslatedAttribute('title') ]])
    @endif


    <div class="container-heller m-5 p-5">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="heller-left">
                    <div class="heller-img-left">
                        <img src="{{asset('assets/images/slider-flowing.jpg')}}"/>
                    </div>
                    <div class="d-block">
                        <h1>EV-Charging points
                            for your business </h1>
                        <p>Fusce ac justo ligula. Pellentesque ac metus a turpis bibendum scelerisque. Pellentesque ac
                            orci eget urna vestibulum consequat rutrum vitae pu</p>
                        <button class="heller-btn">
                            <p>Get Charging</p>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="heller-img">
                    <img src="{{asset('assets/images/slider-car-full.jpg')}}"/>
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
                        <div data-aos-delay="300" data-aos-duration="800" data-aos="fade-right"
                             class="heller-list-left">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <span> <i class="fas fa-charging-station"></i> </span>
                                            <h2>Yuksek keyfiyyet</h2>
                                        </div>
                                        <p>Sed sed condimentum massa. Morbi auctor vestibulum urna, ut interdum.</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <span> <i class="fas fa-radiation-alt"></i> </span>
                                            <h2>Yuksek keyfiyyet</h2>
                                        </div>
                                        <p>Sed sed condimentum massa. Morbi auctor vestibulum urna, ut interdum.</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <span> <i class="fas fa-charging-station"></i> </span>
                                            <h2>Yuksek keyfiyyet</h2>
                                        </div>
                                        <p>Sed sed condimentum massa. Morbi auctor vestibulum urna, ut interdum.</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div data-aos-delay="300" data-aos-duration="800" data-aos="zoom-in"
                         class="col-lg-4 col-12 col-md-6 heller-alt-img-div">
                        <img class="heller-alt-img" src="{{asset('assets/images/advantage-1-1.png')}}"/>
                        <img width="100%" src="{{asset('assets/images/advantage-bg.png')}}">
                    </div>
                    <div data-aos-delay="300" data-aos-duration="800" data-aos="fade-left"
                         class="col-lg-4 col-12 col-md-6">
                        <div class="heller-list-right">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <span> <i class="fas fa-charging-station"></i> </span>
                                            <h2>Yuksek keyfiyyet</h2>
                                        </div>
                                        <p>Sed sed condimentum massa. Morbi auctor vestibulum urna, ut interdum.</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <span> <i class="fas fa-charging-station"></i> </span>
                                            <h2>Yuksek keyfiyyet</h2>
                                        </div>
                                        <p>Sed sed condimentum massa. Morbi auctor vestibulum urna, ut interdum.</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <span> <i class="fas fa-charging-station"></i> </span>
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

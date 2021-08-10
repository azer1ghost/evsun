

<section class="ss_section_footer">
    <!--===== Section Footer Start =====-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="ss_foot_sec">
                    <a class="d-flex justify-content-center" href="{{route('homepage')}}"><img class="img-fluid" src="{{asset(Voyager::image(setting('site.footer_logo')))}}" alt="logo" /></a>
                    <p class="text-center">{{setting('site.description')}}</p>
                    <ul class="social_share text-center">
                      <x-socials/>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="ss_foot_sec">
                    <h2 class="ss_foot_head text-center">Services</h2>
                    <ul class="text-center">
                        @foreach($services as $service)
                        <li><a href="{{route('service', $service)}}"><i class="fa fa-angle-double-right"></i>  {{$service->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="ss_foot_sec">
                    <h2 class="ss_foot_head text-center">Company</h2>
                    <ul class="text-center">
                        @foreach(menu('website', '_json') as $fast_menu)
                            <li><a href="{{$fast_menu->link()}}"><i class="fa fa-angle-double-right"></i> {{$fast_menu->getTranslatedAttribute('title')}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="ss_foot_sec">
                    <h2 class="ss_foot_head text-center">Contact Us</h2>
                    <ul class="text-center">
                        <li>Address : {{setting('site.address')}}</li>
                        <li>{{setting('site.address_additional')}}</li>
                        <li>Email : {{setting('site.mail')}}</li>
                        <li>Phone : {{setting('site.phone')}}</li>
                        <li>Mobile : {{setting('site.mobile')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== Section Footer End =====-->
<div class="ss_copywrite">
    <p>&copy Copyright 2020, All right reserved by <a href="{{route('homepage')}}">{{config('app.name')}}</a></p>
</div>

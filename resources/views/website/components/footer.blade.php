

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
                    <h2 class="ss_foot_head text-left">@lang('static.solutions')</h2>
                    <ul class="text-left">
                        @foreach($services as $service)
                        <li><a href="{{route('service', $service)}}"><i class="fa fa-angle-double-right"></i>  {{$service->getTranslatedAttribute('title')}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="ss_foot_sec">
                    <h2 class="ss_foot_head text-left">@lang('static.services')</h2>
                    <ul class="text-left">
                        @foreach($solutions as $solution)
                            <li><a href="{{route('solution', $solution)}}"><i class="fa fa-angle-double-right"></i> {{$solution->getTranslatedAttribute('title')}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="ss_foot_sec">
                    <h2 class="ss_foot_head text-center">@lang('static.contact_us')</h2>
                    <ul class="text-center">
                        <li>@lang('static.address') : {{setting('site.address')}}</li>
                        <li>{{setting('site.address_additional')}}</li>
                        <li>@lang('static.email') : {{setting('site.mail')}}</li>
                        <li>@lang('static.phone') : {{setting('site.phone')}}</li>
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

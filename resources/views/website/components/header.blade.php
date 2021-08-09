<section class="ss_index_one">
    <!--===== Section One Start =====-->
    <div class="container-fluid">
        <div class="ss_header">
            <!--===== Top Menu =====-->
            <div class="ss_logo">
                <a href="{{route('homepage')}}"><img class="img-fluid" src="{{asset(Voyager::image(setting('site.logo')))}}" alt="{{config('app.name')}}" /></a>
            </div>
            <div class="stellarnav">
                {!! menu('website', 'website.components.menu') !!}
            </div>
        </div>
        <div class="evsun-lang">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">
                    <span class="flag-icon flag-icon-{{(session()->get('locale') ?? 'en') == 'en' ? 'gb' : session()->get('locale')}}"></span>
                      {{ucfirst(session()->get('locale') ?? 'en')}}
                </button>
                <div id="languageSelector" class="dropdown-content">
                    @foreach(config('voyager.multilingual.locales') as $lang)
                        <a class="dropdown-item" href="{{route('locale', $lang)}}"><span class="flag-icon flag-icon-{{$lang == 'en' ? 'gb' : $lang}}"></span> {{ucfirst($lang)}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

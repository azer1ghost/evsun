<!-- Slider Area Start -->
<section class="main-carousel">
    <div class="main-carousel-wrapper">
        <div class="owl-carousel owl-theme">
            @foreach($slides as $slide)
            <div class="carousel-div">
                <div class="carousel-dontent">
                    <div class="main-carousel-text">
                        <h1>{{$slide->getTranslatedAttribute('title')}}</h1>
                        <p>{{$slide->getTranslatedAttribute('text')}}</p>
                        <a href="{{$slide->btnUrl}}" class="ss_btn mt-4">{{$slide->getTranslatedAttribute('btnText')}}</a>
                    </div>
                </div>
                <img src="{!!asset(Voyager::image($slide->image))!!}" alt="{{$slide->getTranslatedAttribute('title')}}" />
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Slider Area End -->



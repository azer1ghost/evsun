<section class="ss_section_two spacer_top">
    <!--===== Section Two Start =====-->
    @php
        $meta = meta('solutions', ['heading']);
    @endphp
    <h3 class="ss_h3_center text-center">{{$meta->get('title')}}</h3>
    <h1 class="text-center mb-5">{{$meta->get('heading')}}</h1>
    <div class="container-fluid">
        <div class="ss_two">
            <div class="row">
                @foreach($solutions as $solution)
                <a href="{{route('solution', $solution)}}" class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ss_two_sec wow fadeIn" data-aos="fade-up">
                        <i class="{{$solution->icon}} fa-3x text-dark"></i>
                        <h2>{{str_limit($solution->getTranslatedAttribute('title'), 20)}}</h2>
                        <p>{{str_limit($solution->getTranslatedAttribute('meta_description'), 20)}}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--===== Section Two End =====-->

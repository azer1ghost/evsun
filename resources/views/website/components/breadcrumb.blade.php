<div class="ss_breadcrumb text-center" style="background-image: url('{!!asset(Voyager::image($image))!!}'); background-repeat: no-repeat; background-size: 100%">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>{{array_first($links)}}</h1>
                <ul>
                    <li>
                        <a href="{{route('homepage')}}">Ana səhifə</a>
                        @foreach($links as $link => $title)
                            / <a href="{{$link ?: "javascript:void(0)"}}">{{$title}}</a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

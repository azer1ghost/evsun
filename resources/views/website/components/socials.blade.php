@foreach($socials as $social)
    <li><a href="{{$social->link}}"><i class="fab fa-2x fa-{{$social->name}}"></i></a></li>
@endforeach

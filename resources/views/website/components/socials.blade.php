@foreach($socials as $social)
    <li><a href="{{$social->getAttribute('link')}}"><i class="fab fa-2x fa-{{$social->getAttribute('name')}}"></i></a></li>
@endforeach

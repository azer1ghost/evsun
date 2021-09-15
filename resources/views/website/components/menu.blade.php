<ul>
    @php
        if (Voyager::translatable($items)) {
            $items = $items->load('translations');
        }
    @endphp

    @foreach ($items as $item)

        @php

            $originalItem = $item;
            if (Voyager::translatable($item)) {
                $item = $item->translate($options->locale);
            }

            $isActive = null;
            $styles = null;
            $icon = null;

            // Background Color or Color
            if (isset($options->color) && $options->color == true) {
                $styles = 'color:'.$item->color;
            }
            if (isset($options->background) && $options->background == true) {
                $styles = 'background-color:'.$item->color;
            }

            // Check if link is current
            if(url($item->link()) == url()->current()){
                $isActive = 'active';
            }

            // Set Icon
            if(isset($options->icon) && $options->icon == true){
                $icon = '<i class="' . $item->icon_class . '"></i>';
            }
        @endphp
        @if($item->status)
            <li class="{{ $isActive }} @if(!$originalItem->children->isEmpty() || $item->route == "services" || $item->route == "solutions") drop-left @endif">
                <a href="{{ url($item->link()) }}" target="{{ $item->target }}" >
                    {!! $icon !!}
                    {{ $item->title }}
                </a>

                @if($item->route == "services" || $item->route == "solutions")
                    <ul>
                       @foreach(('App\Models\\'.ucfirst(substr($item->route, 0, -1)))::select('id','title', 'slug', 'ordering')->where('in_menu', true)->orderBy('ordering')->get() as $data)
                            <li class="{{ $isActive }}">
                                <a href="{{ route(substr($item->route, 0, -1), $data->slug) }}">{{$data->title}}</a>
                            </li>
                       @endforeach
                    </ul>
                @endif

                @if(!$originalItem->children->isEmpty())
                    @include('website.components.menu', ['items' => $originalItem->children, 'options' => $options])
                @endif
            </li>
        @endif
    @endforeach
</ul>

<div class="lesun-blog-right margin-top">
    <div class="lesun-blog-widget">
        <h3>Axtarış</h3>

        <input
            type="text"
            class="form-input"
            placeholder="Açar sözlər daxil edin..."
            wire:model="query"
            wire:keydown.enter="selectPost"
        />

        <ul class="list-group">
            @if(!empty($query))
                @if(!empty($posts))
                    @foreach($posts as $i => $post)
                        <a  class="list-group-item list-group-item-action" href="{{ route('post', $post['slug']) }}" >{{ $post['title'] }}</a>
                    @endforeach
                @else
                    <li class="list-group-item">Axtarışa uyğun nəticə tapılmadı</li>
                @endif
            @endif
        </ul>
    </div>

</div>

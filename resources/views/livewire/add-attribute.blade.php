<div class="col-md-12">
    @forelse($attributes as $index => $attribute)
        <table class="vw-100">
            <tr>
                <td style="width: 50vw; padding: 5px">
                    <input type="hidden" name="attributes[{{$index}}][id]" value="{{$attribute->id}}">
                    <select class="form-control" name="attributes[{{$index}}][key]">
                        @foreach($availableAttributes as $id => $attr)
                            <option @if($id == $attribute->id) selected @endif value="{{$id}}">{{$attr}}</option>
                        @endforeach
                    </select>
                </td>
                <td style="width: 48vw; padding: 5px">
                    <input class="form-control" type="text" name="attributes[{{$index}}][value]" value="{{$attribute->pivot->value}}">
                </td>
                <td style="width: 2vw; padding: 5px">
                    <button type="button" wire:click.prevent="removeAttribute({{$index}})" class="btn btn-danger">
                        <i class='fal fa-times'></i>
                    </button>
                </td>
            </tr>
        </table>
    @empty
        <div class="col-12">
            <p class="text-muted">No Social links</p>
        </div>
    @endforelse
    <div class="col-12">
        <button wire:click.prevent="addAttribute" style="width: 100%" type="button" class="btn btn-success">
            <i class='fal fa-2x fa-plus'></i>
        </button>
    </div>

</div>

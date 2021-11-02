<div>
    <div class="modal fade @if($show === true) show @endif" id="quickView" style="display: @if($show === true) block @else none @endif" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="prod-modal-image">
                            @if($product->images)
                                <img src="{!!asset(Voyager::image(json_decode(optional($product)->images)[0] ?? ''))!!}" />
                            @else
                                <img src="{{asset('assets/images/noimage.jpg')}}" />
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="prod-page-main">
                            <div class="prod-page-name">
                                <h1>{{optional($product)->getTranslatedAttribute('name')}} </h1>
                                <p> @lang('static.category'): <span>{{optional(optional($product)->getRelationValue('category'))->getTranslatedAttribute('name')}} </span></p>
                            </div>
                            <div class="prod-page-details">
                                <p class="prod-page-details-head">@lang('static.features')</p>
                                <ul>
                                    @foreach(optional($product)->getRelationValue('attributes') ?? [] as $attribute)
                                        <li>
                                            <p> {{$attribute->getTranslatedAttribute('name')}} : {{$attribute->pivot->value()->first()->getTranslatedAttribute('content')}} </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="prod-page-btn">
                                <a href="{{route('contact')}}" class="prod-modal-btn ss_btn my-4">@lang('static.contact_us')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ss_newsletter pb-4">
    <!--===== Section Newsletter Start =====-->
    <div class="container-fluid">
        <div class="ss_footer_news ss_box_bg">
            <div class="row">
                <div class="col-md-7">
                    <div class="ss_foot_news_one">
                        <h1>@lang('static.contact_us')</h1>
                        <p>@lang('static.contact_us_subtitle')</p>
                    </div>
                </div>
                <form class="col-md-5 align-self-center" method="POST" action="{{route('call.me')}}"> @csrf
                    <div class="ss_foot_news_one">
                        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" name="number" required placeholder="@lang('static.enter_number') Format: 055-333-33-33" />
                        <button type="submit" class="ss_btn">@lang('static.send')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!--===== Section Newsletter End =====-->

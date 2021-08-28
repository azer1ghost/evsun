<section class="ss_newsletter pb-4">
    <!--===== Section Newsletter Start =====-->
    <div class="container-fluid">
        <div class="ss_footer_news ss_box_bg">
            <div class="row">
                <div class="col-md-7">
                    <div class="ss_foot_news_one">
                        <h1>Bizimlə əlaqə</h1>
                        <p>Nömrənizi qeyd edin, sizə zəng edək</p>
                    </div>
                </div>
                <form class="col-md-5 align-self-center" method="POST" action="{{route('call.me')}}"> @csrf
                    <div class="ss_foot_news_one">
                        <input type="text" name="number" required placeholder="Nömrənizi daxil edin" />
                        <button type="submit" class="ss_btn">Göndər</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--===== Section Newsletter End =====-->

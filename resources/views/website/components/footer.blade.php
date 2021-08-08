<section class="ss_section_footer">
    <!--===== Section Footer Start =====-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="ss_foot_sec">
                    <a class="d-flex justify-content-center" href="index.html"><img class="img-fluid" src="assets/images/evsun.png" alt="logo" /></a>
                    <p class="text-center">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                    <ul class="social_share text-center">
                        @foreach($socials as $social)
                            <li><a href="{{$social->link}}"><i class="fab fa-2x fa-{{$social->name}}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="ss_foot_sec">
                    <h2 class="ss_foot_head text-center">Services</h2>
                    <ul class="text-center">
                        <li><a href="#"> Suppliers</a></li>
                        <li><a href="service.html"> Services</a></li>
                        <li><a href="trade-show.html"> Trade Show</a></li>
                        <li><a href="pv-industry.html"> Pv Industry</a></li>
                        <li><a href="contact.html"> Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="ss_foot_sec">
                    <h2 class="ss_foot_head text-center">Company</h2>
                    <ul class="text-center">
                        <li><a href="about.html"> About Us</a></li>
                        <li><a href="#"> Partners</a></li>
                        <li><a href="#"> Terms of Use</a></li>
                        <li><a href="#"> Privacy Policy</a></li>
                        <li><a href="#"> Help Center</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="ss_foot_sec">
                    <h2 class="ss_foot_head text-center">Contact Us</h2>
                    <ul class="text-center">
                        <li>Address : 297 Poor House Road Lumberton, NC 28358</li>
                        <li>Email : solar@example.com</li>
                        <li>Phone : 1800-589-652</li>
                        <li>Website : solarexample.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== Section Footer End =====-->
<div class="ss_copywrite">
    <p>&copy Copyright 2020, All right reserved by <a href="index.html">Evsun</a></p>
</div>

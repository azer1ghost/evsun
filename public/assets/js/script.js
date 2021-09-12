(function ($) {
    "use strict";
    var Solar = {
        initialised: false,
        version: 1.0,
        Solar: false,
        init: function () {
            if (!this.initialised) {
                this.initialised = true;
            } else {
                return;
            }

            // Functions Calling

            this.blog_slider();
            this.brands_slider();
            this.heller_slider();
            this.about_slider();
            this.prod_slider();
            this.testimonial_slider();
            this.ss_click();
            this.services_page_slider();
            this.ss_toggle();
            this.ss_checkout();
            this.ss_subMenu();
            this.ss_checkout_two();
            this.ss_checkout_three();
            this.Video_popup();
            this.s_graph();
            this.counter();
            this.counter_two();
            this.product();
        },

        //brands slider

        brands_slider: function () {
            var swiper = new Swiper(".section_brands .swiper-container", {
                slidesPerView: 5,
                spaceBetween: 30,
                speed: 1000,
                autoplay: {
                    delay: 2000,
                },
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                },
            });
        },
        prod_slider: function () {
            var swiper = new Swiper(".prod-page-slider .swiper-container", {
                slidesPerView: 5,
                spaceBetween: 30,
                speed: 1000,
                autoplay: {
                    delay: 2000,
                },
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        },
        services_page_slider: function () {
            var swiper = new Swiper(".services_page .swiper-container", {
                slidesPerView: 4,
                spaceBetween: 30,
                speed: 1000,
                autoplay: {
                    delay: 2000,
                },
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                },
            });
        },
        about_slider: function () {
            var swiper = new Swiper(".solar_aboutus_page .swiper-container", {
                slidesPerView: 1,
                spaceBetween: 30,
                speed: 3000,
                autoplay: {
                    delay: 2000,
                },
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                },
            });
        },
        // ---------------blog-----------------------------

        blog_slider: function () {
            var swiper = new Swiper(".ss_section_blog .swiper-container", {
                slidesPerView: 3,
                spaceBetween: 30,
                speed: 1000,
                autoplay: {
                    delay: 2000,
                },
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                },
            });
        },
        heller_slider: function () {
            var swiper = new Swiper(".heller-details .swiper-container", {
                slidesPerView: 4,
                spaceBetween: 30,
                speed: 1000,
                autoplay: {
                    delay: 2000,
                },
                loop: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                },
            });
        },
        // --------team----------
        testimonial_slider: function () {
            var swiper = new Swiper(".ss_testimonial .swiper-container", {
                slidesPerView: 1,
                spaceBetween: 30,
                speed: 1000,
                autoplay: {
                    delay: 2000,
                },
                loop: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        },
        // ---------search---------
        ss_click: function () {
            $(".ss_search_main").click(function (e) {
                e.stopPropagation();
                $(".ss_search_input").toggleClass("ss_open_search");
            });
            $("body").on("click", function () {
                $(".ss_search_input").removeClass("ss_open_search");
            });
            $(".ss_search_input").click(function (event) {
                event.stopPropagation();
            });
        },
        // --------menu bar----------
        ss_toggle: function () {
            $(".ss_menu_bar").on("click", function () {
                $(".ss_menu").toggleClass("ss_toggle");
            });
        },
        // --------checkout bar----------
        ss_checkout: function () {
            $(".show_c_one").on("click", function (e) {
                e.preventDefault();
                $(".show_cart_one").addClass("show_checkout_page");
            });
        },
        // --------checkout bar----------
        ss_checkout_two: function () {
            $(".show_c_two").on("click", function (e) {
                e.preventDefault();
                $(".show_cart_two").addClass("show_checkout_page");
            });
        },
        // --------checkout bar----------
        ss_checkout_three: function () {
            $(".show_c_three").on("click", function (e) {
                e.preventDefault();
                $(".show_cart_three").addClass("show_checkout_page");
            });
        },
        // --------checkout bar----------
        ss_subMenu: function () {
            $(".ss_menuP").on("click", function () {
                $(this).toggleClass("show_subMenu");
            });
        },
        // ---------video popup---------
        Video_popup: function () {
            $(".ss_about_img .ss_video_popup").magnificPopup({
                type: "iframe",
                iframe: {
                    patterns: {
                        youtube: {
                            index: "youtube.com/",
                            id: function (url) {
                                return url;
                            },
                            src: "%id%",
                        },
                        vimeo: {
                            index: "vimeo.com/",
                            id: function (url) {
                                return url;
                            },
                            src: "%id%",
                        },
                    },
                },
            });
        },

        // ---------graph---------

        s_graph: function () {
            if ($(".ss_about").length > 0) {
                // Graph Data
                var graphData = [
                    {
                        // Suppliers
                        data: [
                            [6, 1300],
                            [7, 1600],
                            [8, 1900],
                            [9, 2100],
                            [10, 2500],
                            [11, 2200],
                            [12, 2000],
                            [13, 1950],
                            [14, 1900],
                            [15, 2000],
                        ],
                        color: "#ad7cff",
                    },
                    {
                        // Seller
                        data: [
                            [6, 500],
                            [7, 600],
                            [8, 550],
                            [9, 600],
                            [10, 800],
                            [11, 900],
                            [12, 800],
                            [13, 850],
                            [14, 830],
                            [15, 1000],
                        ],
                        color: "#56dcf0",
                        points: { radius: 4, fillColor: "#fff" },
                    },
                ];

                // Lines Graph
                $.plot($("#graph-lines"), graphData, {
                    series: {
                        points: {
                            show: true,
                            radius: 5,
                        },
                        lines: {
                            show: true,
                        },
                        shadowSize: 0,
                    },
                    grid: {
                        color: "#646464",
                        borderColor: "transparent",
                        borderWidth: 20,
                        hoverable: true,
                    },
                    xaxis: {
                        tickColor: "transparent",
                        tickDecimals: 2,
                    },
                    yaxis: {
                        tickSize: 1000,
                    },
                });

                // Bars Graph
                $.plot($("#graph-bars"), graphData, {
                    series: {
                        bars: {
                            show: true,
                            barWidth: 0.9,
                            align: "center",
                        },
                        shadowSize: 0,
                    },
                    grid: {
                        color: "#646464",
                        borderColor: "transparent",
                        borderWidth: 20,
                        hoverable: true,
                    },
                    xaxis: {
                        tickColor: "transparent",
                        tickDecimals: 2,
                    },
                    yaxis: {
                        tickSize: 1000,
                    },
                });

                // Graph Toggle
                $("#graph-bars").hide();

                $("#lines").on("click", function (e) {
                    $("#bars").removeClass("active");
                    $("#graph-bars").fadeOut();
                    $(this).addClass("active");
                    $("#graph-lines").fadeIn();
                    e.preventDefault();
                });

                $("#bars").on("click", function (e) {
                    $("#lines").removeClass("active");
                    $("#graph-lines").fadeOut();
                    $(this).addClass("active");
                    $("#graph-bars").fadeIn().removeClass("hidden");
                    e.preventDefault();
                });

                // Tooltip
                function showTooltip(x, y, contents) {
                    $('<div id="tooltip">' + contents + "</div>")
                        .css({
                            top: y - 16,
                            left: x + 20,
                        })
                        .appendTo("body")
                        .fadeIn();
                }

                var previousPoint = null;

                $("#graph-lines, #graph-bars").bind(
                    "plothover",
                    function (event, pos, item) {
                        if (item) {
                            if (previousPoint != item.dataIndex) {
                                previousPoint = item.dataIndex;
                                $("#tooltip").remove();
                                var x = item.datapoint[0],
                                    y = item.datapoint[1];
                                showTooltip(
                                    item.pageX,
                                    item.pageY,
                                    y + " suppliers at " + x + ".00h"
                                );
                            }
                        } else {
                            $("#tooltip").remove();
                            previousPoint = null;
                        }
                    }
                );
            }
        },
        // --------counter----------
        counter: function () {
            if ($(".ss_about_counter").length > 0) {
                var a = 0;
                $(window).scroll(function () {
                    var oTop = $("#counter").offset().top - window.innerHeight;
                    if (a == 0 && $(window).scrollTop() > oTop) {
                        $(".counter-value").each(function () {
                            var $this = $(this),
                                countTo = $this.attr("data-count");
                            $({
                                countNum: $this.text(),
                            }).animate(
                                {
                                    countNum: countTo,
                                },

                                {
                                    duration: 5000,
                                    easing: "swing",
                                    step: function () {
                                        $this.text(Math.floor(this.countNum));
                                    },
                                    complete: function () {
                                        $this.text(this.countNum);
                                        //alert('finished');
                                    },
                                }
                            );
                        });
                        a = 1;
                    }
                });
            }
        },
        // --------counter----------
        counter_two: function () {
            if ($(".ss_pv_two_right").length > 0) {
                var a = 0;
                $(window).scroll(function () {
                    var oTop = $("#counter").offset().top - window.innerHeight;
                    if (a == 0 && $(window).scrollTop() > oTop) {
                        $(".counter-value").each(function () {
                            var $this = $(this),
                                countTo = $this.attr("data-count");
                            $({
                                countNum: $this.text(),
                            }).animate(
                                {
                                    countNum: countTo,
                                },

                                {
                                    duration: 5000,
                                    easing: "swing",
                                    step: function () {
                                        $this.text(Math.floor(this.countNum));
                                    },
                                    complete: function () {
                                        $this.text(this.countNum);
                                        //alert('finished');
                                    },
                                }
                            );
                        });
                        a = 1;
                    }
                });
            }
        },
        product: function () {
            $("#thumbs_img img").on("click", function () {
                $("#large_image").attr(
                    "src",
                    $(this).attr("src").replace("thumb", "large")
                );
                $("#thumbs_img ul li img.ss_active_bdr").removeClass(
                    "ss_active_bdr"
                );
                $(this).addClass("ss_active_bdr");
            });
        },
    };
    Solar.init();
})(jQuery);

new WOW().init();

// Contact Form Submission
function checkRequire(formId, targetResp) {
    targetResp.html("");
    var email =
        /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
    var url =
        /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
    var image = /\.(jpe?g|gif|png|PNG|JPE?G)$/;
    var mobile = /^[\s()+-]*([0-9][\s()+-]*){6,20}$/;
    var facebook = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
    var twitter = /^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/;
    var google_plus =
        /^(https?:\/\/)?(www\.)?plus.google.com\/[a-zA-Z0-9(\.\?)?]/;
    var check = 0;
    $("#er_msg").remove();
    var target = typeof formId == "object" ? $(formId) : $("#" + formId);
    target.find("input , textarea , select").each(function () {
        if ($(this).hasClass("require")) {
            if ($(this).val().trim() == "") {
                check = 1;
                $(this).focus();
                $(this).parent("div").addClass("form_error");
                targetResp.html("You missed out some fields.");
                $(this).addClass("error");
                return false;
            } else {
                $(this).removeClass("error");
                $(this).parent("div").removeClass("form_error");
            }
        }
        if ($(this).val().trim() != "") {
            var valid = $(this).attr("data-valid");
            if (typeof valid != "undefined") {
                if (!eval(valid).test($(this).val().trim())) {
                    $(this).addClass("error");
                    $(this).focus();
                    check = 1;
                    targetResp.html($(this).attr("data-error"));
                    return false;
                } else {
                    $(this).removeClass("error");
                }
            }
        }
    });
    return check;
}
$(".submitForm").on("click", function () {
    var _this = $(this);
    var targetForm = _this.closest("form");
    var errroTarget = targetForm.find(".response");
    var check = checkRequire(targetForm, errroTarget);

    if (check == 0) {
        var formDetail = new FormData(targetForm[0]);
        formDetail.append("form_type", _this.attr("form-type"));
        $.ajax({
            method: "post",
            url: "ajaxmail.php",
            data: formDetail,
            cache: false,
            contentType: false,
            processData: false,
        }).done(function (resp) {
            console.log(resp);
            if (resp == 1) {
                targetForm.find("input").val("");
                targetForm.find("textarea").val("");
                errroTarget.html(
                    '<p style="color:green;">Mail has been sent successfully.</p>'
                );
            } else {
                errroTarget.html(
                    '<p style="color:red;">Something went wrong please try again latter.</p>'
                );
            }
        });
    }
});



$(document).ready(function () {
    $(".main-carousel .owl-carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        animateOut: "fadeOut",
        margin: 0,
        responsiveClass: true,
        loop: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                loop: true,
            },
            600: {
                items: 1,
                nav: false,
                loop: true,
            },
            1000: {
                items: 1,
                nav: false,
                loop: true,
            },
        },
    });

    var header = document.querySelector(".ss_index_one");
    var toTop = document.querySelector(".ltx-go-top");

    if(! document.getElementsByClassName('ss_breadcrumb')[0]) {
        if (window.location.pathname != '/'){
            header.style.background = "#00000097";
            toTop.style.display = "block";
         }
    }

    window.addEventListener("scroll", function () {
        if (this.window.pageYOffset > 70) {
            header.style.background = "#00000097";
            toTop.style.display = "block";
        }
    });

    window.addEventListener("scroll", function () {
        if (this.window.pageYOffset < 70) {
            header.style.background = "transparent";
            toTop.style.display = "none";
        }
    });
});

$('#lngButton').on('click', function (e){
    document.getElementById("languageSelector").classList.toggle("show");
    e.stopPropagation()
})


window.onclick = function (event) {
    if (!event.target.matches(".dropbtn")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
};

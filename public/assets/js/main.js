!(function (e) {
    "use strict";
    var t = e(window);
    t.on("load", function () {
        var a = e(document),
            n = e("html, body"),
            o = e("body"),
            s = e(".loader-container"),
            i = e(".main-nav"),
            l = e(".drop-menu"),
            r = e(".counter");
        s.delay("500").fadeOut(2e3),
            a.on("click", ".hamburger", function () {
                e(this).toggleClass("is-active"), i.slideToggle();
            }),
            l
                .parent("li")
                .children("a")
                .append(function () {
                    return '<span class="drop-menu-toggle"><i class="far fa-angle-down"></i></span>';
                }),
            a.on("click", ".drop-menu-toggle", function () {
                var t = e(this);
                return (
                    t.toggleClass("active"),
                    t.parent().parent().siblings().children("a").find(".drop-menu-toggle").removeClass("active"),
                    t.parent().parent().children(".drop-menu").slideToggle(),
                    t.parent().parent().siblings().children(".drop-menu").slideUp(),
                    !1
                );
            }),
            t.on("resize", function () {
                t.width() > 991 ? (i.show(), l.show()) : (i.hide(), l.hide());
            }),
            t.on("scroll", function () {
                var a = e(".main-menu-header"),
                    n = e(".header-outer");
                t.scrollTop() > 100 ? (a.addClass("fixed-top"), o.css("padding-top", n.outerHeight() + "px")) : (a.removeClass("fixed-top"), o.css("padding-top", "0"));
                var s = e("#scroll-to-top");
                t.scrollTop() > 300 ? s.addClass("is-active") : s.removeClass("is-active");
            }),
            a.on("click", "#scroll-to-top", function () {
                return n.animate({ scrollTop: 0 }, 800), !1;
            });
        var c = e('[data-fancybox="preview-video"]'),
            d = e('[data-fancybox="about-video"]');
        c.length && c.fancybox(), d.length && d.fancybox(), r.length && r.counterUp({ delay: 20, time: 2e3 });
        var p = e(".client-logo-carousel");
        p.length && p.owlCarousel({ loop: !0, items: 5, nav: !1, dots: !1, smartSpeed: 500, autoplay: !0, responsive: { 0: { items: 1 }, 480: { items: 2 }, 991: { items: 3 }, 1280: { items: 5 } } });
        var u = e(".client-logo-carousel-2");
        u.length && u.owlCarousel({ loop: !0, items: 4, nav: !1, dots: !1, smartSpeed: 500, autoplay: !0, responsive: { 320: { items: 2 }, 481: { items: 3 }, 768: { items: 4 } } });
        var m = e(".client-testimonial");
        m.length && m.owlCarousel({ loop: !0, items: 1, nav: !1, dots: !0, smartSpeed: 500, autoplay: !1 });
        var g = e(".service-carousel");
        g.length && g.owlCarousel({ loop: !0, items: 3, nav: !1, dots: !0, smartSpeed: 700, autoplay: !1, margin: 0, responsive: { 0: { items: 1 }, 600: { items: 2 }, 992: { items: 3 } } });
        var v = e('[data-toggle="tooltip"]');
        v.length && v.tooltip();
        var f = e(".select-picker");
        f.length && f.selectpicker(),
            a.on("click", ".qtyDec, .qtyInc", function () {
                var t = e(this),
                    a = t.parent().find(".qtyInput").val();
                if (t.hasClass("qtyInc")) var n = parseFloat(a) + 1;
                else n = a > 0 ? parseFloat(a) - 1 : 0;
                t.parent().find(".qtyInput").val(n);
            });
        var h = e(".lazy");
        h.length && h.lazy();
        var y
            //C = document.querySelector("#send-message-btn"),
            //w = e(".contact-form"),
            //b = e(".alert-message");
        /* function x(e) {
            (C.innerHTML = "Send Message"),
                b.fadeIn().removeClass("alert-danger").addClass("alert-success"),
                b.text(e),
                setTimeout(function () {
                    b.fadeOut();
                }, 3e3),
                w.find('input:not([type="submit"]), textarea').val("");
        }
        function T(e) {
            (C.innerHTML = "Send Message"),
                b.fadeIn().removeClass("alert-success").addClass("alert-danger"),
                b.text(e.responseText),
                setTimeout(function () {
                    b.fadeOut();
                }, 3e3);
        }
        w.submit(function (t) {
            t.preventDefault(),
                (y = e(this).serialize()),
                (C.innerHTML = "Sending..."),
                setTimeout(function () {
                    e.ajax({ type: "POST", url: w.attr("action"), data: y })
                        .done(x)
                        .fail(T);
                }, 2e3);
        }),
            e(".toggle-password").on("click", function () {
                e(this).toggleClass("active");
                var t = e(".password-field");
                "password" === t.attr("type") ? t.attr("type", "text") : t.attr("type", "password");
            }); */
    });
})(jQuery);

$(window).scroll(function () {

    if ($(this).scrollTop() > 10) {

        $('#header').addClass('fixed');

    } else {

        $('#header').removeClass('fixed');

    }

})



//Feedback Slider

$(".feedback-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-arrow slick-prev"><i class="ri-arrow-left-line"></i></button>',
    nextArrow: '<button class="slick-arrow slick-next"><i class="ri-arrow-right-line"></i></button>',
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
        breakpoint: 1200,
        settings: {
            slidesToShow: 2
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 1
        }
    }]
});



var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;

document.getElementById('todayDate').innerHTML = today




// SELECT
$('#options').on('click','li', function(e) {

    $('#dropdown').click();

    var element = $(this).html();
    var img = $('img', element).attr('src');

    var val = "<img class='me-2' src='"+img+"'/>";
    $('#options-display').html(val + $(this).data('value') );

    // console.log($(this).data('value'));

});

$('#sell_option').on('click','li', function(e) {

    $('#sell_dropdown').click();

    var element = $(this).html();
    var img = $('img', element).attr('src');

    var val = "<img class='me-2' src='"+img+"'/>";
    $('#sell-display').html(val + $(this).data('value') );

    // console.log($(this).data('value'));

});

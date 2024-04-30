$(window).on("scroll", function (event) {
    var scrollValue = $(window).scrollTop();
    if (scrollValue > 70) {
        $(".header_menu").addClass("fixed-top animated slideInDown");
    } else {
        $(".header_menu").removeClass("fixed-top animated slideInDown");
    }
});
("use strict");
jQuery(document).ready(function () {
    var $slicknav_label;
    $(".responsive-menu").slicknav({
        duration: 500,
        easingOpen: "easeInExpo",
        easingClose: "easeOutExpo",
        closedSymbol: '<i class="fa fa-plus"></i>',
        openedSymbol: '<i class="fa fa-minus"></i>',
        prependTo: "#slicknav-mobile",
        allowParentLinks: true,
        label: "",
    });
    var $slicknav_label;
    $("#responsive-menu").slicknav({
        duration: 500,
        easingOpen: "easeInExpo",
        easingClose: "easeOutExpo",
        closedSymbol: '<i class="fa fa-plus"></i>',
        openedSymbol: '<i class="fa fa-minus"></i>',
        prependTo: "#slicknav-mobile",
        allowParentLinks: true,
        label: "",
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $(".navbar").addClass("navbar-sticky-in");
        } else {
            $(".navbar").removeClass("navbar-sticky-in");
        }
    });
    var selected = $("#navbar li");
    selected.on("mouseenter", function () {
        $(this)
            .find("ul")
            .first()
            .stop(true, true)
            .delay(350)
            .slideDown(500, "easeInOutQuad");
    });
    selected.on("mouseleave", function () {
        $(this)
            .find("ul")
            .first()
            .stop(true, true)
            .delay(100)
            .slideUp(150, "easeInOutQuad");
    });
    if ($(window).width() > 992) {
        $(".navbar-arrow ul ul > li")
            .has("ul")
            .children("a")
            .append("<i class='arrow-indicator fa fa-angle-right'></i>");
    }
});
(function () {
    var doc = document.documentElement;
    var w = window;
    var curScroll;
    var prevScroll = w.scrollY || doc.scrollTop;
    var curDirection = 0;
    var prevDirection = 0;
    var header = document.getElementById("header_menu");
    var toggled;
    var threshold = 200;
    var checkScroll = function () {
        curScroll = w.scrollY || doc.scrollTop;
        if (curScroll > prevScroll) {
            curDirection = 2;
        } else {
            curDirection = 1;
        }
        if (curDirection !== prevDirection) {
            toggled = toggleHeader();
        }
        prevScroll = curScroll;
        if (toggled) {
            prevDirection = curDirection;
        }
    };
    var toggleHeader = function () {
        toggled = true;
        if (curDirection === 2 && curScroll > threshold) {
            header.classList.add("hide");
            jQuery(".sticky1").addClass("tab-sticky");
        } else if (curDirection === 1) {
            header.classList.remove("hide");
            jQuery(".sticky1").removeClass("tab-sticky");
        } else {
            toggled = false;
        }
        return toggled;
    };
    window.addEventListener("scroll", checkScroll);
})();

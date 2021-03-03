(function($) {


    $(".dropdown-trigger").on("click", function (event) {
        event.preventDefault();
        toggleNav();
    });
    $(".dropdown .close").on("click", function (event) {
        event.preventDefault();
        toggleNav();
    });
    $(".has-children")
        .children("a")
        .on("click", function (event) {
            event.preventDefault();
            var selected = $(this);
            selected.next("ul").removeClass("is-hidden").end().parent(".has-children").parent("ul").addClass("move-out");
        });
    var submenuDirection = !$(".dropdown-wrapper").hasClass("open-to-left") ? "right" : "left";
    $(".menu").menuAim({
        activate: function (row) {
            $(row).children().addClass("is-active").removeClass("fade-out");
            if ($(".menu .fade-in").length == 0) $(row).children("ul").addClass("fade-in");
        },
        deactivate: function (row) {
            $(row).children().removeClass("is-active");
            if ($("li.has-children:hover").length == 0 || $("li.has-children:hover").is($(row))) {
                $(".menu").find(".fade-in").removeClass("fade-in");
                $(row).children("ul").addClass("fade-out");
            }
        },
        exitMenu: function () {
            $(".menu").find(".is-active").removeClass("is-active");
            return true;
        },
        submenuDirection: submenuDirection,
    });
    $(".go-back").on("click", function () {
        var selected = $(this),
            visibleNav = $(this).parent("ul").parent(".has-children").parent("ul");
        selected.parent("ul").addClass("is-hidden").parent(".has-children").parent("ul").removeClass("move-out");
    });
    function toggleNav() {
        var navIsVisible = !$(".dropdown").hasClass("dropdown-is-active") ? true : false;
        $(".dropdown").toggleClass("dropdown-is-active", navIsVisible);
        $(".dropdown-trigger").toggleClass("dropdown-is-active", navIsVisible);
        if (!navIsVisible) {
            $(".dropdown").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function () {
                $(".has-children ul").addClass("is-hidden");
                $(".move-out").removeClass("move-out");
                $(".is-active").removeClass("is-active");
            });
        }

        // if (navIsVisible) {
        //     $(document).keyup(function(e) {
        //         if(e.which === 27) toggleNav();
        //     })
        // }
    }

})( jQuery );
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

var menuItems = document.querySelectorAll('#booking li.menu-item-has-children');
var timer1, timer2;
Array.prototype.forEach.call(menuItems, function(el, i){
    var activatingA = el.querySelector('a');
    activatingA.setAttribute('aria-expanded', "false");
    activatingA.setAttribute('aria-haspopup', "true");
    var btn = '<button><span class="arrow"></span><span class="screen-reader-text">show submenu for “' + activatingA.text + '”</span></button>';
    activatingA.insertAdjacentHTML('afterend', btn);
    el.addEventListener("mouseover", function(event){
        this.className = "menu-item-has-children open";
        this.querySelector('a').setAttribute('aria-expanded', "true");
        this.querySelector('button').setAttribute('aria-expanded', "true");
        clearTimeout(timer1);
    });
    el.addEventListener("mouseout", function(event){
        timer1 = setTimeout(function(event){
            document.querySelector("#booking .menu-item-has-children.open").className = "menu-item-has-children";
            document.querySelector('#booking .menu-item-has-children.open a').setAttribute('aria-expanded', "false");
            document.querySelector('#booking .menu-item-has-children.open button').setAttribute('aria-expanded', "false");
        }, 300);
    });
    el.querySelector('button').addEventListener("click",  function(event){
        event.preventDefault();
        if (this.parentNode.className === "menu-item-has-children") {
            this.parentNode.className = "menu-item-has-children open";
            this.parentNode.querySelector('a').setAttribute('aria-expanded', "true");
            this.parentNode.querySelector('button').setAttribute('aria-expanded', "true");
        } else {
            this.parentNode.className = "menu-item-has-children";
            this.parentNode.querySelector('a').setAttribute('aria-expanded', "false");
            this.parentNode.querySelector('button').setAttribute('aria-expanded', "false");
        }
        event.preventDefault();
    });
    var links = el.querySelectorAll('a');
    Array.prototype.forEach.call(links, function(el, i){
        el.addEventListener("focus", function() {
            if (timer2) {
                clearTimeout(timer2);
                timer2 = null;
            }
        });
        el.addEventListener("blur", function(event) {
            timer2 = setTimeout(function () {
                var opennav = document.querySelector("#booking .menu-item-has-children.open")
                if (opennav) {
                    opennav.className = "menu-item-has-children";
                    opennav.querySelector('a').setAttribute('aria-expanded', "false");
                    opennav.querySelector('button').setAttribute('aria-expanded', "false");
                }
            }, 10);
        });
    });
});
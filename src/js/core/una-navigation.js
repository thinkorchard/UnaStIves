// Example
const toggleMenu = document.querySelector('.dropdown-trigger')
const menu = document.querySelector('.dropdown');
const closeMenu = document.querySelector(".close");

const toggle = event => {
   event.stopPropagation();

   if (!event.target.closest('.dropdown')) {

      menu.classList.toggle('dropdown-is-active');

      menu.classList.contains('dropdown-is-active')
          ? document.addEventListener('click', toggle)
          : document.removeEventListener('click', toggle);
   }
}

toggleMenu.addEventListener('click', toggle);
closeMenu.addEventListener('click', function(e) {
   menu.classList.remove("dropdown-is-active");
   document.removeEventListener('click', toggle);
});

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
            event.preventDefault();
        } else {
            this.parentNode.className = "menu-item-has-children";
            this.parentNode.querySelector('a').setAttribute('aria-expanded', "false");
            this.parentNode.querySelector('button').setAttribute('aria-expanded', "false");
            event.preventDefault();
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

gsap.registerPlugin(ScrollTrigger)

function initPinSteps() {
    ScrollTrigger.create({
        trigger: ".site-top",
        start: 'top +=10',
        end: 99999,
        scrub: true,
        toggleClass: {className: 'site-navigation-wrapper--sticky', targets: '.site-navigation-wrapper'}
    });

    ScrollTrigger.matchMedia({
        //tablet up
        "(min-width: 768px": function() {
            ScrollTrigger.create({
                trigger: ".site-top",
                start: 'top +=10',
                end: 99999,
                scrub: true,
                toggleClass: {className: 'site-navigation-wrapper--sticky', targets: '.site-navigation-wrapper'}
            });
        },
        // Mobile
        "(max-width: 767px": function() {
            ScrollTrigger.create({
                trigger: ".site-top",
                start: 'top bottom',
                end: 99999,
                scrub: true,
                toggleClass: {className: 'site-navigation-wrapper--sticky', targets: '.site-navigation-wrapper'}
            });
        },
    })
}



function init() {
    // start here
    initPinSteps()
}

window.addEventListener("load", function () {
    init()
})
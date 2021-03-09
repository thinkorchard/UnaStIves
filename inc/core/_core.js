var yourNavigation = jQuery(".sticky-menu");
stickyDiv = "sticky";
yourHeader = jQuery('.site-top').height();
subNav = jQuery('.page-menu').height();

jQuery(window).scroll(function() {
    if( jQuery(this).scrollTop() > (yourHeader - subNav) ) {
        yourNavigation.addClass(stickyDiv);
    } else {
        yourNavigation.removeClass(stickyDiv);
    }
});

window.addEventListener('DOMContentLoaded', () => {

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const id = entry.target.getAttribute('id');
            if (entry.intersectionRatio > 0) {
                document.querySelector(`.sticky-menu li a[href="#${id}"]`).parentElement.classList.add('active');
            } else {
                document.querySelector(`.sticky-menu li a[href="#${id}"]`).parentElement.classList.remove('active');
            }
        });
    });

    // Track all sections that have an `id` applied
    document.querySelectorAll('section[id]').forEach((section) => {
        observer.observe(section);
    });

});
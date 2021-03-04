var swiper = new Swiper('.swiper-container', {
    loop: true,
    autoplay: {
        delay: 6500,
        disableOnInteraction: true,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
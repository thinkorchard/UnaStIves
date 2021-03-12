var swiper = new Swiper('.hero-slider', {
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

var villaSwiper = new Swiper('.villa-slider', {
    loop: true,
    centeredSlides: false,
    spaceBetween: 10,
    slidesPerView: 'auto',
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
            centeredSlides: true,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: true,
        },
        1366: {
            slidesPerView: 3,
            spaceBetween: 60,
            centeredSlides: true,
        },
        1920: {
            slidesPerView: 3,
            spaceBetween: 60,
            centeredSlides: true,
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var singleSwiper = new Swiper('.single-slider', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
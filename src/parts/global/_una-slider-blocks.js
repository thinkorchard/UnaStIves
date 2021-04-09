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
    centeredSlides: true,
    spaceBetween: 10,
    slidesPerView: 'auto',
    breakpoints: {
        768: {
            //slidesPerView: 2,
            spaceBetween: 10,
            centeredSlides: true,
        },
        1024: {
            //slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: true,
        },
        1366: {
            //slidesPerView: 'auto',
            spaceBetween: 60,
            centeredSlides: true,
        }

    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

var singleSwiper = new Swiper('.single-slider', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var eventsSwiper = new Swiper('.events-slider', {
    loop: true,
    spaceBetween: 0,
    slidesPerView: 2,

    breakpoints: {
        576: {
            slidesPerView: 1,
        },
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
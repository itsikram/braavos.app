let Swiper_guide = new Swiper(".Swiper-guide", {
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 24,
    pagination: {
        el: ".swiper-pagination-guide",
        clickable: true,
    },
    breakpoints: {

        320: {
            slidesPerView: "auto",
            spaceBetween: 24,
            loop: true,
            allowTouchMove: true,
            centeredSlides: true,
        },

        768: {
            slidesPerView: 3,
            spaceBetween: 24,
            allowTouchMove: true,
            loop: true,
            centeredSlides: false,
        },

        1024: {
            slidesPerView: 4,
            spaceBetween: 24,
            loop: true,
            allowTouchMove: true,
            centeredSlides: false
        }, 1280: {
            slidesPerView: "auto",
            allowTouchMove: false,
        },
    },
});


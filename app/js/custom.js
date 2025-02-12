//Lenis smooth scroll JS
const lenis = new Lenis();
lenis.on('scroll', (e) => {
    // console.log(e);
});
function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

//Homepage Hero Banner 
var swiper = new Swiper(".home-hero-banner", {
    slidesPerView: 1,
    speed: 1500,
    loop: true,
    autoplay: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

//Current Year Update
let currentYear = new Date();
document.querySelector('.currentYear').innerText = currentYear.getFullYear();



$(document).ready(() => {
    $('.static-thumbnails-lightgallery').lightGallery({
        animateThumb: false,
        zoomFromOrigin: false,
        thumbnail: false
    });

    //Photo Lightgallery
    $(document).ready(function () {
        $('.photo-lightgallery').each(function (i, v) {
            $(v).lightGallery({
                thumbnail: false
            });
        });
    });
});

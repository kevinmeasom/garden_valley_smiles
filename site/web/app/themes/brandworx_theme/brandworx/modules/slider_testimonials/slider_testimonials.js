jQuery(function($){
    $('.testimonials-slider').on('afterChange', function(slick, currentSlide){
        scaleBgImages();
    });
    $('.testimonials-slider').slick({
        dots: true,
        arrows: false,
        prevArrow: '<div class="slick-prev slider-prev slider-arrow"><svg class="icon"><use xlink:href="#long-arrow-left" /></svg></div>',
        nextArrow: '<div class="slick-next slider-next slider-arrow"><svg class="icon"><use xlink:href="#long-arrow-right" /></svg></div>',
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        // responsive: [
        //     {
        //         breakpoint: 768,
        //         settings: {
        //             slidesToShow: 3,
        //             slidesToScroll: 1,
        //         }
        //     },
        //     {
        //         breakpoint: 600,
        //         settings: {
        //             slidesToShow: 2,
        //             slidesToScroll: 1,
        //         }
        //     }
        // ]
    })

    setTimeout(function(){
        scaleBgImages();
        // setupSlideLinks();
    }, 500)
});
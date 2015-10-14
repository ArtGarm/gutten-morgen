function sliderTop(){
    $('.header-slider-wrap-main').slick({
        infinite:true,
        arrows:false,
        autoplay: true,
        autoplaySpeed:2000,
        fade:true,
        cssEase:'linear',
        dots:true
    });
};


function sliderTop1(){
    $('.container-slider').slick({
        infinite:true,
        arrows:false,
        autoplay: true,
        autoplaySpeed:3000,
        fade:true,
        cssEase:'linear',
        dots:false,
        pauseOnHover:false
    });
};

$(document).ready(function() {
    sliderTop();
    sliderTop1();
 });
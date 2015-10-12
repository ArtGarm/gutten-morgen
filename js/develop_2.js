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
$(document).ready(function() {
    sliderTop();
 });
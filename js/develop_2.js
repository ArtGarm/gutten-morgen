function sliderTop(){
    $('.header-slider-wrap-main').slick({
        infinite:true,
        arrows:false,
        autoplaykey: false,   // true,
        autoplaySpeed:2000,
        fade:true,
        cssEase:'linear',
        dots:true
    });
};
$(document).ready(function() {
    sliderTop();
 });
$(document).ready(function () {
    $('.reviews-blocks').slick({
        slidesToShow: 3,
        swipe: true,
        infinite: true,
        adaptiveHeight: true,
        prevArrow: $('.reviews-arrows__left'),
        nextArrow: $('.reviews-arrows__right')        
        });
        
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({ scrollTop: $(_href).offset().top -50 + "px"}, 1000);
            return false;
        });
});
/*const circle = document.querySelector('.progress-ring__circle');
const radius = circle.r.baseVal.value;
const circumference = 2 * Math.PI * radius;

circle.style.strokeDasharray = `${circumference} ${circumference}`;
circle.style.strokeDashoffset = circumference;


function setProgress(percent){
    const offset = circumference - percent/100 * circumference;
    circle.style.strokeDashoffset = offset;
}

window.addEventListener('scroll', progressBar);
progressBar.addEventListener('change', function(){
    setProgress(progressBar.value);
})
function progressBar(e){
    let windowScroll = document.body.scrollTop || document.documentElement.scrollTop
    let windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let per = windowScroll / windowHeight * 100;

}*/


    
$(function(){
    $(document).on('scroll', scrolled);
});

function scrolled() {
    if ($(window).scrollTop() === 0) {
        $(".navbar").removeClass("navmenu2");
        $("img").removeClass("stick");
        $("img").removeClass("imgP");
        $("small").removeClass("paddSm");
    } else {
        $(".navbar").addClass("navmenu2");
        $('img').addClass("stick");
        $('img').addClass("imgP");
        $('small').addClass("paddSm");
    }
}
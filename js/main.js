$(document).ready(function () {
    $('.sliders').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        appendDots: $('.custom-dots')
    });
    open_li_desc();

    $('.drawer').drawer({
    });
});
function width() {
//    const mq = window.matchMedia("(min-width: 960px)");
//    if (mq.matches) {
//        open_li_desc();
//        console.log("window width >= 960px");
//    } else {
//        open_li_mobile();
//        console.log("window width < 960px");
//    }
}
var open_li_desc = function () {
    $('.types-content>div>div').click(function () {
        var target = $('.types .content .text');
        $('html, body').animate({
            scrollTop: target.offset().top - 60
        }, 1000, function () {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
                return false;
            } else {
                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
            }
            ;
        });
        $('.types .text .text-block-1').removeClass('active');
        $('.types .img .img-block-1').removeClass('active');
        $('.types .text .' + $(this).attr('data-rell')).addClass('active');
        $('.types .img .' + $(this).attr('data-rell')).addClass('active');
    });
    $('.last-news li').on('click', function () {
        $('.last-news .news-body div.active').addClass('disactive');
        $('.last-news .news-body div.active').removeClass('active');
        $('.last-news .news-body .disactive').eq($(this).attr('data-rell') - 1).addClass('active');
        $('.last-news .news-body div.active').removeClass('disactive');
    });
};
var open_li_mobile = function () {

};
/* 返回顶部 */
$(function(){
     $(window).scroll(function(){if ($(window).scrollTop()>600) {$(".go-top").fadeIn("fast");} else {$(".go-top").fadeOut("fast");}});
})
function indextop() {
    if(jQuery.browser.safari) {
        jQuery('body').animate({scrollTop:600}, 'fast');return false;
    } else {
        jQuery('html').animate({scrollTop:600}, 'fast');return false;
    }
}
/* 返回顶部 */
$(function(){
     $(window).scroll(function(){if ($(window).scrollTop()>600) {$(".daohang-top").fadeIn("fast");} else {$(".daohang-top").fadeOut("fast");}});
})
function indextop() {
    if(jQuery.browser.safari) {
        jQuery('body').animate({scrollTop:600}, 'fast');return false;
    } else {
        jQuery('html').animate({scrollTop:600}, 'fast');return false;
    }
}
 $(function(){
	$("#dokefu:last,#opkefu").live({
        mouseover:function(){
            $("#opkefu").show();
        },
        mouseout:function(){
            $("#opkefu").hide();
        }
    })
});
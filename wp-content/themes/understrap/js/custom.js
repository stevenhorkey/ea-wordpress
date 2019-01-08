// custom js
var $ = jQuery;

$( document ).ready(function() {

    var navbarTransparent = function() {
        if ($(".navbar").offset().top > 0) {
            $(".navbar").removeClass("navbar-top");
        } else {
            $(".navbar").addClass("navbar-top");
        }
    };
    // Collapse now if page is not at top
    navbarTransparent();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarTransparent);

});

(function ($) {
    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#masthead").offset().top > 32) {
            $("#masthead").removeClass("top");
        } else {
            $("#masthead").addClass("top");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
})(jQuery);
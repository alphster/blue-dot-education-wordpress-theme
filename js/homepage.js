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

    window.sr = ScrollReveal({ reset: true });
    sr.reveal('.ray-dot > div:first-child', {
        origin: 'left',
        distance: '75px',
        duration: 1000,
        delay: 100
    });
    sr.reveal('.intro-content .icon', {
        duration: 600,
        delay: 100,
        scale: 0.3,
        distance: '0px'
    }, 200);
})(jQuery);
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
        delay: 300
    });
    sr.reveal('.about-content .icon', {
        duration: 600,
        delay: 500,
        scale: 0.3,
        distance: '0px'
    }, 200);
    sr.reveal('.news-content .post', {
        duration: 500,
        delay: 100,
        distance: '100px',
        origin: 'bottom',
        opacity: 0,
        scale: 1,
        reset: false
        //scale: 0.3,
        //distance: '0px'
    }, 150);
})(jQuery);
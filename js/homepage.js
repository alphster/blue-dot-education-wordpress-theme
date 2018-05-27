(function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: (target.offset().top - 57)
          }, 1000, "easeInOutExpo");
          return false;
        }
      }
    });

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
    // RAY DOT DIVIDER
    sr.reveal('.ray-dot > div:first-child', {
        origin: 'left',
        distance: '75px',
        duration: 1000,
        delay: 300
    });
    // CORE VALUES ICONS
    sr.reveal('.about-content .icon', {
        duration: 600,
        delay: 500,
        scale: 0.3,
        distance: '0px'
    }, 200);

    // LATEST NEWS POSTS
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


    // init controller
    var controller = new ScrollMagic.Controller();

    // create a scene
    new ScrollMagic.Scene({ 
        triggerElement: '#section-menu-1', 
        duration: $("#section-menu-1").height() 
    }).setClassToggle("#primary-menu", "item-1-active").addTo(controller);
    new ScrollMagic.Scene({ 
        triggerElement: '#section-menu-2', 
        duration: $("#section-menu-2").height() 
    }).setClassToggle("#primary-menu", "item-2-active").addTo(controller);
    new ScrollMagic.Scene({ 
        triggerElement: '#section-menu-3', 
        duration: $("#section-menu-3").height() 
    }).setClassToggle("#primary-menu", "item-3-active").addTo(controller);
    new ScrollMagic.Scene({ 
        triggerElement: '#section-menu-4', 
        duration: $("#section-menu-4").height() 
    }).setClassToggle("#primary-menu", "item-4-active").addTo(controller);

})(jQuery);
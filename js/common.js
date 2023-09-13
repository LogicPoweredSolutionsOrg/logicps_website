/* Portfolio Tabs */
jQuery(function () {
  var filterList = {
    init: function () {
      jQuery("#portfoliolist").mixItUp({
        selectors: {
          target: ".portfolio",
          filter: ".filter",
        },
        load: {
          filter: ".all"
        }
      });
    }
  };
  filterList.init();
});

/* Sticky Nav */
jQuery(function () {
  var num = 1;
  jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() > num) {
      jQuery("#header").addClass('active');
    } else {
      jQuery("#header").removeClass('active');
    }
  });
});

/* Mobile Nav */
jQuery(function () {
  jQuery(".mobile-navigation span").click(function () {
    jQuery(".mobile-navigation #filters").show();
  });

  jQuery(".mobile-navigation li").click(function () {
    jQuery(".mobile-navigation #filters").hide();
  });
});

/* main menu */
jQuery(function () {
  jQuery(".hamburger").click(function () {
    jQuery(this).toggleClass('active');
    jQuery(".menu-overlay").toggleClass('openmenu');
    jQuery('body').toggleClass('noscroll');
  });
});

/* Technologies slider */
jQuery(function () {
  jQuery('.technologies-wrap .owl-carousel').owlCarousel({
    loop: true,
    margin: 20,
    responsiveClass: true,
    dots: false,
    autoplay: true,
    items: 5,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 3,
        nav: false,
        margin: 20
      },
      1000: {
        items: 5,
        nav: false,
        loop: true,
        margin: 20
      }
    }
  });
});

/* portfolio slider */
jQuery(function () {
  jQuery('.portfolio .owl-carousel').owlCarousel({
    loop: false,
    margin: 20,
    responsiveClass: true,
    dots: true,
    autoplay: true,
    items: 3,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 3,
        nav: false,
        margin: 20
      },
      1000: {
        items: 3,
        nav: false,
        loop: false,
        margin: 20
      }
    }
  });
});

/* Technologies slider */
jQuery(function () {
  jQuery('.mobileslider-wrap .owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    responsiveClass: true,
    dots: false,
    autoplay: true,
    items: 1,
    responsive: {
      0: {
        items: 1,
        loop: true,
        autoplay: true,
        nav: false
      },
      600: {
        items: 1,
        nav: false,
        loop: true,
        autoplay: true,
        margin: 0
      },
      1000: {
        items: 1,
        nav: false,
        loop: true,
        autoplay: true,
        margin: 0
      }
    }
  });
});

jQuery(function () {
  $(".number").counterUp({ time: 3000 });
});

jQuery(function () {
  AOS.init();
});


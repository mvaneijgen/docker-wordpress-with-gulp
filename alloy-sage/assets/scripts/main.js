/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

  //Mobile menu
  $( "#alloyMenuToggle" ).click(function() {
    $('.alloy-slide-nav').toggleClass('show');
    $(this).toggleClass('show');
    $("#alloyMenuToggleMob").toggleClass('show');
  });

  $( "#alloyMenuToggleMob" ).click(function() {
    $('.alloy-slide-nav').toggleClass('show');
    $(this).toggleClass('show');
    $("#alloyMenuToggle").toggleClass('show');
  });
  //END Mobile menu

  // Check to see if the window is top if not then display button
    $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
        $('.scrollToTop').addClass('visible');
      } else {
        $('.scrollToTop').removeClass('visible');
      }
    });
  //END Check to see if the window is top if not then display button


  // Click event to scroll to top
  $('.scrollToTop').click(function(){
    jQuery('html, body').animate({scrollTop : 0},800);
    return false;
  });
  //END Click event to scroll to top

  // Scroll (#) hash links to element instead of jump
  $(function() {
    jQuery('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 100
          }, 1000);
          return false;
        }
      }
    });
  });
  // END Scroll (#) hash links to element instead of jump

  // Woocommerce image container
    //Prevent image link from opening image
    $('.woocommerce-product-gallery__image a').on('click', function(){
      event.preventDefault();
    });

    //When page loads, select image container and change source with first image data
    $( window ).load(function() {
      var imageSrc = $('.woocommerce-product-gallery__wrapper div a img').first().data('large_image');
      $('#productImageContainer img').attr('src', imageSrc);
    });

    //when thumbnail is clicked, change image container src to that element's data
    $('.woocommerce-product-gallery__image').on('click', function(){
      var imageSrc = $(this).find('a img').data('large_image');
      $('#productImageContainer img').attr('src', imageSrc);
    });
  //END Woocommerce image container

  // hide inner grid imagery
    // When footer icon is clicked, toggle a hide class to all visible grid items
   $('#poster-hide-text-btn').on('click', function(){
     $('#poster-hide-text-btn svg').toggleClass('showhideicon'); //and change icon
     $('.grid-item').toggleClass('hide-inner');
   });
  //END hide inner grid imagery

})(jQuery); // Fully reference jQuery after this point.

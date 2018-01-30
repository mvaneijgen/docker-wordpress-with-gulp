(function($) {
  //create and call cookie functions
  function createCookie(name, value, days) {
    var expires;
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = '; expires=' + date.toGMTString();
    }
    else {
      expires = '';
    }
    document.cookie = name + '=' + value + expires + '; path=/';
  }

  function getCookie(c_name) {
    if (document.cookie.length > 0) {
      c_start = document.cookie.indexOf(c_name + '=');
      if (c_start !== -1) {
        c_start = c_start + c_name.length + 1;
        c_end = document.cookie.indexOf(';', c_start);
        if (c_end === -1) {
          c_end = document.cookie.length;
        }
        return unescape(document.cookie.substring(c_start, c_end));
      }
    }
    return '';
  }
  // END default cookie code

  $(document).on('ready', function () {
    //------------------------------------------------------//
    // Cookie message
    //------------------------------------------------------//
    var alloyCookiesContainer = $('#alloy-cookies-container');
    var alloyCookiesContainerClose = $('#alloy-cookies-container button');
    var alloyScrollHeight = $(window).height() / 2;
    var alloyScrolled;

    function alloyShowCookiesMsg() {
      alloyCookiesContainer.addClass('show');
    }
    function alloyHideCookiesMsg() {
      alloyCookiesContainer.removeClass('show');
      createCookie('alloyVisitedCookie', true, 365);
    }
    function alloyCookieScrolledCheck() {
      if (alloyScrolled !== true) {
        $(window).on('scroll', function(e) {
          var alloyScrollPos = $(window).scrollTop();
          if (alloyScrollPos >= alloyScrollHeight) {
            alloyHideCookiesMsg();
            alloyScrolled = true;
          }
        });
      }
    }

    alloyCookiesContainerClose.on('click', function() {
      alloyHideCookiesMsg();
    });

    var alloyVisitedCookie = getCookie('alloyVisitedCookie');
    if (alloyVisitedCookie !== 'true') {
      alloyCookiesContainer.addClass('show');
      alloyCookieScrolledCheck();
    }
    if (alloyVisitedCookie === 'true') {
      alloyScrolled = true;
    }
    //------------------------------------------------------//
    // END Cookie message
    //------------------------------------------------------//
  });

})(jQuery); // Fully reference jQuery after this point.

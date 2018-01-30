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
  // Input label pushed higher
  //add class when input is selected
  $('.gfield input, .gfield textarea').on('focus', function() {
    $(this).parent().siblings("label").addClass('selectedInput');
    $(this).siblings("label").addClass('selectedInput');
  });

  //remove classes when input is deselected and nothing is changed
  $('.gfield input, .gfield textarea').on('blur', function() {
    var value = $(this).val();
    if (value.length === 0) { //Check if value changed in the input
      $(this).parent().siblings(".selectedInput").removeClass('selectedInput');
      $(this).siblings(".selectedInput").removeClass('selectedInput');
    }
  });
  $(document).on('ready', function() {
     $('.gfield input, .gfield textarea').each( function(){
       var value = $(this).val();
       if (value !== '') {
         $(this).parent().siblings("label").addClass('selectedInput');
         $(this).siblings("label").addClass('selectedInput');
       }
     });
  });

})(jQuery); // Fully reference jQuery after this point.

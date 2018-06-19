(function($) {
  "use strict"; // Start of use strict

  // Closes responsive menu when a scroll trigger link is clickeds
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 57
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

})(jQuery); // End of use stric

$('.featurette p, #first p').mouseenter(function(event) {
    $(this).css("color", "#0079D7");
});

 $('.featurette p, #first p').mouseleave(function(event) {
   $(this).css("color", "black");

});

// kad animuotai nuslinktu iki  sekciju

$(document).on('click', 'a[href^="#"]', function(event){
  event.preventDefault();

  $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
  }, 1000);
});

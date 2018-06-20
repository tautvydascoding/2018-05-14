// A $( document ).ready() block.
$( document ).ready(function() {


  $('.slide').click(function(e) {

  var linkHref = $(this).attr('href');
$('html, body').animate({
  scrollTop: $(linkHref).offset().top
}, 1000);


  });






  (function() {


    $('.gallery-link').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      mainClass: 'mfp-with-zoom mfp-img-mobile',
      image: {
        verticalFit: true,
        titleSrc: function(item) {
          return item.el.find('figcaption').text() || item.el.attr('title');
        }
      },
      zoom: {
        enabled: true
      },
      // duration: 300
      gallery: {
        enabled: true,
        navigateByImgClick: false,
        tCounter: ''
      },
      disableOn: function() {
        if ($(window).width() < 640) {
          return false;
        }
        return true;
      }
    });

  }).call(this);



  $(window).on('scroll', function(){
    if($(window).scrollTop()) {
      $('.navbar').addClass('text-light');
    }
    else {
      $('.navbar').removeClass('text-light');
    }

})
    $(window).on('scroll', function(){
      if($(window).scrollTop()) {
        $('.navbar').addClass('bg-dark');
      }
      else {
        $('.navbar').removeClass('bg-dark');
      }

  })



});

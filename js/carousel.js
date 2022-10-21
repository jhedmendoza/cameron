$(window).load(function() {
  $('#carousel').flexslider({ 
  	animation: "fade",
    animationDuration: 500,
    slideshowSpeed: 8000,
    controlNav: true,
    directionNav: false,
    startAt: 'randomthis'
  });

  $('.testimonial').flexslider({ 
  	animation: "fade",
    animationDuration: 500,
    slideshowSpeed: 8000,
    controlNav: false,
    directionNav: false,
    startAt: 'randomthis'
  });
});
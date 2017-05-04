$('#menu-topnav').append('<li class="searchicon"><a href=""><i class="fa fa-search"></i></a></li>')

$('.container').on('inview', function(event, isInView) {
  if (isInView) {
      $('.nav-top').addClass('shownav')
  } else {
      $('.nav-top').removeClass('shownav')
  }
});

$('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:5000,
    items:1,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav:true,
})

$('.owl-next').html('<i class="fa fa-chevron-right"></i>')
$('.owl-prev').html('<i class="fa fa-chevron-left"></i>')

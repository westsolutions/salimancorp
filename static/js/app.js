$(function(){
  console.log('app')
  $('.hero-slider').slick({
  	arrows: false,
  	dots: true,
  	vertical: true,
  	adaptiveHeight: true,
  	autoplay: true,
  	speed: 1000,
    autoplaySpeed: 2000
  });
});

$('.navbar-nav').on('click', ' a[href^="#"]', function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top}, 1000);
});


$(document).ready(() => {
    $('.nav-item').click(() => {
    	$( ".navbar-collapse" ).removeClass( "show" );
        $('body').toggleClass('disabled-scrolling');
    });
});

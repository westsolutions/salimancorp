(function () {
	$(document).ready(function () {
		$('.nav-item').click(function () {
			$(".navbar-collapse").removeClass("show");
			$('body').toggleClass('disabled-scrolling');
		});

		$('.navbar-nav').on('click', 'a[href^="#"]', function (event) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: $($.attr(this, 'href')).offset().top
			}, 1000);
		});

		$('.hero-slider').slick({
			arrows: false,
			dots: true,
			appendDots: $(".hero-slider-dots"),
			dots: true,
			infinite: true,
			speed: 600,
			fade: true,
			cssEase: 'linear',
			draggable: false,
			autoplay: true,
  			autoplaySpeed: 5000
		});
	});
})(jQuery);
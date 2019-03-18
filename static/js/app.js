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
			//vertical: true,
			//adaptiveHeight: true,
			//draggable: true,
			appendDots: $(".hero-slider-dots"),
			//centerMode: true,
			//centerPadding: 100,
		    infinite: true,
		    //cssEase: 'linear',
			slidesToScroll: 1,
			//autoplay: true,
			//autoplaySpeed: 2000,
			fade: true,
			slidesToShow: 1
		});


		$('.js-contact-form').submit(function (ev) {
			ev.preventDefault();
			var data = $(this).serialize();
			
			$.ajax({
				method: 'POST',
				url: window.location.origin + window.location.pathname + 'mailer.php',
				data: data,
				dataType: 'json',
				encode: true,
			}).always(function (data) {
				if (data.success) {
					var name = $('.js-name-input').val();
					$('.js-name').text(name);
					$('.js-send-success').modal('show');
					$('.js-contact-form input').each(function () {
						$(this).val('');
					});
					$('.js-contact-form textarea').html('')
				}
				else {
					console.log(data);
				}
			});
		});


		$(window).on("scroll", function() {
		    if($(window).scrollTop() > 1) {
		        $(".main-header").addClass("active-mobile-menu");

		    } else {
		        //remove the background property so it comes transparent again (defined in your css)
		       $(".main-header").removeClass("active-mobile-menu");
		    }
		});

	});
})(jQuery);
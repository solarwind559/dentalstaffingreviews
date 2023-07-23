(function ($) {

	'use strict';

	$(document).ready(function() {

		//Mobile Menu Hamburger
		$('.hamburger').click(function(){
			$(this).toggleClass('is-active');
		});

		// Testimonial Slider

		var testimonialSlider = new Swiper('.testimonial-slider', {
			loop: true,
			navigation: {
				nextEl: '.test-next',
				prevEl: '.test-prev',
			},
			speed: 1500,
			autoHeight: true,
			autoplay: {
				delay: 6000,
				disableOnInteraction: false,
			}
		});

    // New Forms

    $("input").focus(function () {
      $(this).parent().addClass("active");
      $("input").focusout(function () {
        if ($(this).val() == "") {
          $(this).parent().removeClass("active");
        } else {
          $(this).parent().addClass("active");
        }
      });
    });
    $("textarea").focus(function () {
      $(this).parent().addClass("active");
      $("textarea").focusout(function () {
        if ($(this).val() == "") {
          $(this).parent().removeClass("active");
        } else {
          $(this).parent().addClass("active");
        }
      });
    });

	//OTM Forms
	const form = otmForms({
	    apiKey: '56c05dd0-8d88-11e7-bcc0-09d90b0db2d6',
		selector: '.OTMForm',
		honeypot: true,
		honeypotSelector: 'your-url',
	    onSubmit: function (el) {
	    	$(el)
	    	.find('button[type="submit"]')
	    	.prop("disabled", true)
	    	.html('<span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"><\/span>Sending...');
	    },
	    onSuccess: function (response, formElement) {
	    	$(formElement).find('button[type="submit"]').prop("disabled", false).html('Send Message');
        	$(formElement).find('.alert-danger').addClass('d-none');
        	$(formElement).find('.alert-success').removeClass('d-none');
	    },
	    onError: function (error, formElement) {
	    	$(formElement).find('button[type="submit"]').prop("disabled", false).html('Send Message');
    		$(formElement).find('.alert-success').addClass('d-none');
        	$(formElement).find('.alert-danger').removeClass('d-none');
	    }
	  });
	  form.init();
	});

}(jQuery));

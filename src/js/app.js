
AOS.init();


jQuery(document).ready(function(){


	jQuery( ".bar-wrap" ).click(function() {

		if(jQuery(this).hasClass('open')) {
			jQuery(".nav-bar" ).slideUp();
			jQuery(this).removeClass('open');
		} else {
			jQuery(".nav-bar" ).slideDown();
			jQuery(this).addClass('open');
		}

	});

	jQuery(".nav-link").click(function(){

			jQuery(".nav-bar" ).slideUp();
			jQuery('.bar-wrap').removeClass('open');
	});

});




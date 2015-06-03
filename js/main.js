 // Designer Expand 

$(document).ready(function() {

	 // Launch Hamburger Menu 

	$(document).on('click', '#js-menu-trigger', function(e) {
		e.preventDefault(); 

		if ($('body').hasClass('is-menu-active')) {
			
			$('#js-menu-trigger span').html('Menu');
			$('body').removeClass('is-menu-active');
			
		}

		else {

			$('#js-menu-trigger span').html('close');
			$('body').addClass('is-menu-active');

		}	

	});

	// Launch Discover Trigger

	$(document).on('click', '#js-discover-trigger', function(e) {
		e.preventDefault(); 

		if ($('body').hasClass('is-discover-active')) {

			$('body').removeClass('is-discover-active');
			
		}

		else {

			$('body').addClass('is-discover-active');

		}	

	});

	// Launch Discover Menu Mobile

	$(document).on('click', '#js-activities-trigger', function(e) {
		e.preventDefault(); 

		if ($('body').hasClass('is-activities-active')) {

			$('body').removeClass('is-activities-active');
			
		}

		else {

			$('body').addClass('is-activities-active');

		}	

	});

	// Launch Activities Menu Mobile

	$(document).on('click', '#js-activities-trigger', function(e) {
		e.preventDefault(); 

		if ($('body').hasClass('is-activities-active')) {

			$('body').removeClass('is-activities-active');
			
		}

		else {

			$('body').addClass('is-activities-active');

		}	

	});

	// Launch Events On What's On

	$(document).on('click', '#js-events-trigger', function(e) {
		e.preventDefault(); 

		if ($('body').hasClass('is-events-active')) {

			$('body').removeClass('is-events-active');
			
		}

		else {

			$('body').addClass('is-events-active');

		}	

	});

});




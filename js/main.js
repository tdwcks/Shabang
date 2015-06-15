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

	// Launch Discover Men

	$(document).on('click', '#js-discover-trigger', function(e) {
		e.preventDefault(); 

		if ($('body').hasClass('is-discover-active')) {

			$('body').removeClass('is-discover-active');
			$('body').addClass('is-discover-closing');

			var CloseDiscover = function(){

			  $('body').removeClass('is-discover-closing');
			}

			setInterval(CloseDiscover, 1500);
			
		}

		else if ($('body').hasClass('is-activities-active')) {

			$('body').removeClass('is-activities-active');
			$('body').addClass('is-activities-closing');
			
			var openDiscover = function(){

			  $('body').removeClass('is-activities-closing')
			  $('body').addClass('is-discover-active');
			}

			setInterval(openDiscover, 500);

		}

		else if ($('body').hasClass('')) {

			$('body').removeClass('is-discover-closing');
			$('body').addClass('is-discover-active');


		}	

	});

	// Launch Activities Menu

	$(document).on('click', '#js-activities-trigger', function(e) {
		e.preventDefault(); 

		if ($('body').hasClass('is-activities-active')) {

			$('body').removeClass('is-activities-active');
			$('body').addClass('is-activities-closing');

			var closeActivities = function(){

			  $('body').removeClass('is-activities-active');
			  $('body').removeClass('is-activities-closing');
			}

			setInterval(closeActivities, 1000);
			
		}

		else if ($('body').hasClass('is-discover-active')) {


			$('body').removeClass('is-discover-active');
			$('body').addClass('is-discover-closing');
			
			var openActivities = function(){

			  $('body').removeClass('is-discover-closing')
			  $('body').addClass('is-activities-active');
			}

			setInterval(openActivities, 500);

		}

		else {

			$('body').removeClass('is-discover-active');
			$('body').addClass('is-activities-active');

		}	

	});

	// Launch Video On Click 

	$(document).on('click', '#js-video-trigger', function(e) {
		e.preventDefault(); 

			$('body').addClass('is-video-active');

	});

	// Launch Video On Click 

	$(document).on('click', '#js-video-exit', function(e) {
		e.preventDefault(); 

				$('body').removeClass('is-video-active');
				$('body').addClass('is-video-closing');
			
			var closeVideo = function(){

				$('body').removeClass('is-video-closing');
			}

			setInterval(closeVideo, 500);
			

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




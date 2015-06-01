 // Designer Expand 

$(document).ready(function() {


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

	$(document).on('click', '#js-discover-trigger', function(e) {
		e.preventDefault(); 

		if ($('body').hasClass('is-discover-active')) {

			$('body').removeClass('is-discover-active');
			
		}

		else {

			$('body').addClass('is-discover-active');

		}	

	});

	$(document).on('click', '#js-activities-trigger', function(e) {
		e.preventDefault(); 

		if ($('body').hasClass('is-activities-active')) {

			$('body').removeClass('is-activities-active');
			
		}

		else {

			$('body').addClass('is-activities-active');

		}	

	});


});

$(document).ready(function() {

	if ($(window).width() < 1100) {
	 	$('#js-layout-span-twelve').removeClass('layout-span-three');
	 	$('#js-layout-span-twelve').addClass('layout-span-twelve');
	}

	else {
		$('#js-layout-span-twelve').removeClass('layout-span-twelve');
		$('#js-layout-span-twelve').addClass('layout-span-three');
	}

});

$(window).resize(function() {

	if ($(window).width() < 1100) {
	 	$('#js-layout-span-twelve').removeClass('layout-span-three');
	 	$('#js-layout-span-twelve').addClass('layout-span-twelve');
	}

	else {
		$('#js-layout-span-twelve').removeClass('layout-span-twelve');
		$('#js-layout-span-twelve').addClass('layout-span-three');
	}

});




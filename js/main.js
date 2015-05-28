 // Designer Expand 

$(document).ready(function() {

	$(document).on('click', '.js-navigation-discover', function(e) {
		e.preventDefault(); 

		if ($('body').hasClass('navigation--discover--active')) {

			var removeDiscoverActive = function(){

			  $('body').removeClass('navigation--discover--active')

			}

			$('body').addClass('navigation--discover--inactive');

			setInterval(removeDiscoverActive, 300);

			var removeDiscoverInActive = function(){

			  $('body').removeClass('navigation--discover--inactive')

			}

			setInterval(removeDiscoverInActive, 300);

			
		}

		else {

			$('body').addClass('navigation--discover--active');

		}

	});

	$('.type-title-four').circleType({radius: 150});

});



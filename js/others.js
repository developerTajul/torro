jQuery(function($) {'use strict',



	$(document).ready(function(){		
		$('.radio_button').on('click', function(){
			$('.established').removeClass('hide_selection');
			$('.new_business').addClass('hide_selection');
		} );
		$('.radio_button_right').on('click', function(){
			$('.established').addClass('hide_selection');
			$('.new_business').removeClass('hide_selection');
	} );


		
	} );

});


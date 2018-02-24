jQuery(function($) {'use strict',



	$(document).ready(function(){
	     $(".carousel").carousel({
	         interval : 8000,
	         pause: false
	     });
	});


	$(document).ready(function(){
		
		    $(".carousel-inner .item:first").addClass("active");
		
	});	

});


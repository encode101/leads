// JavaScript Document

jQuery(function($){
	$('.carousel').carousel({
	  interval: 60000
	});
	
	/* Homepage Form Handler */
	
	$("#quickDeal").on({
		submit:function(){
		$.ajax({
			post:get,
			url:'quickdeal.php',
			success:function(){
				console.log("Google");
			}			
		});
		return false;
		}
	});
});
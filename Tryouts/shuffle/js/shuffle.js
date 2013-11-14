// JavaScript Document

jQuery(function($){
	// cache container
	var $container = $('#container');
	// initialize isotope
	
	$container.isotope({ filter: '.transition' });
	
	// filter items when filter link is clicked
	$('#filters a').click(function(){
	  var selector = $(this).attr('data-filter');
	  $container.isotope({ filter: selector });
	  return false;
	});

});
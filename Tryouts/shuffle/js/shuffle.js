// JavaScript Document

jQuery(function($){
	// cache container
	var $container = $('#sub_cat_container');
	// initialize isotope
	
	$container.isotope({ filter: '.metal' });
	
	// filter items when filter link is clicked
	$('#filters a').click(function(){
	  var selector = $(this).attr('data-filter');
	  $container.isotope({ filter: selector });
	  return false;
	});

});
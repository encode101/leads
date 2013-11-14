// JavaScript Document

jQuery(function($){
	// cache container
	var $container = $('#ajaxified-data');
	// initialize isotope
	
	$container.isotope({filter: '.home'});
	
	// filter items when filter link is clicked

	
	$("#islamic, #matrimonials, #doctors, #education, #repairs, #shopping, #realestate, #hotels, #music").click(function(){
		console.log($(this).attr('data-filter'));
	  var selector = $(this).attr('data-filter');
	  $container.isotope({
			filter: selector
		});
	  return false;
	});

	$("#islamic").click(function(){
	  var selector = '.islamic';
	  $container.isotope({ filter: selector });
	  return false;
	});
	
	$("#shopping").click(function(){
	  var selector = '.shopping';
	  $container.isotope({ filter: selector });
	  return false;
	});
	$("#matrimonials").click(function(){
	  var selector = '.matrimonials';
	  $container.isotope({ filter: selector });
	  return false;
	});
	$("#doctors").click(function(){
	  var selector = '.doctors';
	  $container.isotope({ filter: selector });
	  return false;
	});
	$("#education").click(function(){
	  var selector = '.education';
	  $container.isotope({ filter: selector });
	  return false;
	});
	$("#repairs").click(function(){
	  var selector = '.repairs';
	  $container.isotope({ filter: selector });
	  return false;
	});
	$("#realestate").click(function(){
	  var selector = '.realestate';
	  $container.isotope({ filter: selector });
	  return false;
	});
	$("#hotels").click(function(){
	  var selector = '.hotels';
	  $container.isotope({ filter: selector });
	  return false;
	});
	$("#music").click(function(){
	  var selector = '.music';
	  $container.isotope({ filter: selector });
	  return false;
	});
	$("#home").click(function(){
	  var selector = '.home';
	  $container.isotope({ filter: selector });
	  return false;
	});
	

});
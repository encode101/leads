// JavaScript Document

jQuery(function($){
	// cache container
	var $container = $('#ajaxified-data');
	// initialize isotope	
	$container.isotope({filter: '.home'});
	
	// Handling Individual Click On Any Category Items

	$("#islamic, #topMenu-islamic").click(function(){
	  var selector = '.islamic';
	  $container.isotope({ filter: selector });
	  $("#topMenu li").removeClass("active");
	  $("#topMenu-islamic").parent().addClass("active");
	  return false;
	});
	
	$("#shopping, #topMenu-shopping").click(function(){
	  var selector = '.shopping';
	  $container.isotope({ filter: selector });
	  $("#topMenu li").removeClass("active");
	  $("#topMenu-shopping").parent().addClass("active");
	  return false;
	});
	$("#matrimonials, #topMenu-matrimonial").click(function(){
	  var selector = '.matrimonials';
	  $container.isotope({ filter: selector });
	  $("#topMenu li").removeClass("active");
	  $("#topMenu-matrimonial").parent().addClass("active");
	  return false;
	});
	$("#doctors, #topMenu-doctors").click(function(){
	  var selector = '.doctors';
	  $container.isotope({ filter: selector });
	  $("#topMenu li").removeClass("active");
	  $("#topMenu-doctors").parent().addClass("active");
	  return false;
	});
	$("#education, #topMenu-education").click(function(){
	  var selector = '.education';
	  $container.isotope({ filter: selector });
	  $("#topMenu li").removeClass("active");
	  $("#topMenu-education").parent().addClass("active");
	  return false;
	});
	$("#repairs, #topMenu-repair").click(function(){
	  var selector = '.repairs';
	  $container.isotope({ filter: selector });
	  $("#topMenu li").removeClass("active");
	  $("#topMenu-repair").parent().addClass("active");
	  return false;
	});
	$("#realestate, #topMenu-realestate").click(function(){
	  var selector = '.realestate';
	  $container.isotope({ filter: selector });
	  $("#topMenu li").removeClass("active");
	  $("#topMenu-realestate").parent().addClass("active");
	  return false;
	});
	$("#hotels, #topMenu-hotels").click(function(){
	  var selector = '.hotels';
	  $container.isotope({ filter: selector });
	  $("#topMenu li").removeClass("active");
	  $("#topMenu-hotels").parent().addClass("active");
	  return false;
	});
	$("#music, #topMenu-music").click(function(){
	  var selector = '.music';
	  $container.isotope({ filter: selector });
	  $("#topMenu li").removeClass("active");
	  $("#topMenu-music").parent().addClass("active");
	  return false;
	});
	$("#branding, #topMenu-home").click(function(){
	  var selector = '.home';
	  $container.isotope({ filter: selector });
	  $("#topMenu li").removeClass("active");
	  $("#topMenu-home").parent().addClass("active");
	  return false;
	});
	$("#services, #topMenu-services").click(function(){
	  var selector = '.services';
	  $container.isotope({ filter: selector });
	  $("#topMenu li").removeClass("active");
	  $("#topMenu-services").parent().addClass("active");
	  return false;
	});
	
	// End Of Script
	
});
// JavaScript Document

jQuery(function($){
	$("#dataentry").submit(function(event){
		var data = $("#dataentry").serialize();
		$.ajax({
			url:"adminprocess.php",
			data: data
		});
		console.log("Form Submitted");
		event.preventDefault();
	})
})
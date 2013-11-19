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
	
	/* $("#uploadmusic").submit(function(event){
		var data = $("#uploadmusic").serialize();
		console.log(data);
		$.ajax({
			url:"uploadmp3.php",
			method:"post",
			data: data,
			success:function(data){
				console.log("Response : "+data);
			}
		});
		event.preventDefault();
	}) */
})
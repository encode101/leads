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
	
	/* Loading Pages Via Javascript */
	$('#matrimony').on({
		click:function(){
			$.ajax({
				url:'getlisting.php',
				data:'reqid=2',
				success:function(data){
					$('#ajaxified-data').html(data)
				}
			});
		}
	});
	
	$('.homesearchInputHolder .form-control').typeahead({
		name:'realestate',
		local:['Real Estate','Builders And Developers','Residential Rental','Buyers','Paying Guest Accommodation','Plot','Property Consultants','Property Registration Consultants','Estate Agents For Residence','Estate Agents']
	});
//	$('.twitter-typeahead input').addClass('form-control');
});
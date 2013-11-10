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
				data:'req=1',
				success:function(data){
					$('#ajaxified-data').html(data)
				}
			});
			return false;
		}
	});
	
	$('#realestate').on({
		click:function(){
			$.ajax({
				url:'getlisting.php',
				data:'req=2',
				success:function(data){
					$('#ajaxified-data').html(data)
				}
			});
			return false;
		}
	});
	
	$('.homesearchInputHolder .form-control').typeahead({
		name:'realestate',
		local:['Real Estate','Builders And Developers','Residential Rental','Buyers','Paying Guest Accommodation','Plot','Property Consultants','Property Registration Consultants','Estate Agents For Residence','Estate Agents']
	});
//	$('.twitter-typeahead input').addClass('form-control');

$("#homeSearch").on({
	submit:function(){
		$.ajax({
			url:'getlisting.php',
			success:function(){
				$('#ajaxified-data').html("<p><h3 class='danger'>Opps! No Results Found</h3></p>")
			}
		});
		return false;
	}
})
});
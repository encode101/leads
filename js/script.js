// JavaScript Document

jQuery(function($){	
	
	//	Homepage Form Handler
	
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
	
	
	//	Loading " Boxed " Pages Via JS
	
	$('#matrimony').on({
		click:function(){
			$.ajax({
				url:'getlisting.php',
				data:'req=1',
				beforeSend:function(){
					$('#matrimony').html("Loading...")
				},
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
				beforeSend:function(){
					$('#realestate').html("Loading...")
				},
				success:function(data){
					$('#ajaxified-data').html(data);					
				}
			});
			return false;
		}
	});
	
	// 	TypeAhead Initialization
	
	$('.homesearchInputHolder .form-control').typeahead({
		name:'realestate',
		local:['Real Estate','Builders And Developers','Residential Rental','Buyers','Paying Guest Accommodation','Plot','Property Consultants','Property Registration Consultants','Estate Agents For Residence','Estate Agents']
	});
	
	// 	Login From Modal
	
	$('#profilePic').on('show.bs.modal', function (id) {
		var contentl = "<div class='col-md-12'>You Must Be Logged In To View This Complete Profile!</div><div class='cus-hspacer-5'></div><div class='cus-hspacer-35'>&nbsp;</div><form class='col-md-8 '><div class='row-md-6'><input type='text' class='form-control' placeholder='Username' /></div><div class='cus-hspacer-15'></div><div class='row-md-6'><input type='password' class='form-control' placeholder='Password' /></div><div class='cus-hspacer-15'></div><input type='submit' value='Login' class='btn btn-primary' />&nbsp;&nbsp;&nbsp;&nbsp;<a href='#'>New User, Signup?</a></form><div class='clearfix'></div>";
  		$('.modal-body').html(contentl);
	})
	$('#profilePic').on('hide.bs.modal', function () {			
  		$('.modal-body').html("");	// Flushing Modal Data For Reuse
	})		


});
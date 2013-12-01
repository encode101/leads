<?php 
	include('dbconf.php');
	
	$query = mysql_query("INSERT INTO data(company, name, email, mobile, phone, address, category, subcategory, description, city) VALUES ('$_REQUEST[company]','$_REQUEST[name]','$_REQUEST[email]','$_REQUEST[mobile]','$_REQUEST[phone]','$_REQUEST[address]','$_REQUEST[category]','$_REQUEST[subcategory]','$_REQUEST[description]','$_REQUEST[city]')");
	
	if(!$query){
		echo(mysql_error());
	}
	
?>
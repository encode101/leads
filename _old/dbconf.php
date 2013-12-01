<?php
	mysql_connect('69.167.138.87','adityaas_rahul','Test/@123');
	if(!(mysql_select_db('adityaas_proj05'))){
		echo("failure");
	};
	
	/*
$link = mysql_connect('edugalaorg1.globatmysql.com', 'ammiabbu', 'ammiabbu/@123'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
//echo 'Connected successfully'; 
mysql_select_db(ammiabbu);
*/
?>
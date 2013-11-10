<?php
	mysql_connect('localhost','root','');
	if(!(mysql_select_db('ammiabbu'))){
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
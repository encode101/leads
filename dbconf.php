<?php
	mysql_connect('localhost','root','');
	if(!(mysql_select_db('ammiabbu'))){
		echo("failure");
	};
?>
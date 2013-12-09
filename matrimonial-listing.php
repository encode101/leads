<?php 
	include('dbconf.php');
	$matrimony= mysql_query("SELECT * from data WHERE subcategory='madavat'");
	if(!$matrimony){
		echo mysql_error();
	}
	
		
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Madavat - Find your perfect soulmate easily!</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<style>
body {
	overflow-y:scroll;
}
.listElement {
	margin:0 0 30px 0;
	background:#FCFCFC;
	/* border-top:1px solid #6699CC; */
	box-shadow:0 0 10px 0px #CCC;
}
.leftNavElement {
	margin:10px 0px;
}
.subTitle {
	font-weight:normal;
	font-size:15px;
	background:#F5F5F5;
	color:#000;
	padding:5px 10px;
}
.companyImage {
	height:150px;
	width:150px;
	margin:10px auto;
	padding:40px 0 0 0;
}
.companyImage img {
	max-height:150px;
	max-width:150px;
	border-radius:4px;
	display:block;
	margin:0 auto;
}
.cdetails {
	margin:10px 0px;
	padding:0px 0px;
}
.cdetails li {
	list-style:none;
	padding:0px 0 2px 10px;
	line-height:20px;
}
.cdetails img {
	margin:0 20px 0 0px;
}
</style>
</head>

<body>
<div class="container">
  <?php include('header.php') ?>
  <div class="clearfix">&nbsp;</div>
  <div class="clearfix"></div>
  <h3>Madavat</h3>
  <div class="col-md-2" id="leftcol">
    <div class="dropdown">
  	<button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Dropdown
    <span class="caret"></span>
  	</button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
  </ul>
</div>

  </div>
  <div class="col-md-10" style="padding:0 0 0 0px;">
    <?php
	if(mysql_num_rows($matrimony)==0){
		echo "<div class='panel panel-danger'><div class='panel-heading'>No Results Found</div><div class='panel-body'>Sorry! We Coudn't Find Any Listing. Go back to <a href='index.php'>Homepage</a></div></div>";
		die;
	}

	while($row=mysql_fetch_array($matrimony)){
		echo("<tr><td>".$row['name']."</td></tr>");
	}
	 ?>
  </div>
</div>
</body>
</html>

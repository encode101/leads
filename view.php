<?php 
	include('dbconf.php');
	$categoryName=$_REQUEST["c"];
	switch($categoryName){
		case "C1":
		$categoryName = "islamic";
		break;
		case "C2":
		$categoryName = "doctors";
		break;
		case "C3":
		$categoryName = "repairs";
		break;
		case "C4":
		$categoryName = "services";
		break;
		case "C5":
		$categoryName = "education";
		break;
		case "C6":
		$categoryName = "realestate";
		break;
		case "C7":
		$categoryName = "shopping";
		break;
		case "C8":
		$categoryName = "hotels";
		break;
		case "C9":
		$categoryName = "Music";
		break;
	}
	$subCategory=$_REQUEST["sc"];
	$getsub= mysql_query("SELECT text from categorymap WHERE subcategory='$subCategory'");
	if(!$getsub){
		echo mysql_error();
	}
	while ($subdata=mysql_fetch_array($getsub)){
		$pageTitle= $subdata['text'];
	}
		
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $pageTitle;?></title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
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
	margin:6px 0px;
}
.subTitle {
	font-weight:normal;
	font-size:15px;
	background:#F5F5F5;
	color:#000;
	padding:5px 10px;
	margin:0 0 15px 0;
}
.companyImage {
	height:150px;
	width:150px;
	margin:10px auto;
	padding:20px 0 0 0;
}
.companyImage img {
	max-height:150px;
	max-width:150px;
	border-radius:4px;
	display:block;
	margin:0 auto;
}
.cdetails {
	padding:0px 0px;
	width:250px;
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
<div class="container" id="content" >
  <?php include('header.php') ?>
  <div class="clearfix"></div>
  <ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><span style="text-transform:capitalize;"><?php echo $categoryName; ?></span></li>
    <li><?php echo $pageTitle ?></li>
  </ol>
  <h3 style="margin:0px 0 0 10px;">
    <?php  echo $pageTitle?>
  </h3>
  <hr/>
  <div class="col-md-3"> 
    <!-- Showing All Sub Categories For The Given Category -->
    <div class="subTitle">Related Search</div>
    <?php 
  	$query=mysql_query("SELECT * FROM categorymap WHERE category='$_REQUEST[c]'");
  	while($row=mysql_fetch_array($query)){
		echo "<div class='col-md-12 leftNavElement'><a href='view.php?c=".$row['category']."&sc=".$row['subcategory']."'>".$row['text']."</a></div>";
	}
  ?>
  </div>
  <div class="col-md-9 listing" style="padding:0 0 0 0px;" id="postedComments">
   <?php require_once 'jquery-masterLoader.php' ;  ?>
</div>
<script src="js/jquery-1.10.2.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/infinite-scroll.js"></script> 
</body>
</html>


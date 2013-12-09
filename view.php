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
  <ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><span style="text-transform:capitalize;"><?php echo $categoryName; ?></span></li>
    <li><?php echo $pageTitle ?></li>
  </ol>
  <h3 style="margin:30px 0px;">
    <?php  echo $pageTitle?>
  </h3>
  <hr/>
  <div class="col-md-3" id="leftcol"> 
    <!-- Showing All Sub Categories For The Given Category -->
    <div class="subTitle">Related Search</div>
    <?php 
  	$query=mysql_query("SELECT * FROM categorymap WHERE category='$_REQUEST[c]'");
  	while($row=mysql_fetch_array($query)){
		echo "<div class='col-md-12 leftNavElement'><a href='view.php?c=".$row['category']."&sc=".$row['subcategory']."'>".$row['text']."</a></div>";
	}
  ?>
  </div>
  <div class="col-md-9" style="padding:0 0 0 0px;">
    <?php
	$query=mysql_query("SELECT * FROM data WHERE subcategory='$_REQUEST[sc]'");
	if(mysql_num_rows($query)==0){
		echo "<div class='panel panel-danger'><div class='panel-heading'>No Results Found</div><div class='panel-body'>Sorry! We Coudn't Find Any Listing For <strong>".$pageTitle."</strong>. Go back to <a href='index.php'>Homepage</a></div></div>";
		die;
	}

	while($row=mysql_fetch_array($query)){
		if(empty($row['image'])){
			$path=	"profile.png";
		}
		else $path = $row['image'];
		echo '<div class="listElement">';
		echo("<table class='table table-bordered'>");
		echo("<tr><td width='250'>Company Name</td><td>".$row['company']."</td>
		<td rowspan='8'>
		<div class='companyImage'><img src='uploads/profiles/".$path."' align='middle' alt='".$row['company']."'></div>
		<ul class='cdetails'>
			<li><img src='images/icon_footer_phone.png' width='16' height='16' alt='Mobile'>+91 ".$row['mobile']."</li>
			<li><img src='images/icon_footer_mail.png' width='16' height='16' alt='Email'>".$row['email']."</li>
		</ul></td></tr>"); 
		echo("<tr><td>Mobile Number</td><td>".$row['mobile']."</td></tr>");
		echo("<tr><td>Phone Number</td><td>".$row['phone']."</td</tr>>");
		echo("<tr><td>Address</td><td>".$row['address']."</td></tr>");
		echo("<tr><td>City</td><td>".$row['city']."</td></tr>");
		echo("<tr><td>Description</td><td>".$row['description']."</td></tr>");
		echo("</table></div><div class='clearfix'></div>");
	} ?>
  </div>
</div>
</body>
</html>

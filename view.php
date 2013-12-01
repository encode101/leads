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
	margin:0 0 40px 0;
	background:#FCFCFC;
	/* border-top:1px solid #6699CC; */
	box-shadow:0 0 10px 0px #CCC;
}


.title{}

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
  <div class="col-md-3">
  <!-- Showing All Sub Categories For The Given Category -->
  <?php 
  	$query=mysql_query("SELECT * FROM categorymap WHERE category='$_REQUEST[c]'");
  	while($row=mysql_fetch_array($query)){
		echo "<div class='col-md-12'><a href='view.php?c=".$row['category']."&sc=".$row['subcategory']."'>".$row['text']."</a></div>";
	}
  ?>
  
  </div>
  <div class="col-md-9">
  <?php
	$query=mysql_query("SELECT * FROM data WHERE subcategory='$_REQUEST[sc]'");
	if(mysql_num_rows($query)==0){
		echo "<div class='panel panel-danger'><div class='panel-heading'>No Results Found</div><div class='panel-body'>Sorry! We Coudn't Find Any Listing For <strong>".$pageTitle."</strong>. Go back to <a href='index.php'>Homepage</a></div></div>";
		die;
	}
?>

<!--     <table border="1" width="100%" class="table table-hover table-bordered table-striped">
<tr class="success">
        <td>Company Name</td>
        <td>Name</td>
        <td>Email</td>
        <td>Mobile Number</td>
        <td>Phone Number</td>
        <td>Address</td>
        <td>City</td>
        <td>Description</td>
    </tr>   -->
<?php
	while($row=mysql_fetch_array($query)){
		echo '<div class="listElement">';
		echo("<table class='table table-hover table-bordered table-striped'>");
		echo("<tr><td width='250'>Company Name</td><td>".$row['company']."</td></tr>");
		echo("<tr><td>Name</td><td>".$row['name']."</td></tr>");
		echo("<tr><td>Email</td><td>".$row['email']."</td></tr>");
		echo("<tr><td>Mobile Number</td><td>".$row['mobile']."</td></tr>");
		echo("<tr><td>Phone Number</td><td>".$row['phone']."</td</tr>>");
		echo("<tr><td>Address</td><td>".$row['address']."</td></tr>");
		echo("<tr><td>City</td><td>".$row['city']."</td></tr>");
		echo("<tr><td>Description</td><td>".$row['description']."</td></tr>");
		//echo("<tr><td><td><a href='' class='btn btn-primary pull-right'>Contact Client</a></td></tr>");
		echo("</table></div><div class='clearfix'></div>");
	}
?>
<!-- </table> -->
<?php /* 
  <?php while($row=mysql_fetch_array($query)){ ?>
  <div class="listElement col-md-12">
    <div class="col-md-3 title">Company Name</div>
    <div class="col-md-7"><?php echo($row['company']); ?></div>
    <div class="col-md-3 title">Full Name</div>
    <div class="col-md-7"><?php echo($row['name']); ?></div>
    <div class="col-md-3 title">Email</div>
    <div class="col-md-7"><?php echo($row['email']); ?></div>
    <div class="col-md-3 title">Mobile</div>
    <div class="col-md-7"><?php echo($row['mobile']); ?></div>
    <div class="col-md-3 title">Phone</div>
    <div class="col-md-7"><?php echo($row['phone']); ?></div>
    <div class="col-md-3 title">Address</div>
    <div class="col-md-7"><?php echo($row['address']); ?></div>
    <div class="col-md-3 title">City</div>
    <div class="col-md-7"><?php echo($row['city']); ?></div>
    <div class="clearfix"></div>
  </div>
  <?php } ?>
  */ ?>
  </div>
</div>
</body>
</html>

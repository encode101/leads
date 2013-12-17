<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Bayans, Kirats &amp; Azans</title>
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
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<div class="container">
  <?php include('header.php') ?>
  <div class="clearfix"></div>
  <ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><span style="text-transform:capitalize;">Bayans</span></li>
  </ol>
  <h3 style="margin:0px 0px;"> Bayans, Kirats &amp; Azans </h3>
  <hr/>
  <div class="col-md-12" style="padding:0 0 0 0px;">
    <?php 
	include('dbconf.php');
	$path = 'uploads/';
	$getListing= mysql_query("SELECT * from data");
	if(!$getListing){
		echo mysql_error();
	}
	while ($data=mysql_fetch_array($getListing)){		
	if(mysql_num_rows($getListing)==0){
		echo "<div class='panel panel-danger'><div class='panel-heading'>No Results Found</div><div class='panel-body'>Sorry! We Coudn't Find Any Listing For <strong>. Go back to <a href='index.php'>Homepage</a></div></div>";
		die;
	}
		echo '<div class="listElement">';
		echo("<table class='table table-bordered table-hover'>");
		echo("<tr><td width='250'>Name</td><td>".$data['name']."</td></tr>"); 
		echo("<tr><td>Company Info</td><td>".$data['masjid']."</td></tr>");
		echo("<tr><td>Address</td><td>".$data['address']."</td></tr>");
		echo("<tr><td>City</td><td>".$data['mobile']."</td></tr>");
		echo("<tr><td>Land Line Number</td><td>".$data['email']."</td</tr>");
		echo("<tr><td>Download Links</td><td>
		<div class='col-md-6'>
		<div class='btn-group'>
			<a href='".$path."bayan01.mp3' class='btn btn-success'>Bayan &nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-music'></span></a>
			<a href='".$path."kirath01.mp3' class='btn btn-success'>Kirath &nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-music'></span></a>
			<a href='".$path."azan01.mp3' class='btn btn-success'>Azan &nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-music'></span></a>
		</div>
			</div>
		</td></tr>");
		echo("</table></div><div class='clearfix'></div>");
	}
	?>
  </div>
</div>
<div id="example"></div>
<script src="js/jquery-1.10.2.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>

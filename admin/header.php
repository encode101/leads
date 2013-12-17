<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>AmmiAbba</title>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/isotope.css" />
<link rel="stylesheet" href="../css/style.css" />
<style>
	h3{margin:20px 0px; color:#990000;}
</style>
</head>

<body>
<?php 
	if(isset($_SESSION['pass'])){
		// echo("<a href='logout.php' class='btn btn-danger' style='margin:20px;'>Logout</a>");	
	}
	else {
		$url='login.php';
		header('Location: ' . $url, true, $permanent ? 301 : 302);
	}
?>
<div class="container">
<div class="page-header">
 <ul class="nav nav-pills col-md-12" id="admin-home" style="margin-top:40px;margin-bottom:20px">
    <li class="active"><a href="index.php" id="">Home</a></li>
    <li><a href="matrimony.php" id="admin-matrimony">Matrimonial</a></li>
    <li><a href="bayans.php" id="admin-bayans">Bayans, Kirath &amp; Azan</a></li>
     <li><a href="admin.php" id="admin-admin">Admin</a></li>
  </ul>
  <div class="clearfix"></div>
  </div>
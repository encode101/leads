<?php 
session_start();
if('POST' == $_SERVER['REQUEST_METHOD']){
	if($_REQUEST['password']=="Test/@123"){
		//session_start();
		$_SESSION['pass']="1";
		$url="index.php";
		header('Location: ' . $url, true, $permanent ? 301 : 302);
	}
	else {
		echo("<span class='alert alert-danger'>Invalid Username or Password</span>");
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>AmmiAbba</title>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/isotope.css" />
<link rel="stylesheet" href="../css/style.css" />
<style>
h3 {
	margin:20px 0px;
	color:#990000;
}
</style>
</head>

<body>
<div class="container">
<h2 style="text-align:center; color:#9F0; background:#000; padding:20px; margin:100px 0px 0px 0;">
	<span style="color:red; font-size:">&#9760;</span>	Restricted Access	<span style="color:red; font-size:">&#9760;</span> </h2>
<div class="col-md-6 col-md-offset-3" style="margin-top:100px;">
<form action="login.php" method="post">
	<table class="table table-bordered">
  <tr>
    <td>Username</td>
    <td><input type="text" name="username" class="form-control" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" class="form-control" /></td>
  </tr>
  <tr>
  	<td></td>
    <td><input type="submit" value="Login" class="btn btn-primary" /></td>
  </tr>
</table>
</form>
</div>
</div>
</body>
</html>

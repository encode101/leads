<?php 
	include('dbconf.php');
	$matrimony= mysql_query("SELECT * from data WHERE subcategory='C8S9'");
	if(!$matrimony){
		echo mysql_error();
		die;
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
.profileImage{max-width:150px; float:right; display:block; margin:50px 30px 0 0; border:4px solid #FFF; box-shadow:0 0 10px 5px #CCC; border-radius:5px;}
.profinfo{list-style:none; margin:50px auto; text-align:center; border-top:1px dashed #CCC; border-bottom:1px dashed #CCC; padding:20px 0; width:90%}
.profinfo li{text-align:center;}
</style>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<div class="container">
  <?php include('header.php') ?>
   <ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><span style="text-transform:capitalize;">Madavat</span></li>
  </ol>
  <h3  style="margin:0px 0px 30px 0px;">Madavat</h3>
  <div class="col-md-12" style="padding:0 0 0 0px;">
  
    <?php
	if(mysql_num_rows($matrimony)==0){
		echo "<div class='panel panel-danger'><div class='panel-heading'>No Results Found</div><div class='panel-body'>Sorry! We Coudn't Find Any Listing. Go back to <a href='index.php'>Homepage</a></div></div>";
		die;
	}
	else{
		while($row = mysql_fetch_array($matrimony)){
			echo ("<div class='listElement' style='border-top:5px solid #339900'><table class='table table-bordered'>");
			echo("<tr><td width='300'>Name</td><td>".$row['name']."</td>
			<td rowspan='15' width='250'><img class='profileImage' src='uploads/profiles/".$row['image']."' align='middle' alt='".$row['name']."'>
			<div class='clearfix'></div>
				<ul class='profinfo'>
					<li><strong>".$row['name']."</strong></li>
					<li><em>".$row['profession']."</em></li>
				</ul>
			</td>
			
			</tr>");
			echo("<tr><td>Gender</td><td>".$row['gender']."</td></tr>");
			echo("<tr><td>Father's Name</td><td>".$row['father_name']."</td></tr>");
			echo("<tr><td>Mother's Name</td><td>".$row['mother_name']."</td></tr>");
			echo("<tr><td>DOB</td><td>".$row['dob']."</td></tr>");
			echo("<tr><td>Educational Qualification</td><td>".$row['edu_qual']."</td></tr>");
			echo("<tr><td>Height</td><td>".$row['height']."</td></tr>");
			echo("<tr><td>Complexion</td><td>".$row['complexion']."</td></tr>");
			echo("<tr><td>Profession</td><td>".$row['profession']."</td></tr>");
			echo("<tr><td>Salary</td><td>".$row['salary']."</td></tr>");
			echo("<tr><td>Email</td><td>".$row['email']."</td></tr>");
			echo("<tr><td>Address</td><td>".$row['address']."</td></tr>");
			echo("<tr><td>City</td><td>".$row['city']."</td></tr>");
			echo("<tr><td>Landline Number</td><td>".$row['phone']."</td></tr>");
			echo("<tr><td>Mobile</td><td>".$row['mobile']."</td></tr>");
			echo("<tr><td>Ammiabba Co-ordinator</td><td>".$row['coordinator']."</td></tr>");
			echo("</table></div>");
		}
	}
	 ?>
     
  </div>
</div>
</body>
</html>

<?php 
include("dbconf.php");

error_reporting(0) ;
if($_GET['lastComment']){
set_exception_handler('exception_handler') ;
/*
This should never be used as your  code would be vulnerable to "SQL-Injection 
if (!$result = $db->query('SELECT * FROM world_country WHERE id >' .$_GET['lastComment'] .' ORDER BY id ASC LIMIT 0 , 30')) {
*/
$filtered = filter_input(INPUT_GET, "lastComment", FILTER_SANITIZE_URL);
if (!$result = mysql_query('SELECT * FROM data WHERE id >' .$filtered .' && subcategory="C7S9" ORDER BY id ASC LIMIT 0 , 3')) {
    throw new Exception("<b>Could not read data from the table </b>") ;
}
if(mysql_num_rows($result)==0){
	?>
		<script>
        	$("#noresults").show();
			console.log("Show");
        </script>
	<?php
}

while($row=mysql_fetch_array($result)){
		if(empty($row['image'])){
			$path=	"profile.png";
		}
		else $path = $row['image'];
		echo "<div class='listElement postedComment' id=".$row['id'].">";
		echo("<table class='table table-bordered table-hover'>");
		echo("<tr><td width='150'>Company Name ".$row['id']."</td><td>".$row['company']."</td>
		<td rowspan='8'>
		<div class='companyImage'><img src='uploads/profiles/".$path."' align='middle' alt='".$row['company']."'></div>
		<ul class='cdetails profinfo'>
			<li><img src='images/icon_footer_phone.png' width='16' height='16' alt='Mobile'>+91 ".$row['mobile']."</li>
			<li><img src='images/icon_footer_mail.png' width='16' height='16' alt='Email'>".$row['email']."</li>
		</ul></td></tr>");
		echo("<tr><td>Company Info</td><td>".$row['description']."</td></tr>");
		echo("<tr><td>Address</td><td>".$row['address']."</td></tr>");
		echo("<tr><td>City</td><td>".$row['city']."</td></tr>");
		echo("<tr><td>Land Line Number</td><td>".$row['phone']."</td</tr>");
		echo("</table></div><div class='clearfix'></div>");
		}
/* close connection */
$db->close();
	} else {
    header("Location: index.php");
    die("Denny access");
	}

function exception_handler($exception) {
  echo "Exception cached : " , $exception->getMessage(), "";
}
?>

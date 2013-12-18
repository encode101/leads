<?php 
	$query=mysql_query("SELECT * FROM data WHERE subcategory='$_REQUEST[sc]' ORDER BY id ASC LIMIT 0,3");
	if(mysql_num_rows($query)==0){
		echo "<div class='panel panel-danger'><div class='panel-heading'>No Results Found</div><div class='panel-body'>Sorry! We Coudn't Find Any Listing For <strong>".$pageTitle."</strong>. Go back to <a href='index.php'>Homepage</a></div></div>";
		die;
	}	
	else if($_REQUEST['sc']=='C1S1'){
		$url = '../bayans.php';
		header('Location: ' . $url, true, $permanent ? 301 : 302);
	}
	while($row=mysql_fetch_array($query)){
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
	} ?>
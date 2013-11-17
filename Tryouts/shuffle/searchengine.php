<?php 
	include('dbconf.php');	
	$query=mysql_query("SELECT * FROM categorymap WHERE text = '$_REQUEST[searchquery]'");
	while($row=mysql_fetch_array($query)){
		$category=$row["category"];
		$subcategory=$row["subcategory"];
		$queryText=$row['text'];
	}
	switch($category){
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
	$getsub= mysql_query("SELECT text from categorymap WHERE subcategory='$subcategory'");
	if(!$getsub){
		echo mysql_error();
	}
	while ($subdata=mysql_fetch_array($getsub)){
	
		
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $subdata['text'];?></title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<style>
	body{overflow-y:scroll;}
</style>
<script>
	function loadPage(eve){
		window.location.href = 'http://localhost/poc/tryouts/shuffle';
		console.log("eve");
		//$container.isotope({filter: '.home'});
	}
</script>
</head>

<body>
<div class="container">
 <?php include('header.php') ?>  
  <div class="clearfix">&nbsp;</div>
      <div class="clearfix"></div>
    <ol class="breadcrumb">
    	<li><a href="index.php">Home</a></li>
        <li><span style="text-transform:capitalize;"><span onClick="window.location.href = 'http://localhost/poc/tryouts/shuffle?src=<?php echo $categoryName; ?>'"><?php echo $categoryName; ?></span></span></li>   
        <li><?php echo $subdata['text'];?></li>
    </ol>
<h3 style="margin:30px 0px;"><?php echo $subdata['text'];?></h3>

<?php
if(empty($_REQUEST["locality"])){
		$query=mysql_query("SELECT * FROM data where category='$category' && subcategory='$subcategory'");
	}
	else{
	$query=mysql_query("SELECT * FROM data where category='$category' && subcategory='$subcategory' && address LIKE '%$_REQUEST[locality]%' ");
	}
	if(mysql_num_rows($query)==0){
		echo "<div class='panel panel-danger'><div class='panel-heading'>No Results Found</div><div class='panel-body'>Sorry! We Coudn't Find Any Listing For <strong>".$subdata['text']."</strong>. Go back to <a href='index.php'>Homepage</a></div></div>";
		die;
	}
	}
?>
	<table border="1" width="100%" class="table table-hover table-bordered table-striped">
    	<tr class="success">
        	<td>Company Name</td>
            <td>Name</td>
            <td>Email</td>
            <td>Mobile Number</td>
            <td>Phone Number</td>
            <td>Address</td>
            <td>City</td>
            <td>Description</td>
        </tr>
   
<?php
	while($row=mysql_fetch_array($query)){
		echo("<tr>");
		echo("<td>".$row['company']."</td>");
		echo("<td>".$row['name']."</td>");
		echo("<td>".$row['email']."</td>");
		echo("<td>".$row['mobile']."</td>");
		echo("<td>".$row['phone']."</td>");
		echo("<td>".$row['address']."</td>");
		echo("<td>".$row['city']."</td>");
		echo("<td>".$row['description']."</td>");
		echo("</tr>");
	}
?>
 </table>
</div>
</body>
</html>

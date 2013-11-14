<?php
	include('dbconf.php');
	
	$req = $_REQUEST['req'];
	
	switch($req){

	// Get Matrimony Listing
	
	case "1":	
	
	$listing_query = mysql_query("SELECT * FROM matrimony");
	?>
    <div class="panel panel-success">
    <div class="panel-heading">About (<em>2</em>) Results</div>
	<table class="table">
    <tr class="active" style="font-weight:bold;">
    	<td>Profile</td>
        <td>Name</td>
        <td>Age</td>
        <td>Gender</td>
        <td>Action</td>
    </tr>
	<?php
	while($row=mysql_fetch_array($listing_query)){
		$file = $row['profile_img'];	
		$info = pathinfo($file);	
		$file_name = $info['filename'];		
		echo "<td><span class='modalCaller' id='".$file_name."_large'><img src='images/".$row['profile_img']."' class='profileimg-small' /></span></td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['gender']."</td>";			
		echo "<td><div class='profileLocker'><a href='' class='btn btn-success pull-right'>View Profile</span></div></td></tr>";
	}
	echo "</table></div>"; 
	break;
	
	// Get Real Estate Listing
	
	case "2":
	
	$listing_query = mysql_query("SELECT * FROM realestate");
	?>
    <div class="panel panel-success">
    <div class="panel-heading">About (<em>2</em>) Results</div>
	<table class="table">
    <tr class="active" style="font-weight:bold;">
    	<td>Property Type</td>
        <td>Price</td>
        <td>Bedrooms</td>
        <td>Posted By</td>
    </tr>
	<?php
	while($row=mysql_fetch_array($listing_query)){
		echo "<tr><td>".$row['prop_type']."</td>";
		echo "<td>".$row['prop_price']."</td>";
		echo "<td>".$row['prop_bedrooms']."</td>";	
		echo "<td>".$row['prop_source']."</td></tr>";	
	}
	echo "</table></div>";
	}
	break;
?>
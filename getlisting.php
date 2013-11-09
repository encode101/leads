<?php
	include('dbconf.php');

	// Get Matrimony Listing
	
	/* $listing_query = mysql_query("SELECT * FROM matrimony");
	?>
    <div class="panel panel-success">
    <div class="panel-heading">Matrimonial Search Results (<em>30 of 500</em>)</div>
	<table class="table">
	<?php
	while($row=mysql_fetch_array($listing_query)){
		echo "<td><img src='images/profile.png' class='profileimg-small' /></td>";
		//echo "<tr><td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['gender']."</td>";			
		echo "<td><div class='profileLocker'><a href='' class='btn btn-success pull-right'>View Profile</span></div></td></tr>";
	}
	echo "</table></div>"; */
	
	// Get Real Estate Listing
	$listing_query = mysql_query("SELECT * FROM realestate");
	?>
    <div class="panel panel-success">
    <div class="panel-heading">Real Estate Search Results (<em>30 of 500</em>)</div>
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
?>
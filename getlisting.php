<?php
	include('dbconf.php');
	$listing_query = mysql_query("SELECT * FROM matrimony");
	?>
    <div class="panel panel-success">
    <div class="panel-heading">Matrimonial Search Results (<em>30 of 500</em>)</div>
	<table class="table">
		<tr class="active">
			<!-- <td width="150px">Profile Pic</td>
            <td>Name</td>
            <td>Age</td>
            <td>Gender</td>
            <td></td>
		</tr> -->
	<?php
	while($row=mysql_fetch_array($listing_query)){
		echo "<td><img src='images/profile.png' class='profileimg-small' /></td>";
		//echo "<tr><td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['gender']."</td>";			
		echo "<td><div class='profileLocker'><a href='' class='btn btn-success pull-right'>View Profile</span></div></td></tr>";
	}
	echo "</table></div>";
?>
<?php include("header.php") ?>
    <div clas="entryForm" style="width:500px; float:left">
    <h3>Enter Data To Any Category</h3>
    <form action="process/admin.php" id="dataentry" method="post" enctype="multipart/form-data">
      <table class="table-bordered table-hover " cellpadding="10" width="100%">
        <tr>
          <td>Person Name</td>
          <td><input type="text" class="form-control" name="person-name" /></td>
        </tr>
        <tr>
          <td>Full Name</td>
          <td><input type="text" class="form-control" name="name" /></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" class="form-control" name="email" /></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><input type="text" class="form-control" name="address" /></td>
        </tr>
        <tr>
          <td>City</td>
          <td><input type="text" class="form-control" name="city" /></td>
        </tr>
        <tr>
          <td>Phone Number</td>
          <td><input type="text" class="form-control" name="phone" /></td>
        </tr>
        <tr>
          <td>Mobile Number</td>
          <td><input type="text" class="form-control" name="mobile" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" class="btn btn-primary" value="Submit Form" /></td>
        </tr>
      </table>
	</form>
    </div>
	<!-- Music Upload Form -->
    <div clas="entryForm" style="width:500px; float:left; margin:0 0 0 50px;">
    <h3>Music Category</h3>
    <form action="process/mp3.php" method="post" enctype="multipart/form-data" id="uploadmusic">
      <table class="table-bordered table-hover " cellpadding="10" width="100%">
      <tr>
          <td>Track Title</td>
          <td><input type="text" name="track_title" class="form-control" /> </td>
        </tr>  
        <tr>
          <td>Select File</td>
          <td><input type="file" name="filefield" id="filefield" class="btn btn-success" /> </td>
        </tr>      
        <tr>
          <td></td>
          <td><input type="submit" name="Upload" id="Upload" class="btn btn-primary" value="Upload Mp3 File" /><input type="hidden" name="MAX_FILE_SIZE" value="99999999" /></td>
        </tr>
      </table>
	</form>
    </div>
<?php include("footer.php"); ?>
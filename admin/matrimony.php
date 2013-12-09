<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Admin Console : AmmiAbba</title>
<link rel="stylesheet" href="css/bootstrap.css" />
</head>

<body>
<div style="margin:20px 0 0 0; margin:20px;">
    <div clas="entryForm" style="width:500px; float:left">
    <h3>Enter Data To Any Category</h3>
    <form action="adminprocess.php" id="dataentry" method="post" enctype="multipart/form-data">
      <table class="table-bordered table-hover " cellpadding="10" width="100%">
        <tr>
          <td>Company Name</td>
          <td><input type="text" class="form-control" name="company" /></td>
        </tr>
        <tr>
          <td>Company Logo</td>
          <td><input type="file" name="companyimg" id="companyimg" /><input type="hidden" name="MAX_FILE_SIZE" value="99999999" /></td>
        </tr>
        <tr>
          <td>Desciption</td>
          <td><textarea class="form-control" name="description"></textarea></td>
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
          <td>Category</td>
          <td>
          <input type="hidden" name="category" value="C8" />
          </td>
        </tr>
        <tr>
          <td>Sub Category</td>
          <td>
          <input type="hidden" name="subcategory" value="C8S9" />          
          </td>
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
    <form action="uploadmp3.php" method="post" enctype="multipart/form-data" id="uploadmusic">
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
  </div>
<script src="js/jquery-1.10.2.js"></script> 
<script src="js/admin.js"></script> 
</body>
</html>

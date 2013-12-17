<?php include("header.php") ?>
<div class="col-md-10">
    <h3>Admin Matrimony</h3>
    <form action="process/matrimony.php" id="dataentry" method="post" enctype="multipart/form-data">
      <table class="table table-bordered table-hover" cellpadding="10">
        <tr>
          <td>Bride/Grooms Name</td>
          <td><input type="text" class="form-control" name="name" /></td>
          <td>Education Qualification</td>
          <td><input type="text" class="form-control" name="education" /></td>          
        </tr>
        <tr>
          <td>Gender</td>
          <td><input type="radio" name="gender" value="male">
            Male
            <input type="radio" name="gender" value="female">
            Female</td>
            <td>Height</td>
          <td><input type="text" class="form-control" name="height" /></td>
          
        </tr>
        <tr>
          <td>Profile Image</td>
          <td><input type="file" name="companyimg" id="companyimg" />
            <input type="hidden" name="MAX_FILE_SIZE" value="99999999" /></td>
            <td>Complexion</td>
          <td><input type="text" class="form-control" name="complex" /></td>
          
        </tr>
        <tr>
          <td>Father's Name</td>
          <td><input class="form-control" name="fathername" /></td>
          <td>AmmiAbba Co-ordinator Number</td>
          <td><input type="text" class="form-control" name="coordinator" /></td>
        </tr>
        <tr>
          <td>Mother's Name</td>
          <td><input type="text" class="form-control" name="mothername" /></td>
          <td>Profession</td>
          <td><input type="text" class="form-control" name="profession" /></td>          
        </tr>
        <tr>
          <td>Date Of Birth</td>
          <td><input type="text" class="form-control" name="dob" /></td>
          <td>Salary</td>
          <td><input type="text" class="form-control" name="salary" /></td>          
        </tr>
        <tr>
          <td>Address</td>
          <td><input type="text" class="form-control" name="address" /></td>
          <td></td>
           <td><input type="hidden" name="category" value="C8" />
            <input type="hidden" name="subcategory" value="C8S9" />
          <input type="submit" class="btn btn-primary" value="Submit Form" /></td>
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
          <td>Email</td>
          <td><input type="text" class="form-control" name="email" /></td>
        </tr>
      </table>
    </form>
</div>
<?php include("footer.php"); ?>
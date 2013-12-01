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
    <form action="" id="dataentry">
      <table class="table-bordered table-hover " cellpadding="10" width="100%">
        <tr>
          <td>Company Name</td>
          <td><input type="text" class="form-control" name="company" /></td>
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
          	<select class="form-control" name="category">
            	<option value="C1">Islamic</option>
                <option value="C8">Matrimonials</option>
                <option value="C2">Doctors</option>
                <option value="C5">Education</option>
                <option value="C3">Repair</option>
                <option value="C4">Services</option>
                <option value="C7">Shopping</option>
                <option value="C6">Real Estate</option>
                <option value="C10">Hotels</option>
                <option value="C9">Music</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Sub Category</td>
          <td>
          <select class="form-control" name="subcategory">
          <optgroup label="Islamic">
            <option value="C1S1">Bayans & Kirath </option>
            <option value="C1S2">Azan</option>
            <option value="C1S3">Hajj & Umara tours organisers </option>
            <option value="C1S4">Madras a & Arabic schools</option>
            <option value="C1S5">Baitulmals</option>
            <option value="C1S6">Govt schemes for Muslim</option>
            <option value="C1S7">Jobs for imam & mauzin</option>
            <option value="C1S8">List of social organization</option>
            <option value="C1S9"> dargha of India</option>
            </optgroup>
            <optgroup label="Doctors">
            <option value="C2S1">Dentists</option>
            <option value="C2S2">Dermatologists</option>
            <option value="C2S3">Gynecologist & pediatricians</option>
            <option value="C2S4">Psychiatrists</option>
            <option value="C2S5">Cardiologist</option>
            <option value="C2S6">Diabetologist</option>
            <option value="C2S7">General Physician</option>
            <option value="C2S8">Orthopedic</option>
            <option value="C2S9">Hospitals and Nursing home</option>
            <option value="C2S10">Medical Tourism</option>
            <option value="C2S11">Neurosurgeons</option>
            <option value="C2S12">Sexologist </option>
            <option value="C2S13">Thyroid</option>
            <option value="C2S14">Urologists</option>
            <option value="C2S15">Veterinary</option>
            <option value="C2S16">Homeopathic</option>
            <option value="C2S17">Unani</option>
            <option value="C2S18">Ent</option>
            <option value="C2S19">Ayurvadic</option>
            <option value="C2S20">Chemists</option>
            <option value="C2S21">Lab & Research</option>
            <option value="C2S22"> Medical Equipments </option>
			</optgroup>
            <optgroup label="Repairs">
            <option value="C3S1">Car </option>
            <option value="C3S2">Motorcycle</option>
            <option value="C3S3">Mobile Phone</option>
            <option value="C3S4">Computers</option>
            <option value="C3S5">Fan</option>
            <option value="C3S6">Microwave Oven</option>
            <option value="C3S7">Refrigerator</option>
            <option value="C3S8">Television</option>
            <option value="C3S9">Washing Machin</option>
            <option value="C3S10">Moter winding</option>
            <option value="C3S11">AC , Mixer Grinders</option>
            <option value="C3S12">Others</option>
            </optgroup>
            <optgroup label="Services">
            <option value="C4S1">Ligal Advisor</option>
            <option value="C4S2">Courier Services</option>
            <option value="C4S3">Dry cleaners</option>
            <option value="C4S4">Duplicate Key Makers</option>
            <option value="C4S5">Gents & Ladies Tailors</option>
            <option value="C4S6">National & International Jobs</option>
            <option value="C4S7">Drycleaners & Laundry services </option>
            <option value="C4S8">Transporters</option>
            <option value="C4S9">Driving Schools</option>
            <option value="C4S10">Charted Accountant</option>
            <option value="C4S11">Pest Control Services</option>
            <option value="C4S12">Hajj & umhar organizers </option>
            <option value="C4S13">Air Ticketing & Immigration</option>
            <option value="C4S14">Bus Services</option>
            <option value="C4S15">Car Hire </option>
            <option value="C4S16">Hotel Reservation </option>
            <option value="C4S17">Railway Ticketing Agents</option>
            <option value="C4S18">Hotels & Lodging (Local & Outstation )</option>
            <option value="C4S19"> food Restaurants (Local & Outstation )</option>
            </optgroup>
            <optgroup label="Education">
            <option value="C5S1">Schools & Tuitions</option>
            <option value="C5S2">Collage & Tuitions </option>
            <option value="C5S3">Professional Collages & Tuitions</option>
            <option value="C5S4">Job oriental courses</option>
            <option value="C5S5"> Degree Collages</option>
            <option value="C5S6">Boarding Schools</option>
            <option value="C5S7">Teacher training Colleges</option>
            <option value="C5S8">International Schools</option>
            <option value="C5S9">Arabic Schools</option>
            </optgroup>
            <optgroup label="RealEstate">
            <option value="C6S1">Builders & Developers</option>
            <option value="C6S2">Real Estate Agents</option>
            <option value="C6S3">Men & women PG</option>
            <option value="C6S4">Building Material Suppliers</option>
            <option value="C6S5">Engineering Works</option>
            <option value="C6S6">Carpenter Services</option>
            <option value="C6S7">Electricians Services</option>
            <option value="C6S8">Painting Services</option>
            <option value="C6S9">Plumbing Services </option>
            <option value="C6S10">Interior Designers</option>
            <option value="C6S11">Flooring Contractors</option>
            <option value="C6S12">Mason Contractors</option>
            <option value="C6S13">Home Décor Dealers</option>
            <option value="C6S14">Paints and Hardware</option>
            <option value="C6S15">Granite ,Marble & Tiles</option>
            <option value="C6S16">Centering Works & Material</option>
            <option value="C6S17">Bar Binding Works</option>
            <option value="C6S18">Electrical & Lights fitting Dealers</option>
            <optgroup label="Shopping">
            <option value="C7S1">Gents Shopping</option>
            <option value="C7S2">Ladies shopping </option>
            <option value="C7S3">Kids Shopping</option>
            <option value="C7S4">Watch Dealers</option>
            <option value="C7S5">Departmental Stores</option>
            <option value="C7S6">Home Appliances</option>
            <option value="C7S7">Book Stores</option>
            <option value="C7S8">Jewellery Showrooms</option>
            <option value="C7S9">Gift Shops</option>
            <option value="C7S10">Fashion Designers</option>
            <option value="C7S11">Car old & new dealers</option>
            <option value="C7S12">Two wheelers dealers</option>
            <option value="C7S13">Bicycle Dealers </option>
            </optgroup>
            <optgroup label="Matrimonials">
            	<option value="C8S1">Membership For Matrimonial</option>
                <option value="C8S2">Wedding Halls</option>
                <option value="C8S3">Caterers Services</option>
                <option value="C8S4">Flowers Decorators</option>
                <option value="C8S5">Dulhan & Dulha wear</option>
                <option value="C8S6">Beauty Parlour</option>
                <option value="C8S7">Mehndi Designer</option>
                <option value="C8S8">Jewellery Showrooms</option>
            </optgroup>
           </select>
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

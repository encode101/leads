<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>AmmiAbba</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/isotope.css" />
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<div class="container">
  <?php include('header.php') ?>  
  <?php include('top-menu.php') ?> 
  <div class="clearfix">&nbsp;</div>
  
  <!-- Search Panel -->
  
  <div class="searchPanel col-md-12">
    <form id="homeSearch" action="searchengine.php" method="post">
      <div class="col-md-2">
        <select name="city" class="form-control">
          <option disabled="disabled">Please Select A City</option>
          <option value="bangalore" selected="selected">Bangalore</option>
          <option value="mumbai">Mumbai</option>
          <option value="pune">Pune</option>
        </select>
      </div>
      <div class="col-md-6 homesearchInputHolder">
        <input type="text" name="searchquery" class="form-control" placeholder="E.g. Real Estate" required="required" />
      </div>
     <div class="col-md-2">
        <input type="text" class="form-control" placeholder="Locality" name="locality" />
      </div>
      <div class="col-md-2">
        <input type="submit" class="btn btn-success" value="Search" />
      </div>
    </form>
    <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
  <div id="ajaxified-data">
    <div class="home islamic" id="islamic">
      <div class="element block-islamic">
        <div class="blockTitle">Islamic</div>
      </div>
    </div>
    <div class="home matrimonials" id="matrimonials">
      <div class="element block-matrimonial">
        <div class="blockTitle">Matrimonial</div>
      </div>
    </div>
    <div class="home doctors" id="doctors">
      <div class="element block-doctors">
        <div class="blockTitle">Doctors</div>
      </div>
    </div>
    <div class="home education" id="education">
      <div class="element block-education">
        <div class="blockTitle">Education</div>
      </div>
    </div>
    <div class="home repairs" id="repairs">
      <div class="element block-repair">
        <div class="blockTitle">Repair</div>
      </div>
    </div>
    <div class="home shopping" id="shopping">
      <div class="element block-shopping">
        <div class="blockTitle">Shopping</div>
      </div>
    </div>
    <div class="home realestate" id="realestate">
      <div class="element block-realestate">
        <div class="blockTitle">Real Estate</div>
      </div>
    </div>
    <div class="home hotels">
      <div class="element block-hotels" id="hotels">
        <div class="blockTitle">Hotels</div>
      </div>
    </div>
    <div class="home music" id="music">
      <div class="element block-music">
        <div class="blockTitle">Music</div>
      </div>
    </div>
    
    <!-- Shopping Sub Category -->
    
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S1">Gents Shopping</a></div>
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S2">Ladies shopping </a></div>
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S3">Kids Shopping</a></div>
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S4">Watch Dealers</a></div>
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S5">Departmental Stores</a></div>
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S6">Home Appliances</a></div>
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S7">Book Stores</a></div>
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S8">Jewellery Showrooms</a></div>
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S9">Gift Shops</a></div>
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S10">Fashion Designers</a></div>
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S11">Car old & new dealers</a></div>
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S12">Two wheelers dealers</a></div>
    <div class="element shopping"><a href="view.php?c=C7&sc=C7S13">Bicycle Dealers</a></div>
    
    <!-- Doctors Sub Category-->
    
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S1">Dentists</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S2">Dermatologists</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S3">Gynecologist & pediatricians</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S4">Psychiatrists</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S5">Cardiologist</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S6">Diabetologist</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S7">General Physician</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S8">Orthopedic</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S9">Hospitals and Nursing home</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S10">Medical Tourism</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S11">Neurosurgeons</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S12">Sexologist</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S13">Thyroid</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S14">Urologists</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S15">Veterinary</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S16">Homeopathic</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S17">Unani</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S18">Ent</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S19">Ayurvadic</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S20">Chemists</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S21">Lab & Research</a></div>
    <div class="element doctors"><a href="view.php?c=C2&sc=C2S22">Medical Equipments</a></div>
    
    <!-- Education -->
    
    <div class="element education "><a href="view.php?c=C5&sc=C5S1 "> Schools & Tuitions </a></div>
    <div class="element education "><a href="view.php?c=C5&sc=C5S2 "> Collage & Tuitions </a></div>
    <div class="element education "><a href="view.php?c=C5&sc=C5S3 "> Professional Collages & Tuitions </a></div>
    <div class="element education "><a href="view.php?c=C5&sc=C5S4 "> Job oriental courses </a></div>
    <div class="element education "><a href="view.php?c=C5&sc=C5S5 "> Degree Collages </a></div>
    <div class="element education "><a href="view.php?c=C5&sc=C5S6 "> Boarding Schools </a></div>
    <div class="element education "><a href="view.php?c=C5&sc=C5S7 "> Teacher training Colleges </a></div>
    <div class="element education "><a href="view.php?c=C5&sc=C5S8 "> International Schools </a></div>
    <div class="element education "><a href="view.php?c=C5&sc=C5S9 "> Arabic Schools </a></div>
    
    <!-- Islamic -->
    
    <div class="element islamic"><a href="view.php?c=C1&sc=C1S1">Bayans & Kirath </a></div>
    <div class="element islamic"><a href="view.php?c=C1&sc=C1S2">Azan</a></div>
    <div class="element islamic"><a href="view.php?c=C1&sc=C1S3">Hajj & Umara tours organisers </a></div>
    <div class="element islamic"><a href="view.php?c=C1&sc=C1S4">Madras a & Arabic schools</a></div>
    <div class="element islamic"><a href="view.php?c=C1&sc=C1S5">Baitulmals</a></div>
    <div class="element islamic"><a href="view.php?c=C1&sc=C1S6">Govt schemes for Muslim</a></div>
    <div class="element islamic"><a href="view.php?c=C1&sc=C1S7">Jobs for imam & mauzin</a></div>
    <div class="element islamic"><a href="view.php?c=C1&sc=C1S8">List of social organization</a></div>
    <div class="element islamic"><a href="view.php?c=C1&sc=C1S9"> dargha of India</a></div>
    
    <!-- Repairs -->
    
    <div class="element repairs"><a href="view.php?c=C3&sc=C3S1">Car </a></div>
    <div class="element repairs"><a href="view.php?c=C3&sc=C3S2">Motorcycle</a></div>
    <div class="element repairs"><a href="view.php?c=C3&sc=C3S3">Mobile Phone</a></div>
    <div class="element repairs"><a href="view.php?c=C3&sc=C3S4">Computers</a></div>
    <div class="element repairs"><a href="view.php?c=C3&sc=C3S5">Fan</a></div>
    <div class="element repairs"><a href="view.php?c=C3&sc=C3S6">Microwave Oven</a></div>
    <div class="element repairs"><a href="view.php?c=C3&sc=C3S7">Refrigerator</a></div>
    <div class="element repairs"><a href="view.php?c=C3&sc=C3S8">Television</a></div>
    <div class="element repairs"><a href="view.php?c=C3&sc=C3S9">Washing Machin</a></div>
    <div class="element repairs"><a href="view.php?c=C3&sc=C3S10">Moter winding</a></div>
    <div class="element repairs"><a href="view.php?c=C3&sc=C3S11">AC , Mixer Grinders</a></div>
    <div class="element repairs"><a href="view.php?c=C3&sc=C3S12">Others</a></div>
    
    <!-- Real Estate -->
    
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S1">Builders & Developers</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S2">Real Estate Agents</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S3">Men & women PG</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S4">Building Material Suppliers</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S5">Engineering Works</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S6">Carpenter Services</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S7">Electricians Services</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S8">Painting Services</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S9">Plumbing Services </a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S10">Interior Designers</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S11">Flooring Contractors</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S12">Mason Contractors</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S13">Home Décor Dealers</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S14">Paints and Hardware</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S15">Granite ,Marble & Tiles</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S16">Centering Works & Material</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S17">Bar Binding Works</a></div>
    <div class="element realestate"><a href="view.php?c=C6&sc=C6S18">Electrical & Lights fitting Dealers</a></div>
  </div>
<div class="clearfix cus-hspacer-30"></div>
</div>
<script src="js/jquery-1.10.2.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.isotope.min.js"></script> 
<script src="js/typeahead.min.js"></script> 
<?php /*
	if(isset($_REQUEST['src'])){
	?>
    <script>
    	 $('#ajaxified-data').isotope({filter: '<?php echo $_REQUEST['src']; ?>'});
    </script>
    <?php
	}*/
?>
<script src="js/shuffle.js"></script> 
<script src="js/main.js"></script>
</body>
</html>

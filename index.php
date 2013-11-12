<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AmmiAbba</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<div class="wrapper col-md-10 col-md-offset-1">
  <div class="page-header">
    <div class="branding pull-left"><a href="index.php"><img src="images/ammiabba.png" width="199" height="32" alt="AmmiAbba" /></a></div>
    <div class="customer-care pull-right"><img src="images/customer-care.png" width="255" height="42" alt="Customer Care: 9886406573" /></div>
    <div class="clearfix"></div>
  </div>
  <div class="searchPanel">
    <p class="searchTitle"> For all your Local Needs in Bangalore.</p>
    <form id="homeSearch">
      <div class="col-md-2">
        <select name="city" class="form-control">
          <option disabled="disabled">Please Select A City</option>
          <option value="bangalore" selected="selected">Bangalore</option>
          <option value="mumbai">Mumbai</option>
          <option value="pune">Pune</option>
        </select>
      </div>
      <div class="col-md-8 homesearchInputHolder">
        <input type="text" class="form-control" placeholder="E.g. Real Estate" />
      </div>
      <!-- <div class="col-md-3">
        <input type="text" class="form-control" placeholder="Locality" />
      </div> -->
      <div class="col-md-2">
        <input type="submit" class="btn btn-success" value="Search" />
      </div>
    </form>
    <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
  <!-- Bottom Panel -->
  <div class="services" id="ajaxified-data">
    <div class="col-md-3 col-sm-3">
      <div class="element block-islamic">
        <div class="blockTitle">Islamic</div>
      </div>
    </div>
    <div class="col-md-3 col-sm-3" id="matrimony">
      <div class="element block-matrimonial">
        <div class="blockTitle">Matrimonial</div>
      </div>
	</div>
    <div class="col-md-3 col-sm-3">
      <div class="element block-doctors">
        <div class="blockTitle">Doctors</div>
      </div>
    </div>
    <div class="col-md-3 col-sm-3">
      <div class="element block-education">
      	<div class="blockTitle">Education</div>
      </div>
    </div>
    <div class="clearfix cus-hspacer-30">&nbsp;</div>
    <div class="col-md-3 col-sm-3">
      <div class="element block-repair">
        <div class="blockTitle">Repair</div>
      </div>
    </div>
    <div class="col-md-3 col-sm-3">
      <div class="element block-shopping">
      	<div class="blockTitle">Shopping</div>
      </div>
    </div>
    <div class="col-md-3 col-sm-3" id="realestate">
      <div class="element block-realestate">
      	<div class="blockTitle">Real Estate</div>
      </div>
    </div>
    <div class="col-md-3 col-sm-3">
      <div class="element block-hotels">
      	<div class="blockTitle">Hotels</div>
      </div>
    </div>
    <div class="clearfix cus-hspacer-30">&nbsp;</div>
    <div class="col-md-3 col-sm-3">
      <div class="element block-music">
      	<div class="blockTitle">Music</div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="clearfix cus-hspacer-25"></div>
</div>
<div class="clearfix cus-hspacer-25"></div>
<div class="footer"> &copy; Copyright 2013. All Rights Reserved. View <a href="disclaimer.php">Disclaimer</a> </div>
<div class="clearfix cus-hspacer-25"></div>
</div>

<!-- Generic Modal -->

<div class="modal fade" id="profilePic" tabindex="-1" role="dialog" aria-labelledby="profilePic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Profile Picture</h4>
      </div>
      <div class="modal-body">
       <div id="profilePicHolder">
   	   </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="js/jquery-1.10.2.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/typeahead.min.js"></script> 
<script src="js/script.js"></script>
</body>
</html>

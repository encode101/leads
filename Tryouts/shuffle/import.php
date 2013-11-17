<?php 

include_once('dbconf.php');

if ($_FILES[csv][size] > 0) {

    //get the csv file
    $file = $_FILES[csv][tmp_name];

    mysql_query("
        LOAD DATA LOW_PRIORITY LOCAL 
        INFILE '$file'
        REPLACE INTO TABLE searchtable 
        FIELDS TERMINATED BY ',' 
        OPTIONALLY ENCLOSED BY '\"' 
        ESCAPED BY '\"' 
        LINES TERMINATED BY '\n' 
        (phrase, category, subcategory)
        SET promo_name = TRIM(BOTH '\r' FROM promo_name);
    ");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Import a CSV File with PHP & MySQL</title>
</head>

<body>

<?php if (!empty($_GET[success])) { echo "<b>Your file has been imported.</b><br><br>"; } //generic success notice ?>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  Choose your file: <br />
  <input name="csv" type="file" id="csv" />
  <input type="submit" name="Submit" value="Submit" />
</form>

</body>
</html> 
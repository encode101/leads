<?php 
	include('dbconf.php');	
	if(isset($_FILES['companyimg'])){
		$file=$_FILES['companyimg'];
		$upload_directory='uploads/profiles/';
		$ext_str = "gif,png,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
		$allowed_extensions=explode(',',$ext_str);
		//$max_file_size = 99999999;	//10 mb remember 1024bytes =1kbytes /* check allowed extensions here */
		$ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character
		
		if (!in_array($ext, $allowed_extensions) ) {
			echo "Only <strong>".$ext_str."</strong> files allowed to upload"; // exit the script by warning
		} /* check file size of the file if it exceeds the specified size warn user */
		
		$path=md5(microtime()).'.'.$ext;
		
		if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){
			//mysql_query("INSERT INTO data(track_name) VALUES ('$path')");
			$query = mysql_query("INSERT INTO data(company, name, email, mobile, phone, address, category, subcategory, description, city,image) VALUES ('$_REQUEST[company]','$_REQUEST[name]','$_REQUEST[email]','$_REQUEST[mobile]','$_REQUEST[phone]','$_REQUEST[address]','$_REQUEST[category]','$_REQUEST[subcategory]','$_REQUEST[description]','$_REQUEST[city]','$path')");
			echo "Your File Successfully Uploaded";
		}
		
		else{
			echo "The file cant moved to target directory."; //file can't moved with unknown reasons likr cleaning of server temperory files cleaning
		}
		echo "Done";
	}; 
	//echo("Finished!");

	/* if(!$query){
		echo(mysql_error());
	} */
	
?>
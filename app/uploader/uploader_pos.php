<?php 
$upload_directory=dirname(__FILE__).'/';  //-------online
 
if (!empty($_FILES['my_file'])) { 
		//check for image submitted
	if ($_FILES['my_file']['error'] > 0) { 
		// check for error re file
        echo "Error: " . $_FILES["my_file"]["error"] ;			
    } else {
		//move temp file to our server            
		move_uploaded_file($_FILES['my_file']['tmp_name'], 
		$upload_directory . $_FILES['my_file']['name']);	
		echo 'Uploaded File.';					
		
		//include('read.php');	
    }
} else {
        die('File not uploaded.'); 
		// exit script
}


	
?>
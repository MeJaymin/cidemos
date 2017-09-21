<?php
error_reporting(E_ALL);
 ini_set("display_errors", 1); 
if(isset($_FILES["file"]["name"]) && $_FILES["file"]["name"] != ''){
	$newfilename = $_FILES["file"]["name"];
	$upload = move_uploaded_file($_FILES["file"]["tmp_name"], "/home/inlooh/public_html/master/assets/user_videos/".$newfilename);
	if($upload){
	    $data = array('status' => 1 , 'message' => 'Video successfully uploaded' );
	}
	else{
	    $data = array('status' => 0 , 'message' => 'Error in uploading');
	}
	
}
else{
	$data = array('status' => 0, 'message' => 'Please select video' );
}
echo json_encode($data); die;
?>


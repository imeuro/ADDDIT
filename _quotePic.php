<?php
$basepath = 'https://'.$_SERVER['SERVER_NAME'].'/uploads';
if ( $_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'meuro.dev' ) {
	$basepath = 'https://'.$_SERVER['SERVER_NAME'].'/ADDDIT/uploads';
}
$target_base 		= "./uploads/";
$target_dir_URI 	= $target_base . date('Y') . '/' . date('m') . '/';
$target_file_URI 	= $target_dir_URI . basename($_FILES["fileToUpload"]["name"]);
$target_dir_URL 	= $basepath. '/' . date('Y') . '/' . date('m') . '/';
$target_file_URL 	= $target_dir_URL . basename($_FILES["fileToUpload"]["name"]);
$max_filesize		= 500000;
$allowed_files		= array('jpg','png','step', 'stp', 'stl', 'x_t', 'glb', 'zip');
$reply				= [];
$FileType 			= strtolower(pathinfo($target_file_URI,PATHINFO_EXTENSION));
$reply['success'] 	= 1; // stay positive.


// Check if image file is a actual image or fake image
if(isset($_FILES['fileToUpload'])) {

	$reply['filename'] = basename($_FILES["fileToUpload"]["name"]);

	// Check if dir already exists
	if (!file_exists($target_dir_URI)) {
		mkdir($target_dir, 0764, true);
	}

	// Check if file already exists
	if (file_exists($target_file_URI)) {
	  $reply['text'] = "Sorry, a file with this name already exists.";
	  $reply['success'] = 0;
	}

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > $max_filesize) {
	  $reply['text'] = "Sorry, your file is too large.";
	  $reply['success'] = 0;
	}

	// Allow certain file formats
	if(!in_array(strtolower($FileType), $allowed_files) ) {
	  $reply['text'] = "Sorry, this kind of file is not allowed.";
	  $reply['success'] = 0;
	}

	// Check if $reply['success'] is NOT set to 0 by an error
	if ($reply['success'] !== 0) {
	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file_URI)) {
	    $reply['text'] = "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	    $reply['fileURL'] = $target_file_URL;
	  }

	}

	
}
echo json_encode($reply);
?>


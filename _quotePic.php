<?php

$basepath = 'https://'.$_SERVER['SERVER_NAME'].'/uploads';
if ( $_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'meuro.dev' ) {
	$basepath = 'https://'.$_SERVER['SERVER_NAME'].'/ADDDIT/uploads';
}
$target_base 		= "./uploads/";
$tmp_dir_URI 		= $target_base . 'temp/';
$tmp_dir_URL 		= $basepath. '/temp/';

$max_filesize		= 5000000;
$allowed_files		= array('obj', '3ds', 'stl', 'step', 'ply', 'gltf', 'glb', 'off', '3dm', 'fbx', 'dae', 'wrl', 'amf', '3mf', 'stp', 'ifc', 'bim');
$reply				= [];

$reply['success'] 	= 1; // stay positive.

// print_r($_POST);

// UPLOAD FILE IN TEMP FOLDER
if ($_POST['action'] == 'upload') {
	if(isset($_FILES['fileToUpload'])) {
		$uploadID 			= bin2hex(random_bytes(3));
		$newfilename 		= $uploadID . '_' . basename($_FILES["fileToUpload"]["name"]);	

		$tmp_file_URI 		= $tmp_dir_URI . $newfilename;
		$tmp_file_URL 		= $tmp_dir_URL . $newfilename;
		$reply['filename'] 	= $newfilename;
		$reply['quoteID'] 	= date('Y').date('m').'-'.$uploadID;
		$FileType 			= strtolower(pathinfo($tmp_file_URI,PATHINFO_EXTENSION));
		
		// Check if dir already exists
		if (!file_exists($tmp_dir_URI)) {
			mkdir($tmp_dir_URI, 0764, true);
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
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $tmp_file_URI)) {
				$reply['text'] = "The file ". htmlspecialchars( $newfilename ). " has been uploaded.";
				$reply['tmp_fileURL'] = $tmp_file_URL;
				$reply['tmp_filePath'] = $tmp_file_URI;
			} else {
				$reply['success'] = 0;
				$reply['text'] = "There was a problem while moving ".$_FILES["fileToUpload"]["tmp_name"]." file to the temporary folder(".$tmp_file_URI.")";
			}
		}

		
	}
	echo json_encode($reply);
}


// SPOSTA IN FOLDER ANNO/MESE
if ($_POST['action'] == 'confirm'){
	if (isset($_POST['fileToMove'])) {

		$filename = basename($_POST["fileToMove"]);


		$target_dir_URI 	= $target_base . date('Y') . '/' . date('m') . '/';
		$target_dir_URL 	= $basepath. '/' . date('Y') . '/' . date('m') . '/';
		$target_file_URI 	= $target_dir_URI . $filename;
		$target_file_URL 	= $target_dir_URL . $filename;

		// echo "<br><br>";
		// print_r($target_file_URI);
		// echo "<br>";
		// print_r($target_dir_URI);
		// echo "<br><br> ---------------------------------";

		if (!file_exists($target_dir_URI)) {
			mkdir($target_dir_URI, 0764, true);
		}
		// Check if file already exists
		if (file_exists($target_file_URI)) {
			$reply['text'] = "Sorry, a file with this name already exists on our server.";
			$reply['success'] = 0;
		} else {

			if ( rename($tmp_dir_URI.$filename, $target_dir_URI.$filename) ) {
				$reply['text'] = "The file ". $filename . " was moved to its permanent location.";
				// $reply['text'] = "The file ". $tmp_dir_URI.$filename . " was moved to ".$target_dir_URI.$filename.".";
				$reply['target_file_URL'] = $target_file_URL;
				$reply['target_file_URI'] = $target_file_URI;
			} else {
				$reply['text'] = "Error moving ". $filename. " to its permanent location.";
				// $reply['text'] = "Error moving ". $filename. " to ".$target_dir_URI.".";
				$reply['tmp_dir_URI'] = $tmp_dir_URI;
				$reply['target_file_URL'] = $target_file_URL;
				$reply['target_file_URI'] = $target_file_URI;
				$reply['success'] = 0;
			}

		}
		echo json_encode($reply);
	}
}

?>


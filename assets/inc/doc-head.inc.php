<?php
$basepath = '//'.$_SERVER['SERVER_NAME'];
if ( $_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'meuro.dev' ) {
	$basepath = '//'.$_SERVER['SERVER_NAME'].'/ADDDIT';
}
//echo 'i'.$basepath;
$rand = random_int(9, 99999);
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" as="style">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
<link rel="preload" href="<?php echo $basepath . '/assets/css/adddit-website.css?cb='. $rand ?>" as="style" />
<link rel="stylesheet" type="text/css" href="<?php echo $basepath . '/assets/css/adddit-website.css?cb='. $rand ?>">

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $basepath . '/assets/favicon/apple-touch-icon.png'; ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $basepath . '/assets/favicon/favicon-32x32.png'; ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $basepath . '/assets/favicon/favicon-16x16.png'; ?>">
<link rel="manifest" href="<?php echo $basepath . '/assets/favicon/site.webmanifest'; ?>">
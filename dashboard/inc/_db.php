<?php
if ($_SERVER['HTTP_HOST'] == 'localhost') {
	$DATABASE_HOST = 'database';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = 'ricorda';
	$DATABASE_NAME = 'adddit';
	$DATABASE_PREFIX = 'ddd_';

} elseif ($_SERVER['HTTP_HOST'] == 'meuro.dev') {
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = 'ricorda';
	$DATABASE_NAME = 'adddit';
	$DATABASE_PREFIX = 'ddd_';
	
}

?>
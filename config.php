<?php
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'inventaris';
	$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	define('ROOT_DIR', dirname(__FILE__));
	define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
?>

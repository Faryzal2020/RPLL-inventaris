<?php
	session_start();
	include_once("config.php");

	session_unset();
	session_destroy();
	header('Location: '.ROOT_URL.'/login.php');
?>
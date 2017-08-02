<?php
	session_start();
	$_SESSION['login'] = NULL;
	$_SESSION['admin'] = NULL;
	header("refresh:0;index.php");
?>

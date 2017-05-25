<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:../index.php');
		exit(0);
	}
	var_dump($_FILES['file']);
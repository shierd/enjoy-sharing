<?php
	require 'inc/config.php';
	
	$byuser=$_GET['byuser'];
	$filename=$_GET['filename'];
	$file=USERHOME.(10000+$byuser).'/'.$filename;
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.$filename.'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: '.filesize($file));
	readfile($file);
	exit(0);
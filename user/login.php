<?php


$username=isset($_POST['username']) ? $_POST['username'] : null;		//缺过滤
$userpass=isset($_POST['userpass']) ? $_POST['userpass'] : null;

if($username=='admin'&&$userpass=='admin'){
	session_start();
	$_SESSION['user']=ture;
	header('location:user.php');
}
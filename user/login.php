<?php

require '../inc/DB.class.php';

$useremail=isset($_POST['useremail']) ? $_POST['useremail'] : null;		//缺过滤
$userpass=isset($_POST['userpass']) ? $_POST['userpass'] : null;

$sql="select u_pass from user where u_email='$useremail'";
DB::connect();
$res=DB::query($sql);
DB::close();

if($userpass==$res[0]['u_pass']){
	session_start();
	$_SESSION['user']=ture;
	header('location:user.php');
}else{
	echo '用户名或密码错误';
}
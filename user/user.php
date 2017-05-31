<?php

require 'inc/User.class.php';

//缺过滤
if(isset($_POST['action'])) $action=$_POST['action'];


if($action=='register'){
	if(isset($_POST['email'])&&isset($_POST['uname'])&&isset($_POST['upass'])){
		//缺过滤
		$email=$_POST['email'];
		$uname=$_POST['uname'];
		$upass=$_POST['upass'];
		$user=new User($email,$uname,$upass);
		if($user->register()){
			echo json_encode(['errCode'=>0,'msg'=>'注册成功']);
		}else{
			echo json_encode(['errCode'=>1,'msg'=>'注册失败']);
		}
	}
}
<?php

require_once('../inc/config.php');
require_once(USER.'inc/User.class.php');
require_once(USER.'inc/Filter.class.php');
require_once(ROOT.'inc/DB.class.php');

//缺过滤
if(isset($_POST['action'])) $action=$_POST['action'];


if($action=='register'){
	if(isset($_POST['email'])&&isset($_POST['uname'])&&isset($_POST['upass'])){
		$email=$_POST['email'];
		if(!Filter::testEmail($email)){
			echo json_encode(['errCode'=>801,'msg'=>'邮箱格式错误']);
			exit(0);
		}
		$uname=$_POST['uname'];
		if(!Filter::testUname($uname)){
			echo json_encode(['errCode'=>802,'msg'=>'用户名格式错误']);
			exit(0);
		}
		$upass=$_POST['upass'];
		$user=new User($email,$uname,$upass);
		if($user->register()){
			echo json_encode(['errCode'=>0,'msg'=>'注册成功']);
		}else{
			echo json_encode(['errCode'=>1,'msg'=>'注册失败']);
		}
	}
}

if($action=='login'){
	$useremail=isset($_POST['email']) ? $_POST['email'] : null;		//缺过滤
	$userpass=isset($_POST['upass']) ? $_POST['upass'] : null;
	
	if($useremail==null||$userpass==null){
		echo json_encode(['errCode'=>701,'msg'=>'邮箱或密码不能为空']);
		exit(0);
	}
	
	$user=new User($useremail,$userpass);

	if($user->login()){
		session_start();
		$_SESSION['user']="$useremail";
		$_SESSION['pass']="$userpass";
		echo json_encode(['errCode'=>0]);
	}else{
		echo json_encode(['errCode'=>1,'msg'=>'用户名或密码错误']);
	}
}

session_start();
if($_SESSION['user']!=null&&$_SESSION['pass']!=null){
	$user=new User($_SESSION['user'],$_SESSION['pass']);
	
	if($action=='upload'){
		if($_FILES['file']['error']==UPLOAD_ERR_FORM_SIZE||$_FILES['file']['error']==UPLOAD_ERR_INI_SIZE){
			echo json_encode(['errCode'=>101,'msg'=>'文件过大']);
			exit(0);
		}
		if(file_exists($user->getUhome().$_FILES['file']['name'])){
			echo json_encode(['errCode'=>102,'msg'=>'文件已存在']);
			exit(0);
		}
		//类型检查
		
		if($_FILES['file']['error']==UPLOAD_ERR_OK){
			if(move_uploaded_file($_FILES['file']['tmp_name'],$user->getUhome().$_FILES['file']['name'])){
				echo json_encode(['errCode'=>0,'msg'=>'上传成功']);
			}
		}
	}
}

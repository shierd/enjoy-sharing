<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:../index.php');
		exit(0);
	}
	
	//缺类型判断
	
	
	if($_FILES['file']['error']==UPLOAD_ERR_FORM_SIZE||$_FILES['file']['error']==UPLOAD_ERR_INI_SIZE){
		exit('文件过大');
	}
	
	if($_FILES['file']['error']==UPLOAD_ERR_OK){
		if(move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name'])){	//上传路径config，上传重命名
			echo '上传成功';
		}
	}
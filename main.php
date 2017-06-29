<?php

require_once "inc/Handler.class.php";

//过滤
if(isset($_GET['action'])) $action=$_GET['action'];

if($action=="getFileDetail"){
	//过滤
	if(isset($_GET['fileId'])){
		$res=Handler::getFileDetail($_GET['fileId']);
		if($res!=null){
			echo json_encode(['errCode'=>0,'intro'=>$res[0]['f_intro'],'name'=>$res[0]['f_name']]);
			exit(0);
		}
	}
}

if($action=="download"){
	$byuser=$_GET['byuser'];
	$filename=$_GET['filename'];
	$file=USERHOME.(10000+$byuser).'/'.$filename;
	if(!file_exists($file)){
		echo json_encode(['errCode'=>1,'msg'=>'文件不存在了']);
		exit(0);
	}else{
		echo json_encode(['errCode'=>0],'downurl'=>"/download.php?byuser=$byuser&filename=$filename");
	}
}
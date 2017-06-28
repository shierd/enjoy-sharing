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
		}
	}
}
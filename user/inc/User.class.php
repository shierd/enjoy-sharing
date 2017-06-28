<?php

require_once('../inc/config.php');
require_once(ROOT.'inc/DB.class.php');

class User{
	
	private $uid;
	private $email;
	private $uname;
	private $upass;
	private $uhome;
	
	public function __construct($email,$upass,$uname=null){
		$this->email=$email;
		$this->upass=$upass;
		if($uname==null){
			DB::connect();
			$res=DB::query("select u_id,u_name,u_home from es_user where u_email='{$email}'");
			$user=(count($res)==0) ? null : $res[0];
			$this->uname=$user['u_name'];
			$this->uhome=USERHOME.$user['u_home'].'/';
			$this->uid=$user['u_id'];
			DB::close();
		}else
			$this->uname=$uname;
	}
	
	public function getUname(){
		return $this->uname;
	}
	
	public function getUhome(){
		return $this->uhome;
	}
	
	public function register(){
		DB::connect();
		$res=DB::query("select u_home from es_user order by u_id desc limit 1");
		$uhome=(count($res)==0) ? '10001' : ($res[0]['u_home']+1);
		$success=DB::insert("insert into es_user (u_name,u_email,u_pass,u_home) values ('{$this->uname}','{$this->email}','{$this->upass}','$uhome')");
		DB::close();
		if($success) mkdir(USERHOME.$uhome);
		return $success;
	}
	
	public function login(){
		$sql="select u_pass from es_user where u_email='{$this->email}'";
		DB::connect();
		$res=DB::query($sql);
		DB::close();
		if(count($res)!=0&&$this->upass==$res[0]['u_pass']) return true;
		return false;
	}
	
	public function getUfiles(){
		DB::connect();
		$res=DB::query("select f_name,f_type,f_tag from es_file");
		DB::close();
		$files=null;
		foreach($res as $file){
			$files['name'][]=$file['f_name'];
			$files['type'][]=$file['f_type'];
			$files['tag'][]=$file['f_tag'];
		}
		return $files;
	}
	
	public function uploadFile($fileTmpName,$filename,$tags,$intro=null){
		$ft=substr(strrchr($filename,'.'),1);
		$uptime=date("Y-m-d H:i:s");
		DB::connect();
		foreach($tags as $tag){
			$success=DB::insert("insert into es_tag (t_name) values ('{$tag}')");
			if(!$success) return false;
		}
		$tag=implode(",",$tags);
		$success=DB::insert("insert into es_file (f_name,f_type,f_user,f_uptime,f_tag,f_intro) values ('{$filename}','{$ft}','{$this->uid}','{$uptime}','{$tag}','{$intro}')");
		DB::close();
		if($success){
			if(move_uploaded_file($fileTmpName,$this->uhome.$filename)) return true;
		}
		return false;
	}
	
	public function deleteFile($filename){
		DB::connect();
		$success=DB::delete("delete from es_file where f_name='{$filename}' and f_user={$this->uid}");
		DB::close();
		if($success&&file_exists($this->uhome.$filename)){
			if(unlink($this->uhome.$filename)) return true;
		}
		return false;
	}
	
}
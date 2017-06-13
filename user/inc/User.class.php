<?php

require_once('../inc/config.php');
require_once(ROOT.'inc/DB.class.php');

class User{
	
	private $email;
	private $uname;
	private $upass;
	private $uhome;
	
	public function __construct($email,$upass,$uname=null){
		$this->email=$email;
		$this->upass=$upass;
		if($uname==null){
			DB::connect();
			$res=DB::query("select u_name,u_home from user where u_email='{$email}'");
			$user=(count($res)==0) ? null : $res[0];
			$this->uname=$user['u_name'];
			$this->uhome=USERHOME.$user['u_home'].'/';
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
		$res=DB::query("select u_home from user order by u_id desc limit 1");
		$uhome=(count($res)==0) ? '10001' : ($res[0]['u_home']+1);
		$success=DB::insert("insert into user (u_name,u_email,u_pass,u_home) values ('{$this->uname}','{$this->email}','{$this->upass}','$uhome')");
		DB::close();
		if($success) mkdir(USERHOME.$uhome);
		return $success;
	}
	
	public function login(){
		$sql="select u_pass from user where u_email='{$this->email}'";
		DB::connect();
		$res=DB::query($sql);
		DB::close();
		if(count($res)!=0&&$this->upass==$res[0]['u_pass']) return true;
		return false;
	}
	
	public function getUfiles(){
		$files['name']=scandir($this->uhome);
		foreach($files['name'] as $file){
			$files['type'][]=filetype($this->uhome.$file);
		}
		return $files;
	}
	
}
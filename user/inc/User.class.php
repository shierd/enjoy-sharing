<?php

require_once('../inc/config.php');
require_once(ROOT.'inc/DB.class.php');

class User{
	
	private $email;
	private $uname;
	private $upass;
	
	public function __construct($email,$upass,$uname=null){
		$this->email=$email;
		$this->uname=$uname;
		$this->upass=$upass;
	}
	
	public function register(){
		DB::connect();
		$res=DB::query("select u_home from user order by u_id desc limit 1");
		$uhome=(count($res)==0) ? '10001' : ($res[0]['u_home']+1);
		$success=DB::insert("insert into user (u_name,u_email,u_pass,u_home) values ('{$this->uname}','{$this->email}','{$this->upass}','$uhome')");
		DB::close();
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
	
}
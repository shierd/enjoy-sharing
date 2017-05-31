<?php

class User{
	
	private $email;
	private $uname;
	private $upass;
	
	public function __contruct($email,$uname,$upass){
		$this->$email=$email;
		$this->$uname=$uname;
		$this->$upass=$upass;
	}
	
	public function register(){
		return true;
	}
	
}
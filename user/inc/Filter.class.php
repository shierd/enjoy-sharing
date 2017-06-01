<?php

class Filter{
	
	public static function testEmail($email){
		$reg='/^\w+@\w+\.([a-z]|[A-Z])+$/';
		return preg_match($reg,$email);
	}
	
	public static function testUname($uname){
		$reg='/^\w+$/';
		return preg_match($reg,$uname);
	}
	
}
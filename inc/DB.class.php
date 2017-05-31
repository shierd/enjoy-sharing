<?php

require 'config.php';

class DB{
	public static $conn=null;
	
	public static function connect(){
		self::$conn=new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
		if(self::$conn->connect_error){
			exit('DB Connect Error('.self::$conn->connect_errno.')'.self::$conn->connect_error);
		}
	}
	
	public static function query($sql){
		if(self::$conn==null) return '请连接数据库';
		$res=self::$conn->query($sql);
		return $res->fetch_all(MYSQLI_BOTH);
	}
	
	public static function close(){
		self::$conn->close();
	}
}
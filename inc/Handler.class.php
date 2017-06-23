<?php

require_once 'inc/DB.class.php';

class Handler{
	public static function search($text){
		if($text=="") return null;
		DB::connect();
		$res=DB::query("select * from es_file where f_name like '%$text%'");
		DB::close();
		return $res;
	}
	
	public static function queryNewFile(){
		DB::connect();
		$res=DB::query("select * from es_file order by f_uptime desc");
		DB::close();
		return $res;
	}
}
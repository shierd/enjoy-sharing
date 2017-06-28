<?php

require_once 'inc/DB.class.php';

class Handler{
	public static function search($text,$page){
		if($text=="") return null;
		$offset=($page-1)*PER_PAGE_NUM;
		DB::connect();
		$resFile=DB::query("select * from es_file where f_name like '%$text%' or f_tag like '%$text%' order by f_uptime desc limit {$offset},".PER_PAGE_NUM);
		DB::close();
		return $resFile;
	}
	
	public static function getSearchCount($text){
		if($text=="") return null;
		DB::connect();
		$resCount=DB::query("select count(*) as count from es_file where f_name like '%$text%' or f_tag like '%$text%'");
		DB::close();
		return $resCount[0]["count"];
	}
	
	public static function queryNewFile(){
		DB::connect();
		$res=DB::query("select * from es_file order by f_uptime desc");
		DB::close();
		return $res;
	}
	
	public static function getTags(){
		DB::connect();
		$res=DB::query("select * from es_tag order by rand() limit 20");
		DB::close();
		return $res;
	}
	
	public static function getFileDetail($fileId){
		DB::connect();
		$res=DB::query("select f_intro,f_name from es_file where f_id=$fileId");
		DB::close();
		return $res;
	}
}
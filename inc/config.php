<?php

define('DBHOST','localhost');
define('DBNAME','enjoy_sharing');
define('DBUSER','root');
define('DBPASS','root');

define('ROOT',dirname(__FILE__).'/../');
define('USER',dirname(__FILE__).'/../user/');
define('USERHOME',dirname(__FILE__).'/../userhome/');

$debug=true;
if($debug){
	ini_set('display_errors',1);
	error_reporting(E_ALL);
}
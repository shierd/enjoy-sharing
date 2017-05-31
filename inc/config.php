<?php

define('DBHOST','localhost');
define('DBNAME','enjoy_sharing');
define('DBUSER','root');
define('DBPASS','root');

$debug=true;
if($debug){
	ini_set('display_errors',1);
	error_reporting(E_ALL);
}
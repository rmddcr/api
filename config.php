<?php
//ob_start("ob_gzhandler");
error_reporting(0);
session_start();

/* DATABASE CONFIGURATION */
define('DB_SERVER', 'mydatabasegp.c7xgtid4bjv2.ap-southeast-1.rds.amazonaws.com');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'admin1234');
define('DB_DATABASE', 'apiDB');
define("BASE_URL", "http://35.227.81.79/api/");
define("SITE_KEY", 'yourSecretKey');


function getDB() 
{
	$dbhost=DB_SERVER;
	$dbuser=DB_USERNAME;
	$dbpass=DB_PASSWORD;
	$dbname=DB_DATABASE;
	$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbConnection->exec("set names utf8");
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbConnection;
}
/* DATABASE CONFIGURATION END */

/* API key encryption */
function apiToken($session_uid)
{
$key=md5(SITE_KEY.$session_uid);
return hash('sha256', $key);
}



?>
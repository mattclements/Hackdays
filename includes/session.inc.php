<?php
//Include Configuration File
include_once($_SERVER['DOCUMENT_ROOT'].'/includes/configure.inc.php');

try
{
	$dbcon = new PDO(DBDRIV.":host=".DBHOST.":".DBPORT.";dbname=".DBNAME , DBUSER, DBPASS);
}
catch(PDOException $e)
{
	header("HTTP/1.1 500 Internal Server Error");
	
	//Log Errors
    //echo $e->getMessage();
}
?>
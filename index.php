<?php
session_start();
						
// error_reporting(E_ALL & ~E_NOTICE);

ob_start();
//include_once ("app/include/queryfunctions.php");
/*include("app/include/sambung.php");
include("app/include/functions.php");
include("app/include/function_login.php");*/

if (( isset($_SESSION["logged"]) == 1)) {
	header("Location: main.php");
}

//PPDB only
/*if($_SESSION["log"] == "") {
	//include("login.php");
	include("home2.php");
} else {
	include("home.php");
}*/

//non PPDB
include("home.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
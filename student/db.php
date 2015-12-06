<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "barcode";

//connect to server
mysql_connect($host, $user , $pass) or die("Error in connecting to host server");
mysql_select_db($db) or die("Error in connecting to database");
?>
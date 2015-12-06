<?php
$host = "MYSQL5012.HostBuddy.com";  //  change to your host
$user = "9db459_barcode";       //  change to your user
$pass = "123456789";           //  change to your password
$db = "db_9db459_barcode";      //  change to your database 

//connect to server
mysql_connect($host, $user , $pass) or die("Error in connecting to host server");
mysql_select_db($db) or die("Error in connecting to database");
?>
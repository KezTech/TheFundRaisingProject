<?php 
$hostname = "localhost";
$username = "admin";
$password = "admin123";
$database = "nepadonor";

mysql_connect($hostname,$username,$password) or die ("connection failed");
mysql_select_db($database) or die ("error connect database");
?>
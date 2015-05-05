<?php

//database connection information
$host="127.0.0.1:3306";
$user="root";
$password="";
$db=mysql_connect($host, $user, $password) or
die(mysql_error());
mysql_select_db("property",$db);
?>
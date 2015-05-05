<?php

if(!isset($_SESSION))
{
session_start();
}

if(!isset($_SESSION["myusername"])||($_SESSION["myusername"] !=1)){
header("Location: error_login_admin.php");
exit();
}

?>
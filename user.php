<?php
session_start();
$_SESSION['user_id'] =(int)3;
$host_name='localhost';
$user_name='root';
$password_name='';
$database='comment';
mysql_connect($host_name,$user_name,$password_name);
mysql_select_db($database);
  



?>

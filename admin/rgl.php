<?php 
$host="localhost";
$user="root";
$pass="";
$database="login";

$conn= mysql_connect($host,$user,$pass) or die(mysql_error());

mysql_select_db($database,$conn);
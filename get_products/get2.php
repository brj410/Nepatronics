<?php 

$host="localhost";
$user="root";
$pass="";
$database="databaseimage";

$conn= mysql_connect($host,$user,$pass) or die(mysql_error());

mysql_select_db($database,$conn);

		$id=addslashes($_REQUEST[`id`]);
		
		
		
		$image=mysql_query("SELECT * FROM store WHERE `id`='$id'");
		$image=mysql_fetch_assoc($image);
		$image=$image['image'];
		
		
		header("content-type:image/jpeg");
		echo "$image";
		
		
			
		
		 ?>
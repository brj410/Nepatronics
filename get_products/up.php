<?php 
include("rgl.php");

		$dn=$_POST["dfname"];
		$img=$_FILES["image"];
		$des=$_POST["des"];
		$own=$_POST["ownr"];
		$cnum=$_POST["cn"];
		$email=$_POST["e-mail"];
		
		$query="INSERT INTO `pic`(`devicename`,`image`,`description`,`name`,`cnum`,`mail`)
		 VALUES ('$dn','$img','$des','$own','$cnum','$email');";
		$res=mysql_query($query);
		
		if($res)
		{
			echo"Your device has been uploaded";
		}
		else
		{
			echo"not uploaded";
		}
		header('Location:aftrup.php');

		?>
		
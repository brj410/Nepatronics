<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("deviceinfo",$conn);

if(!$db)
{
	echo  mysql_error();
}
$dn=$_POST['dname'];
$dimage=addslashes(file_get_contents($_FILES['dimage']['tmp_name']));


$detail=$_POST['desc'];
$own=$_POST['ownr'];
$cnu=$_POST['cn'];
$email=$_POST['e-mail'];


$s="INSERT INTO `device` VALUES('','$dn','$dimage','$detail','$own','$cnu','$email')";

$r=mysql_query($s,$conn);
if($r)
{
	echo "Your device has been uploaded successfully.";
}
else
{
	echo mysql_error();
}




?>
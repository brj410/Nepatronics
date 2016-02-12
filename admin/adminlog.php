<?php include ("rgl.php");

$aname=$_POST["aname"];
$pass=$_POST["pword"];

echo $aname;
$sql= "SELECT * FROM `admin` where `aname`='$aname' AND `password`='$pass'";

$up=@mysql_query($sql);
$count = @mysql_num_rows($up);

if($count==1)
{
	
	header('Location:checkcus.php');
}

else
{
	session_destroy();
	header('Location:adminpage.php');
}


  
?>
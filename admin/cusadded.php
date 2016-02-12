<?php include("rgl.php");

$usename=$_POST["uname"];
$psword=$_POST["pword"];
$uid= $_POST["uid"];
$sql="SELECT * FROM `userlogin` WHERE `uid`='$uid'";
$result= mysql_query($sql);

while($row=mysql_fetch_array($result))
{
	$sql2="INSERT INTO `wait` (`firstname`,`lastname`,`gender`,`e-mail`,`district`,`address`,`username`,`password`) 
		VALUES('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]')";
		
		$result2= mysql_query($sql2);
		$sql3="UPDATE `userlogin` SET `reply`=1 WHERE `uid`='$uid'";
		mysql_query($sql3);
		echo "here";
}


header('Location:checkcus.php');


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<form action="pic.php" method="POST" enctype="multipart/form-data">
<input type="file" name="image" /><input type="submit" value="Upload" />

</form>

 
<?php 

$file=$_FILES['image']['tmp_name'];

if (!isset($file))
	{
		echo "Please select an image";
	}
else
	{
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name=addslashes($_FILES['image']['name']);
	$image_size=getimagesize($_FILES['image']['tmp_name']);
		
		if($image_size==FALSE)
			echo "Not an image.";
		else
		{
			if(!$insert= mysql_query("INSERT INTO `store` VALUES('','$image_name',$image')"))
			echo"problem uploading image";
			else
			{
			$lastuid=mysql_insert_id();
			echo "Image Uploaded.<p/>Your Product:<p/><img src=get2.php?uid= $lastuid >";
			
			}
			

	}}
	
?>


</body>
</html>
<?php include("rgl.php");
session_start();
$name = $_SESSION["aname"];

$sql= "SELECT * from `userlogin`";
		
		$res=mysql_query($sql);
		?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Check Customer</title>
<style type="text/css">
div.container
{
width:100%;
margin:0px;
border:0px solid #3d9ad1;
line-height:200%;
}
div.header
{
padding:25px;
color:white;
background-color:#3d9ad1;
clear:left;
text-align:center;
}
div.footer
{
padding:5px;
color:white;
background-color:#3d9ad1;
clear:left;
text-align:center;
}
a.header
{
margin:0;
font-size:60px;
font-family:KBCuriousSoul;
color:white;
text-decoration:none;
}
table.header a
{
	color:white;
	text-align:center;
	font-size:25px;
	text-decoration:none;
}
div.left
{
border-left:5px solid #3d9ad1;
border-right:5px solid #3d9ad1;
float:left;
width:180px;
margin:0;
padding:1em;
}
table.left
{
	font-size:18px;
}

div.content
{
margin-left:240px;
padding:1px;
}
</style>
       
</head>
<body>

<div class="container">

<div class="header">
<a class="header" href="#">NEPA-TRONICS</a>
<br/>

</div>

<div class="box" style=" font-size:14px;" >
       <div  style="position:relative; top:30px;" align="center">
       Welcome admin: <?php echo $name;?>
       <table border="1px" width="1000px">
         <tr>
         <td>uid:
         </td>
         <td>firstname:
         </td>
         <td>lastname:
         </td>
         <td>gender:
         </td>
         <td>e-mail:
         </td>
         <td>country:
         </td>
         <td>address:
         </td>
         <td>username:
         </td>
         <td>password:
         </td>
         <td>status:
         </td>
         </tr>
         
         <?php while($row=mysql_fetch_array($res))
		 	 {
				 ?>
                 
                 <tr>
                 <?php
				 for($i=0; $i<9; $i++)
				 {
					 ?>
                     <td>
                     <?php
					 echo $row[$i];
					 ?>
                     </td>
                     <?php
				 }
				 ?>
                 
                 
                 <td>
       <form method="post" action="cusadded.php">
       <input type="hidden" name="uid" value="<?php echo $row[0];?>">
       <?php if($row[9]==0)
	   { ?>
       <input type="submit" value="Add" />
       <?php
	   }
	   else {
		   ?> Already added
           <?php }?>
       </form>
       </td>
       
       </tr>
       <?php } ?>
       
        
       </table>
       
       
       
       </div>
       </div>
            

      
				
				
      
    </body>
</html> 
       
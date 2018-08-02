<?php error_reporting($level = null);
session_start();
if(!$_SESSION['new']) 
{
header('Location:alogin.php');
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>DVDSTORE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

<style>
body{
background-image:url("up.jpg");
background-size:cover;
z-index:-1;
height:auto;
color:white;

height:100%
}
</style>
</head>
<body background="bck11.jpg">
<form method="get" action="ahome.php"><button style="float:left;left:40%;height:100px;width:200px ; border:none;background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>Home</h3></button></form>
<form method="get" action="AddDVD.php"><button style="float:left;height:100px;width:200px ;border:none;background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>Add DVD</h3></button></form>
<form method="get" action="cl.php"><button style="float:left;height:100px;width:250px ;border:none;background-color:transparent"  name="san" value="'.$no.'"><h3 style='color:white'>Update DVD</h3></button></form>
<form method="get" action="createads.php"><button style="float:left;height:100px;width:200px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>Add Offers</h3></button></form>
<form method="get" action="manageads.php"><button style="float:left;height:100px;width:200px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>View Offers</h3></button></form>
<form method="get" action="fbss.php"><button style="float:left;height:100px;width:200px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>View Feedback </h3></button></form>
<form method="get" action="alogout.php"><button style="float:left;height:100px;width:200px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>LogOut </h3></button></form>
<br><br><br><br>
<div class="container">
<table class="table" border="4" style="border-color:black;">
<tr>
<th>slno</th>
<th>name</th>
<th>artists</th>

<th>price</th>
<th>cat_id</th>
<th>delete</th>

</tr>

 <?php error_reporting($level = null);
include('config.php');
$sqll="select * from dvd";
$res=$conn->query($sqll);
$i=1;

while($row=$res->fetch_assoc()) 
{
$name=$row['dvdname'];
$artists=$row['artists'];

$photo=$row['photo'];
$price=$row['price'];
$catid=$row['catid'];
$no=$row['no'];
echo '<tr>
<td>'.$i.'</td>
<td>'.$name.'</td>
<td>'.$artists.'</td>
<td>'.$price.'</td>


<td>'.$catid.'</td>



<td><form method="get" action="delete9.php"><button class="btn btn-danger btn-xs" name="san" value="'.$no.'">x</button></form></td>
</tr>';$i++;
    }
?> 

</table>

<h2 style="color: white;position:relative;top:50px;"></h2>	
</body>
</html>

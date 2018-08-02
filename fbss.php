<?php error_reporting($level = null);
session_start();
if(!$_SESSION['new']) 
{
header('Location:alogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DVD STORE</title>
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
background-image:url("fb5.jpg");
background-size:cover;
z-index:-1;
height:auto;
color:black;

height:100%
}
</style>
</head>


<body>
<form method="get" action="ahome.php"><button style="float:left;left:40%;height:100px;width:200px ; border:none;background-color:transparent" name="san" value="'.$no.'"><h3 style='color:black'>Home</h3></button></form>
<form method="get" action="AddDVD.php"><button style="float:left;height:100px;width:200px ;border:none;background-color:transparent" name="san" value="'.$no.'"><h3 style='color:black'>Add DVD</h3></button></form>
<form method="get" action="cl.php"><button style="float:left;height:100px;width:250px ;border:none;background-color:transparent"  name="san" value="'.$no.'"><h3 style='color:black'>Update DVD</h3></button></form>
<form method="get" action="createads.php"><button style="float:left;height:100px;width:200px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:black'>Add Offers</h3></button></form>
<form method="get" action="manageads.php"><button style="float:left;height:100px;width:200px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:black'>View Offers</h3></button></form>
<form method="get" action="fbss.php"><button style="float:left;height:100px;width:200px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:black'>View Feedback </h3></button></form>
<form method="get" action="alogout.php"><button style="float:left;height:100px;width:200px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:black'>LogOut </h3></button></form>
<BR><BR><BR><BR>
  <div class="container"><br><BR><BR><BR><br><BR><BR><BR><br><BR><BR><BR><br><br>
<table class="table" border="4" style="border-color:black;">
<tr>
<th>customer name</th>
<th>feedback</th>
<th>delete</th>
</tr>
 <?php error_reporting($level = null);
include('config.php');
$file=file_get_contents("san.txt");
$sqll="select * from fb";
$res=$conn->query($sqll);
$i=1;

while($row=$res->fetch_assoc()) 
{
$gname=$row['gname'];
$name=$row['name'];
$gname=$row['gname'];
$dates=$row['dates'];
$fb=$row['fb'];
$no=$row['no'];

echo '<tr>
<td>'.$name.'</td>
<td>'.$fb.'</td>
<td><form method="get" action="delete4.php"><button class="btn btn-danger btn-xs" name="san" value="'.$no.'">x</button></form></td>
</tr>';$i++;
    }
?>

</table>
</div>

</html>
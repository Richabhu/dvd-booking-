<?php error_reporting($level = null);
session_start();
if(!$_SESSION['new']) 
{
header('Location:clogin.php');
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
background-image:url("piku.jpg");
background-size:cover;
z-index:-1;
height:auto;
color:white;

height:100%
}
</style>
</head>
<body>


<ul>
<form method="get" action="Chome.php"><button style="float:left;left:40%;height:100px;width:100px ; border:none;background-color:transparent" name="san" value="'.$no.'"><h3><b>Home</b></h3></button></form>
<form method="get" action="viewads.php"><button style="float:left;height:100px;width:100px ;border:none;background-color:transparent" name="san" value="'.$no.'"><h3><b>Offers</b></h3></button></form>
<form method="get" action="fb.php"><button style="float:left;height:100px;width:150px ;border:none;background-color:transparent"  name="san" value="'.$no.'"><h3><b>Feedback</b></h3></button></form>
<form method="get" action="profile.php"><button style="float:left;height:100px;width:100px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3><b>Profile</b></h3></button></form>
<form method="get" action="logout.php"><button style="float:left;height:100px;width:100px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3><b>Logout</b></h3></button></form>
</ul>
<br><br><br><br><BR><br><Br><BR><BR>

<table class="table" border="2" style="border-color:white;font-weight:bold;white;font-weight:bold;font-size:19px;">
<tr>
<th>slno</th>
<th>dvd name</th>
<th>artists</th>
<th>dvd image</th>
<th>price</th>
<th>click to buy</th>
</tr><center>
<h1><b>OTHER SECTION</b></h1></center><br><BR>
 <?php error_reporting($level = null);
include('config.php');
$file=file_get_contents("san.txt");
$sqll="select * from dvd where catid=5";
$res=$conn->query($sqll);
$i=1;

while($row=$res->fetch_assoc()) 
{
$name=$row['dvdname'];
$artists=$row['artists'];
$photo=$row['photo'];
$price=$row['price'];
$no=$row['no'];
echo '<tr>
<td>'.$i.'</td>
<td>'.$name.'</td>
<td>'.$artists.'</td>
<td><img src="ads/'.$photo.'" height="80" width="80" alt=""></td>
<td>'.$price.'</td>
<td><form method="get" action="Addtocart.php"><button class="btn btn-danger btn-xs" name="san" value="'.$no.'">buy</button></form></td>
</tr>';$i++;
    }
?> 

</table>
<h2 style="color: white;" class="by"></h2>	
</body>
</html> 


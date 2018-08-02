<?php error_reporting($level = null);
session_start();
if(!$_SESSION['new']) 
{
header('Location:clogin.php');
}
?><!DOCTYPE html>
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
background-image:url("of.jpg");
background-size:cover;
z-index:-1;
height:auto;
color:white;

height:100%
}
</style>
</head>
<body background>
	

<ul>
<form method="get" action="Chome.php"><button style="float:left;left:40%;height:100px;width:100px ; border:none;background-color:transparent" name="san" value="'.$no.'"><h3>Home</h3></button></form>
<form method="get" action="viewads.php"><button style="float:left;height:100px;width:100px ;border:none;background-color:transparent" name="san" value="'.$no.'"><h3>Offers</h3></button></form>
<form method="get" action="fb.php"><button style="float:left;height:100px;width:150px ;border:none;background-color:transparent"  name="san" value="'.$no.'"><h3>Feedback</h3></button></form>
<form method="get" action="profile.php"><button style="float:left;height:100px;width:100px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3>Profile</h3></button></form>
<form method="get" action="logout.php"><button style="float:left;height:100px;width:100px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3>Logout</h3></button></form>
</ul> 
<br><BR><BR><BR>
<div class="container">
<?php error_reporting($level = null);
include('config.php');
$sqll="select * from ads";
$res=$conn->query($sqll);
$i=1;

while($row=$res->fetch_assoc()) 
{
$name=$row['name'];
$des=$row['des'];
$photo=$row['photo'];
echo '
<hr>
<h3><u>'.$name.'</u></h3>
<b><p>'.$des.'</p></b>
<img src="ads/'.$photo.'" height="500"width="500" alt="">

';$i++;
    }
?> 
</div>
<br><br><br><br><br><br>

<h2 style="color: white;" class="by"></h2>	
</body>
</html>
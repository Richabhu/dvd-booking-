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
background-image:url("uh2.jpg");
background-size:cover;
z-index:-1;
height:auto;
color:white;


}
</style>
</head>
<body >
<ul>
<form method="get" action="Chome.php"><button style="float:left;left:40%;height:100px;width:100px ; border:none;background-color:transparent" name="san" value="'.$no.'"><h3>Home</h3></button></form>
<form method="get" action="viewads.php"><button style="float:left;height:100px;width:100px ;border:none;background-color:transparent" name="san" value="'.$no.'"><h3>Offers</h3></button></form>
<form method="get" action="fb.php"><button style="float:left;height:100px;width:150px ;border:none;background-color:transparent"  name="san" value="'.$no.'"><h3>Feedback</h3></button></form>
<form method="get" action="profile.php"><button style="float:left;height:100px;width:100px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3>Profile</h3></button></form>
<form method="get" action="logout.php"><button style="float:left;height:100px;width:100px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3>Logout</h3></button></form>
</ul>
<br><br><br><br><BR><br><Br><BR><BR>

<H2 style="color:White"><u><b><font face="Georgia", size=16 >CATEGORIES</b></u></h2>
<nav class="nav2">
<ul>
<li><form method="get" action="Ent.php"><button style="height:200px;width:200px ; background-color:transparent" class="btn btn-danger btn-xs" name="san" value="'.$no.'"><h3>Entertainment</h3></button></form></li>
<li><form method="get" action="Edu.php"><button style="height:200px;width:200px ;background-color:transparent" class="btn btn-danger btn-xs" name="san" value="'.$no.'"><h3>Educational</h3></button></form></li>
<li><form method="get" action="folk.php"><button style="height:200px;width:200px ;background-color:transparent" class="btn btn-danger btn-xs" name="san" value="'.$no.'"><h3>Folk</h3></button></form></li>
<li><form method="get" action="plays.php"><button style="height:200px;width:200px; background-color:transparent" class="btn btn-danger btn-xs" name="san" value="'.$no.'"><h3>Plays</h3></button></form></li>
<li><form method="get" action="others.php"><button style="height:200px;width:200px; background-color:transparent" class="btn btn-danger btn-xs" name="san" value="'.$no.'"><h3>Others</h3></button></form></li>
</ul>
</nav> 
<?php error_reporting($level = null);
include('config.php');
$sq="delete from cart" ;
$re=$conn->query($sq);
?>

<h2 style="color: white;" class="by"></h2>	
</body>
</html> 


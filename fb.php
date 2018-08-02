<?php error_reporting($level = null);
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
background-image:url("fback.png");
background-size:cover;
z-index:-1;
height:auto;
color:white;

height:100%
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
<br><BR><BR><BR>
<div class="container" style="position:relative;right:60%">
<form method="post" class="alogin" enctype="multipart/form-data"><BR><BR><BR><BR><BR>
<H3 style="color:White"><u><b><font face="Georgia">Give Feedback</b></u></h3>
<hr>
<textarea class="form-control"name="fb"></textarea>
<br>
<button class="btn btn-success" name="action" value="submit">submit</button>
</form>
</div>

<?php error_reporting($level = null);
include('config.php');
$sqll="select * from fb";
$res=$conn->query($sqll);
$g=0; 
while($row=$res->fetch_assoc()) 
{
$g=$row['no'];
if($g == null) 
{
$g=0;
break;	
}
}
$g=$g+1;
?>

<?php error_reporting($level = null);  
include('config.php');
$aa=$_SESSION['new'];
$fb=$_POST['fb'];

if($_POST['action']=='submit') 
{
$sql="insert into fb values('$aa','$fb',$g )";
$conn->query($sql);
echo "<script type='text/javascript'>
alert('feedback posted Successfully');
</script>";
} 
?>


</div>  

<h2 style="color: white;position:relative;top:50px;"></h2>	
</body>
</html>

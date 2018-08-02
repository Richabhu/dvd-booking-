<?php error_reporting($level = null);
session_start();
if(!$_SESSION['new']) 
{
header('Location:alogin.php');
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>DVD WORLD</title>
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
background-image:url("pro.jpg");
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
<form method="get" action="Chome.php"><button style="float:left;left:40%;height:100px;width:100px ; border:none;background-color:transparent" name="san" value="'.$no.'"><h3>Home</h3></button></form>
<form method="get" action="viewads.php"><button style="float:left;height:100px;width:100px ;border:none;background-color:transparent" name="san" value="'.$no.'"><h3>Offers</h3></button></form>
<form method="get" action="fb.php"><button style="float:left;height:100px;width:150px ;border:none;background-color:transparent"  name="san" value="'.$no.'"><h3>Feedback</h3></button></form>
<form method="get" action="profile.php"><button style="float:left;height:100px;width:100px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3>Profile</h3></button></form>
<form method="get" action="logout.php"><button style="float:left;height:100px;width:100px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3>Logout</h3></button></form>
</ul> 
<br><BR><BR><BR>


<div class="container">
<form method="post" class="alogin" enctype="multipart/form-data">
<h3 class="text-muted">profile settings</h3>
<hr>
 <?php error_reporting($level = null);
include('config.php');

$a=$_SESSION['new'];
$sqll="select * from user where name='$a'";
$res=$conn->query($sqll);
$i=1;

while($row=$res->fetch_assoc()) 
{
$name=$row['name'];
$dob=$row['dob'];
$address=$row['address'];
$phno=$row['phno'];
$mail=$row['mail'];
$city=$row['city'];
$pass=$row['pass'];


echo '<input type="text" name="name" class="form-control" value="'.$name.'">
<br>

<input type="date" name="dob" value="'.$dob.'" class="form-control">
<br>
<input type="text"  name="address" value="'.$address.'" class="form-control">
<br>
<input type="text" name="phno" value="'.$phno.'" class="form-control">
<br>
<input type="mail" name="mail" value="'.$mail.'" class="form-control">
<br>
<input type="text" name="city" value="'.$city.'" class="form-control">
<br>
<input type="password" name="pass" value="'.$pass.'" class="form-control">
';
}
?> 


<button class="btn btn-success" name="action" value="submit">update changes</button>
</form>


<?php error_reporting($level = null);
$names=$_POST['name'];
$pass=$_POST['pass'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$phno=$_POST['phno'];
$mail=$_POST['mail'];
$city=$_POST['city'];

if($_POST['action']=='submit') 
{
$sql="update user set name='$names', pass='$pass',dob='$dob',address='$address',phno='$phno',mail='$mail',city='$city' where name='$a'";
$conn->query($sql);
/*echo '<meta http-equiv="refresh" content="0.1"; URL=profile.php">';*/
$_SESSION['new']=$names;
echo "<script type='text/javascript'>
alert('Changes made successfully!');
</script>";
}
?>

</div> 
<br><br><br><br><br><br>
<div class="footer">
<img src="footer.jpg" id="footer">
</div>
<h2 style="color: white;" class="by"></h2>	
</body>
</html>

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
background-image:url("alu1.jpg");
background-size:cover;
z-index:-1;

color:white;

height:660px;
}
</style>
</head>
<body background="bck3.jpg" >


</div>
<body>
<form method="get" action="alogin.php"><button style="float:left;left:40%;height:100px;width:100px ; border:none;background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>Admin</h3></button></form>

<form method="get" action="csignup.php"><button style="float:left;height:100px;width:150px ;border:none;background-color:transparent"  name="san" value="'.$no.'"><h3 style='color:white'>Sign Up</h3></button></form>
<form method="get" action="clogin.php"><button style="float:left;height:100px;width:100px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>Login</h3></button></form>
<form method="get" action="about.php"><button style="float:left;height:100px;width:100px ;border:none;background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>About</h3></button></form>
<form method="get" action="contact.php"><button style="float:left;height:100px;width:100px ;border:none;background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>Contact</h3></button></form><div class="container">
<form method="post" class="alogin"><BR><BR><BR><BR><BR><BR>
<h3><b>Admin Login</b></h3>
<hr>
<input type="text" name="name" class="form-control" placeholder="name"><br>
<input type="password" name="pass" class="form-control"placeholder="password"><br>
<button class="btn btn-success" name="action" value="submit">login</button>
</form>
</div>

	
</body>
</html>

<?php error_reporting($level = null);
$a=$_POST['name'];
$b=$_POST['pass'];
include('config.php');

if($_POST['action']=='submit') 
{
$sqll="select * from admin where name='$a'";
$res=$conn->query($sqll);

while($row=$res->fetch_assoc()) 
{
$name=$row['name'];
$pass=$row['pass'];


if($name==$a && $pass == $b) 
{
session_start();
$_SESSION['new']=$name;
if($_SESSION['new']==$name) 
{
header('Location:ahome.php');
}

}

}
{
echo '<script type="text/javascript">
alert("Name or password you entered is wrong");</script>';
}
}
?>
</div>
</div>    

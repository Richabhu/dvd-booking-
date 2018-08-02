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
background-image:url("cart1.jpg");
background-size:cover;
z-index:-1;
height:auto;
color:black;

height:100%
}
</style>
</head>
<body background="bckfl.jpg">
	

<ul>
<form method="get" action="Chome.php"><button style="float:left;left:40%;height:100px;width:100px ; border:none;background-color:transparent" name="san" value="'.$no.'"><h3>Home</h3></button></form>
<form method="get" action="viewads.php"><button style="float:left;height:100px;width:100px ;border:none;background-color:transparent" name="san" value="'.$no.'"><h3>Offers</h3></button></form>
<form method="get" action="fb.php"><button style="float:left;height:100px;width:150px ;border:none;background-color:transparent"  name="san" value="'.$no.'"><h3>Feedback</h3></button></form>
<form method="get" action="profile.php"><button style="float:left;height:100px;width:100px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3>Profile</h3></button></form>
<form method="get" action="logout.php"><button style="float:left;height:100px;width:100px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3>Logout</h3></button></form>
</ul>
<br><br><br><br><BR><br><Br><BR><BR> 
<center><b>
<h1>SELECTED DVD</h1></b></center>
<div class="container">
<table class="table" border="2" style="border-color:black;font-weight:bold;font-color:black;font-weight:bold;font-size:19px;;">
<tr>
<th>slno</th>
<th>dvd name</th>
<th>artists</th>
<th>dvd image</th>
<th>price</th>

</tr>

<?php error_reporting($level = null);
include('config.php');
$file=file_get_contents("san.txt");
$a=$_GET['san'];
$sqll="select * from dvd where no=$a";
$res=$conn->query($sqll);
$i=1;

while($row=$res->fetch_assoc()) 
{
$name=$row['dvdname'];
$des=$row['artists'];
$photo=$row['photo'];
$price=$row['price'];
$no=$row['no'];
echo '<tr>
<td>'.$i.'</td>
<td>'.$name.'</td>
<td>'.$des.'</td>
<td><img src="ads/'.$photo.'" height="80" width="80" alt=""></td>
<td>'.$price.'</td>
</tr>';$i++;
    }
?> 

</table>

<div class="container">
<form method="post" class="csign">
<h3>Quantity</h3>
<hr>
<input type="text" name="qty" class="form-control" placeholder="Quantity?"><br>
<button class="btn btn-success" name="action" value="submit">Add</button></form>
</div>

<?php error_reporting($level = null);
include('config.php');
$qty=$_POST['qty'];
if($qty<0)
{
$qty=1;
}
$sqlle="insert into cart values($a,$qty,calculate_total($price,$qty),1)";
$res=$conn->query($sqlle);
if($_POST['action']=='submit') 
{
echo "<script type='text/javascript'>
alert('Added copies');
</script>";
}


?>

<h3>CONFIRM YOUR ORDER?</h3>
<nav >
<ul>
		<CENTER><br><br><br><br><br><li><a href="chome.php"><span>NO</span></a></li>       
		<li><a href="receipt.php"><span>YES</span></a></li>
</ul>
</CENTER>
</nav>
	
<h2 style="color: white;" class="by"></h2>	
</body>
</html> 


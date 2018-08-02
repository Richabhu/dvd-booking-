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
  <title>BOOK</title>
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
background-image:url("shop.jpg");
background-size:cover;
z-index:-1;
height:auto;
color:white;

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


<div class="container" style="background-color:grey;width:50%" >
<table class="table" style="background-color:white;color:black;font-weight:bold;" >
<caption><h3
style="color:WHITE;"><b><font face="georgia"><center>INVOICE COPY</font></h3>
</caption>
<tr>

<th>DVD name</th>

<th>Ordered DVD</th>
<th>Qty</th>
<th>Total Price</th>

</tr>



<?php error_reporting($level = null);
include('config.php');

$sqll="select * from cart where no=1";
$res=$conn->query($sqll);


while($row=$res->fetch_assoc()) 
{
$id=$row['dvdid'];
$qty=$row['qty'];
$price=$row['price'];
$no=$row['no'];
}

$sqll1="select * from dvd where no=$id";
$res1=$conn->query($sqll1);
while($row=$res1->fetch_assoc()) 
{
$name1=$row['dvdname'];
$photo1=$row['photo'];
}
echo '

<td>'.$name1.'</td>

<td><img src="ads/'.$photo1.'" height="150" width="150" alt=""></td>
<td>'.$qty.'</td>
<td>'.$price.'</td>';


?> 
</table>
</div>

    
<B><CENTER><p>THE DVD WILL BE DELIVERED TO YOUR DOOR STEP IN 3-4 DAYS.PLEASE BE READY TO WELCOME YOUR BELONGINGS<br>THANK YOU, VISIT AGAIN!!!</p>

</body>
</html> 
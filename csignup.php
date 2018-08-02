<!DOCTYPE html>
<html lang="en">
<head>
  <title>DVDStore</title>
 </head>
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
body
{
background-image:url("uu2.jpg");
background-size:cover;
z-index:-1;
height:auto;
color:white;
height:100%
}
</style>
<body background>

<form method="get" action="alogin.php"><button style="float:left;left:40%;height:100px;width:100px ; border:none;background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>Admin</h3></button></form>

<form method="get" action="csignup.php"><button style="float:left;height:100px;width:150px ;border:none;background-color:transparent"  name="san" value="'.$no.'"><h3 style='color:white'>Sign Up</h3></button></form>
<form method="get" action="clogin.php"><button style="float:left;height:100px;width:100px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>Login</h3></button></form>
<form method="get" action="about.php"><button style="float:left;height:100px;width:100px ;border:none;background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>About</h3></button></form>
<form method="get" action="contact.php"><button style="float:left;height:100px;width:100px ;border:none;background-color:transparent" name="san" value="'.$no.'"><h3 style='color:white'>Contact</h3></button></form><bR><BR><BR><BR>
</div>


<div class="container">
 
<form method="post" class="csign">
<h3>user signup</h3>
<hr>
<input type="text" name="name" class="form-control" placeholder="Name" required><br>
<input type="date" name="dob" class="form-control" placeholder="dob" required><br>
<textarea  class="form-control" placeholder="adderss" name="address" required></textarea><br>
<input type="text" name="phno" class="form-control" placeholder="phno" required><br>
<input type="mail" name="mail" class="form-control" placeholder="mail" required><br>
<input type="file"name="myFile" id="files" class="hidden form-control"/ >

<input type="text" name="city" class="form-control" placeholder="city" required><br>
<input type="password" name="password" class="form-control"placeholder="password" required><br>
<button class="btn btn-success" name="action" value="submit">signup</button>
</form>
</div>

</body>
</html>

<?php error_reporting($level = null);
define("UPLOAD_DIR", "citizen/");

if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];

    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    }

    // ensure a safe filename
    $namez = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }

    // preserve file from temporary directory
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$success) { 
        echo "<p>Unable to save file.</p>";
        exit;
    }

    // set proper permissions on the new file
    chmod(UPLOAD_DIR . $name, 0644);
}

?>
 <?php error_reporting($level = null);
include('config.php');
$sqll="select * from user";
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
$names=$_POST['name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$phno=$_POST['phno'];
$mail=$_POST['mail'];
$city=$_POST['city'];
$password=$_POST['password'];


if($_POST['action']=='submit') 
{
$names=str_replace(" ","_", $names);
$int = intval(preg_replace('/[^0-9]+/', '', $names), 10);


if($int==0) 
{
$int = intval(preg_replace('/[^0-9]+/', '', $city), 10);
if($int==0) 
{
if (is_numeric($phno) && strlen($phno)==10) 
{

$sql="insert into user values('$names','$dob','$address','$phno','$mail','$city','$password',$g )";
$conn->query($sql);
echo "<script type='text/javascript'>
alert('Signed Successfully!Welcome to Movie World!!');
</script>";
}



else 
{
echo "<script type='text/javascript'>
alert('Oops!Phone number should not contain any character and length should be 10');
</script>
";	
}
}
else 
{
echo "<script type='text/javascript'>
alert('Oops!City should not contain numbers!');
</script>
";	
}
} 


else 
{
echo "<script type='text/javascript'>
alert('Oops!Name should not contain numbers');
</script>";
}	
} 
?>
</div>
</div>    

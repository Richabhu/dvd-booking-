<?php error_reporting($level = null);
session_start();
if(!$_SESSION['new']) 
{
header('Location:alogin.php');
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
  <script src="bootstrap.min.js"></script></head>
<body background="bck11.jpg">
<form method="get" action="ahome.php"><button style="float:left;left:40%;height:100px;width:200px ; border:none;background-color:transparent" name="san" value="'.$no.'"><h3 style='color:black'>Home</h3></button></form>
<form method="get" action="AddDVD.php"><button style="float:left;height:100px;width:200px ;border:none;background-color:transparent" name="san" value="'.$no.'"><h3 style='color:black'>Add DVD</h3></button></form>
<form method="get" action="cl.php"><button style="float:left;height:100px;width:250px ;border:none;background-color:transparent"  name="san" value="'.$no.'"><h3 style='color:black'>Update DVD</h3></button></form>
<form method="get" action="createads.php"><button style="float:left;height:100px;width:200px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:black'>Add Offers</h3></button></form>
<form method="get" action="manageads.php"><button style="float:left;height:100px;width:200px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:black'>View Offers</h3></button></form>
<form method="get" action="fbss.php"><button style="float:left;height:100px;width:200px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:black'>View Feedback </h3></button></form>
<form method="get" action="alogout.php"><button style="float:left;height:100px;width:200px;border:none; background-color:transparent" name="san" value="'.$no.'"><h3 style='color:black'>LogOut </h3></button></form>
<div class="container">
<form method="post" class="edit4" enctype="multipart/form-data">
<br><br><br><Br>
<h3>ADD DVD</h3>
<hr>
<input type="text" class="form-control" placeholder="DVD name" name="name"><br>
<input type="text" class="form-control" placeholder="artists" name="artists" ><br>

<input type="file" id="files" class="hidden form-control"/ name="myFile">
<label for="files"><font size="2"><b><b><span style="text-decoration: underline;">ad image</span></b></b></font></label>
<br><br>
<input type="text" class="form-control" placeholder="price" name="price"><br><br>
<select name="cat" style="width:100%;height:auto;padding:7px;border-radius: 5px;border:1px solid gray">
  <option value="1">Entertainment</option>
  <option value="2">Folk</option>
  <option value="3">Educational</option>
  <option value="4">Plays</option>
<option value="5">Others</option>
</select>
<br><br><br>

<button class="btn btn-success" name="action" value="submit">post</button>
</form>


<?php error_reporting($level = null);
define("UPLOAD_DIR", "ads/");

if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];

    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    }

    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }

    // preserve file from temporary directory
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR .$name);
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
$sqll="select * from dvd";
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
$names=$_POST['name'];]
$artists=$_POST['artists'];
$price=$_POST['price'];
$catid=$_POST['cat'];



if($_POST['action']=='submit') 
{
$names=str_replace(" ","_", $names);
$sql="insert into dvd values('$names','$artists','$name',$price,$catid,$g)";
$conn->query($sql);
echo "<script type='text/javascript'>
alert('DVD added Successfully');
</script>";
} 
?>

</div> 
<br><br><br><br><br><br>

<h2 style="color: white;" class="by"></h2>	
</body>
</html>
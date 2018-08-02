 <?php
include('config.php');
$a=$_GET['san'];
$sqll="update aadhar set apply='done'";
$conn->query($sqll);
echo '<meta http-equiv="refresh" content="0.1; URL=citizenrequests.php">';
?>
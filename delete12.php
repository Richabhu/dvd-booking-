 <?php
include('config.php');
$a=$_GET['san'];

$sqll="delete from ads where no='$a'";
$conn->query($sqll);
echo '<meta http-equiv="refresh" content="0.1; URL=manageads.php">';
?>
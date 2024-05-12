
<?php 

include 'Connect.php';
$id = $_GET['ID'];
mysqli_query($conn,"delete from db_admin where id='$id'");
mysqli_query($conn,"delete from db_konsumen where id='$id'");

header("tampildatauser.php");
 
?>
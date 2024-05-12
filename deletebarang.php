
<?php 

include 'Connect.php';
$data = $_GET['ID'];
mysqli_query($conn,"DELETE FROM db_barang WHERE ID ='$data'");

header("Location: db_barang.php");

?>
<?php
session_start();
include 'Connect.php';

$nama = $_POST['Nama'];
$id = $_POST['ID'];
$pw = $_POST['Password'];
$query = "UPDATE db_admin SET Nama = '$nama', Password = '$pw' WHERE ID = $id";

$result = mysqli_query($conn, $query);

if ($result) {
   echo "<script>location.href='db_admin.php'</script>";
}

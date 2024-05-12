<?php

include "Connect.php";

if(isset($_POST['oke'])){
    $id = $_POST['ID'];
    $nama = $_POST['Nama'];
    $pwd = $_POST['Password'];
}
mysqli_query($conn,"INSERT INTO db_konsumen VALUES ('$id','$nama','$pwd')" );
header("location:db_konsumen.php");

?>
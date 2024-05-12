<?php
include "Connect.php";

if(isset($_POST['oke'])){
    $no = $_POST['No'];
    $ID = $_POST['ID'];
    $Item = $_POST['Item'];
    $Jenis = $_POST['Jenis'];
    $Stock = $_POST['Stock']; 
    $Harga = $_POST['Harga'];

    
    $query = "INSERT INTO db_barang VALUES ('','$ID', '$Item', '$Jenis', '$Stock', '$Harga')";
    $result = mysqli_query($conn, $query);

    if($result) {
       
        header("Location: db_barang.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<?php
include 'Connect.php';

if(isset($_GET['ID'])) {
    $id_barang = $_GET['ID'];

    $query = "SELECT * FROM db_barang WHERE ID = '$id_barang'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $barang = mysqli_fetch_assoc($result);

        echo "<h2>Tagihan</h2>";
        echo "<p>ID Barang: " . $barang['ID'] . "</p>";
        echo "<p>Nama Barang: " . $barang['Item'] . "</p>";
        echo "<p>Jumlah: 1</p>"; 
        echo "<p>Harga: " . $barang['Harga'] . "</p>";

        $total_harga = $barang['Harga'] * 1; 
        echo "<p>Total Harga: " . $total_harga . "</p>";
        
    } else {
        echo "Data barang tidak ditemukan.";
    }
} else {
    echo "ID barang tidak ditemukan.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button onclick="window.location.href='homepage.php'">Back</button>
</body>
</html>

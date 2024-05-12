<?php
include 'Connect.php';
$query = "SELECT * FROM db_barang";
$result = mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1px">
        <thead>
            <h2 align="center">ITEM</h2>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Item</th>
                <th scope="col">Jenis</th>
                <th scope="col">Stock</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>            
            </tr>
        </thead>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $data['ID'] . "</td>";
            echo "<td>" . $data['Item'] . "</td>";
            echo "<td>" . $data['Jenis'] . "</td>";
            echo "<td>" . $data['Stock'] . "</td>";
            echo "<td>" . $data['Harga'] . "</td>";
            echo "<td><a href='bill.php?ID=" . $data['ID'] . "'>Beli</a></td>";
            echo "<td><a href='deletebarang.php?ID=". $data['ID']. "'>Delete </a> | "."</td>";
            
            echo "</tr>";
            $no++;
            
        }
        
        ?>
        <td><a href='insertbarang.php' ID=". $data['ID']. "'>Add </a> </td>
        
    </table>
    
    <button onclick="window.location.href='homepage.php'">Back</button>
</body>
</html>
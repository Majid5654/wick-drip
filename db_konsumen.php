<?php
include 'Connect.php';
$query = "SELECT * FROM db_konsumen";
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
            <h2 align="center">KONSUMEN</h2>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Password</th>
                
            </tr>
        </thead>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $data['ID'] . "</td>";
            echo "<td>" . $data['Nama'] . "</td>";
            echo "<td>" . $data['Password'] . "</td>";

            echo "<td><a href='delete.php?ID=". $data['ID']. "'>Delete </a> | "."</td>";
            echo "</tr>";
            $no++;
            
        }
        
        ?>
        <td><a href='insertkonsumen.php' ID=". $data['ID']. "'>Add </a> </td>
    </table>
    <button onclick="window.location.href='homepage.php'">Back</button>
</body>
</html>
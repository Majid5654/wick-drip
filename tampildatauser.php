<?php
include 'Connect.php';
$query = "SELECT * FROM login";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
</head>
<body>
    <table border="1px">
        <thead>
            <h2 align="center">User Data</h2>
            <tr>
                <th scope="col">No</th>
                <th scope="col">User</th>
                <th scope="col">Password</th>
                <th scope="col">Level</th>            
            </tr>
        </thead>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $data['User'] . "</td>";
            echo "<td>" . $data['pass'] . "</td>";
            echo "<td>" . $data['Level'] . "</td>";
            echo "<td><a href='Form_Update.php?ID=". $data['ID']. "'>Edit</a> | "."</td>";
            echo "<td><a href='delete.php?ID=". $data['ID']. "'>Delete </a> | "."</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
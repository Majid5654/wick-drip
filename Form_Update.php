<?php
include "Connect.php";

$id = $_GET['ID'];

$query = "SELECT * FROM db_admin WHERE ID = '$id'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['ID'];
    $nama = $_POST['Nama'];
    $password = $_POST['Password'];

    $update_query = "UPDATE db_admin SET Nama='$nama', Password='$password' WHERE ID='$id'";
    $update_result = mysqli_query($conn, $update_query);

    if ($update_result) {
        header("location: db_admin.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="hidden" name="ID" value="<?=$id?>">
        <label for="Nama">Nama:</label>
        <input type="text" id="Nama" name="Nama" value="<?php echo $row['Nama']; ?>">
        <br>
        <label for="Password">Password:</label>
        <input type="text" id="Password" name="Password" value="<?php echo $row['Password']; ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
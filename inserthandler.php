<?php
include "Connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['Nama']) && isset($_POST['Password'])) {
        $nama = $_POST['Nama'];
        $pwd = $_POST['Password'];

        $query = "INSERT INTO db_admin (Nama, Password) VALUES ('$nama', '$pwd')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Nama and/or Password not set in POST data.";
    }
} else {
    echo "Form submission method not recognized.";
}

mysqli_close($conn);
?>
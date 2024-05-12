<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <div class="kotak_signup">
        <p class="tulisan_signup">Buat Akun Baru</p>

        <form action="insertadmin.php" method="post">
            <label>User</label>
            <input type="text" name="User" class="form_signup" placeholder="User.." required="required">

            <label>Pasword</label>
            <input type="text" name="pass" class="form_signup" placeholder="name.." required="required">

            <label>level</label>
                <input type="text" name="Level" class="form_signup" placeholder="Level.." required="required">

            
                <input type="submit" class="tombol_signup" value="Daftar">
                </form>
            </div>
    
</body>
</html>

<?php
session_start();
include "Connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['User'], $_POST['pass'], $_POST['Level'])) {
        $usr = $_POST['User'];
        $pss = $_POST['pass'];
        $lvl = $_POST['Level'];

        $daftar = mysqli_query($conn,"INSERT INTO login VALUES ('$usr','$pss','$lvl')" );
    }
}

?>
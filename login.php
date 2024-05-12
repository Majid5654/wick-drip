<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
 	<div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>

        <form action="ceklogin.php" method="post">
            <label>User</label>
            <input type="text" name="user" class="form_login" placeholder="User .." required="required">

            <label>Password</label>
            <input type="text" name="pass" class="form_login" placeholder="Password .." required="required">

			
            <input type="submit" class="tombol_login" value="LOGIN">
			
            <br/>
            <br/>
        </form>
    </div>
	<input type="button" class="daftar" value="Daftar" onclick="location.href='signup.php'">
 
</body>
</html>
	<?php 
	session_start();
 

	include 'Connect.php';
	
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
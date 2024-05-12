<?php 
session_start();
 

include 'Connect.php';
 

$user = $_POST['user'];
$password = $_POST['pass'];
$dftr = $_POST['daftar'];
 

$login = mysqli_query($conn,"SELECT * FROM login WHERE User = '$user' and pass = '$password'");

$cek = mysqli_num_rows($login);
 

if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	
	if($data['Level']=="admin"){
		$_SESSION['User'] = $user;
		$_SESSION['level'] = "admin";
		header("location:homepage.php");

	}else if($data['Level']=="user"){
		$_SESSION['username'] = $user;
		$_SESSION['level'] = "pegawai";
		header("location:homepage.php");
 
	}else{
 
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>
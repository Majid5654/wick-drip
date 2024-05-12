<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'wick&drip';
$conn = mysqli_connect($host, $user, $pass, $db);
if(!$conn){
    echo("Connection failed: ") ;
}

    else{

        echo "Connected successfully";
    }


    

?>
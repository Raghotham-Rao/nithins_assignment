<?php
    $host = 'localhost';
    $user_name = 'root';
    $password = '';
    $dbname = 'store';

    $conn = mysqli_connect($host, $user_name, $password, $dbname);

    if(!$conn){
        echo "connection failed";
    }

    if(!isset($_SESSION['email'])){
        session_start();
    }
?>
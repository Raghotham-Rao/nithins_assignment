<?php
    $host = 'localhost';
    $user_name = 'root';
    $password = '';
    $dbname = 'store';

    $conn = mysqli_connect($host, $user_name, $password, $dbname);

    if(!$conn){
        echo "connection failed";
    }

    session_start();

    // $_SESSION['email'] = 'nithinskanda@yahoo.in';
?>
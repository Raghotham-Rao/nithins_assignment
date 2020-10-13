<?php

    include('./includes/common.php');

    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string($conn, md5($_POST['password']));

    $query = "select id,email from users where email = '$email' and password = '$password'";

    $res = mysqli_query($conn, $query);

    if($res){
        $row = mysqli_fetch_assoc($res);
        
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];

        header('location: products.php');
    }
    else{
        echo mysqli_error($conn);
    }

?>
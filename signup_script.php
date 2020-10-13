<?php
    require './includes/common.php';

    $name = mysqli_escape_string($conn, $_POST['name']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string($conn, md5($_POST['passwd']));
    $contact = mysqli_escape_string($conn, $_POST['contact']);
    $city = mysqli_escape_string($conn, $_POST['city']);
    $address = mysqli_escape_string($conn, $_POST['address']);

    $query = "insert into users(name, email, password, contact, city, address) values('$name', '$email', '$password', '$contact', '$city', '$address')";

    $res = mysqli_query($conn, $query);

    if($res){
        $_SESSION['email'] = $email;
        $_SESSION['id'] = mysqli_insert_id($conn);

        header('location: products.php');
    }
    else{
        echo mysqli_error($conn);
    }

    // echo implode("<br/>", $_POST);
?>
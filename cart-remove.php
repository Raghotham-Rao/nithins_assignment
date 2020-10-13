<?php
    require './includes/common.php';

    $user_id = $_SESSION['id'];
    $item_id = $_GET['id'];
    $query = "delete from users_items where user_id = $user_id and item_id = $item_id";

    $res = mysqli_query($conn, $query);

    if(!$res){
        echo mysqli_error($conn);
    }
    else{
        header('location: cart.php');
    }
?>
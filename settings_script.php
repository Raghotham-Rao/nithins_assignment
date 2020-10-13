<?php
    require './includes/common.php';

    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }

    $old_pass = mysqli_escape_string($conn, md5($_POST['old_pass']));
    $new_pass = mysqli_escape_string($conn, md5($_POST['new_pass']));
    $confirm_pass = mysqli_escape_string($conn, md5($_POST['confirm_pass']));

    if(!($new_pass == $confirm_pass)){
        header('location: settings.php?err=mismatched_passwords');
    }

    $query = "select id,password from users where id = {$_SESSION['id']} and password = '$old_pass'";

    $res = mysqli_query($conn, $query);
    if(mysqli_num_rows($res) > 0){
        $update_query = "update users set password = '$new_pass' where id = {$_SESSION['id']}";

        if(!mysqli_query($conn, $update_query)){
            echo "Unable to update password";
        }
        else{
            session_unset();
            session_destroy();
            header('location: login.php');
        }
    }
    else{
        header('location: settings.php?err=wrong_old_password');
    }

?>
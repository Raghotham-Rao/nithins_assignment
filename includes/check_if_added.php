<?php

    require 'common.php';

    $GLOBALS['conn'] = $conn;

    function check_if_added_to_cart($item_id){        
        $user_id = $_SESSION['id'];
        $query = "select * from users_items where item_id = $item_id and user_id = $user_id";

        $res = mysqli_query($GLOBALS['conn'], $query);

        if(mysqli_num_rows($res) > 0){
            return mysqli_fetch_assoc($res)['status'];
        }
        return false;
    }
?>
<?php
    require './common.php';
    
    function check_if_added_to_cart($item_id){
        $user_id = $_SESSION['id'];
        $query = "select id from users_items where item_id = $item_id and user_id = $user_id";

        $res = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($res)){
            echo $row['id'];
        }
    }
?>
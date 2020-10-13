<?php

	require './includes/common.php';

	$user_id = $_SESSION['id'];
	$product_id = $_GET['item_id'];

	$query = "insert into users_items(user_id, item_id, status) values($user_id, $product_id, 'Added to cart')";

	$res = mysqli_query($conn, $query);

	if($res){
		header("location: cart.php");
	}
	else{
		echo mysqli_error($conn);
	}

?>
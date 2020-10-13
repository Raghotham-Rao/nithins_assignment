<?php
    require './includes/common.php';

    if(!isset($_SESSION['email'])){
        header('index.php');
    }
    else{
        $query = "update users_items set status = 'Confirmed' where user_id = {$_SESSION['id']}";

        if(!mysqli_query($conn, $query)){
            echo "Couldn't Confirm order";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./public/stylesheets/index.css">
</head>
<body>

    <div class="container" id="success_container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="jumbotron bg-success text-center">
                    <h1 class="display-3 text-center">Thank you for shopping!</h1>
                    <a href="./products.php"> Click here </a> <span>to purchase any other item.</span> 
                </div>
            </div>
        </div>
    </div>

</body>
</html>
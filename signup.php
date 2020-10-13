<?php
    require './includes/common.php';

    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./public/stylesheets/index.css">
</head>
<body>
    <?php
        include './includes/navbar.php';
    ?>

    <div class="col-sm-4 col-sm-offset-4">
        <form action="signup_script.php" method="post" id="signup_form">
            <h2 class="text-center">SIGN UP</h2>
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="password" name="passwd" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <input type="text" name="contact" class="form-control" placeholder="Contact" pattern="[6-9][0-9]{9}">
            </div>

            <div class="form-group">
                <input type="text" name="city" class="form-control" placeholder="City">
            </div>

            <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Address">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php
        include './includes/footer.php';
    ?>
</body>
</html>
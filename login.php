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
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Login</h4>
            </div>
    
            <div class="panel-body">
                <p class="text-warning"> Login to make a purchase </p>
                <form action="login_submit.php" method="post">
                    <div class="form-group">
                        <input type="email" name="email" id="emailId" class="form-control" placeholder="Email">
                    </div>
    
                    <div class="form-group">
                        <input type="password" name="password" id="passwd" class="form-control" placeholder="Password">
                    </div>
    
                    <button type="submit" class="btn btn-primary"> Login </button>
                </form>
            </div>
    
            <div class="panel-footer">
                Don't have an account? <a href="./signup.html" class="text-primary">Register</a>
            </div>
        </div>
    </div>

    <?php
        include './includes/footer.php';
    ?>

</body>
</html>
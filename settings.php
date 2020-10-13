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
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarOptions">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="./index.html" class="navbar-brand">Lifestyle Store</a>
        </div>

        <div class="collapse navbar-collapse" id="navbarOptions">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="./cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li><a href="./signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="./login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a></a></li>
            </ul>
        </div>
    </nav>

    <div class="col-sm-4 col-sm-offset-4">
        <form action="" method="post" id="signup_form">
            <h2 class="text-center">Change Password</h2>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Old Password">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="New Password">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Re-type New Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <footer>
        <div class="container">
            <center>
                Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
            </center>
        </div>
    </footer>

</body>
</html>
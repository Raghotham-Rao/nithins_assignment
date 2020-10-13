<?php
    require('./includes/common.php');

    if(!isset($_SESSION['email'])){
        header('location: index.php');
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
    <?php
        include './includes/navbar.php';
    ?>

    <div class="col-sm-4 col-sm-offset-4">
        <form action="settings_script.php" method="post" id="signup_form">
            <h2 class="text-center">Change Password</h2>

            <div class="form-group">
                <input type="password" name="old_pass" class="form-control" placeholder="Old Password">
                <?php if(isset($_GET['err']) and $_GET['err'] == 'wrong_old_password') {?>
                    <p class="text-danger"> * Type in the correct old password </p>
                <?php } ?>
            </div>

            <div class="form-group">
                <input type="password" name="new_pass" class="form-control" placeholder="New Password">
                <?php if(isset($_GET['err']) and $_GET['err'] == 'mismatched_passwords') {?>
                    <p class="text-danger">*new passwords must match </p>
                <?php } ?>
            </div>

            <div class="form-group">
                <input type="password" name="confirm_pass" class="form-control" placeholder="Re-type New Password">
                <?php if(isset($_GET['err']) and $_GET['err'] == 'mismatched_passwords') {?>
                    <p class="text-danger">*new passwords must match </p>
                <?php } ?>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <?php
        include './includes/footer.php';
    ?>

</body>
</html>
<?php
    require './includes/common.php';
?>

<?php
    if(isset($_SESSION['email'])){
        header('location: products.php');
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

    <div id="banner_image">
        <div class="container">
            <div id="banner_content">
                <a href="./products.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
        </div>
    </div>

    <?php
        include './includes/footer.php';
    ?>

</body>
</html>
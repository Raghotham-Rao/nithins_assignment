<?php
    require './includes/common.php';
    include './includes/check_if_added.php';
?>

<?php
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

    <div class="container add-top-margin add-bottom-margin">
        <div class="jumbotron">
            <h1> Welcome to our Lifestyle Store! </h1>
            <p>We have  the best cameras, watches and shirts for you. No need to hunt around, we have all in onle place.</p>
        </div>

        <?php
            $query = "select * from items";

            $res = mysqli_query($conn, $query);

            for($i = 0;$i < mysqli_num_rows($res); $i+=4){ ?>

                <div class="row text-center">

                <?php for ($j=0; $j < 4; $j++) { ?> 

                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <a href="">
                                    <?php $row = mysqli_fetch_assoc($res); ?>
                                    <img src = '<?php echo $row["img_src"]; ?>' >
                                    <div class="caption">
                                        <h2> <?php echo $row["name"]; ?> </h2>
                                        <p> Price: Rs.<?php echo $row["price"]; ?> </p>
                                        <a class="btn btn-primary btn-block" href='<?php echo "cart-add.php?item_id=" . $row["id"]; ?>'>Add to Cart</a>
                                    </div>
                                </a>
                            </div>            
                        </div>

                <?php } ?>

                </div>
            <?php } ?>
        </div>

    <?php
        include './includes/footer.php';
    ?>

</body>
</html>
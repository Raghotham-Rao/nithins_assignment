<?php
    require './includes/common.php';
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
            $query = "select * from products";

            $res = mysqli_query($conn, $query);
        ?>

        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="./public/images/5.jpg" alt="" srcset="">
                        <div class="caption">
                            <h2>Product Name</h2>
                            <p>Product Price</p>
                            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="./public/images/2.jpg" alt="" srcset="">
                        <div class="caption">
                            <h2>Product Name</h2>
                            <p>Product Price</p>
                            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="./public/images/3.jpg" alt="" srcset="">
                        <div class="caption">
                            <h2>Product Name</h2>
                            <p>Product Price</p>
                            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="./public/images/4.jpg" alt="" srcset="">
                        <div class="caption">
                            <h2>Product Name</h2>
                            <p>Product Price</p>
                            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="./public/images/9.jpg" alt="" srcset="">
                        <div class="caption">
                            <h2>Product Name</h2>
                            <p>Product Price</p>
                            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="./public/images/10.jpg" alt="" srcset="">
                        <div class="caption">
                            <h2>Product Name</h2>
                            <p>Product Price</p>
                            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="./public/images/11.jpg" alt="" srcset="">
                        <div class="caption">
                            <h2>Product Name</h2>
                            <p>Product Price</p>
                            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="./public/images/12.jpg" alt="" srcset="">
                        <div class="caption">
                            <h2>Product Name</h2>
                            <p>Product Price</p>
                            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="./public/images/8.jpg" alt="" srcset="">
                        <div class="caption">
                            <h2>Product Name</h2>
                            <p>Product Price</p>
                            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="./public/images/6.jpg" alt="" srcset="">
                        <div class="caption">
                            <h2>Product Name</h2>
                            <p>Product Price</p>
                            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="./public/images/13.jpg" alt="" srcset="">
                        <div class="caption">
                            <h2>Product Name</h2>
                            <p>Product Price</p>
                            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="./public/images/14.jpg" alt="" srcset="">
                        <div class="caption">
                            <h2>Product Name</h2>
                            <p>Product Price</p>
                            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>    

    <?php
        include './includes/footer.php';
    ?>

</body>
</html>
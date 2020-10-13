<?php 
    require './includes/common.php';
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

    <div class="container-fluid add-top-margin">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "select items.name,items.price from users_items inner join items where items.id = users_items.item_id and user_id=$_SESSION[id]";

                            $res = mysqli_query($conn, $query);
                            $count = 1;

                            while($row = mysqli_fetch_array($res)){ ?>
                                <tr>
                                    <td> <?php echo $count++; ?> </td>
                                    <td> <?php echo $row[0]; ?> </td>
                                    <td> <?php echo $row[1]; ?> </td>
                                    <td></td>
                                </tr>
                        <?php } ?>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Rs 0/-</td>
                            <td><a href="./success.html" class="btn btn-primary">Confirm Order</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>

        </div>

    <?php 
        include './includes/footer.php';
    ?>

</body>
</html>
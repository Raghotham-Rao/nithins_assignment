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

            <div class="col-sm-6 col-sm-offset-3">
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
                            $query = "select items.id, items.name,items.price from users_items inner join items where items.id = users_items.item_id and user_id=$_SESSION[id] and users_items.status = 'Added to cart'";

                            $res = mysqli_query($conn, $query);
                            $count = 1;
                            $total = 0;

                            while($row = mysqli_fetch_array($res)){ 
                                $total += $row[2]?>
                                <tr>
                                    <td class="text-center"> <?php echo $count++; ?> </td>
                                    <td> Rs. <?php echo $row[1]; ?> </td>
                                    <td> Rs. <?php echo $row[2]; ?> </td>
                                    <td> <a href='<?php echo "cart-remove.php?id=$row[0]" ?>'> Remove </a></td>
                                </tr>
                        <?php } ?>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td> Rs. <?php echo $total; ?></td>
                            <td class="text-center"><a href="./success.php" class="btn btn-primary">Confirm Order</a></td>
                        </tr>

                        <tr>
                            <td colspan="4"> <a class="btn btn-primary btn-block" href="products.php"> Shop More </a> </td>
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
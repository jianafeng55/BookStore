<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body background="img/success_bg.jpg">
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="">
                      <h1 align="center">Your order is confirmed. Thank you for shopping with us.</h1><hr>
                    <h3 align="center"><a href="products.php" style="color: #1A0900"><b> <u>Click here</u></b></a> to purchase any other item.</h3>
                </div>
            </div>
        </div>
        <div style="margin-top: 18px">
        	<?php include "includes/footer.php"; ?>
        </div>
    </body>
</html>
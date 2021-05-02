<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$product_ids_string = $_GET['product_id'];
$query = "UPDATE users_products SET status='Confirmed' WHERE user_id=" . $user_id . " AND product_id IN (" . $product_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('includes/link.php');?>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="home.php">here</a> to purchase any other product.</p>
                </div>
            </div>
        </div>
       
    </body>
</html>
<?php
include 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/mainhead.php';?>
        
    </head>
    <body>
        <?php include 'includes/header.php';
        
        $user_id=$_SESSION['id'];
        $query="UPDATE `users_products` SET `status`='Confirmed' WHERE `user_id`='$user_id' ";
        $query_run=mysqli_query($con,$query) or die(mysqli_error($con));
        ?>
        
        <div class="container-fluid" id="content" style="margin-top: 10%; margin-bottom: 25%;">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="index.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php';?>
    </body>
</html>
<?php
include 'includes/common.php';
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
$delete_query="DELETE FROM users_products WHERE user_id='$user_id' AND item_id='$item_id'";
$delete_query_result=mysqli_query($con , $delete_query) or die(mysqli_error($con));
header('location:cart.php');
?>
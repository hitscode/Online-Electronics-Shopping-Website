<?php
function check_if_added_to_cart($item_id){
include 'includes/common.php';
$user_id=$_SESSION['id'];
$query_run="SELECT * FROM users_products WHERE  user_id ='$user_id' AND item_id='$item_id' AND status='Added to cart'";
$query_result=mysqli_query($con,$query_run) or die(mysqli_error($con)) ;
$num_rows=mysqli_num_rows($query_result);
if($num_rows>=1){
    return 1;
}else{
    return 0;
}
    
}

?>
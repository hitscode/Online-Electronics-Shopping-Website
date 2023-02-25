<?php include 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}?>

    



<html>
    <head>
         <?php include 'includes/mainhead.php';?>
        <style>
            th,td{
                text-align: center;
            }
           
        </style>
        <title>LifeStyle Store</title>

        
    </head>
    <body>
         <?php include 'includes/header.php';
         $user_id=$_SESSION['id'];
         
         
         ?>
        <table class="table table-bordered table-hover table-responsive table-striped " style="margin-top: 13%; width: 90%;margin-right:5%;margin-left:5%; margin-bottom: 22%; ">
  <thead style="background-color:#a6e1ec" >
    <tr>
      <th>Item Number</th>
      <th>Item Name</th>
      <th>Price</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
      <?php 
              
               $inner_query="SELECT up.id,up.name,up.price FROM products up INNER JOIN users_products u ON u.item_id=up.id WHERE user_id='$user_id' ";
         $run_inner_query= mysqli_query($con, $inner_query) or die(mysqli_error($con));
         $inner_query_rows=mysqli_num_rows($run_inner_query);
         if($inner_query_rows==0){
             $error='Add Items To Cart First!!!';
         } else {
             
                    
             while($row=mysqli_fetch_assoc($run_inner_query)){?>
                 
      
    <tr>
        <td><?php echo $row['id']; ?></td>;
      <td><?php echo $row['name']; ?></td>
      <td><?php echo 'Rs '.$row['price'].'.00'; ?></td>
        <?php $item_ids=$row['id']; ?>
      <td><a href= "cart-remove.php?id=<?php echo $item_ids;?>"
      class="remove_item_link"> Remove From Cart</a></td>
      <?php $sum+=$row['price'];?>
    </tr>
             
         <?php }}?>
    <tr>
        
      <td></td>
      <td>Total</td>
      <td><?php echo 'Rs '.$sum.'.00'.'\-'; ?></td>
      <td><a href="success.php?id=<?php echo $user_id;?>"><button class="btn btn-primary ">Confirm Order</button></a></td>
    </tr>
  </tbody>
</table>
    <?php if($error){?>
        <div class="alert alert-danger" role="alert"><?php echo $error;?></div>
     <?php }?>
       
  <?php include 'includes/footer.php';?>               
        
        
    </body>
    
</html>


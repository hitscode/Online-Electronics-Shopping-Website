
<div class="col-xs-12 col-md-4" style="margin-top: 15px; " >              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">TV 4</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/tv4.jpeg" alt="TV 4" style="height:170px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tv4" style="margin-top: 8px;">Click For Description</button>

                    <h3 style="font-weight:bold; "class="text-primary">MI 32 HD Ready Smart LED TV, 4A Horizon, ELA4546IN</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs. 16,499</p>
                   <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(16)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
                    <?php
                    }}
                    ?>
                </div>
                    </center>   
                    
                    </div>
                    
            
                </div>
                </div>        
                
                        
        <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="tv4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel "style="font-weight: bolder;">MI 32 HD Ready Smart LED TV, 4A Horizon, ELA4546IN</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">80 cm (32 inch) HD Ready Display Android TV with 5000 plus Apps</li>
  <li class="list-group-item text-info text-center">PatchWall Experience Bezel-less Design</li>
  <!-- <li class="list-group-item text-info text-center">3,400 mAh lithium-polymer battery (non-removable) powered by state-of-the-art Dash Charge (5V 4A) technology; NFC enabled, Bluetooth 4.2and reversible type-C connector</li> -->
  <li class="list-group-item text-info text-center">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
        </ul>  
        
      </div>
   
    </div>
  </div>
</div>

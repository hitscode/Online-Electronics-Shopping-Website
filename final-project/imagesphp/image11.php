
            <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mobile 11</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/m11.jpg" alt="Mobile 11" style="height:188px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal11" style="margin-top: 15px;">Click For Description</button>

                    <h3 style="font-weight:bold; "class="text-primary">Honor 6X (Gold, 64GB)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs. 13,999.00</p>
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(11)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder">Honor 6X (Gold, 64GB)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">12MP+2MP dual lens primary camera with auto focus camera, FF camera and 8MP front facing camera with PDAF Focusing</li>
  <li class="list-group-item text-info text-center">13.97 centimeters (5.5-inch) LCD LTPS/a-si capacitive touchscreen with 1920 x 1080 pixels resolution, 403 ppi pixel density and 16M color support</li>
  <li class="list-group-item text-info text-center">Android EMUI4.1 v 6.0.1 Marshmallow operating system with 2.1GHz + 1.7GHz Kirin 655 octa core processor, 4GB RAM, 64GB internal memory expandable up to 128GB and dual SIM (nano+nano (hybrid)) dual-standby (4G+4G) with VoLte support</li>
  <li class="list-group-item text-info text-center">User can use any SIM slot for 4G (In-fact he can insert two 4G SIM cards in both the slots), Based on which SIM he choose for Data Connection, other SIM goes onto 2G for Voice.</li>
  <li class="list-group-item text-info text-center">3340mAH lithium-polymer battery providing talk-time of 23 hours and standby time of 650 hours</li>
    <li class="list-group-item text-info text-center">15 months manufacturer warranty for device, first 30 days screen breakage and 6 months manufacturer warranty for in box accessories including batteries from date of purchase.</li>
     
</ul>  
        
      </div>
   
    </div>
  </div>
</div>

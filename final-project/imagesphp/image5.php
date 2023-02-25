
            <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mobile 5</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/m5.jpg" alt="Mobile 5" style="height:200px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal5">Click For Description</button>

                    <h3 style="font-weight:bold; " class="text-primary">Oppo F1S (Gold, 64GB)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs.  17,990.00</p>
                   <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(5)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder;">Oppo F1S (Gold, 64GB)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">13MP primary camera with normal, ultra HD, filters, GIFF, double exposure, expert mode, HDR, beauty, panorama, time lapse and 16MP front facing camera</li>
  <li class="list-group-item text-info text-center">13.97 centimeters (5.5-inch) TFT IPS capacitive touchscreen with 1280 x 720 pixels resolution and 267 ppi pixel density</li>
  <li class="list-group-item text-info text-center">Android v5.1 operating system with 1.5GHz 64-bit octa core processor, 4GB RAM, 64GB internal memory expandable up to 128GB and dual SIM (nano+nano) dual-standby (4G+4G)</li>
  <li class="list-group-item text-info text-center">3075mAH lithium-ion battery providing talk-time of 28.5 hours and standby time of 281 hours</li>
  <li class="list-group-item text-info text-center">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
     
</ul>  
        
      </div>
   
    </div>
  </div>
</div>


            <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mobile 7</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/m7.jpg" alt="Mobile 7" style="height:183px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal7" style="margin-top: 18px;">Click For Description</button>

                    <h3 style="font-weight:bold; " class="text-primary">Coolpad Note 5 (Royal Gold, 32 GB)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs. 10,999.00</p>
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(7)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder;">Coolpad Note 5 (Royal Gold, 32 GB)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">13MP primary camera with auto focus and 8MP front facing camera with flash</li>
  <li class="list-group-item text-info text-center">13.97 centimeters (5.5-inch) FHD IPS capacitive touchscreen with 1920 x 1080 pixels resolution and 401 ppi pixel density</li>
  <li class="list-group-item text-info text-center">Android 6.0 + CoolUI operating system with 1.5 GHz, Qualcomm Snapdragon 617 MSM8952 octa-core, 4GB RAM, 32GB internal memory expandable up to 64GB and dual SIM (nano+nano (hybrid)) dual-standby (4G+4G) with VoLTE</li>
  <li class="list-group-item text-info text-center">4010 mAh battery providing talk time of 8 hours and stand by time of 200 hours</li>
  <li class="list-group-item text-info text-center">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
</ul>  
        
      </div>
   
    </div>
  </div>
</div>
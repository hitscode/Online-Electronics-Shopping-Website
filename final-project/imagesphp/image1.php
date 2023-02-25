
<div class="col-xs-12 col-md-4" style="margin-top: 15px; " >              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mobile 1</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                            <img src="images/m1.jpg" alt="Mobile 1" style="height:205px;" class="img-responsive" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Click For Description</button>

                    <h3 style="font-weight:bold; " class="text-primary">Lenovo Vibe K5 (Gold, VoLTE update)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs. 6,999.00</p>
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(1)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
                    <?php
                    }}
                    ?>
                    </center>   
                    
                    </div>
                    
            
                </div>
                </div>        
                
                        
        <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bold;">Lenovo Vibe K5 (Gold, VoLTE update)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">13MP primary camera with auto focus, LED flash and 5MP front facing camera.</li>
  <li class="list-group-item text-info text-center">12.7 centimeters (5-inch) HD IPS capacitive touchscreen with 1280 x 720 pixels resolution</li>
  <li class="list-group-item text-info text-center">Android v5.1 Lollipop operating system with 1.4GHz 64-bit Qualcomm Snapdragon 415 octa core processor, Adreno 405 (up to 550MHz 3D graphics accelerator or up to 465MHz) GPU, 2GB RAM, 16GB internal memory expandable up to 32GB and dual SIM (micro+micro) dual-standby (4G+4G) with VoLTE update</li>
  <li class="list-group-item text-info text-center">2750mAH lithium-ion battery providing talk-time of 32 hours on 2G, 15.1 hours on 3G networks and standby time of 322 hours</li>
  <li class="list-group-item text-info text-center">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
    <li class="list-group-item text-info text-center">Twin high quality stereo speakers with Dolby Atmos</li>
      <li class="list-group-item text-info text-center">Dedicated expandable microSD card slot</li>
</ul>  
        
      </div>
   
    </div>
  </div>
</div>

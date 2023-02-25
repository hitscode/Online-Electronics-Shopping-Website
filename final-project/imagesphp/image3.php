
             <div class="col-xs-12 col-md-4" style="margin-top: 15px; "> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mobile 3</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/m3.jpg" alt="Mobile 3" style="height:160px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal2" style="margin-top: 18px;">Click For Description</button>

                    <h3 style="font-weight:bold; " class="text-primary">Intex Aqua Supreme+ (Black, 16GB, VoLTE)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs.  5,499.00</p>
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(3)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder;">Intex Aqua Supreme+ (Black, 16GB, VoLTE)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">13MP primary camera with face detection, HDR, GIF creation, panaroma and 5MP front facing camera</li>
  <li class="list-group-item text-info text-center">12.7 centimeters (5-inch) IPS Oncell capacitive touchscreen with 1280 x 720 pixels resolution, 223 ppi pixel density and 16.7M color support</li>
  <li class="list-group-item text-info text-center">Android v6.0 Marshmallow operating system with 1.3GHz Chipset MTK6737 quad core processor, 2GB RAM, 16GB ROM Expandable: Upto 128GB and dual SIM (micro+micro) dual-standby (4G+4G)</li>
  <li class="list-group-item text-info text-center">3000mAH lithium-polymer battery providing talk-time of 6 hours and standby time of 300 hours</li>
  <li class="list-group-item text-info text-center">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
</ul>  
        
      </div>
   
    </div>
  </div>
</div>

            <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mobile 9</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/m9.jpg" alt="Mobile 9" style="height:185px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal9" style="margin-top: 15px;">Click For Description</button>

                    <h3 style="font-weight:bold; " class="text-primary">Lenovo Z2 Plus (Black, 64GB)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs. 13,499.00</p>
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(9)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder;">Lenovo Z2 Plus (Black, 64GB)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">Qualcomm Snapdragon 820, 4 custom Kryo cores, 2.15Ghz, 14nm FinFET process, 4GB DDR4 RAM, 64GB SmartSLC internal memory, Dual SIM (nano+nano), VoLTE & 4G+</li>
  <li class="list-group-item text-info text-center">Android v6.0.1 with Google Now launcher, 3500mAh high density Li-Ion Battery</li>
  <li class="list-group-item text-info text-center">13MP large pixel (1.34µm) primary camera with Hybrid autofocus (PDAF&CAF), 4K video recording, slow-motion capture (120fps), Time-lapse, Live Filters, Auto HDR. 8MP Front facing Camera with large pixel (1.4µm)</li>
  <li class="list-group-item text-info text-center">12.7 centimeters (5-inch) LTPS LCD capacitive touchscreen with 1920 x 1080 pixels resolution and 441 ppi pixel density</li>
  <li class="list-group-item text-info text-center">Matte Black Stealth Case available in the box</li>
    <li class="list-group-item text-info text-center">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
      
</ul>  
        
      </div>
   
    </div>
  </div>
</div>

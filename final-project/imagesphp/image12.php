
<div class="col-xs-12 col-md-4" style="margin-top: 15px; " >              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mobile 12</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/m12.jpg" alt="Mobile 12" style="height:170px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal12" style="margin-top: 8px;">Click For Description</button>

                    <h3 style="font-weight:bold; "class="text-primary">OnePlus 3T (Gunmetal, 6GB RAM + 64GB memory)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs. 29,999.00</p>
                   <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(12)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel "style="font-weight: bolder;">OnePlus 3T (Gunmetal, 6GB RAM + 64GB memory)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">16MP primary camera (f/2.0 Aperture, 1.12 µm Pixel size) with high speed autofocus technology (PDAF), updated Electronic (EIS) and Optical (OIS) stabilization technologies protected by a more durable sapphire glass with a 16 MP front camera (f/2.0 Aperture, 1.0 µm Pixel size) capable of capturing improved low-light selfies and videos</li>
  <li class="list-group-item text-info text-center">13.97 centimeters (5.5-inch) Optic AMOLED Full HD capacitive touchscreen with 1920 x 1080 pixels resolution and 401 PPI pixel density</li>
  <li class="list-group-item text-info text-center">Android OS, v6.0.1 (Marshmallow), upgradable to v7.1.1 (Nougat) with Qualcomm Snapdragon 821 MSM8996 Pro (2.35 GHz) quad core processor; Adreno 530 GPU 6GB LPDDR4 RAM, 64GB internal memory (UFS 2.0 Flash Storage), dual nano-SIM dual-standby (4G+4G),</li>
  <li class="list-group-item text-info text-center">3,400 mAh lithium-polymer battery (non-removable) powered by state-of-the-art Dash Charge (5V 4A) technology; NFC enabled, Bluetooth 4.2and reversible type-C connector</li>
  <li class="list-group-item text-info text-center">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
        </ul>  
        
      </div>
   
    </div>
  </div>
</div>

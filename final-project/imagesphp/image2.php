                
              <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mobile 2</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/m2.jpg" alt="Mobile 1" style="height:160px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal1" style="margin-top: 20px;">Click For Description</button>

                    <h3 style="font-weight:bold; " class="text-primary">OnePlus 5 (Slate Gray, 6GB RAM + 64GB memory)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs. 32,999.00</p>
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(2)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bold;">OnePlus 5 (Slate Gray, 6GB RAM + 64GB memory)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">20MP+16MP primary dual camera and 16MP front facing camera</li>
  <li class="list-group-item text-info text-center">13.97 centimeters (5.5-inch) capacitive touchscreen FHD display with 1920 x 1080 pixels resolution</li>
  <li class="list-group-item text-info text-center">Android v7.1.1 Nougat OS with Qualcomm Snapdragon 835 octa core processor</li>
  <li class="list-group-item text-info text-center">6 GB RAM, 64 GB internal memory and dual nano SIM dual-standby (4G+4G)</li>
  <li class="list-group-item text-info text-center">3300mAH lithium-ion battery with Dash Charge technology</li>
    <li class="list-group-item text-info text-center">Fingerprint scanner, all-metal unibody and NFC enabled</li>
      <li class="list-group-item text-info text-center">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
</ul>  
        
      </div>
   
    </div>
  </div>
</div>
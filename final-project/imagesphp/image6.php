
            <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mobile 6</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/m6.jpg" alt="Mobile 6" style="height:200px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal6" style="">Click For Description</button>

                    <h3 style="font-weight:bold; "class="text-primary ">Moto G Plus, 4th Gen (Black, 32 GB)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs. 14,999.00</p>
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(6)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder;">Moto G Plus, 4th Gen (Black, 32 GB)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">16 MP primary camera with laser focus, PDAF and Professional mode, 5 MP wide angle front camera with display flash</li>
  <li class="list-group-item text-info text-center">Finger print reader for fast unlocking, 13.97 centimeters (5.5-inch) full HD display, 1920 x 1080 pixels resolution and 401 ppi pixel density, Corning Gorilla Glass 3</li>
  <li class="list-group-item text-info text-center">Android v6.0.1 Marshmallow operating system (upgradable to 7.0 (Nougat)) with Motorola mobile computing system, including 1.5 GHz MSM8952 Qualcomm® SnapdragonTM 617 octa-core processor with 550 MHz Adreno 405 GPU, 3GB RAM, 32GB internal memory expandable up to 128GB and dual micro-SIM dual-standby (4G+3G)</li>
  <li class="list-group-item text-info text-center">3000 mAh all day battery with TurboPower charging (6 hours of power in 15 min of charging)</li>
  <li class="list-group-item text-info text-center">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
</ul>  
        
      </div>
   
    </div>
  </div>
</div>

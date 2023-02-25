
            <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mobile 10</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/m10.jpg" alt="Mobile 10" style="height:165px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal10" style="margin-top: 14px;">Click For Description</button>

                    <h3 style="font-weight:bold; " class="text-primary">Karbonn Aura Note 4G Volte_2GB RAM_16GB_ROM(Black)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs. 6,099.00</p>
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(10)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel "style="font-weight: bolder;">Karbonn Aura Note 4G Volte_2GB RAM_16GB_ROM(Black)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">13.97 CM (5.5) , HD IPS Screen</li>
  <li class="list-group-item text-info text-center">4G Volte , 2800 mAh Battery, Android 6.0 marshmallow, 1.25 GHZ quad core processor, 5MP AF Rear Camera with Flash</li>
  <li class="list-group-item text-info text-center">5 MP Front Camera, 16 GB ROM, 2GB RAM, G/P/L and Finger Touch Sensor , Wi-Fi b/g/n Dual Sim (4G/3G/2G+2G), Expandable memory up to 32 GB</li>
</ul>  
        
      </div>
   
    </div>
  </div>
</div>

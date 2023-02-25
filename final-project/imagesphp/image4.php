
            <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mobile 4</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/m4.jpg" alt="Mobile 4" style="height:185px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal3"style="margin-top: 15px;">Click For Description</button>

                    <h3 style="font-weight:bold;  " class="text-primary">Vivo V5Plus (Gold) with Offers</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs.  25,990.00</p>
                   <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(4)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder; ">Vivo V5Plus (Gold) with Offers</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">With no cost EMI option on Bajaj Finance and other credit cards</li>
  <li class="list-group-item text-info text-center">16MP primary camera and 20MP front facing camera</li>
  <li class="list-group-item text-info text-center">5.5inch FHD IPS In-cell capacitive touchscreen with 1920 x 1080 pixels resolution and 401 ppi pixel density</li>
  <li class="list-group-item text-info text-center">Android v6.0 Marshmallow operating system with 2.0GHz Qualcomm Snapdragon 625 octa core processor, 4GB RAM, 64GB internal memory expandable up to 128GB and dual SIM (nano+nano) dual-standby (4G+4G)</li>
  <li class="list-group-item text-info text-center">3055mAH lithium_ion battery</li>
    <li class="list-group-item text-info text-center">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
      <li class="list-group-item text-info text-center">Dedicated expandable microSD card slot</li>
</ul>  
        
      </div>
   
    </div>
  </div>
</div>

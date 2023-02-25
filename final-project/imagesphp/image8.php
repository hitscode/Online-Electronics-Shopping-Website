
            <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mobile 8</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/m8.jpg" alt="Mobile 8" style="height:160px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal8" style="margin-top: 15px;">Click For Description</button>

                    <h3 style="font-weight:bold; "class="text-primary">Micromax Canvas Fire 5 Q386 (Champagne)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs. 4,999.00 </p>
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(8)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder;">Micromax Canvas Fire 5 Q386 (Champagne)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">8MP primary camera with auto focus and 5MP front facing camera</li>
  <li class="list-group-item text-info text-center">5.5 inch Display with 720 x 1280 pixels resolution</li>
  <li class="list-group-item text-info text-center">Android operating system v6.0 (Marshmallow), 1GB RAM, 16GB internal memory</li>
  <li class="list-group-item text-info text-center">2500 mAh Li-Po battery providing talk-time of 8.5hours with stand by upto 450hours</li>
  <li class="list-group-item text-info text-center">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
    
</ul>  
        
      </div>
   
    </div>
  </div>
</div>

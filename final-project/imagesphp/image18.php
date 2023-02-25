
<div class="col-xs-12 col-md-4" style="margin-top: 15px; " >              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">TV 6</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/tv6.jpg" alt="TV 6" style="height:170px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tv6" style="margin-top: 8px;">Click For Description</button>

                    <h3 style="font-weight:bold; "class="text-primary">OnePlus 126 cm (50 inches) Y Series 4K Ultra HD Smart Android LED TV 50Y1S Pro (Black)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs. 32,999.</p>
                   <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(18)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="tv6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel "style="font-weight: bolder;">OnePlus 126 cm (50 inches) Y Series 4K Ultra HD Smart Android LED TV 50Y1S Pro (Black)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">50 Inches OnePlus Netflix, Prime Video, Zee5, Oxygen Play, Eros Now, JioCinema, SonyLiv, Youtube, Hungama, Hotstar  LED 60 Hz</li>
  <li class="list-group-item text-info text-center">1 LED TV, 2 Table Stand Base, 1 User Manual, 1 Warranty Card, 1 Remote Control,1 AV IN Adapter, 1AC Cord, 2 AAA Battery1 LED TV, 2 Table Stand Base, 1 User Manual, 1 Warranty Card, 1 Remote Control,1 AV IN Adapter, 1AC Cord, 2 AAA Battery</li>
  <li class="list-group-item text-info text-center">Android 10, Gamma Engine, OnePlus Connect Ecosystem, Dual-band WiFi, Bezel-less Design, OxygenPlay, Dolby Audio, Game Mode | Supporte</li>
  <li class="list-group-item text-info text-center">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
        </ul>  
        
      </div>
   
    </div>
  </div>
</div>

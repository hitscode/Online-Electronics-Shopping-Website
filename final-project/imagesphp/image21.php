
<div class="col-xs-12 col-md-4" style="margin-top: 15px; " >              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">AC 3</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/ac3.jpeg" alt="AC 3" style="height:170px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ac3" style="margin-top: 8px;">Click For Description</button>

                    <h3 style="font-weight:bold; "class="text-primary">Haier 1.5 Ton 3 Star Triple Inverter+ Split AC, HSU18C-NBS3B (100 percent Copper, 50 Feet Airflow, Hyper PCB, Cools even at 60‚C Ambient Temperature,Self Clean technology)</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Rs.36,990</p>
                   <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(21)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
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
<div class="modal fade" id="ac3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel "style="font-weight: bolder;">Haier 1.5 Ton 3 Star Triple Inverter+ Split AC, HSU18C-NBS3B (100 percent Copper, 50 Feet Airflow, Hyper PCB, Cools even at 60‚C Ambient Temperature,Self Clean technology)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">5 Years PCB Warranty
100% Copper
50 Feet Airflow, Hyper PCB
Cools even at 60°C Ambient Temperature</li>
<li class="list-group-item text-info text-center"> Energy Rating: 5 Star - Best in class efficiency | Annual Energy Consumption: 818.81 Units per year | ISEER Value: 4.73 (Please Refer Energy Label On Product Page Or Contact Brand For More Details) . The star rating is as per BEE guidelines on or before 30th June 2022.</li>
  <li class="list-group-item text-info text-center">Items are eligible for return within 7 Days of Delivery. Read T&C
All accessories, product & packaging need to be returned in original condition. </li>
        </ul>  
        
      </div>
   
    </div>
  </div>
</div>

<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/mainhead.php';?>
        <title>Contact Us</title>
    </head>
    <body>
        <?php include 'includes/header.php';?>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-10">
                    <h3 class="text-primary text-uppercase " style="font-weight: bolder;">LIVE SUPPORT</h3>
                    <p class="text-info" style="font-weight: bold; font-size: 18px;">24 Hours | 7 Days A Week | 365 Days A Year Live Technical Support</p>
                    <!-- <p class="text-info" style="font-weight: bold; font-size: 15px;">It is a long established fact that a reader will be distracted by the readable content of the page
                       when looking to its layout.The point of using lorem Ipsum is that it has a more-or-less normal distribution of letters
                        There are many variations of passages of lorem Ipsum available,but the majority have suffered alteration in some form,by injected humour or randomised words
                        which don't look even slightly believable.If you are going to use a passage of lorem Ipsum,you need to be sure there isn't anything 
                        embarissing hidden in the middle of text.</p>
                     -->
                </div>
                <div class="col-md-3 col-xs-12">
                    <img src="images/c1.png" alt="contact" class="img-responsive img-thumbnail" >
                    
                </div>
               </div>
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2 class="text-primary text-uppercase " style="font-weight: bolder;">CONTACT US</h2>
                    <form method="POST" action="contact_script.php" >
                        <div class="form-group "  >
                                    <div class="col-xs-12 " style="margin-bottom: 20px;">
                                        <div class="input-group input-group-lg" >
                                            <span class=" input-group-addon transparent"><span class="glyphicon glyphicon-user"></span></span> 
                                            <input type="text" class="form-control left-border-none" name="name" placeholder= "Name" aria-describedby="na"  pattern="[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" />
                                             
                                        
                                      </div>
                                        <small id="na" class="form-text text-warning">name should be max 2 to 20 characters long.</small>
                                    </div>
                                </div>
                            
                        
                                <div class="form-group "  >
                                    <div class="col-xs-12 " style="margin-bottom: 20px;">
                                        <div class="input-group input-group-lg" >
                                            <span class=" input-group-addon transparent"><span class="glyphicon glyphicon-envelope"></span></span> 
                                            <input type="email" class="form-control left-border-none" name="email" placeholder= "Email"  aria-describedby="help" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  />
                                         
                                      </div>
                                        <small id="help" class="form-text text-muted">We'll will never share your email with anyone else.</small>
                                    </div>
                                </div>
                        
                        <div class="form-group col-xs-12 "  >
                           <textarea name="message" class="form-control" rows="8" placeholder="Enter Your Message"></textarea>
                        <?php if(isset($_GET['error12'])){?>
                            <div class="alert alert-danger" role="alert"><?php echo $_GET['error12'];?></div>
                            <?php }?>
                         </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-md " style="margin-left: 2%;margin-bottom: 30px;">Submit</button>        
                                    
                            <?php if(isset($_GET['success1'])){?>
                            <div class='alert alert-success alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><?php echo $_GET['success1'];?></div>
                            <?php }?>                   
                       
                        </form>
                    
                </div>
                <div class="col-md-4 col-xs-12">
                    <h3 class="text-primary text-uppercase text-right " style="font-weight: bolder;">company information:</h3>
                    <ul class="list-group" style="margin-top:40px; margin-left: 14px;">
                        <li class="list-group-item text-info text-center list-group-item-info"style="font-weight:bold; font-size: 18px;">Behind Kadodara bus stand Chamunda electronics Showroom kadodara Surat</li>
                        <li class="list-group-item text-info text-center list-group-item-info"style="font-weight:bold; font-size: 18px;">Phone:+91 95581 11415</li>

                         <li class="list-group-item text-info text-center  list-group-item-info" style="font-weight:bold; font-size: 18px;">Email: Chamunda_e@gmail.com</li>
                          <li class="list-group-item text-info text-center  list-group-item-info" style="font-weight:bold; font-size: 18px;">Follow On:Facebook , Instagram</li>
                       
                    </ul>
                
                    
                </div>    
                
                
            </div>
                
        </div>
        
        <?php include 'includes/footer.php';?>
    </body>
</html>
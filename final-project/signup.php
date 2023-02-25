<?php
require  'includes/common.php';
?>


<html>
    <head>
         <?php include 'includes/mainhead.php'; ?>
        <title>LifeStyle Store</title>

        
    </head>

    <body>
       <?php include 'includes/header.php';?>
        <div class="container">
            
            <div class="row">
                
            <div class=" col-xs-offset-3 col-xs-6" style="margin-top: 3%; margin-bottom: 4%; ">
              
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">SIGN UP</h3>
                    </div>
                    <div class="panel-body">
                      
                        <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            
                            <input type="text" name="name" class="form-control" placeholder="Name" aria-describedby="na" required="true" pattern="[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" />
                            <small id="na" class="form-text text-warning">name should be max 2 to 20 characters long.</small>
                            <?php if(isset($name_error)){?>
                            <span class="help-block"><p><?php echo $name_error;?></p></span>
                            <?php }?>
                        </div>    
                       <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" aria-describedby="help" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
                            <small id="help" class="form-text text-muted">We'll will never share your email with anyone else.</small>
                         <?php if(isset($email_error)){?>
                            <span class="help-block"><p><?php echo $email_error;?></p></span>
                            <?php }?>
                        </div>
                        <div class="form-group">
           
                            <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="pa" required="true" pattern="^(?=.*\d).{4,8}$" /><small id="pa" class="form-text text-warning"> Password must be between 4 and 8 digits long and include at least one numeric digit.</small>
                        <?php if(isset($pass_error)){?>
                            <span class="help-block"><p><?php echo $pass_error;?></p></span>
                            <?php }?>
                        </div>
                        <div class="form-group">
           
                          
                            <input type="tel" name="contact" class="form-control" placeholder="Contact" aria-describedby="co" required = "true" pattern="^[0-9]{10}$"  />
                            <small id="co" class="form-text text-warning">your contact number must be 10 in length.</small>
                        
                            <?php if(isset($mobile_error)){?>
                            <span class="help-block"><p><?php echo $mobile_error;?></p></span>
                            <?php }?>
                        </div>
                            <div class="form-group">
           
                                <input type="text" name="city" class="form-control" placeholder="City" required="true" pattern="^[a-zA-Z][a-zA-Z\\s]+$" />
                        
                                <?php if(isset($city_error)){?>
                            <span class="help-block"><p><?php echo $city_error;?></p></span>
                            <?php }?>
                            </div>
                            <div class="form-group">
           
                                <input type="text" name="addr1" class="form-control" placeholder="Address Line 1" required="true" />
                        </div>
                            <div class="form-group">
           
                                <input type="text" name="addr2" class="form-control" placeholder="Address Line 2" />
                        
                           <?php if(isset($_GET['empty_error'])){?>
                            <div class="alert alert-danger" role="alert"><?php echo $_GET['empty_error'];?></div>
                            <?php }?>                   
                            </div>
                        
                   
                         
                    
        <button type="submit" class="btn btn-primary " style="margin-left: 40%;margin-right: 50%;">Submit</button>
        
        
                           <?php if(isset($_GET['all_error'])){?>
        <div class="alert alert-danger" role="alert" style="margin-top: 10px;"><?php echo $_GET['all_error'];?></div>
                            <?php }?>
        
                 
        
                        </form>
                    
                    </div>
                   
                <div class="panel-footer" style="font-weight: bold;">Already have an account?<a href="#login" data-toggle="modal" data-target="#login" style="text-decoration:none;font-weight: bold;"> Login</a></div>
            
                </div>
                
         </div>
            </div>
        </div>
        
        <?php include 'includes/footer.php';?>
          
       
   
    </body>
    
</html>    

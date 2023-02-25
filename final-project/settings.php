<?php
include 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}

?>


<html>
    <head>
         <?php include 'includes/mainhead.php';?>
        <title>LifeStyle Store</title>

        
    </head>
    <body>
         <?php include 'includes/header.php';?>        
        <div class="container" style="margin-bottom: 16%;">
            
            <div class="row">
                
            <div class=" col-xs-offset-3 col-xs-6" style="margin-top: 10%; ">
              
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Change Password</h3>
                    </div>
                    <div class="panel-body">
                        <?php {?>
                        <form method="POST" action="settings_script.php">
                       <div class="form-group">
                           <input type="password" name="pass" class="form-control" placeholder="Old Password" aria-describedby="pa" required="true"/>
                         
                        </div>
                        <div class="form-group">
           
                            <input type="password" name="password" class="form-control" placeholder="New Password"  aria-describedby="pa" required="true" pattern="^(?=.*\d).{4,8}$"/><small id="pa" class="form-text text-warning">Password must be between 4 and 8 digits long and include at least one numeric digit.</small>
                        </div>
                        <div class="form-group">
           
                            <input type="password" name="password-re" class="form-control" placeholder="Re-Type New Password" required="true" />
                        
                         <?php if(isset($_GET['pass_error'])){ ?>
                            <div class="alert alert-danger" role="alert"><?php echo $_GET['pass_error'];?></div>
                            <?php }?>
                        </div>
                        
        <button type="submit" class="btn btn-primary " style="margin-left: 45%;margin-right: 50%;">Change</button>
        
                        </form>
                    
                    </div>
                 
                        <?php if(isset($_GET['passw_error'])){ ?>
                            <div class="alert alert-danger" role="alert"><?php echo $_GET['passw_error'];?></div>
                            <?php }?>
                    
         </div>
                        <?php }?>
            </div>
        </div>
        </div>
            <?php include 'includes/footer.php';?>
        
    </body>
</html>
<?php include 'login.php';?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/mainhead.php';?>
        <style>
            .navbar-brand{
             font-weight: bolder;
            font-size: 23px;
            }
            .navbar{
                background-color: #DCDCDC;
            }
            body { padding-top: 70px; }
            
            .navbar-toggle .icon-bar {
                    display: block;
                    width: 22px;
                    height: 4px;
                    background-color: #000;
                    border-radius: 3px;
}
        </style>
        <title>Chamunda Electronics</title>
    </head>
    <body>
<div class="navbar navbar navbar-fixed-top" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                    <a class="navbar-brand " href="index.php">Chamunda Electronics</a>
                </div>
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(!isset($_SESSION['email'])){?>
                        <li  style="font-weight:bold; font-size:15px;" ><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li  style="font-weight:bold; font-size:15px;" ><a href="#login" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li  style="font-weight:bold; font-size:15px;" ><a href="about.php"><span class=" glyphicon glyphicon-tasks"></span> About Us</a></li>
                        <li  style="font-weight:bold; font-size:15px;" ><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
                        <?php }?>
                        <?php  if(isset($_SESSION['email'])){
                            ?>
                        <li  style="font-weight:bold; font-size:15px;" ><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li style="font-weight:bold; font-size:15px;"><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li   style="font-weight:bold; font-size:15px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                       <?php }?>
                 
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>

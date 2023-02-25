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
        <div class="container" style="margin-bottom: 15%;">
            
            <div class="row">
                
            <div class=" col-xs-offset-3 col-xs-6" style="margin-top: 3%; margin-bottom: 4%; ">
              
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Password Reset</h3>
                    </div>
                    <div class="panel-body">
        
<form method="POST" action="forgot_pass.php">
        <div class="col-md-12 col-xs-12">
            <div class="input-group input-group-lg" style="margin-top:40px;" >
            <span class=" input-group-addon transparent"><span class="glyphicon glyphicon-envelope"></span></span> 
            <input type="email" id="email_id" class="form-control left-border-none" name="email" placeholder= "Enter Your Registered Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  />
                                            
            </div>
                            <?php if(isset($_GET['error123'])){?>
            <div class='alert alert-danger alert-dismissable' style="margin-top:10px;"><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><?php echo $_GET['error123'];?></div>
                            <?php }?>
            <?php if(isset($_GET['error1234'])){?>
            <div class='alert alert-danger alert-dismissable' style="margin-top:10px;"><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><?php echo $_GET['error123'];?></div>
                            <?php }?>
            <input type="submit" id="submit_id" class="btn btn-primary btn-block" value="Reset Password" name="submit"  style="margin-top: 35px;" />
        </div>
    
</form>
                    </div>
                </div>
            </div>
            </div>
        </div>
<?php include 'includes/footer.php';?>
    </body>
</html>

<?php
require 'includes/common.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $email= mysqli_real_escape_string($con,$email);
    if(!empty($email)){
        $query_run="SELECT id,name,email,password FROM users WHERE email='$email'";
        $result=mysqli_query($con , $query_run) or die(mysqli_error($con)) ;
        $rows= mysqli_num_rows($result);
        if($rows <= 0){
            header("location:forgot_pass.php?error1234=Error!! Email Id Does Not Exists.");
            
        }else{
            
             while($row= mysqli_fetch_array($result))
        {
            $user=$row['name'];
            $use_email=$row['email'];
            $use_pass=$row['password'];
            $user_id=$row['id'];
            
        }
        if($email == $use_email){
            $username=$user;
            $email_entered=$use_email;
            $use_id=$user_id;
            $randpass=$username.'0123456789';
            $password_new= substr(str_shuffle($randpass),0,6);
            $password_hash= md5($password_new);
            $query_update="UPDATE users SET password='$password_hash' WHERE id='$use_id'";
            $result_update=mysqli_query($con , $query_update) or die(mysqli_error($con)) ;
             $to=$email_entered;
            $subject="New Password";
            $message="Hello $username <br /> Your New Password : $password_new <br> Email : $email_entered <br> Now You Can Login With This Email And Password."; 
            if(mail($to, $subject, $message))     
            {
                header('location:index.php?message=New Password Has Been Sent To Your Mail. Please Check Your Mail And Login.'); 
            }
        }
        }    
    }
 else{
          
        header("location:forgot_pass.php?error123=Email Field Is Required.");
   }
    
    
}
?>
<?php require 'includes/common.php';
 include 'login_script.php';
?>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #DCDCDC;">
                <h3 class="text-capitalize text-primary text-center" style="font-weight: bolder; font-size: 30px;">Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove-circle"></span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <span><?php echo $error;?></span>
                        <form  method="POST"  >
                            <div class="form-group">
                                    <div class="col-xs-12 " style="margin-bottom: 20px;">
                                        <div class="input-group input-group-lg" >
                                            <span class=" input-group-addon transparent"><span class="glyphicon glyphicon-envelope"></span></span> 
                                            <input type="email" id="login_email" class="form-control left-border-none" name="email" placeholder= "Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
                                            
                                      </div>
                                    <span id="erroremail"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 " style="margin-top: 10px; margin-bottom: 20px;">
                                        <div class="input-group input-group-lg">
                                            <span class=" input-group-addon transparent"><span class="glyphicon glyphicon glyphicon-lock"></span></span> 
                                        <input type="password" id="login_pass" class="form-control left-border-none" name="pass" placeholder= "Password" />
                                        
                                        </div>
                                    <span id="errorpassword"></span>
                                    </div>
                                </div>
                            <p class="text-right text-capitalize text-primary" style="font-weight: bolder;  font-size: 15px;" ><a href="forgot_pass.php" style="text-decoration: none;">Forgot password?</a></p>
                        
                            <input type="submit" value="Login" id="log_in" name="login"   class="btn btn-primary btn-lg "  style="margin-left: 45%; margin-right: 50%;">
                        
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="background-color: #DCDCDC;" >
                <p  class="text-primary text-left" style="font-weight: bold; ">Don't have an account?<a href="signup.php" style="text-decoration:none;font-weight: bolder;"> Register</a></p>
            </div>
        </div>
    </div>
</div>
                            

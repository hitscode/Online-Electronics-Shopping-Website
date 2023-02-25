<?php 
require 'includes/common.php';
global $error;
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['pass'];
$email= mysqli_real_escape_string($con , $email);
$pass=mysqli_real_escape_string($con , $password );
$passp= md5($pass);
    $sql= "SELECT id,name,email,password FROM users WHERE email='$email'";
    $result=mysqli_query($con , $sql) or die(mysqli_error($con)) ;
    $rows= mysqli_num_rows($result);
    if($rows <= 0){
        $error="<div class='alert alert-danger alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong>Email Id Does Not Exists .</div>";
    }else{
        while($row= mysqli_fetch_array($result))
        {
            $name=$row['name'];
            $user_email=$row['email'];
            $user_pass=$row['password'];
            $user_id=$row['id'];
            
        }
        if($email == $user_email && $passp == $user_pass){
            $_SESSION['id']=$user_id;
            $_SESSION['email']=$user_email;
            $_SESSION['name']=$name;
            header("location:index.php");
        }else{
            $error="<div class='alert alert-danger alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong>Incorrect Password Entered .</div>";
            
        }
    }     
   
}
?>
 
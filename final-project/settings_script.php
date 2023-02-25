<?php
include 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
$error=FALSE;

$user_id=$_SESSION['id'];
if(isset($_POST['pass']) && isset($_POST['password']) && isset($_POST['password-re']))
    {
    $pass= mysqli_real_escape_string($con ,$_POST['pass']);
    $password=mysqli_real_escape_string($con , $_POST['password']);
    $pass_re=mysqli_real_escape_string($con , $_POST['password-re']);
    $passt=strlen($password);
    $passr=strlen($pass_re);
    if($passt==$passr){
    $passp=md5($pass);
    $query="SELECT `password` FROM `users` WHERE `id`='$user_id'";
    $query_run= mysqli_query($con , $query)or die(mysqli_error($con));
    while($row=mysqli_fetch_array($query_run)){
    if($passp==$row['password']){
        $error=TRUE;
        $passwordp=md5($password);
        $queryu="UPDATE `users` SET `password`='$passwordp' WHERE `id`='$user_id' ";
        $queryu_run=mysqli_query($con , $queryu)or die(mysqli_error($con));
        header('location:index.php');
    } }
    if($error==FALSE){
        
        header('location:settings.php?passw_error=Invalid Old Password.');
    }
    }else{
         header('location:settings.php?pass_error=Please Re-type Correct Password.');
        
    }
    
    
    }
    
    




?>
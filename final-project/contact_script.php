<?php require 'includes/common.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $name=mysqli_real_escape_string($con , $name);
    $email=mysqli_real_escape_string($con , $email);
    $message=mysqli_real_escape_string($con , $message);
    if(!empty($name)&&!empty($email)&&!empty($message)){
        $insert_query="INSERT INTO `contact`(`name`,`email`,`message`)VALUES('$name','$email','$message')";
        $result_query=mysqli_query($con , $insert_query) or die(mysqli_error($con )) ;
        header('location:contact.php?success1=Your Message Has Been Sent.We will Reply To You Within 24 Hours.');
        
    }else{
        
        header('location:contact.php?error12=*All Fields Are Required.');
        
    }
    
}
?>
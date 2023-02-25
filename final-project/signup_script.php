<?php
require 'includes/common.php';
if(isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['password']) && isset($_POST['contact']) && isset($_POST['city']) && isset($_POST['addr1'])){
$name=$_POST['name'];
$regex_name="/[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/";
if (!preg_match($regex_name, $name)) {
  $name_error='Please enter a valid username.';
}  

$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  $email_error='Please enter a valid Email.';
}
    

$pass = $_POST['password'];
$regex_pass="/^(?=.*\d).{4,8}$/";
if (!preg_match($regex_pass, $pass)) {
  $pass_error='Please enter a valid password.';
}



$mobile = $_POST['contact'];
$regex_mobile="/^[0-9]{10}$/";
if (!preg_match($regex_mobile, $mobile)){
  $mobile_error='Please enter a valid mobile number.';
}
    


$city = $_POST['city'];
$regex_city="/^[a-zA-Z][a-zA-Z\\s]+$/";
if (!preg_match($regex_city, $city)) {
  $city_error='Please enter a valid city name.';
}




$addr1 = $_POST['addr1'];
$addr2=$_POST['addr2'];
$name1= mysqli_real_escape_string($con , $name);
$email1= mysqli_real_escape_string($con , $email);
$password1= mysqli_real_escape_string($con , $pass);
$mobile1= mysqli_real_escape_string($con , $mobile);
$city1= mysqli_real_escape_string($con , $city);    
$addr11= mysqli_real_escape_string($con , $addr1);
$addr21= mysqli_real_escape_string($con , $addr2);

if(((!empty($_POST['name'])) && (!empty($_POST['email'])) && (!empty($_POST['password'])) && (!empty($_POST['contact'])) && (!empty($_POST['city'])) && (!empty($_POST['addr1'])))){

    $passp=md5($password1);

    $query="SELECT id FROM users WHERE email='$email1'";
     $result=mysqli_query($con , $query) or die(mysqli_error($con)) ;
    
      $rows= mysqli_num_rows($result);
      if($rows!=0){
       
          header('location:signup.php?all_error=Email Id Already Exists.');
           
        }else{
            
           $insert_query="INSERT INTO `users`(`name`,`email`,`password`,`contact`,`city`,`address line 1`,`address line 2`)VALUES('$name1','$email1','$passp','$mobile1','$city1','$addr11','$addr21')";
            $result_query=mysqli_query($con , $insert_query) or die(mysqli_error($con )) ;
            $id=mysqli_insert_id($con);
            $_SESSION['email']=$email1;
            $_SESSION['id']=$id;
            $_SESSION['name']=$name1;
            header('location:index.php');
 
        } 
        
        
        
}else{
    header('location:signup.php?empty_error=*All Fields Are Required,Only Address Line 2 Field Is Optional.');
       
}
           
          
}


 
?>
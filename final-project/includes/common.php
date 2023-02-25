<?php
ob_start();
$con= mysqli_connect('localhost','root','','final_project') or die(mysqli_error($con)); 
@session_start();
$sum=0;
?>
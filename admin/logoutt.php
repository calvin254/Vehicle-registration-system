<?php
//start the session
session_start();
//variable to the email session
$adminemail=$_SESSION["admemail"];
//if the session is created
if($adminemail){
    //destory the session
session_destroy();
echo "<script>alert('You Are logged Out Of Your Account')</script>";
echo "<script>window.open('../adminlogin.php','_self')</script>";
}
?>
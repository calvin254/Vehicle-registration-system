<?php

//session start
session_start();
//session email variable
$sessionemail= $_SESSION["email"];
//include the connection string page
include("connect.php");
//make the connection string global
global $con;
//if a user clicks on changepassword button and he/she is already logged in
if(($sessionemail) && isset($_POST['confirmpayment'])){
    //value from text boxes
    $email=$_POST['email'];
    $code=$_POST['code'];
    $number=$_POST['number'];
    $amount=$_POST['amount'];
    $status=$_POST['status'];
    $vehreg=$_POST['vehnumber'];
//check for the required field
if(empty($email) || empty($code) || empty($number) || empty($amount)){
    echo "<script>alert(' Please Fill All The * Fields')</script>";
    echo "<script>window.open('../myaccount/payment.php','_self')</script>";
}

else{
    //check if the code already exist
    $selectpayment="select * from payment where paymentcode='$code'";
    $runselectpayment=mysqli_query($con, $selectpayment);
    if(mysqli_num_rows($runselectpayment)>0){
        echo "<script>alert('Sorry, The Payment Code Already Exist, Recheck And Try Again.')</script>";
        echo "<script>window.open('../myaccount/payment.php','_self')</script>";
    }
    else{
    //insert into paymment
    $payment="insert into payment(paymentcode, useremail,amount, paymentnumber,vehicle_registration, status)
     values('$code', '$email', '$amount', '$number','$vehreg','$status')";
    //run the select statement
    $run_payment=mysqli_query($con, $payment);
    //check if there exist any field in the database with the same emailsession variable value
    if($run_payment){
        
                echo "<script>alert('payment information uploaded sucessfully ')</script>";
                echo "<script>window.open('../myaccount/check_status.php','_self')</script>";
            }
     //if the password doesnt match, display an error
            else{
                echo "<script>alert('Payment Not Sucessful')</script>";
                echo "<script>window.open('../myaccount/payment.php','_self')</script>";
            }
   
}
}
}
?>
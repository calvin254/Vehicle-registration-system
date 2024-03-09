<?php
//include the connection string page
include("connect.php");
//make the connection string global
global $con;
//if the user clicks on cancel button
if(isset($_POST['cancel'])){
   echo "<script>alert('Registration Cancelled Successfully')</script>";
   echo "<script>window.open('../myaccount/registration.php','_self')</script>";
}
//if the user clicks on the cntinue button
if(isset($_POST['vehregister'])){
    //get the variables from the form
    $email=$_POST['remail'];
    $chasis=$_POST['chasis'];
    $engine=$_POST['engine'];
    $make=$_POST['make'];
    $model=$_POST['model'];
    $wheels=$_POST['wheels'];
    $color=$_POST['color'];
    $fuel=$_POST['fuel'];
    $date=$_POST['dates'];
    $number=$_POST['number'];
    $status=$_POST['vstatus'];
    //image
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"]; 
    //to be uploaded folder  
    $folder = "../assets/upload/";
//move uploaaded filename and the foldername
    move_uploaded_file($tempname, $folder.$filename);
    //validate empty and required
   
//insert into table vehicle
$reginsert="INSERT INTO vehicle(email,vpicture,chasis,engine,vmake,vmodel,wheels,vcolor,date,fuel,reg,status)
 VALUES('$email','$filename','$chasis','$engine','$make','$model','$wheels','$color','$date','$fuel','$number','$status')";
//run the insert statement
 $run_reginsert=mysqli_query($con, $reginsert);
 
 if($run_reginsert){
    //success message
    echo "<script>alert('Vehicle Added Successfully,Please Make Payment of KSH: 2500 for activation of your vehicle registration.')</script>";
    echo "<script>window.open('../myaccount/payment.php','_self')</script>";
 }
 else{
    //failure message and redirect to file
    echo "<script>alert('Vehicle not Added Successfully')</script>";
    echo "<script>window.open('../myaccount/registration.php','_self')</script>";
 }
    }


?>
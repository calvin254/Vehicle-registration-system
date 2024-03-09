<?php
session_start();
//include the connection string page
include("connect.php");
//make the connection string global
global $con;
// the email variable session
$sessionemail=$_SESSION["email"];
//if the user clicks on check button
if(isset($_POST['check'])){
    //values from textboxes
    $num=$_POST['oreg'];
    //check if the input textbox has a value
    if(empty($num)){
        echo "<script>alert(' Please Fill All The * Fields')</script>";
        echo "<script>window.open('../myaccount/transfer.php','_self')</script>";
    }
    else{
    //select from vehicle table in relation with the reg number and logged in email and status
    $select_reg="select * from vehicle where reg='$num' and email='$sessionemail' and status !='SOLD' and status !='PENDING'";
    //run the select query
    $run_select_reg=mysqli_query($con, $select_reg);
    //fetch values from the database
    $row=mysqli_fetch_array($run_select_reg);
    //fetch the reg number
    $number=$row['reg'];

    if(mysqli_num_rows($run_select_reg)>0){
        //set session reg number
        $_SESSION['regnum']=$number;  
        //display message
        echo "<script>alert('The Number You Have Entered Exist,Continue With The Transfer')</script>";
        echo "<script>window.open('../myaccount/completetransfer.php','_self')</script>";    
    }
    else{
        echo "<script>alert('Failed, The number you have entered is wrong  or is not activated.Try Again Or Activate The Number.')</script>";
        echo "<script>window.open('../myaccount/transfer.php','_self')</script>";
    }
}
}



?>
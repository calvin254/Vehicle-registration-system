<?php
//start the session
session_start();
//include the connection string page
include("connect.php");
//make the connedtion string global 
global $con;
//if a user clicks on the admin login button
if(isset($_POST['adminlogin'])){
    //define the variables from the textboxes
    $admnemail=$_POST['aemail']; 
    $apass=$_POST['apsw']; 
// Required field names

if (empty($admnemail) || empty($apass)) {
    echo "<script>alert(' Please Fill All The * Fields')</script>";
    echo "<script>window.open('../adminlogin.php','_self')</script>";
} 
else {     
    //select from the admin table in relation to the inputed email address
    $selectu="select * from admin where admin_email='$admnemail'";
    //run the select statement above
    $runs=mysqli_query($con,$selectu);
    //check if the userr with the same email address exist in the databse
    if(mysqli_num_rows($runs)>0){
      //fetch the admins details
            $row=mysqli_fetch_array($runs);
            $admin_name=$row['admin_name'];
            $admin_email=$row['admin_email'];
            $adpassword=$row['password'];
            //dectypt the password on the database and check if it matches with the inputted password
            //check if the password is correct
            if(password_verify($apass,$adpassword)){
                      //set session variables
            $_SESSION["admemail"] = $admin_email;
            $_SESSION["admname"]=$admin_name;
            //admin logins in successfully
            echo "<script>alert('welcome $admin_name,You Have Logged In Successfully')</script>";
            echo "<script>window.open('../admin/admin.php','_self')</script>";
        }
       //if the password does not match dispplay an error
        else{
            echo "<script>alert('Invalid Credentials, Check email address Or Password')</script>";
            echo "<script>window.open('../adminlogin.php','_self')</script>";
        }
    }
     //if the email address inputted does not exist, display an error messag
        else{
            echo "<script>alert('Invalid Credentials,  Check email address Or Passwordt')</script>";
             echo "<script>window.open('../adminlogin.php','_self')</script>";
        }
    }
}






    
?>
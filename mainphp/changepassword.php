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
if(($sessionemail) && isset($_POST['changepassword'])){
    //value from text boxes
    $old=$_POST['opass'];
    $new=$_POST['npass'];
    $confirm=$_POST['cpass'];
    $email=$_POST['uemail'];
//check for the required field
if(empty($old) || empty($new) || empty($confirm) || empty($email)){
    echo "<script>alert(' Please Fill All The * Fields')</script>";
    echo "<script>window.open('../myaccount/myaccount.php','_self')</script>";
}
else{
    //select from members table in relation with the email session
    $password="select * from members where email='$sessionemail'";
    //run the select statement
    $run_password=mysqli_query($con, $password);
    //check if there exist any field in the database with the same emailsession variable value
    if(mysqli_num_rows($run_password)>0){
        //if there exist, fetch the values from the databse
        $row=mysqli_fetch_array($run_password);
        //fetch passsword from the database
        $pass_fetch=$row['password'];
        //decrypt the password to confirm if the new inputted password and the hashed password are the same
        if(password_verify($old, $pass_fetch)){
            //if the old and the new password are the same
            if($new==$confirm){
                //enctypt the new password with the default password
                $hash = password_hash($new, PASSWORD_DEFAULT);
                //update the table row
                $update="update members set password='$hash' where email='$sessionemail'";
                //run the update statement
                $run_update=mysqli_query($con,$update);
                //display the message
                echo "<script>alert('Password Changed Successfully')</script>";
                echo "<script>window.open('../myaccount/logout.php','_self')</script>";
            }
            //if the password doesnt match, display an error
            else{
                echo "<script>alert('The Two Password Doesnt Match')</script>";
                echo "<script>window.open('../myaccount/user_update.php','_self')</script>";
            }
    }
    //an error message
    else{
        echo "<script>alert('The Old And New Password Does Not Match')</script>";
        echo "<script>window.open('../myaccount/user_update.php','_self')</script>";
    }
    }
}
}

?>
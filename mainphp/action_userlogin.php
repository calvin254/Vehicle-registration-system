<?php
//start the session
session_start();
//include the connection string page
include("connect.php");
//make the connection string global
global $con;
//if the user clicks on the login button
if(isset($_POST['userlogin'])){
  //define the variables from the textboxes
  $username=$_POST['usname']; 
  $u_pass=$_POST['password'];

     // Required field names
    //decrypt the password
    $pass=password_verify($u_pass, $password);
    //make selection from the database in relation with the username
    $selectu="select * from members where username='$username'";
    //run the select statement
    $runs=mysqli_query($con,$selectu);
    //check if there exist a column with the same username
    if(mysqli_num_rows($runs)>0){
      //fetch values from the database
      $row=mysqli_fetch_array($runs);
      $name=$row['name'];
      $email=$row['email'];
      $password_hash=$row['password'];

      if (empty($name) )
      {
        {
     echo "<script>alert(' Please Fill All The name)</script>";
     echo "<script>window.open('../userlogin.php','_self')</script>";
      }
      else 
      //check if the inputed password and the hashed password are the same
      if(password_verify($u_pass,$password_hash)){
            //set session variables
            $_SESSION["email"] = $email;
            $_SESSION["name"]=$name;
            //login the user successfully
            echo "<script>alert('welcome $name ,You Have Logged In Successfully')</script>";
            echo "<script>window.open('../myaccount/myaccount.php','_self')</script>";
      }
      //if the password doesnt not match display error message
      else{
        echo "<script>alert('Login unsuccessful, Please Check Password and try again')</script>";
        echo "<script>window.open('../userlogin.php','_self')</script>";
      }
       
        }
        //if the user doesnt not exist dispplay the error
        else{
            echo "<script>alert(Login Failed , Please Check Username and try again')</script>";
             echo "<script>window.open('../userlogin.php','_self')</script>";
        }
    
}   

?>
<?php
//include the connection page
include("connect.php");
//make the connection page global
global $con;
//
 //if delete button is clicked
 if(isset($_POST['deleteadmin'])){
   //pick the textbox value
	$checkbox = $_POST['check'];
  //for loop to iterate the checkbox values
	for($i=0;$i<count($checkbox);$i++){
    //assign the textbox value for any iterate as deleteid
	$del_id = $checkbox[$i]; 
  //delete from admin table in relation to the delete id value
	$deleteadm="DELETE FROM admin WHERE admin_email='".$del_id."'";
  //run the delete query
  $rundel=mysqli_query($con, $deleteadm);
  //display the message 
  if($rundel){
    echo "<script>alert('Admin Deleted Successfully')</script>";
    echo "<script>window.open('../add_admin.php','_self')</script>";  
  }
	
}
 }
//if the admin wants to register a new admin
 if(isset($_POST['adminregister'])){
   //get the values from the text fields
   $name=$_POST['aname'];
   $email=$_POST['aemail'];
   $number=$_POST['anumber'];
   $password=$_POST['password'];
   //check if the required fields are empty
   if(empty($name) || empty($email) || empty($number) ||empty($password)){
    echo "<script>alert(' Please Fill All The * Fields')</script>";
    echo "<script>window.open('../add_admin.php','_self')</script>";
   }
   else{
//assign variable to the password and hash it
   $hash = password_hash($password, PASSWORD_DEFAULT);
   //check if the email address already exist
   $select_admin="select * from admin where admin_email='$email'";
   //run the select query
   $run_select_admin=mysqli_query($con,$select_admin);
   //if the email address exist
   if(mysqli_num_rows($run_select_admin)>=1){
    echo "<script>alert('the email address already exist')</script>";
    echo "<script>window.open('../add_admin.php','_self')</script>";  

}
//if the email does not exist
else {
       //insert admin
       $insert_admin="insert into admin(admin_name, admin_numer,admin_email, password)
       values('$name','$number','$email','$hash')";
       //run insert
       $run_insert_admin=mysqli_query($con, $insert_admin);
       //display message
       if($run_insert_admin){
        echo "<script>alert('admin registration with the email address $email, is successful')</script>";
        echo "<script>window.open('../add_admin.php','_self')</script>";  
       }
   }
 }
}

?>
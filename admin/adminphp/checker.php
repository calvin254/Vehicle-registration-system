<?php
//include the conncetion string page
include('connect.php');
//make the connection global
global $con;
//start the session
session_start();
//if delete user is clicked
if(isset($_POST['deleteuser'])){
  //value from textbox
	$checkbox = $_POST['check'];
  //iterate the checbox array
	for($i=0;$i<count($checkbox);$i++){
    //assign the value of each iterate to del_id
	$del_id = $checkbox[$i]; 
  //delete from members in relation to the value of the checkbox
	$deleteadm="DELETE FROM members WHERE email='".$del_id."'";
  //run delete
  $rundel=mysqli_query($con, $deleteadm);
  //display message
  if($rundel){
    echo "<script>alert('User Deleted Successfully')</script>";
    //redirect
    echo "<script>window.open('../user_mngt.php','_self')</script>";  
  }	
}
 }
//if a user clicks on delete vehicle
 if(isset($_POST['deletevehicle'])){
   //value from checkbox
	$checkbox = $_POST['check'];
  //iterate through the loop
	for($i=0;$i<count($checkbox);$i++){
    //asssgn the value of each iterate a del_id
	$del_id = $checkbox[$i]; 
  //delete from vehicle in relation with the checkbox value
	$deleteadm="DELETE FROM vehicle WHERE reg='".$del_id."'";
  //run
  $rundel=mysqli_query($con, $deleteadm);
  //display message
  if($rundel){
    echo "<script>alert('Vehicle  Deleted Successfully')</script>";
    //redirect
    echo "<script>window.open('../vehicle_mngt.php','_self')</script>";  
  }
}
 }
//if the user clicks on delete transfer  button
 if(isset($_POST['deletetransfer'])){
   //value from checkbox
	$checkbox = $_POST['check'];
  //iterate through the loop
	for($i=0;$i<count($checkbox);$i++){
     //asssgn the value of each iterate a del_id
	$del_id = $checkbox[$i]; 
   //delete from transfer in relation with the checkbox value
	$deleteadm="DELETE FROM transfer WHERE reg_no='".$del_id."'";
  //run
  $rundel=mysqli_query($con, $deleteadm);
  //message
  if($rundel){
    echo "<script>alert('Vehicle  Deleted Successfully')</script>";
    //redirect
    echo "<script>window.open('../transfer_mngt.php','_self')</script>";  
  }
}
 }

 //if the user clicks on delete message
 if(isset($_POST['deletemessage'])){
   //value from checkbox
	$checkbox = $_POST['check'];
  //iterate through the loop
	for($i=0;$i<count($checkbox);$i++){
      //asssgn the value of each iterate a del_id
	$del_id = $checkbox[$i]; 
  //delete from messages in relation with the checkbox value
	$deleteadm="DELETE FROM messages WHERE message_id='".$del_id."'";
  //run delete query
  $rundel=mysqli_query($con, $deleteadm);
  if($rundel){
    //message
    echo "<script>alert('Message  Deleted Successfully')</script>";
    //redirect
    echo "<script>window.open('../messages_mngt.php','_self')</script>";  
  }
	
}
 }
//if the user clicks on approvereg
 if(isset($_POST['approvereg'])){
    //value from checkbox
  $checkbox = $_POST['check'];
    //iterate through the loop
	for($i=0;$i<count($checkbox);$i++){
      //asssgn the value of each iterate a del_id
	$status = $checkbox[$i];
  //store the value in the session variable status
  $_SESSION['status']=$status;
  //redirect
  echo "<script>window.open('../vehicle_mngts.php','_self')</script>";  
 }
}
//if the user clicks on approve vehicle 
if(isset($_POST['approve'])){
  //get the form fields values
  $number=$_POST['vnum'];
  $plate=$_POST['vplate'];
  //check if the plate number already exist
  $selectplate="select * from vehicle where plate_num='$plate'";
  //run the select code
  $runselectplate=mysqli_query($con, $selectplate);
  //check if there is entry with the same plate number
  if(mysqli_num_rows($runselectplate)>0){
    echo "<script>alert('Plate Number Is Already Assigned To Another Vehicle.')</script>";
    echo "<script>window.open('../vehicle_mngt.php','_self')</script>"; 
  }
  else{
  //update the vehicle table
  $updatev="update vehicle set plate_num='$plate', status='ACTIVATED' where reg='$number'";
  //run update
  $runupdatev=mysqli_query($con, $updatev);
  if($runupdatev){
    echo "<script>alert('Account Activated Successfully')</script>";
    //redirect
    echo "<script>window.open('../vehicle_mngt.php','_self')</script>"; 
  }
  
}
}


//if the user clicks on approvereg
if(isset($_POST['approvepayment'])){
  //value from checkbox
$checkbox = $_POST['check'];
  //iterate through the loop
for($i=0;$i<count($checkbox);$i++){
    //asssgn the value of each iterate a del_id
$registration = $checkbox[$i];
//store the value in the session variable status
$_SESSION['registration']=$registration;
//redirect
echo "<script>window.open('../approvepayment.php','_self')</script>";  
}
}

if(isset($_POST['approvepaymentsbtn'])){
  $status=$_POST['newstatus'];
  $reg=$_POST['number'];
  $updatepayment="update payment set status='$status' where vehicle_registration='$reg'";
  $run=mysqli_query($con, $updatepayment);
  if($run){
    echo "<script>alert('Payment Verified')</script>";
    //redirect
    echo "<script>window.open('../paymentmanagement.php','_self')</script>"; 
  }
  else{
    echo "<script>alert('Payment NOT Verified')</script>";
    //redirect
    echo "<script>window.open('../paymentmanagement.php','_self')</script>"; 
  }
}

?>
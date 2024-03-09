<?php
//StarT Session
session_start();
//include the connection string page
include("connect.php");
//make the connection string global
global $con;
//if the checkbox on check status is checked and the user clicks on update
if(isset($_POST['updatevehicle'])){
    $checkbox = $_POST['check'];
	for($i=0;$i<count($checkbox);$i++){
	$update = $checkbox[$i];
  $_SESSION['registration']=$update;
    echo "<script>window.open('../myaccount/updatevehicle.php','_self')</script>";  
  }  
}

//if the user clicks on update vehicle button
if(isset($_POST['updatevehinfo'])){
  //get the data from the text boxes and update teh vehicle table respectively.
  //only update the text boxes are not readonly
  //use the reg number as the identifier of the table
  $regno=$_POST['number'];
  $fuel=$_POST['fuel'];
  $chasis=$_POST['chasis'];
  $engine=$_POST['engine'];
  $color=$_POST['color'];
  //check if all input values are filled with values 
  if(empty($fuel) || empty($chasis) || empty($engine) || empty($color)){
    echo "<script>alert(' Please Fill All The * Fields')</script>";
    echo "<script>window.open('../myaccount/update.php','_self')</script>";
  }
  else{
 //update the corresponding vehicle in relation to the data given
  $updatevehicle="update vehicle set fuel='$fuel', chasis='$chasis', vcolor='$color', engine='$engine' where reg='$regno'";
  //run the update query
  $runupdatevehicle=mysqli_query($con, $updatevehicle);
  //if update is successful 
  //display a success message
  if($runupdatevehicle){
    echo "<script>alert('Vehicle Updated Successfully')</script>";
    //redirect to status page
    echo "<script>window.open('../myaccount/check_status.php','_self')</script>";  
  }
  //else display an error message
  else{
    echo "<script>alert('Vehicle Updated Not Successfully')</script>";
    //redirect to status page
    echo "<script>window.open('../myaccount/check_status.php','_self')</script>";  
  }
}

}
?>
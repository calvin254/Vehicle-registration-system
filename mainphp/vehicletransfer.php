<?php
//start the session
session_start();
//include the connection string page
include("connect.php");
//make the connection string global
global $con;
//session variable for the reg number
$sessionreg= $_SESSION['regnum'];
//if the user clicks on the cancel button in transfer page
if(isset($_POST['cancel']) ){
   //cancel message and redirect the user to transfer page
   echo "<script>alert('Transfer Cancelled Successfully')</script>";
   echo "<script>window.open('../myaccount/transfer.php','_self')</script>";
}
//if the user ckicks on the continue button
if(isset($_POST['transfer'])){
    //get the fields from the form textboxes
    $date=$_POST['tdate'];
    $oname=$_POST['oname'];
    $oemail=$_POST['oemail'];
    $reg_no=$_POST['vreg'];
    $tname=$_POST['tname'];
    $temail=$_POST['temail'];
    $tphone=$_POST['tphone'];
    $tid=$_POST['tid'];
   
//check if all textboxes have values
//for the required textboxes
if(empty($date) || empty($tname) || empty($temail) || empty($tphone) ||empty($tid)){
   echo "<script>alert(' Please Fill All The * Fields')</script>";
   echo "<script>window.open('../myaccount/completetransfer.php','_self')</script>";
}
else{
    //insert into statement
    $tranfer_insert="insert into transfer(oname,oemail,reg_no,tname,temail,tid,tphone,tdate)
     values('$oname','$oemail','$reg_no','$tname','$temail','$tid','$tphone','$date')";
     //run insert statement
     $run_insertt=mysqli_query($con, $tranfer_insert);
     if($run_insertt){
       //update the  status record in the vehicles table in relation to the reg number
       $update="update vehicle set status='SOLD' where reg='$sessionreg'";
       $run_update=mysqli_query($con, $update);
       if($run_update){
        echo "<script>alert('Hello, your Vehicle has been  Transfered Successfully')</script>";
        echo "<script>window.open('../myaccount/check_status.php','_self')</script>";
     }
       }
     else{
        echo "<script>alert('Sorry , Your vehicle tarnsfer process have Failed .please try again')</script>";
        echo "<script>window.open('../myaccount/completetransfer.php','_self')</script>";
     }


   }
}

?>
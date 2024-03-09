<?php
//include the conncetion string page
include('connect.php');


//count function
function countuser(){
  //make the connection global
global $con;
      //select from member table
      $selectu= "select * from members";
      //run select
      $run_selectu=mysqli_query($con, $selectu);
      //count the number of rows in the table
      $count=mysqli_num_rows($run_selectu);
      //close script
      echo  $count;
}
function countvehicle(){
  //make the connection global
global $con;
     //select from vehicle table
    $selectv= "select * from vehicle";
      //run select
    $run_selectv=mysqli_query($con, $selectv);
    //count the number of rows in the table
    $count=mysqli_num_rows($run_selectv);
    //close script
    echo $count;
}
function counttransfer(){
  //make the connection global
global $con;
     //select from transfer table
    $selectt= "select * from transfer";
      //run select
    $run_selectt=mysqli_query($con, $selectt);
    //count the number of rows in the table
    $count=mysqli_num_rows($run_selectt);
    //close script
    echo $count;
}
function countmessages(){
  //make the connection global
global $con;
     //select from message table
    $selectc= "select * from messages";
      //run select
    $run_selectc=mysqli_query($con, $selectc);
    //count the number of rows in the table
    $count=mysqli_num_rows($run_selectc);
    //close script
    echo $count;
}
?>
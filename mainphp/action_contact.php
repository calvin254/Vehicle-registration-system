<?php
//get the connection string page
include("connect.php");
//make the connection string variable global
global $con;
//if the user clicks on the contact page send button
if(isset($_POST['contact'])){
    //get fields from the form textboxes
    $date=$_POST['date'];
    $name=$_POST['name'];
    $email=$_POST['cemail'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    // Required field names
if(empty($name) || empty($name) || empty($email) || empty($subject) || empty($message)){
    echo "<script>alert(' Please Fill All The * Fields')</script>";
    echo "<script>window.open('../contact.php','_self')</script>";
} 
else {  

    //insert into the messages table
    $insertc="insert into messages(senderemail,sendername,date,subject,body)
    values('$email','$name','$date', '$subject','$message')";
//run the insert statement above
    $run_insertc=mysqli_query($con, $insertc);
    //if the query excutes succesfuly display a success message
    if($run_insertc){
        echo "
        <script>alert('Message Sent Successfully');</script>
        <script>window.open('../contact.php','_self')</script>
        ";
    }
}
}
?>
<?php
//include the connection string page
include("connect.php");
//make the connection string global
global $con;
//if the user clicks on signup
if(isset($_POST['usersignup'])){
//values from the textboxes
$name=$_POST['usname'];
$email=$_POST['usemail'];
$num=$_POST['usnum'];
$pass1=$_POST['psw'];
$pass2=$_POST['cpsw'];
$username=$_POST['usrname'];
$phone=$_POST['usphone'];
//image upload query
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];   
//upload to this folder
$folder = "../assets/usersimage/";
//move uploaded folder includes the filename and the folder to be uploaded to
move_uploaded_file($tempname, $folder.$filename);
 // Required field names
 
//check if the user already exist
$selectu="select * from members where email='$email' AND username='$username'";
//run the select statement
$run_selectu=mysqli_query($con,$selectu);
//if the user exist,, then display an error that the user exist
if(mysqli_num_rows($run_selectu)>0){
    echo "<script>alert('Hello ,The account exist .please try recovering the password ')</script>";
    echo " <script>window.open('../signup.php','_self')</script>";
}
//if the user does not exist, insert the new user
else{
    //check if the password is the same
    if($pass1 == $pass2){
        //if the two passwords are the same, hash the password to default password
        $hash = password_hash($pass1, PASSWORD_DEFAULT);
        //insert the new user with the hashed password
$insertu="insert into members(name,email,id,phone,profile,username,password)
    values('$name','$email','$num','$phone','$filename','$username','$hash')";
    //run insert statement
    $run_insertu=mysqli_query($con, $insertu);
    if($run_insertu){
        //display message and redirect user
echo "<script>alert(' Hello $name, Your account has been Added Successfully')</script>";
echo " <script>window.open('../userlogin.php','_self')</script>";
    }
}
//the password doesnt not match
else{
    echo "<script>alert('Password is wrong ,please try again ')</script>";
    echo " <script>window.open('../signup.php','_self')</script>";
}


}

}


?>
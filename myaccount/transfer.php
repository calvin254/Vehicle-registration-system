<!DOCTYPE html>
<?php
//start of session variable
session_start();
//include the connection string page
include('../mainphp/connect.php');
//include the email session variable
$sessionemail=$_SESSION['email'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../asset" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEHICLE REGISTRATION |TRANSFER PAGE</title>
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--link to external css file-->
    <link rel="stylesheet" href="../css/main.css">
    
</head>
<body>
<!--top navigation-->
<div class="header">
<!--contact us phone number-->
        <div class="head1">
            <h3 class="text1"><i class="fa fa-phone" style="margin-right:10px; font-size:35px;" aria-hidden="true"></i> Call US Today</h3>  
            <h4 ><a href="tel: 0700 000 000" class="link1"   style="margin-left:43px;"> 0700 000 000</a></h4> 
       </div>
       <!--contact us email address-->
        <div class="head2">
                <h3 class="text1"> <i class="fa fa-envelope" style="margin-right:10px; font-size:35px;"  aria-hidden="true"></i> Email Us</h3>
                <h4><a href="mailto:info@vehicleregistration.com" style="margin-left:50px;" class="link1">info@vehicleregistration.com</a></div></h4>
        </div>
    </div>
    <?php
    //make the connection string global within the php script-->
global $con;
//select from the members table in relation to the ssigned in email address, session email address
$getp="select * from members where email='$sessionemail'";
//run the select query
$run=mysqli_query($con, $getp);
//using the run query and mysqli fetch array, fetch specific field from the table members
$row=mysqli_fetch_array($run);
//fetch the image from the table member
$ppic=$row['profile'];
?>

    <!--user profile page -->
    <div class="mainprofile">
        <div class="welcome">
        <!--get the name and the email address from then session created in login php script-->
        <h4>Welcome <span> <small><?php echo $_SESSION["name"];?>,</small>  </span> Your Email Address: <span> <small><?php echo   $_SESSION["email"];  ?></small></span> </h4>
        </div>
        <hr>
        <div class="mainmain">
            <div class="sidebar">
            <div class="userimage">
                <center> <p>Your Profile Image</p></center>
                <!--display the fetched image using php -->
                <?php echo "<img src='../assets/usersimage/$ppic' class='person'>" ;  ?>
                </div>
                <ul class="user_link">
                <!--links accessible by the user once logged in-->
               <li><a href="user_update.php">Update Account Information</a></li>
               <li><a href="registration.php">New Vehicle Registration</a></li>
               <li><a href="check_status.php">Check Vehicle Status</a></li>
               <li><a href="transfer.php">Transfer Vehicle Registration</a></li>
               <li><a href="payment.php">Confirm Payment</a></li>
               <li><a href="logout.php">Logout</a></li>
             </ul>
                
            </div>
            <div class="usercontent">
            <!--transfer form to check if the number entered exist-->
            <form class="transferform" action="../mainphp/check.php" method="post">
           
                   <h4 style="margin-bottom:150px;">Statement Of Transfer</h4>
                   <label for="Name" class="tlabel">Check If The Registration Number Exist: <font color="red">*</font></label>
                 <input type="text" placeholder="Registration Number" name="oreg"><br>
                 <button type="submit" class="transferbtn" name="check" style="width:30%; margin-left:230px; margin-bottom:100px;">Check</button>
                 <br><br>
                 
               </form>
            </div>
            </div>
        </div>
    </div>
<!--copyright footer section-->
<div class="footer2">
    <center>
        <h4>&copy; 2021. ALL RIGHTS RESERVED.</h4>
</center>
</div>
</div>
</body>
</html>
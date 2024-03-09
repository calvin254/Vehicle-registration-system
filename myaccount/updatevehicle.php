<!DOCTYPE html>
<!--session start-->
<?php
//session start
session_start();
//include the connection string page
include('../mainphp/connect.php');
//include the email session variable
$sessionemail=$_SESSION['email'];
//include the registratuion session variable
$sessionvehicle=$_SESSION['registration'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../asset" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEHICLE REGISTRATION |UPDATE PAGE</title>
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
       
       
global $con;
//get the user profile picture from the members table
$getpic="select * from members where email='$sessionemail'";
$runpic=mysqli_query($con, $getpic);
$rowpic=mysqli_fetch_array($runpic);
$ppic=$rowpic['profile'];
//get the information from the vehicles table
$getp="select * from vehicle where email='$sessionemail' and reg='$sessionvehicle'";
$run=mysqli_query($con, $getp);
$row=mysqli_fetch_array($run);
$chasis=$row['chasis'];
$engine=$row['engine'];
$make=$row['vmake'];
$model=$row['vmodel'];
$wheels=$row['wheels'];
$color=$row['vcolor'];
$fuel=$row['fuel'];
?>

    <!--user profile page -->
    <div class="mainprofile">
        <div class="welcome">
        <!--get the name and the email from the database dynamically-->
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
            <!--start of the vehicle update form-->
            <form method="post" class="reg" action="../mainphp/update.php" enctype="multipart/form-data" >
            <h4>Hello <?php echo $_SESSION["name"];?>, Register Your New Vehicle</h4>
                    <br><br>
                    <!--vehicle information get the values from the database dynamically -->
                    <!--some textboxes are readonly while others can be edited-->
                    <div class="floaters">
                        <div class="left">
                        <label for="" class="labeltxt">Registration Number:</label>
                        <input type="text" value="<?php echo $sessionvehicle; ?>" class="inputsignup" name="number"  placeholder="Vehicle Registration number" readonly>
                        </div>
                        <div class="right">
                        <label for="" class="labeltxt">Fuel Type: <font color=red> *</font></label>
                        <input type="text" class="inputsignup" value="<?php echo $fuel; ?>"  name="fuel" placeholder="Please Enter The Fuel Type"  >
                        </div>
                        </div>
                    
                    <div class="floaters">
                        <div class="left">
                        <label for="" class="labeltxt">Chasis number: <font color=red> *</font></label>
                        <input type="text" class="inputsignup" name="chasis" value="<?php echo $chasis; ?>"   placeholder="please enter the vehicle chasis serial number">
                        </div>
                        <div class="right">
                        <label for="" class="labeltxt">Engine Number: <font color=red> *</font></label>
                        <input type="text" class="inputsignup" name="engine" value="<?php echo $engine; ?>"  placeholder="please enter the vehicle engine serial number.">
                        </div>
                    </div>
                    <div class="floaters">
                        <br>
                        <div class="left">
                        <label for="" class="labeltxt">vehicle Make:</label>
                        <input type="text" class="inputsignup" name="make" value="<?php echo $make; ?>"  placeholder="please enter the vehicle make." readonly>
                           
                        </div>
                        <div class="right">
                        <label for="" class="labeltxt">Vehicle Model:</label>
                        <input type="text" class="inputsignup" name="model" value="<?php echo $model; ?>" placeholder="please enter the vehicle model." readonly>
                        </div>
                    </div>
                    <br>
                    <div class="floaters">
                        <div class="left">

                            <label for="" class="labeltxt">Number Of Wheels:</label>
                        <input type="text" class="inputsignup" name="wheels"  value="<?php echo $wheels; ?>" placeholder="please enter the number of wheels." readonly>
                        </div>
                        <div class="right">
                        <label for="" class="labeltxt">Vehicle Color: <font color=red> *</font></label>
                        <input type="text" class="inputsignup" name="color" value="<?php echo $color; ?>" placeholder="please enter the vehicle color.">
                        </div>
                        </div>
                    <div  style="clear:both;"></div>
                        <div class="floaters">
                        <button type="submit" name="updatevehinfo" style="width:50%; margin-bottom: 10px;  margin-left:200px;"> Update Vehicle</button>
                      
                    </div>
           </form>
           <!--end of update vehicle information form-->
         
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


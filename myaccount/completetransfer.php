<!DOCTYPE html>
<!--session start-->
<?php
//start of the session
session_start();
//include the connextion string file
include('../mainphp/connect.php');
//include the session for the email and registration number
$sessionemail=$_SESSION['email'];
$sessionreg= $_SESSION['regnum']
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
            <!--complete transfer form-->
            <form class="transferform" action="../mainphp/vehicletransfer.php" method="post">
           <?php
 //make the connection string global        
global $con;

//select from the vehicle table using  the vehicle session variable
$selectvehicle= "select * from vehicle where reg='$sessionreg'";
//run the select query
$run_selectvehicle=mysqli_query($con, $selectvehicle);
//fetch values from the table using fetch array
$row_vehicle=mysqli_fetch_array($run_selectvehicle);
//fetching the specific field required
$vreg=$row_vehicle['reg']; 
$oemail=$row_vehicle['email'];
$vmake=$row_vehicle['vmake'];
$vmodel=$row_vehicle['vmodel'];
//close the mysqli qeury
mysqli_close($con);
?>
<!--end of php script-->
                   <h4>Statement Of Transfer</h4>
                        <!--form input textboxes to accept values from the user and the table-->
                 <div class="tfloater">
                    <div class="tleft">
                        <label for="model" class="tlabel">Full Name</label>
                 <input type="text" name="oname"   placeholder="Owner Full Name" >
                    </div>
                    <div class="tright">
                        <label for="model" class="tlabel">Email Address</label>
                        <input type="email" name="oemail" value="<?php echo $oemail ?>"  placeholder="Owner Email Address" readonly>
                     </div>
                     </div>
                     <label for="Name" class="tlabel"> Vehicle Registration Number:</label>
                 <input type="text" placeholder="Re-enter The Vehicle Registration Number" value="<?php echo $vreg ?>"  name="vreg" readonly>
                    <div class="tfloater">
                    <div class="tleft">
                        <label for="model" class="tlabel">Vehicle Make / Model</label>
                 <input type="text" name="ttid"   placeholder="Owner Full Name"  value=" <?php echo $vmake?> /  <?php echo $vmodel?>" readonly>
                    </div>
                    <div class="tright">
                        <label for="model" class="tlabel">Transfer Date: <font color="red">*</font></label>
                        <input type="date" name="tdate"   placeholder="Owner Email Address">
                     </div>
                     </div>
                 <label for="Name" class="tlabel"> Tranfer To: <font color="red">*</font></label>
                 <input type="text" placeholder="Full name" name="tname">

                 <label for="Name" class="tlabel"> Email Address: <font color="red">*</font></label>
                 <input type="email" placeholder="Active Email Address" name="temail"><br>

                 <div class="tfloater">
                    <div class="tleft">
                     <label for="Name" class="tlabel">Phone Number: <font color="red">*</font></label>
                     <input type="number" placeholder="Phone Number" name="tphone">
                    </div>
                    <div class="tright">
                            <label for="Name" class="tlabel"> ID Number: <font color="red">*</font></label>
                            <input type="text" placeholder="ID Number" name="tid">
                     </div>
                     </div>
                     <div class="floaters">
                        <div class="left">
                            <br>
                            <button type="submit" name="cancel" style="width:40%; margin-top:35px; margin-left:80px;"> Cancel</button>
                        </div>
                        <div class="right">
                        
                        <button type="submit" name="transfer" style="width:50%; margin-top:40px; margin-left:70px;"> Transfer</button>
                        </div>
                    </div>    
                 <div>   
                </div>
               </form>
               <!--End of the transfer form-->
            </div>
            </div>
        </div>
    </div>
    
<!--footer copyright section-->
<div class="footer2">
    <center>
        <h4>&copy; 2021. ALL RIGHTS RESERVED.</h4>
</center>
</div>
</div>
</body>
</html>
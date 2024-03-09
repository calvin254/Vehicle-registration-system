
<!DOCTYPE html>
<!--session start-->
<?php
session_start();
include('../mainphp/connect.php');
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
    //make the conection variable global
global $con;
//select from the members table where the session email created is equal to teh email column
$getp="select * from members where email='$sessionemail'";
//run the select statement
$run=mysqli_query($con, $getp);
//fetch the records from the database using fetch aarray
$row=mysqli_fetch_array($run);
$ppic=$row['profile'];
$name=$row['name'];
$email=$row['email'];
$num=$row['id'];
$phone=$row['phone'];
?>

    <!--user profile page -->
    <div class="mainprofile">
        <div class="welcome">
        <!--get the name and email values from the session variables created-->
        <h4>Welcome <span> <small><?php echo $_SESSION["name"];?>,</small>  </span> Your Email Address: <span> <small><?php echo   $_SESSION["email"];  ?></small></span> </h4>

        </div>
        <hr>
        <div class="mainmain">
            <div class="sidebar">
                <div class="userimage">
                <center> <p>Your Profile Image</p></center>
                <!--user profile from the dabatase-->
                <?php echo "<img src='../assets/usersimage/$ppic' class='person'>" ;  ?>
                </div>
                <!--user accessible links-->
                <ul class="user_link">
               <li><a href="user_update.php">Update Account Information</a></li>
               <li><a href="registration.php">New Vehicle Registration</a></li>
               <li><a href="check_status.php">Check Vehicle Status</a></li>
               <li><a href="transfer.php">Transfer Vehicle Registration</a></li>
               <li><a href="payment.php">Confirm Payment</a></li>
               <li><a href="logout.php">Logout</a></li>
             </ul>
                
            </div>
            <div class="usercontent">
            <!--vehicle registration form-->
            <form method="post" class="reg" action="../mainphp/vehregister.php" enctype="multipart/form-data" >
            <h4>Hello <?php echo $_SESSION["name"];?>, Register Your New Vehicle</h4>
<br><br>
<!--get the vehicle registration information-->
                    <div class="floaters">
                        <div class="left">
                        <label for="" class="labeltxt">Active Email Address: <font color=red> *</font></label>
                        <input type="email" class="inputsignup" name="remail" value="<?php echo $email; ?>"  readonly>
                      
                        </div>
                        <div class="right">
                        <label for="" class="labeltxt">Vehicle Front Image: <font color=red> *</font></label>
                        <input type="file"   name="uploadfile">
                       
                        </div>
                    </div>
                    
                    <!--vehicle information -->
                    <div class="floaters">
                        <div class="left">
                        <label for="" class="labeltxt">Chasis number: <font color=red> *</font></label>
                        <input type="text" class="inputsignup" name="chasis"  placeholder="please enter the vehicle chasis serial number">
                         
                    </div>
                        <div class="right">
                        <label for="" class="labeltxt">Engine Number: <font color=red> *</font></label>
                        <input type="text" class="inputsignup" name="engine"  placeholder="please enter the vehicle engine serial number.">
                        </div>
                    </div>
                    <div class="floaters">
                        <br>
                        <div class="left">
                        <label for="" class="labeltxt">vehicle Make: <font color=red> *</font></label><br>
                        <select name="make" size="2" style="border:1px solid #ccc; border-radius:5px; backgound-color:white; width:100%; padding: 12px 20px; margin:10px 0; display:inline-block;" id="">
                       
                            <option value="BMW">BMW</option>
                            <option value="NISSAN">NISSAN</option>
                            <option value="TOYOTA">TOYOTA</option>
                            <option value="RANGE ROVER">RANGE ROVER</option>
                            <option value="FERRARI">FERRARI</option>
                            <option value="LAMBORGHINI">LAMBORGHINI</option>
                           
                        </select>                   
                        </div>
                        <div class="right">
                        <label for="" class="labeltxt">Vehicle Model: <font color=red> *</font></label>
                        <input type="text" class="inputsignup" name="model" placeholder="please enter the vehicle model.">
                        </div>
                    </div>
                    <br>
                    <div class="floaters">
                        <div class="left">

                            <label for="" class="labeltxt">Number Of Doors: <font color=red> *</font></label>
                    
                         <select name="wheels" size="2"  class="inputsignup" style="border:1px solid #ccc; border-radius:5px; backgound-color:white; width:100%; padding: 8px 20px; margin:20px; display:inline-block;" id="">
                            <option value="2">TWO</option>
                            <option value="4">FOUR</option>
                            <option value="5">FIVE</option>
                        </select>
                        </div>
                        <div class="right">
                        <label for="" class="labeltxt">Vehicle Color: <font color=red> *</font></label>
                        <select name="color" size="2" style="border:1px solid #ccc; border-radius:5px; backgound-color:white; width:100%; padding: 12px 20px; margin:20px; display:inline-block;" id="">
                            <option value="RED">RED</option>
                            <option value="GREY">GREY</option>
                            <option value="WHITE">WHITE</option>
                            <option value="BLACK">BLACK</option>
                          
                        </select>
                        </div>
                    </div>
                   
                    <div>
                    <div class="floaters">
                        <div class="left">
                        <label for="" class="labeltxt">Vehicle Status: <font color=red> *</font></label>
                        <input type="text" class="inputsignup" name="vstatus" value="PENDING" readonly>
                        </div>
                        <div class="right">
                        <label for="" class="labeltxt">Fuel Type: <font color=red> *</font></label><br>
                        <select name="fuel" style="border:1px solid #ccc; border-radius:5px; backgound-color:white; width:100%; padding: 12px 20px; margin:20px; display:inline-block;" id="">
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electric">Electric</option>
                        </select>
                        </div>
                         </div>
                    <div class="floaters">
                        <div class="left">
                        <?php 
                        //generate today's date using php date()
                            $month = date('m');
                            $day = date('d');
                            $year = date('Y');

                            $today = $year . '-' . $month . '-' . $day;    
                        ?>
                        <label for="" class="labeltxt">Registration Date: <font color=red> *</font></label>
                        <input type="date" class="inputsignup" value="<?php echo date('Y-m-d'); ?>" name="dates" placeholder="Todays Date" readonly>
                        </div>
                        <div class="right">
                        <label for="" class="labeltxt">Registration Number: <font color=red> *</font></label>
                        <input type="text" class="inputsignup"  value="<?php echo uniqid() ?>" name="number" readonly>
                        </div>
                        </div>
                       
                    <div  style="clear:both;"></div>
                        <div class="floaters">
                        <div class="left">
                            <br>
                            <!--cancel button-->
                            <button type="submit" name="cancel" style="width:40%;   margin-left:100px;"> Cancel</button>
                        </div>
                        <div class="right">
                        <!--continue button-->
                        <button type="submit" name="vehregister" style="width:60%; margin-bottom: 10px;  margin-left:100px;"> Continue</button>
                        </div> 
                    </div>	
           </form>
         <!--end of registration form-->
            </div>
            </div>
        </div>
    </div>       
 <!--copyright footer section -->
<div class="footer2">
    <center>
        <h4>&copy; 2021. ALL RIGHTS RESERVED.</h4>
</center>
</div>
</div>
</body>
</html>


<!DOCTYPE html>
<!--session start-->
<?php
session_start();
//connection string page
include('../mainphp/connect.php');
//email session from the userlogin page
$sessionemail=$_SESSION['email'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../asset" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEHICLE REGISTRATION |MY ACCOUNT</title>
    <!--font awesome icon links-->
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
    <!--php code to retrieval information from the members table using the session created in member login page-->
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
<!---display the name and email of the logged in user using php session-->
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
            <!--main page for checking the vehicle status-->
            <!--information will be retrieved from the database directly to the table and the user has a link to update vehicle information-->
               <div class="status">
                   <h4>Check Your Vehicle (s) Status.</h4>

                   <div class="sinfo">
                       <center><p><i>Hello,<?php echo $_SESSION["name"];?><br> Information Of Your Registered Vehicle.<br>
                       </i>
                       </p></center>
                   </div>
                                    <?php
                    //make the connection string global 
                    global $con;
                    //select from the vehicle table in relation to the email address session
                    $selectc= "select *  from vehicle where email='$sessionemail'";
                    //run the select query
                    $run_selectc=mysqli_query($con, $selectc);
                    //close the php script
                    mysqli_close($con);

                    ?>
                    <!--form used to update the vehicle information-->
                <form action="../mainphp/update.php" method="post">
                <!--table used to display alll teh vehicle information fetched from the database-->
                <table class="statustable">
                            <tr>
                            <!--table header-->
                        <th>Check</th>
                        <th>reg_number</th>
                        <th>Make/ Model</th>
                        <th>Vehicle Status</th>
                       <th> Front Image</th>
                       <th>Plate Number</th>
                        <th>Update</th>
                      
                    </tr>
                    <!--php script to fetch values from vehicle table using fetch array mysqli function-->
                    <?php
                            while($rows=mysqli_fetch_array($run_selectc)){
                                $image=$rows['vpicture'];
                        ?>
                        <tr>
                        <!--table data information-->
                            <td> 
                            <!--checkbox that stored thee registration number of a particular vehicle-->
                            <input type="checkbox" value="<?php echo $rows['reg'];  ?>"  name="check[]">  
                            </td>
                            <td><?php echo $rows['reg'];  ?></td>
                        
                            <td><?php echo $rows['vmake'];  ?> / <?php echo $rows['vmodel']; ?></td>
                            <td><?php echo $rows['status'];  ?></td>
                            <!--image -->
                            <td><?php echo "<img src='../assets/upload/$image' style='width:50px; margin-left:30px; height:50px'>"   ?></td>
                            <td><?php echo $rows['plate_num'];  ?></td>
                            <td> 
                                
                            <!--update button-->
                            <input type="submit" value="Update" name="updatevehicle"  class="btnbtn" >
                            </td>
                           
                           
                        </tr>
                        <?php 
                            } 
                            ?>
                  </table>
                        </form>
               </div>
            </div>
        </div>
    </div>
    
    
       
       
 <!--copy right footer section-->
<div class="footer2">
    <center>
        <h4>&copy; 2021. ALL RIGHTS RESERVED.</h4>
</center>
</div>
</div>
</body>
</html>



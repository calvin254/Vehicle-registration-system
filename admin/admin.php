<!DOCTYPE html>
<?php
//session start
session_start();
//include the function page
include("adminphp/function.php");
//include the connection page
include("adminphp/connect.php");
//session variable
$adminemail=$_SESSION["admemail"];
$adminname=$_SESSION["admname"];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>ADMIN PANEL|ADMIN PANEL</title>
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--stylesheet link-->
    <link rel="stylesheet" href="admincss/style.css">
</head>
<body>
<input type="checkbox" id="nav-toggle">
    <!--float to the left-->
    <div class="sidebar">
    <!--logo and company name-->
    <div class="sidebar-brand">Vehicle<strong> <span>~Registration</span></strong></div>
        <!--the sidebar links-->
        <div class="sidebar-menu">
         <ul>
                <li>
                    <a href="admin.php" class="active"><i class="fa fa-tachometer icon" aria-hidden="true"></i>DashBoard</a>
                </li>
                <li>
                    <a href="add_admin.php"><i class="fa fa-plus icon" aria-hidden="true"></i>Add Admin</a>
                </li>
                <li>
                    <a href="user_mngt.php"><i class="fa fa-users icon" aria-hidden="true"></i>Users</a>
                </li>
                <li>
                    <a href="vehicle_mngt.php"><i class="fa fa-car icon" aria-hidden="true"></i>Vehicles</a>
                </li>
                <li>
                    <a href="transfer_mngt.php"><i class="fa fa-exchange icon" aria-hidden="true"></i> Transfers</a>
                </li>
                <li>
                    <a href="messages_mngt.php"><i class="fa fa-comments icon" aria-hidden="true"></i> Messages</a>
                </li>
                <li>
                    <a href="paymentmanagement.php"><i class="fa fa-comments icon" aria-hidden="true"></i> Payments</a>
                </li>
                <li>
                    <a href="logoutt.php"><i class="fa fa-sign-out icon" aria-hidden="true"></i>Logout</a>
                </li>
            </ul>
        </div>
    </div>
<!--end of the sidebar-->
<!--start of the main area section-->
<div class="main-content">
    <!--header section-->
        <header>
            <h2>
            <!--brand and bars section-->
                <label for="nav-toggle">
                    <span class="fa fa-bars"></span>
                </label> Vehicle~Registration
            </h2>

           <!-- user section part-->
            <div class="user-wrapper">
                <img src="../assets/per1.jpg" width="50px" height="50px" alt="">
                <div>
                <!--fetch the username from the database-->
                    <h4><?php echo $adminname; ?></h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">

                <div class="card-single">
                    <div>
                    <!--display the user count from database using function.php page-->
                        <h1><?php countuser(); ?></h1>
                        <span>Registred Users</span>
                    </div>
                    <div>
                        <span class="fa fa-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                       <!--display the vehicle count from database using function.php page-->
                        <h1><?php countvehicle(); ?></h1>
                        <span>Registred Vehicles</span>
                    </div>
                    <div>
                        <span class="fa fa-car"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                       <!--display the transfered vehicle count from database using function.php page-->
                        <h1><?php counttransfer(); ?></h1>
                        <span>exchange Vehicles</span>
                    </div>
                    <div>
                        <span class="fa fa-exchange"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                       <!--display the messages count from database using function.php page-->
                        <h1><?php countmessages(); ?></h1>
                        <span>Messages</span>
                    </div>
                    <div>
                        <span class="fa fa-comments"></span>
                    </div>
                </div>
            </div>
            <!--generate reports section-->
                <div class="reports">
                    <div class="wrapper">
                        <h2>Generate Reports</h2>
                    </div>
                    <!--form section--->
                    <form action="" method="post" >
                        <div class="formvalues">
                       <!-- <label for="">Vehicle Registration Number</label>
                        <input type="text" name="vreg" placeholder="Search By Vehicle Registration Number">-->

                        <label for="">Use Email Address Or Registration Number</label>
                        <input type="text" name="vemail" placeholder="Email Address or Registration Number">
                            <div class="floaters">
                                <div class="left">
                                <label for="">From Date</label>
                                <input type="date" name="fdate">
                                </div>
                                <div class="right">
                                <label for="">TO Date</label>
                                <input type="date" name="tdate">
                                </div>
                            </div>
                        <button type="submit"  name="searching" style="width:100px; margin-left:200px;">Search</button>
                        </div>

                        <!--php script for searching-->
<?php 
if(isset($_POST['searching'])){
    
    $email=$_POST['vemail'];
    $fdate=$_POST['fdate'];
    $tdate=$_POST['tdate'];
    //select from the vehicle table in relation to the inputed values
    $query1="select * from vehicle where email='$email' || reg='$email' || date between '$fdate' and '$tdate'";
    //run the select queiry
    $result1=mysqli_query($con, $query1); 
?>
                        <!--table to display the searched output-->
                                <table class="table" border="1">
                            <tr>
                            <th>Status </th>
                                <th>Plate Number</th>
                                <th>Make/ Model</th>
                                <th>Registration Number</th>
                              

                            </tr>
                            <?php
                            //check if there is a row that match the comparison above
                            if(mysqli_num_rows($result1)>0){
                                //fetch values from the row
                                while($row=mysqli_fetch_array($result1)) {
                                    ?>
                                    <!--display the fetched values on the table data below-->
                                    <tr>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['plate_num']; ?></td>
                                <td><?php echo $row['vmake']; ?>/ <?php echo $row['vmodel']; ?></td>
                                <td><?php echo $row['reg']; ?></td>
                               
                            </tr>
                                 <?php
                                }
                                }
                            else{
                                ?>
                                <tr>
                                <td colspan="8"> NO Records Found</td>
                                </tr>
                               <?php } } ?>
                        </table>
                        <!--end of table-->
                    </form>
                    <!---end of form-->
                </div>
        </main>
    </div>
</body>
</html>

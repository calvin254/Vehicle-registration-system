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
                    <a href="admin.php"><i class="fa fa-tachometer icon" aria-hidden="true"></i>DashBoard</a>
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
                    <a href="paymentmanagement.php" class="active"><i class="fa fa-comments icon" aria-hidden="true"></i> Payments</a>
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
        <?php
            //select from the vehicle table
            $selectv= "select * from payment";
            //run the select query
            $run_selectv=mysqli_query($con, $selectv);
            //count 
            $count=mysqli_num_rows($run_selectv);
            //close the query
            mysqli_close($con);
            ?>
        <main>
            
            <div class="messages">
              <div class="maintext">
                  <center><h2>Payment Management </h2>
                  <br>
                   <!--display the count from the database-->
                  <p>Received Payment: <?php  echo $count;  ?></p>
                  <br>
                
                </center>
    
              </div>
              <!--form-->
              <form action="adminphp/checker.php" method="post">
              <!--table-->
              <table >
                  <tr>
                <th>Check</th>
                  <th>Payment Code</th>
                  <th> User Email</th>
                  <th>Amount</th>
                  <th>Vehicle Registration</th>
                    <th>Payment Amount</th>
                    <th>Status</th>
                    <th>Approve</th>
                    
    </tr>
    <?php
    //fetch values from the database table
        while($rows=mysqli_fetch_array($run_selectv)){
        ?>
<tr>
    <td> 
<!--uses the reg number as its value-->
<input type="checkbox" value="<?php echo $rows['vehicle_registration'];  ?>"  name="check[]">
    <!--display the fetched values -->
</td>
    <td><?php echo $rows['paymentcode'];  ?></td>
    <td><?php echo $rows['useremail'];  ?></td>
    <td><?php echo $rows['amount'] ; ?></td>
    <td><?php echo $rows['vehicle_registration'] ; ?></td>
    <td><?php echo $rows['paymentnumber'] ?></td>
    <td><?php echo $rows['status'] ?></td>
    <td> 
    <!--approve button-->
           <input type="submit" value="Approve" name="approvepayment" class="btnbtn" >
    </td>
    
                            </tr>
                            <?php 
                            } 
                            ?>
              </table>
              <!--end of table-->
                        </form>
                        <!--end of form-->   
          </div>
    </main>
    </div>
</body>
</html>

<!--IF APPROVED IS CLICKED-->
<?php




?>

<!DOCTYPE html>
<html lang="en">
<?php 
//start session
session_start();
//include the connection page
include("adminphp/connect.php");
//session variable
$adminemail=$_SESSION["admemail"];
$adminname=$_SESSION["admname"];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>ADMIN PANEL|MESSAGES</title>
    <!--font awesome icons link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--stylesheet external css link-->
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
                    <a href="messages_mngt.php"  class="active"><i class="fa fa-comments icon" aria-hidden="true"></i> Messages</a>
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
        <?php
            //select from the messages table
            $selectc= "select * from messages";
            //run the select statement
            $run_selectc=mysqli_query($con, $selectc);
            //count the number of  rows in messages table
            $count=mysqli_num_rows($run_selectc);
            //close the query
            mysqli_close($con);
            ?>

      <div class="messages">
          <div class="maintext">
              <center><h2>Messages Management</h2>
              <br>
              <!--display the count from teh database-->
              <p>The Total Number Of Messages Received:  <?php echo $count;  ?></p>
              <br>
            <small>View All The Messages Here</small>
            </center>

          </div>
          <!--form -->
          <form action="adminphp/checker.php" method="post">
          <!--table to display the fetched information-->
          <table >
              <tr>
                <th>Check</th>
              <th>Sender</th>
              <th>Date</th>
              <th>Subject</th>
            <th>Body</th>
            <th>Delete</th>
                
            </tr>
            <?php
            //fetch the values from the table
             while($rows=mysqli_fetch_array($run_selectc)){
             ?>
                            

            <tr>
            <!--display the fetched values in the database-->
    <td> 
    <!--the checkbox whose value is the message id from the databse-->
<input type="checkbox"  name="check[]" value="<?php echo $rows['message_id'];  ?>" >     
</td>
    <td><?php echo $rows['senderemail'];  ?></td>
    <td><?php echo $rows['date'];  ?></td>
    <td><?php echo $rows['subject'] ; ?></td>
    <td><?php echo $rows['body'] ;?></td>
    <td>
    <!--delete button that works in relation to the checkbox value-->
           <input type="submit" value="Delete Message" name="deletemessage"  class="btnbtn" >
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
</body>
</html>
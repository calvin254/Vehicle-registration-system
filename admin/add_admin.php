<!DOCTYPE html>
<?php
//session start
session_start();
//include the function page
include("adminphp/function.php");
//include the connection file
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
    <title>ADMIN PANEL|ADD ADMIN</title>
    <!--font awesome icons link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--stylesheet external link-->
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
                    <a href="add_admin.php" class="active"><i class="fa fa-plus icon" aria-hidden="true"></i>Add Admin</a>
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
            <div class="admin">
            <!--add new admin section-->
                <div class="main_text">
                   <center> <h2>Add A New Admin</h2></center>
                </div>
                <!--form to add new admin-->
                <form action="adminphp/actionadmin.php" method="POST">
                <div class="container">
                <label for="uemail"><b>Full Name: <font color="red">*</font></b></label><br>
                  <input type="text" placeholder="Full Name" name="aname">

                  <label for="uemail"><b>Phone Number: <font color="red">*</font></b></label><br>
                  <input type="number" placeholder="Phone Number" name="anumber">

                  <label for="uemail"><b>Email Address: <font color="red">*</font></b></label><br>
                  <input type="email" placeholder="Email Address" name="aemail">

                  <label for="psw"><b>Password: <font color="red">*</font></b></label><br>
                  <input type="password" placeholder="Enter Password" name="password">
                  
                  <button type="submit" name="adminregister">Register</button> 
                </div>
               
<br><br>
                <!--display the admin name and information in a tabular form-->
              <div class="messages">
              <?php
            //select from admin table
            $selecta= "select * from admin";
            //run the select query
            $run_selecta=mysqli_query($con, $selecta);
            //count the total number of rows in the admin table
            $count=mysqli_num_rows($run_selecta);
            //close the mysqli script
            mysqli_close($con);
            ?>
          <div class="maintext">
              <center><h2>Admin Management</h2>
              <br>
              <!--display the total number of admins from the database-->
              <p>Total Number Of Admins: <?php echo $count;  ?></p>
              <br>
            </center>

          </div>
          <!--table to display the admin information-->
          <table >
              <tr>
            <th>Check</th>
              <th>Name</th>
              <th>Email Address</th>
              <th>Phone Number</th>
              <th>Delete</th>                
</tr>
                        <?php
                        //fetch the values from the table admin using the while loop
                            while($rows=mysqli_fetch_array($run_selecta)){
                                
                        ?>
                

<tr>
    <td> 
    <!--checkbox that will have the admin email as the value-->
<input type="checkbox"  name="check[]" value="<?php echo $rows['admin_email'];?>">  
</td>
    <td><?php echo $rows['admin_name'];  ?></td>
    <td><?php echo $rows['admin_email'];  ?></td>
    <td><?php echo $rows['admin_numer'] ; ?></td>
    <!--button to delete the admin in relation to to the checkbox value-->
    <td><input type="submit" name="deleteadmin" value="Delete Admin" class="btnbtn" ></td>
</tr>
                            <?php 
                            } 
                            ?>
          </table>
          <!--end of the table-->
                        </form>
                        <!--end of the form-->
</body>

</html>


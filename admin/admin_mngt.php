<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>HOME|ADMIN PANEL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admincss/style.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
    <div class="sidebar-brand">Vehicle<strong> <span>~Registration</span></strong></div>
        <!--Secciones-del-tablero-->
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

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="fa fa-bars"></span>
                </label>Vehicle~Registration
            </h2>

           
            <div class="user-wrapper">
                <img src="../assets/per1.jpg" width="50px" height="50px" alt="">
                <div>
                    <h4>Name</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>

        <main>
            
        <div class="messages">
          <div class="maintext">
              <center><h2>Admin List</h2>
              <br>
            <small>The List Of All Registred Admins</small>
            </center>

          </div>
          <table >
              <tr>
              <th>Name</th>
              <th>Email Address</th>
              <th>Phone Number</th>
               
                <th>Delete</th>
                
</tr>
<tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
   
    <td> <a href="message_delete.php"></a> </td>
 
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
   
    <td> <a href="message_delete.php"></a> </td>
    
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
 
    <td> <a href="message_delete.php"></a> </td>
  
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td>Mexico</td>
    <td> <a href="message_delete.php"></a> </td>

  </tr>
          </table>
          
      </div>
</main>
           


</body>

</html>
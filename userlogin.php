
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEHICLE REGISTRATION |LOGIN PAGE</title>
    <!--Link to External Css File-->
    <link rel="stylesheet" href="css/mainstyle.css">
     <!--FONT AWESOME  ICONS -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <!--Navigation Bar-->
    <nav>
    <input id="nav-toggle" type="checkbox">
    <!--Logo-->
    <div class="logo">Vehicle<strong> <span>~Registration</span></strong></div>
    <!--navigation Links-->
    <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="userlogin.php">Login</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php">Contact</a></li>  
    </ul>
    <!--Three Bars On A Minimized Screen Size-->
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
</nav>
 <!--login page-->
 <div class="login_page">
         <div class="loginform">
         <!--logo text-->
            <h3>Vehicle<span>~Registration</span> </h3>
            <p>Signin To Your Account</p>
           <!--start of th login Form-->
            <form action="mainphp/action_userlogin.php " id="form" method="post">
                <div class="container">

                    <!--form labels-->
                    <!--form input text boxes to fetch the users data-->
                  <label for="uemail"><b>Username <font color=red> *</font></b></label><br>
                  <input type="text" id="username " placeholder="username" name="usname">

                  <label for="psw"><b>Password <font color=red> *</font></b></label><br>
                  <input type="password" id="pass" placeholder="Enter Password" name="password">
    
                  <div class="forgot">
                      <p>   <a href="forgot.html">Forgot Password </a></p>
                  </div>
                  
                  <button type="submit" id="submit" name="userlogin">Login</button>
                  
                </div>
                <br>
                <!--redirect the user to the signup page-->
                <div class="another">
                    <p>Dont Have An Account? <a href="signup.php"> Register Here</a></p>
                </div>
                <div>
                <!--redirect the user to the admin login page-->
                    <p><a href="adminlogin.php" style="color:black;">Login As An Admin</a> </p>
                </div>
              </form>
         </div>
         
     </div>
     <!--end of login page-->
     
     <!--footer-->
 <hr>
<!--Footer -->
<footer class="footer">
     <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Vehicle Registration</h4>
                <ul>
                   <!--Navigation links-->
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">our services</a></li>
                    <li><a href="userlogin.php">Login</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Get In Touch</h4>
                <ul>
                   <!--Contact information-->
                    <li><a href="tel: 0700 000 000">Phone:<br> 0700 000 000</a></li>
                    <li><a href="mailto:info@vehicleregstration.com">Gmail:<br> info@vehicleregistration.com</a></li>
                       <li> <a href="#">Visit Us: <br>UpperHill Nairobi, <br> Kenya</a> </li>
                </ul>
            </div>
            <div class="footer-col">
               <!--Partners Section-->
                <h4>Our Partners</h4>
                <ul>
                    <li><a href="#">Kenya Revenue Authority</a></li><br>
                    <li><a href="#">National Transport And Safety Authority</a></li><br>
                    <li><a href="#">Automobile Association Of Kenya</a></li>
                
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="social-links">
                       <!--social media icons-->
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
     </div>
  </footer>
  <!--copy right footer section &copy function-->
  <div class="footer2">
    <center>
        <h4>&copy; 2021. ALL RIGHTS RESERVED.</h4>
</center>
</body>
</html>
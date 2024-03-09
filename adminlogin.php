
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEHICLE REGISTRATION | INDEX PAGE</title>
	<!--link to the external css-->
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
 <!-- admin login page-->
 <div class="login_page">
         <div class="loginform">
         <h3>Vehicle<span>~Registration</span> </h3>
            <p>Signin To Your Account</p>
			<!--admin login form-->
            <form action="mainphp/action_Adminlogin.php" method="post" name="adminform">
                <div class="container">
                
				 <div>
                  <label for="aemail"><b>Email Address:<font color=red> *</font></b></label><br>
                  <input type="email" placeholder="Email Address" name="aemail">
				 </div>
				 <div>
				  <label for="apsw"><b>Password: <font color=red> *</font></b></label> <br>
                  <input type="password" placeholder="Enter Password" name="apsw">
				  </div>
                  <button type="submit" name="adminlogin">Login</button>
                  
                </div>
                <br>
               
			   <!--redirect the user to the member login page-->
                <div>
                    <p><a href="userlogin.php" style="color:black;">Login As A User</a> </p>
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
           <!--Navigation links -->
  	 				<li><a href="index.php">Home</a></li>
  	 				<li><a href="services.php">our services</a></li>
  	 				<li><a href="userlogin.php">Login</a></li>
  	 				<li><a href="contact.php">Contact</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
         <!--Contact Us Section Us-->
  	 			<h4>Get In Touch</h4>
  	 			<ul>
  	 				<li><a href="tel: 0700 000 000">Phone:<br> 0700 000 000</a></li>
  	 				<li><a href="mailto:info@vehicleregstration.com">Gmail:<br>info@vehicleregistration.com</a></li>
  	 				<li> <a href="#">Visit Us: <br>UpperHill Nairobi, <br> Kenya</a> </li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
         <!--Our Partners Section-->
  	 			<h4>Our Partners</h4>
  	 			<ul>
  	 				<li><a href="#">Kenya Revenue Authority</a></li><br>
  	 				<li><a href="#">National Transport Service Authority</a></li><br>
  	 				<li><a href="#">Automobile Association Of Kenya</a></li>
  	 			
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Follow Us</h4>
  	 			<div class="social-links">
                       <!--social media icons from fontawesome -->
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
  <!--copyright footer section using &copy function-->
  <div class="footer2">

    <center>
        <h4>&copy; 2021. ALL RIGHTS RESERVED.</h4>
</center>
</body>
</html>

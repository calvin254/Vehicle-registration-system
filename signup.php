<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEHICLE REGISTRATION | CREATE ACCOUNT</title>
    <!--link to the external style sheet-->
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
 <!--Signup Page-->

 <div class="signuppage">
         <div class="signupform">
         <h3>Vehicle<span>~Registration</span> </h3>
            <p>Create A New Account</p>
             
            <!--Signup form start-->
            <form action="mainphp/user_signup.php" method="post" enctype="multipart/form-data">
            
                <div class="container">
                <div class="sfloater">
                <!--input textboxes and label that float to the left-->
                    <div class="sleft">
                    <label for="usname"><b>Full Name:<font color=red> *</font></b></label><br>
                <input type="text" placeholder="full name" name="usname">
                    </div>
                    <!--input textboxes and label that float to the right-->
                    <div class="sright">
                    <label for="usemail"><b>Email Address: <font color=red> *</font></b></label><br>
                  <input type="email" placeholder="Email Address" name="usemail">
                    </div>
                </div>

                <div class="sfloater">
                <!--input textboxes and label that float to the left-->
                    <div class="sleft">
                    <label for="usname"><b>ID / Passsport Number: <font color=red> *</font></b></label><br>
                <input type="number" placeholder="ID/ Passport Number" name="usnum"> 
                    </div>
                    <!--input textboxes and label that float to the right-->
                    <div class="sright">
                    <label for="usname"><b>Phone Number</b></label><br>
                <input type="number" placeholder="Phone Number" name="usphone"> 
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br>
                
                <div class="sfloaters">
                <div class="floaters">
                <!--input textboxes and label that occupy full width-->
                <label for="" class="labeltxt">Profile Picture:<font color=red> *</font></label>
                <input type="file"   name="uploadfile">
                </div>
                </div>
                
                    <center><h4>Login Credentials </h4></center>

                    <label for="name"><b>Username: <font color=red> *</font></b></label><br>
                  <input type="text" placeholder="Login Username" name="usrname">
                
                <div class="sfloater">
                    <div class="sleft">
                    <label for="psw"><b>Password: <font color=red> *</font></b></label><br>
                  <input type="password" placeholder="Enter Password" name="psw">
                    </div>
                    <div class="sright">
                    <label for="psw"><b>Confirm Password: <font color=red> *</font></b></label><br>
                  <input type="password" placeholder="Confirm Password" name="cpsw">
                    </div>
                </div>
                  
                  <button type="submit" name="usersignup">Create New Account</button>
                  
                </div>
                <br><br>
                <!--ridirect to login page if a user already have an account-->
                <div class="another">
                    <p>Already Have An Account<a href="userlogin.php"> Login Here</a></p>
                </div>
               <br><br>
              </form>
         </div>
        
     </div>
     <!-- END OF SIGNUP PAGE-->
     
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
  	 				<li><a href="mailto:info@vehicleregstration.com">Gmail:<br> info@vehicleregistration.com</a></li>
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
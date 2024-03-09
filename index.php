<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEHICLE REGISTRATION | INDEX PAGE

<script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.Name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         if( document.myForm.EMail.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
         if( document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) ||
            document.myForm.Zip.value.length != 5 ) {
            
            alert( "Please provide a zip in the format #####." );
            document.myForm.Zip.focus() ;
            return false;
         }
         if( document.myForm.Country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         }
         return( true );
      }
   //-->
</script>
    </title>
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
 <!--INDEX PAGE INTERFACE-->
 <div class="mainpage">
 <section id="banner">
    <div class="banner-text">
        <h3>Register Your Vehicle</h3>
        <p>Drive With Confidence</p>
        <div class="banner-btn">
            <a href="userlogin.php"> <span></span> Get Services</a>
            <a href="services.php"> <span></span> Read More</a>
        </div>
    </div>
    </section>
</div>
<!--ABOUT US SECTION-->
<div class="about">
<div class="aboutcontainer">
<!--float to the right-->
<div class="aboutcontent">
<div class="abouthead">
<h2>About US</h2>
</div>
<div class="acontent">
<h2>Lorem ipsum dolor sit amet consectetur,</h2>
<p>adipisicing elit. Ut eaque vero quaerat autem?
 Magnam ullam sequi id praesentium accusamus quod!
 adipisicing elit. Ut eaque vero quaerat autem?
 Magnam ullam sequi id praesentium accusamus quod!</p>

</div>
<br><br>
<div class="abouthead">
	<h6>Follow Us</h6>
</div>
<!--font awesome social icons-->
<div class="absocial">
		<a href="#"><i class="fab fa-facebook-f"></i></a>
  		<a href="#"><i class="fab fa-twitter"></i></a>
  	 	<a href="#"><i class="fab fa-instagram"></i></a>
  	 	<a href="#"><i class="fab fa-linkedin-in"></i></a>
</div>
</div>
<!--should float to the left-->

<div class="aboutimage">
<img src="assets/nine.jpg" alt="">
</div>
</div>
</div>
<!--Our partners-->
<br>
<div class="partner">
    <h3 class="heading">  Our Partners</h3>
<!-- four columns of equal width-->
    <div class="profiles">
<!--first column-->	
      <div class="profile">
        <img src="assets/kra.jpg" class="profile-img">
        <h3 class="user-name">KRA</h3>
        <h5>Kenya Revenue Authority</h5> 
      </div>

	  <!--second column-->
      <div class="profile">
        <img src="assets/ntsa.png" class="profile-img">
        <h3 class="user-name">NTSA</h3>
        <h5>National Transport And Safety Authority</h5>
      </div>
      
	  <!--third column-->
      <div class="profile">
        <img src="assets/aa.jpg" class="profile-img">
        <h3 class="user-name">AA</h3>
        <h5>Automobile Association Of Kenya</h5>
      </div>

	  <!-- fourth column-->
      <div class="profile">
        <img src="assets/ctzn.png" class="profile-img">
        <h3 class="user-name">Ecitizen</h3>
        <h5>Ecitizen, Get All The Services.</h5>   
      </div>
    </div>
	<!--end of the column sections-->
  </div>
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
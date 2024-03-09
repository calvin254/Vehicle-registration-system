<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEHICLE REGISTRATION | CONTACT US  PAGE</title>
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


 <!-- CONTACT US PAGE-->
 <div class="contactus">
         <div class="conimage">
            <h3><center>CONTACT US</center></h3>
         </div>
         <div class="secondcon">
         <div class="contactcontainer">
         <!--float the left and contains the contact us information-->
         <div class="contactinformation">
             <div class="box">
                 <div class="icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                 <div class="text">
                     <h3>Phone Number</h3>
                     <p><a href="tel: 0700 000 000"> 0700 000 000</a></p>
                 </div>
             </div>

             <div class="box">
                 <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i> </div>
                 <div class="text">
                     <h3>Email Address</h3>
                     <p><a href="mailto:info@vehicleregstration.com"> info@vehicleregistration.com</a></p>
                 </div>
             </div>

             <div class="box">
                 <div class="icon"> <i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                 <div class="text">
                     <h3>Address</h3>
                     <p>Upper Hill,<br> Nairobi, Kenya.</p>
                 </div>
             </div>
             
         </div>
             <div class="conright">
             <!--contact us form, floats to the right-->
                 <form action="mainphp/action_contact.php" method="post">
                     <div><h3><center>Drop Us A Message</center></h3></div><br>
                     <!-- php date() used to generate todays date-->
                     <?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>

                     <label for="date" class="lbltext">Date Sent</label>
                     <!--echo the todays variable from the abpve method as the value for the dates textbox-->
                         <input type="date"  class="inputc" value="<?php echo $today; ?>" name="date" placeholder="Sending Date" readonly>

                         <label for="fullname" class="lbltext" style="margin-left:55px;"> Sender's Email Address <font color=red> *</font></label>
                         <input type="email" class="inputc" name="cemail" placeholder="Email Addres">
                     <label for="fullname" class="lbltext" style="margin-left:55px;"> Full Name <font color=red> *</font></label>
                         <input type="text" class="inputc" name="name" placeholder="first name required">
                     
                     <label for="subject" class="lbltext">Subject <font color=red> *</font> </label>
                         <input type="text" class="inputc" name="subject" placeholder="first name required" >
                     
                         <label for="subject" class="lbltext">Message <font color=red> *</font> </label>
                       <textarea name="message" id="" cols="20" rows="5" placeholder="Write Your Message Here"></textarea>
                    <!--button-->
                    <button type="submit" name="contact">Send</button>
                 </form>
             </div>

         </div>
     </div>
     <!-- END OF CONTACT US  PAGE-->
     
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
  	 				<a href="#"><i class="fab fa-facebook-f" style="margin-top:10px;"></i></a>
  	 				<a href="#"><i class="fab fa-twitter" style="margin-top:10px;"></i></a>
  	 				<a href="#"><i class="fab fa-instagram" style="margin-top:10px;"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in" style="margin-top:10px;"></i></a>
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
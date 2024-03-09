<?php
//Start of session, the session will include all the created sessions
session_start();
//session destro will empty all the session variables.
session_destroy();
//display message after successful logout
echo "<script>alert('You Are logged Out Of Your Account')</script>";
//redirect the user to login page.
echo "<script>window.open('../userlogin.php','_self')</script>";
?>
<?php 
include '../common/config.php';
include 'admin_functions.php';

sec_session_start(); // Our custom secure way of starting a php session. 

if(isset($_POST['username'], $_POST['p'])) { 
   $username = $_POST['username'];
   $password = $_POST['p']; // The hashed password.   
   echo '<script type="text/javascript">console.log("__'. $username .'");</script>';
   if(login($username, $password, $db_con) == true) {
      // Login success
		echo 'Success: You have been logged in!';
   } else {
      // Login failed
		header('Location: ./login.php?error=1');	 
   }
} else { 
   // The correct POST variables were not sent to this page.
   echo 'Invalid Request';
}


?>
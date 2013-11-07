<html>
<script type="text/javascript" src="sha512.js"></script>
<script type="text/javascript" src="forms.js"></script>

<?php 
	include '../common/header.php';
	include '../common/config.php';
	include 'admin_functions.php';
 ?>

<body>

<?php

$username = $_POST['username'];
// The hashed password from the form
$password = $_POST['p']; 
// Create a random salt
$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
// Create salted password (Careful not to over season)
$password = hash('sha512', $password.$random_salt); 
// Add your insert to database script here. 
// Make sure you use prepared statements!
if ($insert_stmt = $db_con->prepare("INSERT INTO members (USER_NAME,  PASSWORD,  DATE_CREATED,  STATUS,  DELETE_FLAG,  SALT) VALUES (?, ?, CURDATE(), TRUE, FALSE, ?)")) {    
   $insert_stmt->bind_param('sss',$username, $password, $random_salt); 
   // Execute the prepared query.   
   $insert_stmt->execute();
   
	if (mysqli_stmt_affected_rows($insert_stmt)==1) {
		echo 'Thank you for your submission.';	
	} else {
		echo $db_con->error;	
	}
	mysqli_stmt_close($insert_stmt);
	mysqli_close($db_con);  
}
?>
</body>
</html>
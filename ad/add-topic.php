<html>

<?php include_once('../common/header.php') ?>
<?php include_once('../common/config.php') ?>
<?php include_once('admin_functions.php') ?>

<body>

<?php 

// Include database connection and functions here.
sec_session_start();
if(login_check($db_con) == true) {
?> 
<form action="insert-topic.php" method="POST">
	<div>
		<?php include_once('../common/config.php') ?>
		<div class="row" style="padding:7">
		<!-- Title -->
			<div class="col-md-1 col-md-offset-1">Topic title:</div>
			<div class="col-md-1"><input type="text" name="itopicTitle"></div>
		</div>
		
		<div class="row" style="padding:7">
			<!-- Topic type -->
			<div class="col-md-1 col-md-offset-1">Topic type:</div>
			<div class="col-md-1">
				<select name="iTopicType">
					<?php 
						 $result = mysqli_query($db_con,"SELECT * FROM TOPIC_TYPE");
						while($row = mysqli_fetch_array($result))
						  {
							echo '<option value='.$row['TOPIC_TYPE_ID'].'>'.$row['TOPIC_DISPLAY_NAME'].'</option>';  
						  }
					?>
				</select>
			</div>
		</div>
		<div class="row" style="padding:7">
			<div class="col-md-1 col-md-offset-1">Short description:</div>
			<div class="col-md-1"><input type="text" name="iSortDesc"></div>
		</div>
		
		<div class="row" style="padding:7">
			<!-- Description -->
			<div class="col-md-1 col-md-offset-1">Description:</div>
			<div class="col-md-1"><textarea name="iDescription" rows="5" cols="43"></textarea></div>
		</div>	
		<div class="row" style="padding:7">
			<div class="col-md-1 col-md-offset-4">
				<input type="submit">	
			</div>
		</div>
		

	</div>
</form>
<?php
 mysqli_close($db_con);
?>

<?php 
} else {
?>
	<div class="row" style="padding:20px">
		<div class="col-md-6 col-md-offset-3"><h4>You are not authorized to access this page, please login.</h4></div>
	</div>   
<?php
}
?>

</body>
</html>
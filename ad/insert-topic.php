<html>

<?php include_once('../common/header.php') ?>


<body>

<form action="" method="POST">
	<div>
		<?php include_once('../common/config.php') ?>
		
		<?php 
			$itopicTitle = $_POST['itopicTitle'];
			$iTopicType = $_POST['iTopicType'];
			$iSortDesc = $_POST['iSortDesc'];
			$iDescription = $_POST['iDescription'];
			
			$insertStatement = "INSERT INTO CONTENT_TOPIC (TITLE,SHORT_DESC,LONG_DESC,TOPIC_TYPE_ID) 
				VALUES ('$itopicTitle','$iSortDesc','$iDescription','$iTopicType') ";
			
			if (!mysqli_query($db_con,$insertStatement)){
				die('Error inserting data: ' . mysqli_error($db_con));
			} else {
				echo 'One row added! ';
			}
			
			$result = mysqli_query($db_con,"SELECT * FROM CONTENT_TOPIC");
			while($row = mysqli_fetch_array($result))
			  {
			  echo $row['TITLE'] . " " . $row['LONG_DESC'];
			  echo "<br>";
			  }
		?>
	</div>
</form>
<?php
 mysqli_close($db_con);
?>
</body>
</html>
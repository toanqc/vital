<html>
<script type="text/javascript" src="sha512.js"></script>
<script type="text/javascript" src="forms.js"></script>

<?php include_once('../common/header.php') ?>

<body>

<?php
if(isset($_GET['error'])) { 
   echo 'Error Logging In!';
}
?>
<form action="process_login.php" method="post" name="login_form">
	<div class="container">
		<div class="row">
			<div class="header-logo">
				<img alt="" src="../images/vital_connections.png" />
			</div>
		</div>

		<div style="margin:30px">

		<div class="row" style="padding:7px">
			<div class="col-md-2 col-md-offset-1">
				User name:
			</div>
			<div class="col-md-1">
				<input type="text" name="username" />
			</div>
		</div>
		<div class="row" style="padding:7px">
			<div class="col-md-2 col-md-offset-1">
				Password:
			</div>
			<div class="col-md-1">
				<input type="password" name="password" id="password"/><br />
			</div>
		</div>
		<div class="row" >
			<div class="col-md-1 col-md-offset-3">
				<input type="button" value="Login" onclick="formhash(this.form, this.form.password);" />
			</div>		
		</div>		
	</div>
</form>

</body>
</html>
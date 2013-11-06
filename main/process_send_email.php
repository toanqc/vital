<!DOCTYPE html>
<html lang="en">
<head>

<?php include_once('../common/header.php') ?>

<title>Vital Connections</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="header-logo">
				<img alt="" src="../images/vital_connections.png" />
			</div>
			<div class="pull-right">
				<img alt="" src="../images/banner.png" />
			</div>
		</div>

		<div class="row margin-top-5"></div>

		<div class="row text-center contact-background-top-picture">
			<div class="contact-top-picture">
				<img alt="" src="../images/contact_center_picture.png">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-5 font-size-25 blue-color contact-page-title">CONTACT</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row break-line-title"></div>
						<div class="row vital-navbar">
							<div class="col-md-3 nav-title">
								<a href="about.php">ABOUT US</a>
							</div>
							<div class="col-md-4 nav-title">
								<a href="services.php">OUR SERVICES</a>
							</div>
							<div class="col-md-2 nav-title">
								<a href="client.php">CLIENTS</a>
							</div>
							<div class="col-md-3 nav-title text-right">
								<a class="active" href="contact.php">CONTACT</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="margin-20"></div>

	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="row contact-content-title">
					<img alt="" src="../images/vital_connections.png" />
				</div>
				<div class="row">
					<div class="vital-connections-information">
						<div class="information-header">CTY TNHH Kết Nối V.I.T.A.L</div>
						<div class="information-content">Vital Connections Co., LTD.</div>
						<div class="information-content">AA2-3 Mỹ Khang, Phú Mỹ Hưng, Quận 7, TP. HCM</div>
						<div class="information-content">Tel: 5310 0803 - Fax: 5410 2125</div>
					</div>
				</div>

				<?php 
					/**
					// TODO: handle fields' validation
					if (isset($_POST['email']) && !empty($_POST['customerEmail'])){
						
					} else {
						header('Location: ./contact.php?invalid_email=1');
					}	**/				
					include_once('../common/email_functions.php');
				?>			
				
				<div class="row">
					<div class="vital-connections-information">						
						<div class="information-content">
							<?php 
								//echo $_POST['customerName']." ".$_POST['customerCompany']." ".$_POST['customerEmail']." ".$_POST['customerPhoneNo']." ".$_POST['customerQuestions'];
								$to = 'luan.1020902@gmail.com';
								$from = $_POST['customerEmail'];
								$message = $_POST['customerQuestions'];
								$subject = "This is a subject";
								if (isset($from))
								{
									// if "email" is filled out, proceed
									// check if the email address is invalid
									$mailcheck = spamcheck($from);
									if ($mailcheck==FALSE)
									{
										header('Location: ./contact.php?invalid_email=1');
									}
									else
									{// send email
										sendEmail($from,$to,$subject,$message);
									}
								}
								else
								{
									// if "email" is not filled out, display the form
									header('Location: ./contact.php?invalid_email=1');
								}								
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>

		<!-- FOOTER -->
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="row vital-navbar">
					<div class="col-md-10 col-md-offset-1 text-center nav-bottom">
						<div class="nav-bottom-title">
							<a href="about.php">ABOUT US</a>
						</div>
						<div class="nav-bottom-title">
							<a href="services.php">OUR SERVICES</a>
						</div>
						<div class="nav-bottom-title">
							<a href="client.php">CLIENTS</a>
						</div>
						<div class="nav-bottom-title">
							<a class="active" href="contact.php">CONTACT</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="break-line-nav-bottom"></div>
				</div>
				<div class="row contact-bottom">
					<div class="text-center">Contact</div>
				</div>
				<div class="row hotline-bottom">
					<div class="text-center blue-color">Hotline: 0908 283 918 - 0903 199 200</div>
				</div>
				<div class="row copyright">
					<div class="text-center">Copyright 2013</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		<!-- END FOOTER -->
	</div>
</body>
</html>

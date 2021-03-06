<!DOCTYPE html>
<html lang="en">
<head>

<?php include_once('../common/header.php') ?>

<script src="../js/validation.js"></script>

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
						<div class="information-content">Tel: +84 8 5410 0803 - Fax: +84 8 5410 2124</div>
					</div>
				</div>

				<div class="row">
					<?php
						if (isset($_GET['success']) && $_GET['success'] == true) {
					?>
							<div class="success">Message has been sent. Thank you for contact us!!!</div>
					<?php
							
						}
					?>
				</div>
			
				<form action="process_send_email.php" method="post" onsubmit="return validation(this);">
					<div class="contact-form">
						<div class="contact-line">
							<div class="col-md-2 ">Name*</div>
							<div class="col-md-10">
								<input type="text" name="customerName" size="80" />
							</div>
						</div>
						<div class="contact-line">
							<div class="col-md-2 ">Company*</div>
							<div class="col-md-10 ">
								<input type="text" name="customerCompany" size="80" />
							</div>
						</div>
						<div class="contact-line">
							<div class="col-md-2 ">Email*</div>
							<div class="col-md-10 ">
								<input type="text" name="customerEmail" size="80" /><?php if(isset($_GET['invalid_email'])) { echo ' Invalid email!';} ?>
							</div>
						</div>
						<div class="contact-line">
							<div class="col-md-2 ">Tel*</div>
							<div class="col-md-10 ">
								<input type="text" name="customerPhoneNo" size="80" />
							</div>
						</div>
						<div class="contact-line">
							<div class="col-md-2 ">Text*</div>
							<div class="col-md-10 ">
								<textarea name="customerQuestions" rows="7" cols="82"></textarea>
							</div>
						</div>
						<div class="contact-line">
							<div class="col-md-2 "></div>
							<div class="col-md-9 text-right button-send">
								<button class="btn btn-xs">Send</button>
							</div>
						</div>
					</div>
				</form>
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
					<div class="text-center blue-color">Hotline: +84 908 283 918 - +84 903 199 200</div>
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

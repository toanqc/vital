<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once('../common/header.php') ?>
</head>

<?php include_once('../common/config.php') ?>

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

		<div class="row text-center services-background-top-picture">
			<div class="services-top-picture">
				<img alt="" src="../images/service_main_picture.png" width="100%" />
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 col-md-offset-5 font-size-25 blue-color services-page-title">OUR
				SERVICES</div>
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
								<a class="active" href="services.php">OUR SERVICES</a>
							</div>
							<div class="col-md-2 nav-title">
								<a href="client.php">CLIENTS</a>
							</div>
							<div class="col-md-3 nav-title text-right">
								<a href="contact.php">CONTACT</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="margin-20"></div>	
	<div class="container background-grey">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 services">
			<?php 
				$result = mysqli_query($db_con,"SELECT ct.`TITLE`, ct.`LONG_DESC`, ts.`HEADER_CSS_CLASS`, ts.`BODY_CSS_CLASS` FROM content_topic ct LEFT JOIN topic_style_link tsl ON ct.`CONTENT_TOPIC_ID` = tsl.`CONTENT_TOPIC_ID` LEFT JOIN topic_style ts ON tsl.`STYLE_ID` = ts.`STYLE_ID`");
				while($row = mysqli_fetch_array($result))
				{
			?>
				<ul class="<?php echo $row['HEADER_CSS_CLASS']; ?>">
					<li>
						<div class="service-header"><?php echo $row['TITLE']; ?></div>
						<div class="<?php echo $row['BODY_CSS_CLASS']; ?>"><?php echo $row['LONG_DESC']; ?></div>
					</li>
				</ul>				
			<?php
				  //echo $row['TITLE'] . " " . $row['LONG_DESC'];
				  //echo "<br>";
				}
			?>				
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
							<a class="active" href="services.php">OUR SERVICES</a>
						</div>
						<div class="nav-bottom-title">
							<a href="client.php">CLIENTS</a>
						</div>
						<div class="nav-bottom-title">
							<a href="contact.php">CONTACT</a>
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

<?php
	require("class.phpmailer.php");
	require("class.smtp.php");

	// Get data that send from contact page
	$name = $_POST['customerName'];
	$company = $_POST['customerCompany'];
	$email = $_POST['customerEmail'];
	$tel = $_POST['customerPhoneNo'];
	$text = $_POST['customerQuestions'];

	$message = "Customer Name: " . $name . "\n";
	$message .= "Customer Company: " . $company . "\n";
	$message .= "Customer Email: " . $email . "\n";
	$message .= "Customer Tel: " . $tel . "\n";
	$message .= "\n\n";
	$message .= $text;

	$mail = new PHPMailer();
	$mail->IsSMTP();  // telling the class to use SMTP
    $mail->Mailer = "smtp";
    $mail->Host = "vitalconnections.com.vn";
    $mail->Port = 25;
    $mail->SMTPDebug = 1;
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "contact@vitalconnections.com.vn"; // SMTP username
    $mail->Password = "vital"; // SMTP password
    $mail->From     = $email;
    $mail->AddAddress("contact@vitalconnections.com.vn");   
    $mail->Subject  = "Customer contact from website. Name: " . $name;
    $mail->IsHTML(false);
    $mail->Body     = $message;
    $mail->WordWrap = 50;

    if(!$mail->Send()) {
         echo 'Message was not sent.';
         echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
         header('location: contact.php?success=true');
    }
?>
<?php
	include('class.phpmailer.php');

	// Get data that send from contact page
	$name = $_POST['customerName'];
	$company = $_POST['customerCompany'];
	$email = $_POST['customerEmail'];
	$tel = $_POST['customerPhoneNo'];
	$text = $_POST['customerQuestions'];

	$message = "Customer Name: " . $name + "\n";
	$message += "Customer Company: " . $company + "\n";
	$message += "Customer Email: " . $email + "\n";
	$message += "Customer Tel: " . $tel + "\n";
	$message += "\n\n\n";
	$message += $text; 

	$mail = new PHPMailer();
	$mail->IsSMTP();  // telling the class to use SMTP
    $mail->IsSMTP();  // telling the class to use SMTP
    $mail->Mailer = "smtp";
    $mail->Host = "mail.vitalconnections.com.vn";
    $mail->Port = 25;
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "uy@vitalconnections.com.vn"; // SMTP username
    $mail->Password = ""; // SMTP password
    $mail->From     = $email;
    /*$mail->AddAddress("sales@gmail.com");*/   
    $mail->Subject  = "Customer contact from website. Name: " . $name;
    $mail->Body     = $message;
    $mail->WordWrap = 50;

    if(!$mail->Send()) {
         echo 'Message was not sent.';
         echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
         echo "<script language='javascript'>document.location.href='lib/alert.php?mess=Message has been sent...&gourl=/?module=home'</script>";
         header('location: main/contact.php');
    }
?>
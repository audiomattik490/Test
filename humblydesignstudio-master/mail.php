<?php
	$to = "hello@humblydesign.com";
	$name = filter_var($_POST["contact-name"], FILTER_SANITIZE_STRING);
	$message = filter_var($_POST["contact-message"], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST["contact-email"], FILTER_SANITIZE_EMAIL);

	$body  =  $message;
	$subject = $name . " [Potential Client Inquiry]";

	$headers = "From: " . $email;

	$mail_status = mail($to, $subject, $body, $headers);

	if ($mail_status) {
		echo "successn";
	} else {
		echo "fail";
	}
?>

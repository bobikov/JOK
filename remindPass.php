<?php 
$email = $_POST['email'];
$subject = "Password Recover";
$message = "OK";
$headers = 'From: kostyabobikov@gmail.com' . "\r\n" .
    'To:'. $email .' '. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($email, $subject, $message, $headers);
	echo "<i class='fa fa-medkit fa-2x'></i> The message with password recover is sended to <span class='noty_mailadress_wrapper'>" . $email . "</span>. Check your email.";

 ?>
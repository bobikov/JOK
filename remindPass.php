<?php 
$email = $_POST['email'];
$subject = "Password Recover";
$message = "Test";
$headers = "Content-type: text/html; charset=windows-1251 \r\n";
$headers .= 'From: kostyabobikov@gmail.com' . "\r\n";
$headers .= 'To:'. $email .' '. "\r\n";


require_once 'Zend/Mail.php';
require_once 'Zend/Mail/Transport/Smtp.php';

$smtpServer = 'smtp.gmail.com';
$username = "jodywisternofff@gmail.com";
$password = "Immortal1988";

$config = array('ssl' => 'tls',
'port' => '587',
'auth' => 'login',
'username' => $username,
'password' => $password);

$transport = new Zend_Mail_Transport_Smtp($smtpServer, $config);

$mail = new Zend_Mail();

$mail->setFrom('superuserphp@phpuser.com', 'Admin of Chat room in Novouralsk');
$mail->addTo($email,'Some Recipient');
$mail->setSubject('Password recovering');
$mail->setBodyText('Go to this link to confirm its your accaunt.');
if ($mail){
	$mail->send($transport);
	echo "<i class='fa fa-medkit'></i> The message with password recover has been sent to <span class='noty_mailadress_wrapper'>" . $email . "</span>";
}
else{
	echo "something wrong";
}


 ?>


<?php

session_start();
require ('../config.php');
$from = $_POST["from"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$message = "Message from $from ($email):\n\n" . $message;
$location = "Location: https://oastem.org/contact/";

// captcha verification
$ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, array(
    'secret' => $recapchaSecret,
    'response' => $_POST['g-recaptcha-response'],
    'remoteip' => $_SERVER['REMOTE_ADDR']
)); 

$cr = curl_exec($ch);
curl_close($ch);

$crd = json_decode($cr);

if ($crd === null || !$crd->success) {
	header($location);
//    $_SESSION['flash'] = "A verification error occured";
} else { 
    mail ("kevin@oastem.org", $subject, $message);
//    $_SESSION['flash'] = "Sent!";
    header($location);
}

?>
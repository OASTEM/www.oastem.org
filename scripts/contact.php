<?php

session_start();
require ('../config.php');

$addr_remote = $_SERVER['REMOTE_ADDR'];
$addr_fwd = $_SERVER['HTTP-X-FORWARDED-FOR'];

$remote = "";

if($addr_remote != $addr_fwd) $remote = "[$addr_remote] $addr_fwd";
else $remote = $addr_remote;

$from = $_POST["from"];
$email = $_POST["email"];
$message = $_POST["message"];
$subject = "Message from $from ($email) $remote";

$add_headers = "From: web-form@oastem.org";
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
    mail ("brandon@oastem.org", $subject, $message, $add_headers);
//    $_SESSION['flash'] = "Sent!";
    header($location);
}

?>
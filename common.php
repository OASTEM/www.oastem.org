<?php
session_start();

require($_SERVER['DOCUMENT_ROOT'] . '/config.php');
require($rtdir.'include/template.php');

$templ = Template::getInstance();

function setFlash($severity, $str) {
	$_SESSION['flashtype'] = $severity;
	$_SESSION['flash'] = $str;
}
function hasFlash() {
	return isset($_SESSION['flash']);
}
function getFlashType() {
	$type = $_SESSION['flashtype'];
	unset($_SESSION['flashtype']);
	return $type;
}
function getFlash() {
	$msg = $_SESSION['flash'];
	unset($_SESSION['flash']);
	return $msg;
}
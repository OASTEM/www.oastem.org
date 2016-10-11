<?php
session_start();

require($_SERVER['DOCUMENT_ROOT'] . '/config.php');
require($rtexact.'include/template.php');

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

function delete_all_between($beginning, $end, $string) {
  $beginningPos = strpos($string, $beginning);
  $endPos = strpos($string, $end);
  if ($beginningPos === false || $endPos === false) {
      return $string;
  }

  $textToDelete = substr($string, $beginningPos, ($endPos + strlen($end)));

  return str_replace($textToDelete, '', $string);
}

function str_limit($value, $limit = 35, $end = '...'){
    $limit = $limit - strlen($end);
    
    $valuelen = strlen($value);
    
    return $limit < $valuelen ? substr($value, 0, strrpos($value, ' ', $limit - $valuelen)) . $end : $value;
}
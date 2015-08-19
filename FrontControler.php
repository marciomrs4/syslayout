<?php
require_once 'app/configGlobal.php';

$modulo = filter_input(INPUT_GET,'urlModulo');

$action = filter_input(INPUT_GET,'urlAction');

$value = filter_input(INPUT_GET,'urlValue');

$_SESSION['modulo'] = $modulo;

$_SESSION['action'] = $action;

$_SESSION['value/'.$modulo.'/'.$action] = $value;

$_SESSION['moduloTemp'] = $modulo;
$_SESSION['actionTemp'] = $action;
$_SESSION['valueTemp'] = $_SESSION['value/'.$modulo.'/'.$action];

header('location: ' . $_SERVER['HTTP_REFERER']);
?>
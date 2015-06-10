<?php
require_once 'autoload.php';

$modulo = filter_input(INPUT_GET,'urlModulo');

$action = filter_input(INPUT_GET,'urlAction');

$value = filter_input(INPUT_GET,'urlValue');



$_SESSION['path'] = $configGlobal['path'];

$_SESSION['modulo']= $modulo;

$_SESSION['action'] = $action;

$_SESSION['value'] = $value;

$_SESSION[$modulo.'/'.$action] = $value;

$_SESSION['moduloTemp'] = $modulo;
$_SESSION['actionTemp'] = $action;
$_SESSION['valueTemp'] = $value;

header('location: '.$_SERVER['HTTP_REFERER']);


?>
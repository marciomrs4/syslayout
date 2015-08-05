<?php
//Include do config do modulo
include_once 'config.php';



$file = new demo\app\AcceptFormDemoUsuario();


$container = new \container\Container();

$data = $container->get('UserRepository')->selectStmt();

print_r($data);

//print_r($_SESSION);










//Inclusao do footer
footer();
?>
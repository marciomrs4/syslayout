<?php
//Include do config do modulo
include_once 'config.php';

$Repository = new \demo\repository\UsuarioRepository();

$grid = new \Mrs\core\Grid();

$ButtonOption = new \Mrs\core\GridOption('');

$lista = new demo\repository\UsuarioRepository;

print_r($_SESSION);

$ButtonOption->setIco('search')
             ->setName('Procurar')
             ->setNameButton('Thais')
             ->setUrl('formUsuario.php?valor=');

$BotaoEditar = new \Mrs\core\GridOption();
$BotaoEditar->setIco('edit')->setName('Editar');

$grid->setCabecalho(['#','Nome','Email','CPF'])
     ->setDados($Repository->select())
     ->addOption($ButtonOption)->addOption($BotaoEditar);


$Painel = new \Mrs\core\Painel();
$Painel->addGrid($grid)->setPainelTitle('Lista de Usuario')
       ->setPainelColor('default')
       ->show(!isset($_SESSION['action']));



footer($configGlobal);
?>
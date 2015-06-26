<?php
//Include do config do modulo
include_once 'config.php';

$Repository = new \demo\repository\UsuarioRepository();

$grid = new \Mrs\core\Grid();

$ButtonOption = new \Mrs\core\GridOption();

$lista = new demo\repository\UsuarioRepository;


$ButtonOption->setIco('search')->setName('Procurar')->setNameButton('#');

$grid->setCabecalho(['#','Nome','Email','CPF'])
     ->setDados($Repository->select())
     ->addOption($ButtonOption);


$Painel = new \Mrs\core\Painel();
$Painel->addGrid($grid)->setPainelTitle('Lista de Usuario')
       ->setPainelColor('default')
       ->show(!isset($_SESSION['action']));



include_once '../../layout/rodape.php';
?>
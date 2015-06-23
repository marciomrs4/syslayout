<?php
//Include do config do modulo
include_once 'config.php';



$Repository = new \demo\repository\UsuarioRepository();

$grid = new \Mrs\core\Grid();

$grid->setCabecalho(['Nome','Email','CPF'])
     ->setDados($Repository->select());


$painel = new \Mrs\core\Painel();
$painel->setPainelColor($painel::$primary);
$painel->setPainelTitle('Lista de Usuários');
$painel->addGrid($grid)
       ->show(!isset($_SESSION['action']));
















include_once '../../layout/rodape.php';
?>
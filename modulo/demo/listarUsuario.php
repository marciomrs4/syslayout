<?php
//Include do config do modulo
include_once 'config.php';




$lista = new demo\repository\UsuarioRepository;


$grid = new \Mrs\core\Grid();

$grid->setDados($lista->listarUsuarios())
     ->setCabecalho(['','Nome','Email','Ramal','Login']);



$ButtonOption = new \Mrs\core\GridOption();

$ButtonOption->setIco('search')->setName('Procurar');

$grid->addOption($ButtonOption);


$Painel = new \Mrs\core\Painel();
$Painel->addGrid($grid)->setPainelTitle('Lista de Usuario')
       ->setPainelColor('default')->show(!isset($_SESSION['action']));










include_once '../../layout/rodape.php';
?>
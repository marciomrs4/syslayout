<?php
//Include do config do modulo
include_once 'config.php';




$lista = new demo\repository\UsuarioRepository;


$grid = new \Mrs\core\Grid();

$grid->setDados($lista->listarUsuarios())
     ->setCabecalho(['Nome','Email','Ramal','Login'])
     ->show();















include_once '../../layout/rodape.php';
?>
<?php
//Include do config do modulo
include_once 'config.php';

$url = \Mrs\core\ActionController::actionUrl()->setProjectPath($configGlobal['path'])
                ->setModulo($config['moduloName'])
                ->setAction('alterar/usuario')
                ->setValue()
                ->getUrl();

$ButtonOption = new \Mrs\core\GridOption('');
$ButtonOption->setIco('search')
             ->setName('Procurar')
             ->setNameButton('Thais')
             ->setUrl($url);

$BotaoEditar = new \Mrs\core\GridOption('');
$BotaoEditar->setIco('edit')
            ->setName('Editar')
            ->setUrl($url);


$Repository = new app\demo\repository\UsuarioRepository();

$grid = new \Mrs\core\Grid();

$grid->setCabecalho(['#','Nome','Email','CPF'])
     ->setDados($Repository->select())
     ->addOption($ButtonOption)->addOption($BotaoEditar);


$Painel = new \Mrs\core\Painel();
$Painel->addGrid($grid)->setPainelTitle('Lista de Usuario')
       ->setPainelColor('default')
       ->show(!isset($_SESSION['action']));



footer($configGlobal);
?>
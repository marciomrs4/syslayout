<?php
//Inicia a sessao
session_start();
//Setando o time da aplicacao
date_default_timezone_set('America/Sao_Paulo');


$configGlobal = array();
//Nome do projeto, fica no topo lado esquerdo
$configGlobal['projectName'] = 'Layout';
//Nome do sistema que fica no topo ao lado direito do menu principal
$configGlobal['systemName'] = '..:: Outra coisa::..';
//Nome visivel no rodapé
$configGlobal['tituloRodape'] = '..:: New Layout ::..';

//Opcoes no menu principal
$configGlobal['demo'] = 'Demo';

$configGlobal['usuario'] = 'Usuário';

$configGlobal['administracao'] = 'Administracao';


/* Usado para indicar a pasta raiz do projeto*/
$configGlobal['path'] = 'layout';

//autoload global da aplicacao
include_once __DIR__.'/../vendor/autoload.php';

//Function do topo
function topo($config){
    include_once '../../../app/layout/topo.php';
}

//Menu principal
function menu($configGlobal){
    include_once '../../../app/layout/menuprincipal.php';
}

//Function do footer
function footer($configGlobal) {
    include_once '../../../app/layout/rodape.php';
}

?>
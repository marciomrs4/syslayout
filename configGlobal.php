<?php
session_start();

date_default_timezone_set('America/Sao_Paulo');


$configGlobal = array();

$configGlobal['projectName'] = 'Layout';

$configGlobal['systemName'] = '..:: Outra coisa::..';

$configGlobal['comercial'] = 'Comercial';

$configGlobal['administracao'] = 'Administracao';

$configGlobal['tituloRodape'] = '..:: New Layout ::..';

/* Usado para indicar a pasta raiz do projeto*/
$configGlobal['path'] = 'layout';

include_once 'vendor/autoload.php';

?>
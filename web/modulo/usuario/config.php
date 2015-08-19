<?php
include_once '../../../app/configGlobal.php';

//

$config = array();
//Variaveis do deste modulo
$config['moduloName'] = 'Usuario';


//Inclusao do Topo
topo($config);
//Inclusao do menu principal
menu($configGlobal);

//Inclusao do Menu do modulo
include_once 'ModuloUsuario.php';
?>
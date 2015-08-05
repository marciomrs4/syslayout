<?php
include_once '../../../app/configGlobal.php';

//

$config = array();
//Variaveis do deste modulo
$config['moduloName'] = 'Demo';


//Inclusao do Topo
topo();

//Inclusao do menu principal
menu($configGlobal);

//Inclusao do Menu do modulo
include_once 'ModuloDemo.php';
?>
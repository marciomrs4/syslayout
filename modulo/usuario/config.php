<?php
include_once '../../configGlobal.php';

//

$config = array();
//Variaveis do deste modulo
$config['moduloName'] = 'Usuario';


//Inclusao do Topo
include_once '../../layout/topo.php';
//Inclusao do menu principal
include_once '../../layout/menuprincipal.php';

//Inclusao do Menu do modulo
include_once 'ModuloUsuario.php';
?>
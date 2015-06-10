<?php
include_once 'config.php';

include '../../layout/topo.php';
include '../../layout/menuprincipal.php';


include '../../modulo/comercial/ModuloComercial.php';

print_r($_SESSION);

use Mrs\core\FormController;
$controler = new FormController();

$controler->setForm()->getForm();


include '../../layout/rodape.php';
?>
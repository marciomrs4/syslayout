<?php
include_once '../../autoload.php';
include_once 'config.php';

include '../../layout/topo.php';
include '../../layout/menuprincipal.php';


include '../../modulo/comercial/ModuloComercial.php';

use system\app\Form;
use system\core\Painel;

$form = new Form();
$form->setForm();

$painel = new Painel();

$painel->addGrid($form)
	   ->setPainelTitle('Painel de Formulario')
	   ->show();


include '../../layout/rodape.php';
?>
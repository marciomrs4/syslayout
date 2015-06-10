<?php
use system\core\Painel;
use system\app\GraficoPainel;
use system\core\FormController;
use system\app\Form;
require_once '../../autoload.php';
include_once 'config.php';

include '../../layout/topo.php';
include '../../layout/menuprincipal.php';

include '../../modulo/administracao/ModuloAdministracao.php';

$painel = new Painel();

$grid = new GraficoPainel();
$grid->setForm('graficos/GraficoClientes');

$grid2 = new GraficoPainel();
$grid2->setForm('graficos/GraficoClientesBarra');


$painel->addGrid($grid2)
		->setPainelColor('primary')
		->setPainelTitle('Grafico de Clientes Barra')
	    ->show(!isset($_SESSION['action']) ? true : false);

$painel2 = clone $painel;


$painel2->addGrid($grid)
->setPainelColor('primary')
->setPainelTitle('Grafico de Clientes')
->show(!isset($_SESSION['action']) ? true : false);


$form = new Form();
$form->setForm();
$OutroPainel = new Painel();
$OutroPainel->addGrid($form)
			->setPainelColor('Novo')
			->show();

include '../../layout/rodape.php';
?>
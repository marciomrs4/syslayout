<?php
include_once '../../configGlobal.php';
include_once '../../vendor/autoload.php';

/* 
$dados = [
			['marcio','33','marcio@mrs.com'],
			['wellington','24','w@w.com']
		];


$Grid = new Mrs\core\Grid();

$Grid->setDados($dados)->setCabecalho(array('Nome','Idade','Email'));
$Grid->addFunctionColumn(function($var){
	return "<a href='mailto:'.{$var}.'>{$var}</a>";
}, 2);

/* $button = new Mrs\core\GridOption();
$button->setIco('search')
	   ->setName('Pesquisar')
	   ->createOption(10);

$Grid->addOption($button); 

$Grid->show(); */
use Mrs\core\FormController;
$Form = new FormController();
$Form->setForm('../../modulo/demo/forms/login')->getForm();

?>
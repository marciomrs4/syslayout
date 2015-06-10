<?php
require_once '../../../autoload.php';


use Mrs\app\AcceptForm as Form;
use Mrs\core\FormController;



try {

	$form = new Form();
	
	$form->setPost($_POST)->cadastrarComercial();
	
	$form->clearPost()->router();
	
} catch (Exception $e) {
	
	$_SESSION['erro'] = $e->getMessage();

if(method_exists($e,'getMainMessage')){
	$_SESSION['erro'] =	$e->getMainMessage();
	
	$_SESSION['erros'] = $e->findMessages(array(
			'string' => 'Este campo deve conter um Texto {{input}}',
			'email'  => 'O valor {{name}} n�o � um email valido',
			'notEmpty' => 'O valor {{input}} n�o pode ser vazio',
			'alnum' => 'o valor {{input}} tem ser alfanumerico'
	));

}



$form = new FormController();
$form->setModulo($_SESSION['moduloTemp'])
	 ->setAction($_SESSION['actionTemp'])
	 ->setValue($_SESSION['valueTemp']);

#header('location: ../index.php');





}
<?php
require_once '../../../autoload.php';

use system\app\AcceptForm;
use system\core\FormController;

try {
	
    $get = new AcceptForm();
    
    $get->setpost($_POST)
        ->alterarDoca()
        ->clearPost('Alterado Com sucesso');
    
} catch (Exception $e) {
    
	$form = new FormController();
	$form->setModulo($_SESSION['moduloTemp'])
	->setAction($_SESSION['actionTemp'])
	->setValue($_SESSION['valueTemp']);

	$_SESSION['erro'] = $e->getMessage();
	
    if(method_exists($e,'getMainMessage')){
        $_SESSION['erro'] = $e->getMainMessage();        
    }
	
    if(method_exists($e,'findMessages')){
    	$_SESSION['erros'] = $e->findMessages(
    	array(
    		'string' => 'O valor {{name}} � obrigatorio',
    		'notEmpty' => 'O valor {{name}} n�o � valido',
    		'email' => 'O valor {{name}} deve ser um e-mail v�lido'
    	)
    	);
    }
}


header('location: '.$_SERVER['HTTP_REFERER']);
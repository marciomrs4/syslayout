<?php

include_once '../../../configGlobal.php';

require_once '../../../vendor/autoload.php';


//$post = new \De\app\AcceptFormDemoUsuario();

$post = new \Mrs\app\AcceptFormDemoUsuario();

try{

    $post->setPost($_POST)
         ->acceptForm();

    $post->clearPost();

}catch (\Exception $e){

//    throw new \Exception();

    $_SESSION['erro'] = $e->getMessage();

    if(method_exists($e,'getMainMessage')){
        $_SESSION['erro'] =	$e->getMainMessage();

        $_SESSION['erros'] = $e->findMessages(array(
            'string' => 'Este campo deve conter um Texto {{name}}',
            'email'  => 'O valor {{input}} não é um email valido',
            'notEmpty' => 'O valor {{input}} não é valido para o campo {{name}} pode ser vazio',
            'alnum' => 'o valor {{name}} tem ser alfanumerico'
        ));

    }

    $form = new \Mrs\core\FormController();
    $form->setModulo($_SESSION['moduloTemp'])
         ->setAction($_SESSION['actionTemp'])
         ->setValue($_SESSION['valueTemp']);

    header('location: '.$_SERVER['HTTP_REFERER']);

}



?>
<?php

require_once '../../../../app/configGlobal.php';

//$post = new \Mrs\core\PostController();

$post = new app\demo\app\AcceptFormDemoUsuario();

try{

    //sleep(2);

    $post->setPost($_POST)
         ->acceptForm();


    //header('Content-Type: application/json');
    echo json_encode($post->returnArray());

   // $post->clearPost('Cadastrado com sucesso !','../listarUsuario.php');

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

    print_r($_SESSION['erro'],$_SESSION['erros']);

/*    $form = new \Mrs\core\FormController();
    $form->setModulo($_SESSION['moduloTemp'])
         ->setAction($_SESSION['actionTemp'])
         ->setValue($_SESSION['valueTemp']);*/

    //header('location: '.$_SERVER['HTTP_REFERER']);

}



?>
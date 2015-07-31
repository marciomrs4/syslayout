<?php
//Include do config do modulo
include_once 'config.php';

$user_id = filter_input('FILTER_GET','valor');

echo $user_id;

if($user_id) {

    include_once 'forms/cadastrar/usuario.php';

}else{

    include_once 'forms/alterar/usuario.php';

}


include_once '../../../layout/rodape.php';
?>
<?php

namespace demo\app;

use Mrs\core\IAccepForm;
use Mrs\core\PostController;


class AcceptFormDemoUsuario extends PostController implements IAccepForm
{

    public function acceptForm()
    {
        if($this->post['departamento'] == 'N') {

            throw new  \Exception('Deu erro aqui manolo ' . $this->listarpost());
        }

<<<<<<< HEAD:vendor/Mrs/app/AcceptFormDemoUsuario.php
        //throw new  \Exception("Deu erro aqui manolo ".$this->listarpost());
=======
>>>>>>> d9d745465faf5aae6bbce7e759c711c1b8682541:modulo/demo/app/AcceptFormDemoUsuario.php
    }

}
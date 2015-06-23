<?php

namespace demo\app;

use Mrs\core\IAccepForm;
use Mrs\core\PostController;


class AcceptFormDemoUsuario extends PostController implements IAccepForm
{

    public function acceptForm()
    {

        throw new  \Exception("Deu erro aqui manolo ".$this->listarpost());
    }

}
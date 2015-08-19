<?php

namespace app\demo\app;

use Mrs\core\IAccepForm;
use Mrs\core\PostController;


class AcceptFormDemoUsuario extends PostController implements IAccepForm
{

    public function acceptForm()
    {
        $this->post['senha'] = sha1($this->post['senha']);

        $this->post['repetirSenha'] = sha1($this->post['repetirSenha']);

           throw new  \Exception('Deu erro aqui manolo ' . $this->listarpost());
    }

}
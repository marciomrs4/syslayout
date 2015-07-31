<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 31/07/15
 * Time: 15:50
 */

namespace container;

class Container
{
    private $container;

    private function createContainer()
    {
        $this->container = array(
            'UserRepository' => new \demo\repository\UsuarioRepository(),
            'Box' => new \container\caixa\Box()
        );

    }

    public function get($name)
    {
        $this->createContainer();

        return $this->container[$name];
    }
}
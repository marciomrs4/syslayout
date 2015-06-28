<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 25/06/15
 * Time: 18:13
 */

namespace container\caixa;

class Box
{
    public function writer()
    {

        $data1 = new \DateTime('24-05-2014 07:00:00');
        $data2 = new \DateTime();

        return $data1->diff($data2);
    }
}
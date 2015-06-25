<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 25/06/15
 * Time: 18:06
 */

namespace services\money;

class Money
{
    private $money;

    public function setMoney($money)
    {
        $this->money = $money;
        return $this;
    }

    public function getMoney()
    {
        return $this->money;
    }
}
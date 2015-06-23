<?php

namespace Mrs\repostitory;

use Mrs\core\DataBase;

interface RepositoryInterface
{

    public function insert(array $dados);

    public function update(array $dados);

    public function delete($dados);

    public function select();

}
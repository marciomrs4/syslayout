<?php

namespace app\demo\repository;



class UsuarioRepository
{

    public function select()
    {
        return [
                ['name' => 'Márcio',
                 'email' => 'marcio@mrs.com',
                 'cpf' => '321654987'],
                ['name' => 'Thais',
                 'email' => 'thais@infotek.com',
                 'cpf' => '987654321'],
                ['name' => 'Novo Nome',
                 'email' => 'novo@infotek.com',
                 'cpf' => '65478931'],
                ['name' => 'UTF8',
                'email' => 'áóíẃéõãìàÀÒÌÙÈÈÂÔ áóíẃéõãìàÀÒÌÙÈÈÂÔ áóíẃéõ',
                'cpf' => '65478931']
               ];
    }

    //áóíẃéõãìàÀÒÌÙÈÈÂÔ áóíẃéõãìàÀÒÌÙÈÈÂÔ áóíẃéõ

    public function selectStmt()
    {

        return [
                    [1,'Departamento 1'],
                    [2,'Departamento 2'],
                    [3,'Departamento 3']
                ];
    }



}

?>


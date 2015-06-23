<?php

namespace demo\repository;

class UsuarioRepository
{

    public function listarUsuarios()
    {
        return [
            ['nome' => 'Marcio',
            'email' => 'mrs@mrs.com',
            'ramal' => '456789',
            'login' => 'marcio.santos'
            ],
            ['nome' => 'Thais',
                'email' => 'tha@tha.com',
                'ramal' => '987654',
                'login' => 'thais.lima'
            ]
        ];
    }

}


?>
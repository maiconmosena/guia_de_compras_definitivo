<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Departamento extends Entity
{
    protected $datamap = [];
    protected $atributes = [
        'id' => null,
        'nome_dep' => null,
        'descricao' => null,
    ];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
}

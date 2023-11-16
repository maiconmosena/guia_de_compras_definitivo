<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Produto extends Entity
{
    protected $datamap = [];
    protected $atributes =[
        'id' => null,
        'departamento_id' => null,
        'categoria' => null,
        'nome' => null,
        'quantidade' => null,
        'valor' => null,
        'data_validade' => null,
        'data_compra' => null,
        'descricao' => null,
    ];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
}

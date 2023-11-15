<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Compras extends Entity
{
    protected $datamap = [];
    protected $atributes = [
        'id' => null,
        'produto_id' => null,
        'quantidade' => null,
        'valor' => null,
        'saldo' => null,
        'description' => null,
        'creator' => null,
    ];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
}

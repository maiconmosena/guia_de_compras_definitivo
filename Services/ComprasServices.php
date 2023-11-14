<?php

namespace App\Services;

use App\Models\ComprasModel;

class ComprasServices {
    
    protected $comprasModel;

    public function __construct()
    {
       $this->comprasModel = new ComprasModel();
    }

    public function getCompras(){
        return $this->comprasModel->findAll();
    }

}

?>
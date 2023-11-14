<?php

namespace App\Services;

use App\Models\DepartamentoModel;

class DepartamentoServices {

    protected $departamentoModel;

    public function __construct()
    {
       $this->departamentoModel = new DepartamentoModel(); 
    }

    public function getDepartamento(){
        return $this->departamentoModel->findAll();
    }

    public function adicionarDep(){
        //if, else, return
    }

    
    // se precisar inserir um novo departamento
    // quasis metodos posso inserir aqui
    // eu poderia determinar uma referencia entre os tres
}




?>
<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DepartamentoController extends BaseController
{
    
    protected $departamentoService;

    public function __construct()
    {
        $this->departamentoService = new DepartamentoService();          
    }
    
    public function index()
    {
        $data = [ 
            'departamento' =>  $this->departamentoService->getDepartamento(),
         ];
 
         echo view('departamento/listar', $data);
    }
}

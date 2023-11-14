<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProdutoController extends BaseController
{
    
    protected $produtoServices;

    public function __construct()
    {
        $this->produtoServices = new ProdutoServices();
    }
    
    public function index()
    {
        $data = [ 
            'produtos' =>  $this->produtoServices->getProdutos(),
         ];
 
         echo view('produtos/listar', $data);
    }
}

<?php

namespace App\Services;

use App\Models\ProdutoModel;

class ProdutoServices {

    protected $produtoModel;

    public function __construct()
    {
        $this->produtoModel = new ProdutoModel();
    }

    public function getProdutos(){
        return $this->produtoModel->findAll();    
    } 
    
    public function adicionar() {
        return $this->produtoModel->findAll();
    }

    public function listar() {
        return $this->produtoModel->findAll();    
    }

    public function comprar() {
        return $this->produtoModel->findAll();
    }

    public function cadastrar() {
        return $this->produtoModel->findAll();
    }
    
    //rever os metodos
}
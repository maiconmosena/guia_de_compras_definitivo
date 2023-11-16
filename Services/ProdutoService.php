<?php

namespace App\Services;

use App\Entities\Produto;
use App\Models\ProdutoModel;

class ProdutoService {

    protected $produtoModel;

    public function __construct()
    {
        $this->produtoModel = new ProdutoModel();
    }

    public function getProdutos($id){
        return $this->produtoModel->findAll($id);    
    } 
    
    public function listar() {
        return $this->produtoModel->findAll();    
    }

    public function comprar() {
        return $this->produtoModel->findAll();
    }

    public function tryUpdate(Produto $produto)
    {
        try {
            if($produto->hasChanged()){
                $this->produtoModel->trySaveUser($produto);
            }
        } catch (\Exception $e) {
            die("Erro ao realizar o processo.");
        }
    }

}
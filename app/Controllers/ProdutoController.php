<?php

namespace App\Controllers;

use App\Entities\Produto;
use App\Models\ProdutoModel;
use App\Services\ProdutoService;
use App\Controllers\BaseController;

class ProdutoController extends BaseController
{
    
    protected $produtoService;

    public function __construct()
    {
        $this->produtoService = new ProdutoService();
    }
    
    public function index()
    {
        $data = [ 
            'produtos' =>  $this->produtoService->getProdutos(),
         ];
 
         echo view('produtos/listar', $data);
    }

    public function comprar(){
        
    }

    public function listar($produtoArray)
    {
        $produto = new Produto();

        $produto->nome = $produtoArray;
        $produto->departamento = $produtoArray;
        $produto->tipo = $produtoArray;
        $produto->quantidade = $produtoArray;
        $produto->valor = $produtoArray;
        $produto->data_validade = $produtoArray;
        $produto->data_compra = $produtoArray;
        $produto->descricao = $produtoArray;

        return $this->db->get("produtos")->result_array();   
        
    }

    public function update(){

        $id = session('id');

        $data = ['produto' => $this->produtoService->getProdutos($id)];

        if ($data = $this->request->getPost()) {

            $produto = new ProdutoModel();
            $produto = $this->produtoService->getProdutos($data['id']);
            $produto->fill($data);
            
            $this->produtoService->tryUpdate($produto);
            return redirect()->to('/dashboard');
        } else {
            return view('/produtos/comprar', $data);
        } 
    }
}

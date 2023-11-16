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

    
    public function listar($produtoArray)
    {
        $produto = new Produto();

        $produto->nome = $produtoArray['name'];
        $produto->departamento = $produtoArray['departamento'];
        $produto->tipo = $produtoArray['tipo'];
        $produto->quantidade = $produtoArray['quantidade'];
        $produto->valor = $produtoArray['valor'];
        $produto->data_validade = $produtoArray['data_validade'];
        $produto->data_compra = $produtoArray['data_compra'];
        $produto->descricao = $produtoArray['descricao'];

        session()->get("produtos")->result_array();      
    }

    public function create(){
        
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

    public function deletarCompras(){
        
        $id = session('id');

        $this->produtoService->selfDelete($id);
        return redirect()->to('/delCompras');
    }

}

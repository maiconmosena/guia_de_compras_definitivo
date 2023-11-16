<?php

namespace App\Controllers;

use App\Services\ComprasService;
use App\Controllers\BaseController;

class ComprasController extends BaseController
{
    
    protected $comprasService;

    public function __construct()
    {
        $this->comprasService = new ComprasService();
    }
   
    public function index()
    {
        $data = [ 
            'produto' =>  $this->comprasService->getCompras(),
         ];
 
         echo view('produto/listar', $data); 
    }

    public function listar($produto_id){
        if ($this->comprasService->listarCompras($this->request->getPost())) {
            return redirect('/');
            session()->setFlashdata('success', 'compras listadas com sucesso');
        } else {
            session()->setFlashdata('danger', 'compras não listadas');
            
        }
        return redirect('/');      
    }

    public function create(){

    }

    public function update(){
        
    }

    public function delete()
    {
        $id = session('id');

        $this->comprasService->delCompras($id);
        return redirect()->to('/')->with('success', 'compras deletadas com sucesso');
    }
    
}

<?php

namespace App\Services;

use App\Models\ComprasModel;

class ComprasService {
    
    protected $comprasModel;

    public function __construct()
    {
       $this->comprasModel = new ComprasModel();
    }

    public function getCompras(){
        return $this->comprasModel->findAll();
    }

    public function listarCompras($produto_id){
        return $this->comprasModel->where('produto_id', $produto_id)->findAll();    
    }

    public function delCompras($id){
        if ($this->comprasModel->delete($id)) {
            return redirect()->to('/delCompras');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->comprasModel->errors());
        }
    }
}

?>
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Services\ComprasService;

class HomeController extends BaseController
{
    
    protected $comprasService;

    public function __construct()
    {
        $this->comprasService = new ComprasService();
    }
   
    public function index()
    {
        return view('login');
    }

    public function interface(){
        echo view('interface');
    } 
    
    public function altenticar(){
        $name = $this->request->getPost('name');
        $password = $this->request->getPost('password');
        $usuario = $this->request->getPost('usuario');
        if ($this->$usuario->altenticar($this->request->getPost())) {
            return redirect('/');
            session()->setuserdata('usuario logado', $usuario);
            session()->setFlashdata('success', 'usuário logado com sucesso');
        } else {
            session()->setFlashdata('danger', 'usuário ou senha invalidos');
        }
        
        return redirect('/');
    }
}

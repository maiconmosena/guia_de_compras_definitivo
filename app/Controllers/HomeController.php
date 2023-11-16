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
}

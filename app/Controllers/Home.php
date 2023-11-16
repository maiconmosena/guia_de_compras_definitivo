<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Services\ComprasService;

class Home extends BaseController
{
    
    protected $comprasService;

    public function __construct()
    {
        $this->comprasService = new ComprasService();
    }
    public function index(): string
    {
        return view('dashboard');
    }

}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Models\UserModel;
use App\Services\UserService;
use CodeIgniter\Config\Factories;

// fazer revisao dos metodos para funcionar

class UserController extends BaseController
{

    private $userService;

    public function __construct()
    {
        $this->userService = Factories::class(UserService::class);
    }

    public function index()
    {
        echo view('login');
    }

    public function registerUser()
    {
        echo view('registerUser');
    }

    public function authenticate()
    {

        $name = $this->request->getPost('name');
        $password = $this->request->getPost('password');

        return ($this->userService->authenticate($name, $password)) ? redirect()->to('/#') : redirect()->back();
    }

    public function createUser()
    {
        if ($this->userService->createUser($this->request->getPost())) {

            return redirect('/');
            session()->setFlashdata('success', 'Usuário cadastrado com sucesso.');
        } else {

            return redirect()->back()->withInput()->with('errors', $this->userService->errors());
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function deleteUser()
    {
        $id = session('id');

        $this->userService->selfDelete($id);
        return redirect()->to('/')->with('success', 'Usuário deletado com sucesso.');

    }

    public function updateUser()
    {
        $id = session('id');

        $dataView = ['user' => $this->userService->getUser($id)];

        if ($data = $this->request->getPost()) {

            $user = new UserModel();
            $user = $this->userService->getUser($data['id']);
            $user->fill($data);
            
            $this->userService->tryUpdate($user);
            return redirect()->to('/#');
        } else {
            return view('#', $dataView);
        }
    }
}
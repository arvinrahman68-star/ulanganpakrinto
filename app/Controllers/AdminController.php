<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AdminModel;
use App\Models\MenuModel;

class AdminController extends BaseController
{
    public function login()
    {
        return view('admin/login');
    }

    public function attemptLogin()
    {
        $session = session();
        $model = new AdminModel();
        $username = $this->request->getPost('username');
        $password = (string) $this->request->getPost('password');
        
        $user = $model->where('username', $username)->first();
        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'admin_id' => $user['id'],
                'admin_username' => $user['username'],
                'is_admin_logged_in' => true
            ]);
            return redirect()->to('/admin');
        }
        $session->setFlashdata('error', 'Username atau Password salah');
        return redirect()->to('/admin/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }

    public function index()
    {
        if (!session()->get('is_admin_logged_in')) return redirect()->to('/admin/login');
        
        $menuModel = new MenuModel();
        $data['menus'] = $menuModel->findAll();
        return view('admin/index', $data);
    }
    
    public function create() { }
    public function store() { }
    public function edit($id) { }
    public function update($id) { }
    public function delete($id) { }
}

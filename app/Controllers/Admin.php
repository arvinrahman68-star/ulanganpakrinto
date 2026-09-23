<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MenuModel;
use App\Models\AdminModel;

class Admin extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin/dashboard');
        }
        return view('admin/login');
    }

    public function processLogin()
    {
        $model = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $admin = $model->where('username', $username)->first();

        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                session()->set([
                    'isLoggedIn' => true,
                    'username' => $admin['username']
                ]);
                return redirect()->to('/admin/dashboard');
            } else {
                session()->setFlashdata('error', 'Password salah.');
                return redirect()->to('/admin/login');
            }
        } else {
            session()->setFlashdata('error', 'Username tidak ditemukan.');
            return redirect()->to('/admin/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }

    public function index()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('/admin/login');

        $model = new MenuModel();
        $data['menus'] = $model->findAll();
        return view('admin/index', $data);
    }

    public function create()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('/admin/login');
        return view('admin/form', ['action' => 'Create', 'menu' => null]);
    }

    public function store()
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('/admin/login');
        $model = new MenuModel();
        $model->save([
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'image' => $this->request->getVar('image')
        ]);
        return redirect()->to('/admin/dashboard')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit($id = null)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('/admin/login');
        $model = new MenuModel();
        $data['menu'] = $model->find($id);
        $data['action'] = 'Edit';
        return view('admin/form', $data);
    }

    public function update($id = null)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('/admin/login');
        $model = new MenuModel();
        $model->update($id, [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'image' => $this->request->getVar('image')
        ]);
        return redirect()->to('/admin/dashboard')->with('success', 'Menu berhasil diubah.');
    }

    public function delete($id = null)
    {
        if (!session()->get('isLoggedIn')) return redirect()->to('/admin/login');
        $model = new MenuModel();
        $model->delete($id);
        return redirect()->to('/admin/dashboard')->with('success', 'Menu berhasil dihapus.');
    }
}

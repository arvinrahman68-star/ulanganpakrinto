<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new MenuModel();
        $data['menus'] = $model->findAll();
        return view('home', $data);
    }

    public function detail($id = null)
    {
        $model = new MenuModel();
        $data['menu'] = $model->find($id);
        
        if (empty($data['menu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Menu tidak ditemukan');
        }
        
        return view('detail', $data);
    }
}

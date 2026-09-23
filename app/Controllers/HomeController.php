<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MenuModel;

class HomeController extends BaseController
{
    public function index()
    {
        $menuModel = new MenuModel();
        $data['menus'] = $menuModel->findAll();
        
        return view('home', $data);
    }
}

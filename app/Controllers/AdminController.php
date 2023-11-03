<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'backend/v_dashboard'
        ];
        return view('backend/v_template', $data);
    }
}

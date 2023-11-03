<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PengurusController extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Pengurus Takmir',
            'page' => 'backend/module/pengurus/v_pengurus'
        ];
        return view('backend/v_template', $data);
    }
}

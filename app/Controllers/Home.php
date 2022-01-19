<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        $data = [
            'title' => "About"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('v_home');
        echo view('layouts/footer');
    }
}

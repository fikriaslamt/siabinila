<?php

namespace App\Controllers;

class Home extends BaseController
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

<?php

namespace App\Controllers;
use App\Models\M_register;
class Admin extends BaseController
{
    protected $M_register;

    public function __construct()
    {
        $this->M_register = new M_register();
    }
    public function index()
    {
        $data1 = $this->M_register->findAll();

        $data = [
            'title' => "Admin",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('r_admin/v_admin');
        echo view('layouts/footer');
    }
}

<?php

namespace App\Controllers;
use App\Models\M_register;
use App\Models\M_akun;
class Admin extends BaseController
{
    protected $M_register;

    public function __construct()
    {
        $this->M_register = new M_register();
        $this->M_akun = new M_akun();
    }
    public function index()
    {
        $data1 = $this->M_register->findAll();
        

        $data = [
            'title' => "Admin",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_admin');
        echo view('r_admin/v_admin',$data);
        echo view('layouts/footer');
    }

    public function data_akun()
    {
        $data1 = $this->M_akun->findAll();
        

        $data = [
            'title' => "Data Akun",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_admin');
        echo view('r_admin/v_data_akun',$data);
        echo view('layouts/footer');
    }

    public function request_akun()
    {
        $data1 = $this->M_register->findAll();
        

        $data = [
            'title' => "Data Request Akun",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_admin');
        echo view('r_admin/v_request_akun',$data);
        echo view('layouts/footer');
    }


    public function tambah_akun($user)
    {
        
        $akun = $this->M_register->find($user);
        
        
        $this->M_akun->insert($akun);
        $this->M_register->delete($user);
        
        return redirect()->to(base_url('Admin'));
    }

    public function delete_akun($user)
    {
        
        $akun = $this->M_akun->find($user);
        
        
        
        $this->M_akun->delete($user);
        
        return redirect()->to(base_url('Admin/data_akun'));
    }

    

}

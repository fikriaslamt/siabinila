<?php

namespace App\Controllers;
use App\Models\M_register;

class Login extends BaseController
{   
    protected $M_register;
    public function __construct()
    {
        $this->M_register = new M_register();
    }
    
    public function index()
    {


        $ModelAkun = new \App\Models\M_akun();
        $login = $this->request->getPost('login');
        if ($login) {
            $username = $this->request->getPost('user');
            $password = $this->request->getPost('password');

            if ($username == '' or $password == '') {
                $err = " Masukan Username dan Password";
            }
            if (empty($err)) {
                $dataAdmin = $ModelAkun->where("user", $username)->first();
                if ($dataAdmin == '') {
                    $err = "Username salah";
                }
                else {
                    if ($dataAdmin['password'] != md5($password)) {
                    $err = "Password salah"; }
                } 
            }
            if (empty($err)) {
                $dataSesi = [
                    'user' => $dataAdmin['user'],
                    'password' => $dataAdmin['password'],
                    'nama' => $dataAdmin['nama'],
                    'role' => $dataAdmin['role']
                ];
                session()->set($dataSesi);
                return redirect()->to(base_url('home'));
            }
            if ($err) {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to(base_url('login'));
            }
        }
        
        $data = [
            'title' => 'home'
        ];
        echo view('layouts/header', $data);
        echo view('v_login');
        echo view('layouts/footer');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('Login'));
    }

    public function register()
    {
        $data = [
            'title' => 'register'
        ];
        echo view('layouts/header', $data);
        echo view('v_register');
        echo view('layouts/footer');
    }

    public function add_register()
    {
        $this->M_register->insert($this->request->getPost());

        
        return redirect()->to(base_url('Admin'));
    }


}

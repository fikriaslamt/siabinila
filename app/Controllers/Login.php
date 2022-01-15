<?php

namespace App\Controllers;
use App\Models\M_register;
use App\Config\Cache;

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
                // else {
                //     $hashed_one = $this->request->getPost('password');
                //     if ($dataAdmin['password'] != $hashed_one) {
                //     $err = "Password salah"; }
                // } 
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
        $data =[
            'user' => $this->request->getVar('user'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'role' => "mahasiswa"
        ];
        $this->M_register->insert($data);
        
        // password_hash($this->request->getVar('admin_password'), PASSWORD_BCRYPT)
   
        return redirect()->to(base_url('Admin'));
    }


}

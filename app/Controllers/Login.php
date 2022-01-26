<?php

namespace App\Controllers;
use App\Models\M_register;
use App\Config\Cache;
use App\Models\M_profil_mahasiswa;

class Login extends BaseController
{   
    protected $M_register;
    public function __construct()
    {
        $this->M_register = new M_register();
        $this->M_profil_mahasiswa = new M_profil_mahasiswa();
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
                    if (!password_verify($password, $dataAdmin['password'])) {
                        $err = "Password salah"; 
                    }
                }
            }
            if (empty($err)) {
                $dataSesi = [
                    'user' => $dataAdmin['user'],
                    'nama' => $dataAdmin['nama'],
                    'role' => $dataAdmin['role']
                ];
                session()->set($dataSesi);
                return redirect()->to(base_url('Home'));
            }
            if ($err) {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to(base_url('Login'));
            }
        }
        
        $data = [
            'title' => 'Login'
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
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'role' => "mahasiswa"
        ];
        $this->M_register->insert($data);
        
        // password_hash($this->request->getVar('admin_password'), PASSWORD_BCRYPT)
   
        return redirect()->to(base_url());
    }


}

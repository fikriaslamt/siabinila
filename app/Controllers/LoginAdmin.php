<?php

namespace App\Controllers;

class LoginAdmin extends BaseController
{   
   
    public function index()
    {


        $ModelAkun = new \App\Models\M_akun_admin();
        $login = $this->request->getPost('loginadmin');
        if ($login) {
            $username = $this->request->getPost('user');
            $password = $this->request->getPost('password');

            if ($username == '' or $password == '') {
                $err = " Masukan Username dan Password";
            }
            if (empty($err)) {
                $dataAdmin = $ModelAkun->where("admin", $username)->first();
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
                    'admin' => $dataAdmin['admin'],
                    'password' => $dataAdmin['password'],
             
                   
                ];
                session()->set($dataSesi);
                return redirect()->to(base_url('Admin'));
            }
            if ($err) {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to(base_url('LoginAdmin'));
            }
        }
        
        $data = [
            'title' => 'Login'
        ];
        echo view('layouts/header', $data);
        echo view('r_admin/v_login_admin');
        echo view('layouts/footer');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('LoginAdmin'));
    }



}

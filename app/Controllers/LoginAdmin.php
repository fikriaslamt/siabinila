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
                    if (!password_verify($password, $dataAdmin['password'])) {
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
            'title' => 'Login Admin'
        ];
        echo view('layouts/header', $data);
        echo view('r_admin/v_login_admin');
        echo view('layouts/footer');
    }

    public function konfirmasi_password()
    {
        $data = [
            'title' => "Konfirmasi Password Baru"
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar');
        echo view('r_admin/adm_ganti_password');
        echo view('layouts/admin_footer');
    }
    
    public function ubah_password()
    {   
        $ModelAkun = new \App\Models\M_akun_admin();
        $dataAdmin = $ModelAkun->where("admin","admin")->first();
        if (!password_verify($this->request->getVar('pass_lama'), $dataAdmin['password'])) {
            $err = "Password salah"; 
            session()->setFlashdata('notif', $err);
            return redirect()->to(base_url('LoginAdmin/konfirmasi_password'));
        }
        if($this->request->getVar('pass_baru') != $this->request->getVar('pass_konfir')){
            $err = "Konfirmasi Password Tidak Sama";
            session()->setFlashdata('notif', $err);
            return redirect()->to(base_url('LoginAdmin/konfirmasi_password'));
        }
        
        $ModelAkun->save([
            'admin' => "admin",
            'password' => password_hash($this->request->getVar('pass_baru'), PASSWORD_DEFAULT),
        ]); 
        
        session()->setFlashdata('notif', "Password Berhasil Diubah");
        return redirect()->to(base_url('LoginAdmin/konfirmasi_password'));
    }
    
    public function logout()
    {   
        session()->destroy();
        return redirect()->to(base_url('LoginAdmin'));
    }

}

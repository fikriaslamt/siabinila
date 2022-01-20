<?php

namespace App\Controllers;
use App\Models\M_register;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_akun;
use App\Models\M_data_skripsi;
use App\Models\M_data_usul;
class Admin extends BaseController
{
    protected $M_register;

    public function __construct()
    {
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        $this->M_register = new M_register();
        $this->M_akun = new M_akun();
        $this->M_data_skripsi = new M_data_skripsi();
        $this->M_data_usul = new M_data_usul();
    }
    public function index()
    {
        $data1 = $this->M_register->findAll();

        $data = [
            'title' => "Dashboard",
            'data' => $data1
        ];
        // echo view('layouts/header', $data);
        // echo view('layouts/navbar_admin');
        // echo view('r_admin/v_admin',$data);
        // echo view('layouts/footer');
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/v_admin',$data);
        echo view('layouts/admin_footer');
    }

    public function data_akun()
    {
        $data1 = $this->M_akun->findAll();
        
        $data = [
            'title' => "Data Akun",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/v_data_akun',$data);
        echo view('layouts/admin_footer');
    }

    public function request_akun()
    {
        $data1 = $this->M_register->findAll();
        

        $data = [
            'title' => "Data Request Akun",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/v_request_akun',$data);
        echo view('layouts/admin_footer');
    }

    public function data_pengajuan_judul()
    {
        $data1 = $this->M_data_pengajuan_judul->findAll();

        $data = [
            'title' => "Data Pengajuan Judul",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/request_judul', $data);
        echo view('layouts/admin_footer');
    }

    public function data_pengajuan_usul()
    {
        $data1 = $this->M_data_usul->findAll();

        $data = [
            'title' => "Data Pengajuan Usul",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/request_usul', $data);
        echo view('layouts/admin_footer');
    }

    public function terima_judul($npm)
    {   
        // $judul =$this->M_data_pengajuan_judul->query("SELECT judul1 FROM data_pengajuan_judul where npm='".$npm."'")->getResult();
        
        $pengajuan = 
            
            $this->M_data_pengajuan_judul->find($npm);
       
            
            
        
        
        // if($dosen_pembimbing == )
        $this->M_data_skripsi->insert($pengajuan);
      
        // $this->M_data_pengajuan_judul->delete($npm);
        
        return redirect()->to(base_url('Admin/data_pengajuan_judul'));
    }

    public function terima_usul($npm)
    {   
        $date = date('Y-m-d') ;
        // $origin->diff($target);
        $data = $this->M_data_usul->find($npm);
        $pengajuan = [
            'data' => $data,
            'date' => $date,
        ];
            
            
        
        
        // if($dosen_pembimbing == )
        
        $this->M_data_skripsi->insert($pengajuan);
        $this->M_data_usul->delete($npm);
        
        return redirect()->to(base_url('Admin/data_pengajuan_judul'));
    }

    public function data_skripsi()
    {
        $data1 =$this->M_data_skripsi->findAll();

        $data = [
            'title' => "Data Skripsi",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/data_skripsi', $data);
        echo view('layouts/admin_footer');
    }

    public function form_add_akun_dosen()
    {
        $data = [
            'title' => 'Tambah Akun Dosen'
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/form_tambah_akun_dosen');
        echo view('layouts/admin_footer');
    }
    public function add_akun_dosen()
    {
        $data =[
            'user' => $this->request->getVar('user'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'role' => "dosen"
          

        ];
        $this->M_akun->insert($data);
    
    return redirect()->to(base_url('Admin'));
    }


    public function tambah_akun($user)
    {
        
        $akun = 
            $this->M_register->find($user);
            
       
        
        
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

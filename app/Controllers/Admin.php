<?php

namespace App\Controllers;
use App\Models\M_register;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_akun;
use App\Models\M_data_skripsi;
use App\Models\M_data_usul;
use App\Models\M_profil_mahasiswa;
use App\Models\M_profil_dosen;

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
        $this->M_profil_mahasiswa = new M_profil_mahasiswa();
        $this->M_profil_dosen = new M_profil_dosen();
    }

    public function index()
    {
        $register = $this->M_register->findAll();
        $data_dosen = $this->M_profil_dosen->findAll();
        $data_mhs = $this->M_profil_mahasiswa->findAll();
        $mhs_pria = $this->M_profil_mahasiswa->query("SELECT * FROM `profil_mahasiswa` WHERE jenis_kelamin = 'Laki-laki'")->getResultArray();
        $mhs_wanita = $this->M_profil_mahasiswa->query("SELECT * FROM `profil_mahasiswa` WHERE jenis_kelamin = 'Perempuan'")->getResultArray();


        $data = [
            'title' => "Dashboard", 'data' => $register,
            'mhs' => $data_mhs, 'dosen' => $data_dosen, 
            'mhs_pria' => $mhs_pria, 'mhs_wanita' => $mhs_wanita,
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
        $pengajuan = $this->M_data_pengajuan_judul->find($npm);
        $p_npm = $pengajuan['npm'];
        $p_dosp1 = $pengajuan['dospem1'];
        $p_dosp2 = $pengajuan['dospem2'];
        $date = date('Y-m-d') ;

        $this->M_data_skripsi->insert([
            'npm' => $p_npm,
            'judul' => $this->request->getVar('judul'),
            'dospem1' => $p_dosp1,
            'dospem2' => $p_dosp2,
            'date' => $date,
        ]);
        $this->M_data_pengajuan_judul->delete($npm);
        
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

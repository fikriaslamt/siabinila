<?php

namespace App\Controllers;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_data_skripsi;
use App\Models\M_data_usul;
use App\Models\M_akun;


class Dosen extends BaseController

{
    protected $M_data_pengajuan_judul;
    protected $M_data_skripsi;

    public function __construct()
    {
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        $this->M_data_skripsi = new M_data_skripsi();
        $this->M_data_usul = new M_data_usul();
        $this->M_akun = new M_akun();
    }

    public function index()
    {

        $data = [
            'title' => "Dosen",
            
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen');
        echo view('r_dosen/v_dosen', $data);
        echo view('layouts/footer');
    }
    


    public function data_skripsi()
    {
        $data1 =$this->M_data_skripsi->query("SELECT * FROM data_skripsi where dospem1='".session()->user."' OR dospem2='".session()->user."'")->getResult();

        $data = [
            'title' => "Data Skripsi",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen');
        echo view('r_dosen/data_skripsi', $data);
        echo view('layouts/footer');
    }

    public function data_pengajuan_usul()
    {
        $data1 =$this->M_data_usul->query("SELECT * FROM data_skripsi where dospem1='".session()->user."' OR dospem2='".session()->user."'")->getResult();

        $data = [
            'title' => "Data Usul",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen');
        echo view('r_dosen/data_usul', $data);
        echo view('layouts/footer');
    }

    public function terima_usul($npm)
    {   
        $pengajuan = 
            $this->M_data_usul->find($npm);
            
        
        
        // if($dosen_pembimbing == )
        $this->M_data_skripsi->insert($pengajuan);
        $this->M_data_pengajuan_judul->delete($npm);
        
        return redirect()->to(base_url('Admin/data_pengajuan_judul'));
    }



    
}

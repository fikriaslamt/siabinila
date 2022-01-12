<?php

namespace App\Controllers;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_data_skripsi;


class Dosen extends BaseController

{
    protected $M_data_pengajuan_judul;
    protected $M_data_skripsi;

    public function __construct()
    {
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        $this->M_data_skripsi = new M_data_skripsi();
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
    public function data_pengajuan_judul()
    {
        $data1 = $this->M_data_pengajuan_judul->findAll();

        $data = [
            'title' => "Dosen",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen');
        echo view('r_dosen/request_judul', $data);
        echo view('layouts/footer');
    }


    public function data_skripsi()
    {
        $data1 = $this->M_data_skripsi->findAll();

        $data = [
            'title' => "Data Skripsi",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen');
        echo view('r_dosen/data_skripsi', $data);
        echo view('layouts/footer');
    }



    public function terima($npm)
    {   
        $pengajuan = $this->M_data_pengajuan_judul->find($npm);
        
        
        $this->M_data_skripsi->insert($pengajuan);
        $this->M_data_pengajuan_judul->delete($npm);
        
        return redirect()->to(base_url('Dosen'));
    }
}

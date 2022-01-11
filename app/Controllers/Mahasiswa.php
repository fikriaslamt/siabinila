<?php

namespace App\Controllers;
use App\Models\M_data_pengajuan_judul;

class Mahasiswa extends BaseController
{
    protected $M_data_pengajuan_judul;

    public function __construct()
    {
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
    }

    public function index()
    {
        $data = [
            'title' => "Home - Mahasiswa"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/v_mahasiswa');
        echo view('layouts/footer');
    }
    public function form_pengajuan_judul()
    {
        $data = [
            'title' => "form-pengajuan-judul"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/form_pengajuan_judul');
        echo view('layouts/footer');
    }

    public function tambah()
    {
        // $this->M_data_pengajuan_judul->save([
        //     'npm' => $this->request->getVar('npm'),
        //     'nama' => $this->request->getVar('nama')
            
        // ]); 

        $this->M_data_pengajuan_judul->insert($this->request->getPost());

        
        return redirect()->to(base_url('Mahasiswa'));
    }




}

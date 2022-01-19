<?php

namespace App\Controllers;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_profil_mahasiswa;

class Mahasiswa extends BaseController
{
    protected $M_data_pengajuan_judul;

    public function __construct()
    {
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        $this->M_profil_mahasiswa = new M_profil_mahasiswa();
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

    public function profil()
    {   
       
        $data1 = $this->M_profil_mahasiswa->query("SELECT * FROM profil_mahasiswa where npm='".session()->user."'")->getResult();
        $data = [
            'title' => "Profile - Mahasiswa",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/profil_mahasiswa',$data);
        echo view('layouts/footer');
    }
    public function form_edit_profil()
    {
        $data1 = $this->M_profil_mahasiswa->query("SELECT * FROM profil_mahasiswa where npm='".session()->user."'")->getResult();
        $data = [
            'title' => "Profile - Edit",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/edit_profil_mahasiswa',$data);
        echo view('layouts/footer');
    }
    public function edit_profil($npm)
    {
        $this->M_profil_mahasiswa->update($npm,$this->request->getPost());
        return redirect()->to(base_url('Mahasiswa/profil'));
    }

    public function form()
    {
        $data = [
            'title' => "form"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/form');
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

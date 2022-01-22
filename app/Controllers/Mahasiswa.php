<?php

namespace App\Controllers;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_profil_mahasiswa;
use App\Models\M_data_usul;
use App\Models\M_data_hasil;
use App\Models\M_data_kompre;

class Mahasiswa extends BaseController
{
    protected $M_data_pengajuan_judul;

    public function __construct()
    {
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        $this->M_profil_mahasiswa = new M_profil_mahasiswa();
        $this->M_data_usul = new M_data_usul();
        $this->M_data_kompre = new M_data_kompre();
        $this->M_data_hasil = new M_data_hasil();
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
        session();
        $profil = $this->M_profil_mahasiswa->query("SELECT * FROM profil_mahasiswa where npm='".session()->user."'")->getResult();
        $data = [
            'title' => "Profile - Mahasiswa",
            'data' => $profil,
            'pesan_err' => \Config\Services::validation(),
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

    public function edit_foto($npm){
        if(!$this->validate([
            'gambarmhs' => 'uploaded[gambarmhs]|max_size[gambarmhs,500]|ext_in[gambarmhs,png,jpg]'
        ]) ){
            return redirect()->to(base_url('Mahasiswa/profil'))->withInput();
        }
        $readFile =  './upload/foto/'.$this->request->getVar('foto');
        if (is_readable($readFile)){
            unlink($readFile);
        } 
        $file =  $this->request->getFile('gambarmhs');  $namafile = $file->getName();
        $file->move('./upload/foto', $namafile);        $file_fix = $file->getName();
        $this->M_profil_mahasiswa->query("UPDATE profil_mahasiswa SET foto = '$file_fix' WHERE npm = $npm");
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
            'title' => "form pengajuan judul"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/form_pengajuan_judul');
        echo view('layouts/footer');
    }

    public function form_pengajuan_usul()
    {
        $data = [
            'title' => "form pengajuan usul"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/form_pengajuan_usul');
        echo view('layouts/footer');
    }

    public function form_pengajuan_hasil()
    {
        $data = [
            'title' => "form pengajuan hasil"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/form_pengajuan_hasil');
        echo view('layouts/footer');
    }

    public function form_pengajuan_kompre()
    {
        $data = [
            'title' => "form pengajuan kompre"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/form_pengajuan_kompre');
        echo view('layouts/footer');
    }

    public function tambah_pengajuan_judul()
    {
        
        $this->M_data_pengajuan_judul->insert($this->request->getPost());   
        return redirect()->to(base_url('Mahasiswa'));
    }

    public function tambah_pengajuan_usul()
    {
       
        $this->M_data_usul->insert($this->request->getPost());
        return redirect()->to(base_url('Mahasiswa'));
    }

    public function tambah_pengajuan_hasil()
    {
        $this->M_data_hasil->insert($this->request->getPost()); 
        return redirect()->to(base_url('Mahasiswa'));
    }

    public function tambah_pengajuan_kompre()
    {
        
        $this->M_data_kompre->insert($this->request->getPost());
        return redirect()->to(base_url('Mahasiswa'));
    }




}

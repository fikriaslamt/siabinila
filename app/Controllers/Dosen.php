<?php

namespace App\Controllers;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_data_skripsi;
use App\Models\M_data_usul;
use App\Models\M_data_hasil;
use App\Models\M_data_kompre;
use App\Models\M_akun;
use App\Models\M_profil_dosen;


class Dosen extends BaseController

{
    protected $M_data_pengajuan_judul;
    protected $M_data_skripsi;

    public function __construct()
    {
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        $this->M_data_skripsi = new M_data_skripsi();
        $this->M_data_usul = new M_data_usul();
        $this->M_data_kompre = new M_data_kompre();
        $this->M_data_hasil = new M_data_hasil();
        $this->M_akun = new M_akun();
        $this->M_profil_dosen = new M_profil_dosen();
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
    
    public function profil()
    {   
       
        $data1 = $this->M_profil_dosen->query("SELECT * FROM profil_dosen where nip='".session()->user."'")->getResult();
        $data = [
            'title' => "Profile - Dosen",
            'data' => $data1,
            'pesan_err' => \Config\Services::validation(),
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen', $data);
        echo view('r_dosen/profil_dosen',$data);
        echo view('layouts/footer');
    }
    public function form_edit_profil()
    {
        $data1 = $this->M_profil_dosen->query("SELECT * FROM profil_dosen where nip='".session()->user."'")->getResult();
        $data = [
            'title' => "Profile - Edit",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen', $data);
        echo view('r_dosen/edit_profil_dosen',$data);
        echo view('layouts/footer');
    }
    public function edit_foto($npm){
        if(!$this->validate([
            'gambar_profil' => 'uploaded[gambar_profil]|max_size[gambar_profil,500]|ext_in[gambar_profil,png,jpg]'
        ]) ){
            return redirect()->to(base_url('Dosen/profil'))->withInput();
        }
        $readFile =  './upload/foto/'.$this->request->getVar('foto');
        if (is_readable($readFile)){
            unlink($readFile);
        } 
        $file =  $this->request->getFile('gambar_profil');  $namafile = $file->getName();
        $file->move('./upload/foto', $namafile);        $file_fix = $file->getName();
        $this->M_profil_dosen->query("UPDATE profil_dosen SET foto = '$file_fix' WHERE nip   = $npm");
        return redirect()->to(base_url('Dosen/profil'));
    }
    public function edit_profil($nip)
    {   
        $this->M_profil_dosen->update($nip,$this->request->getPost());
        return redirect()->to(base_url('Dosen/profil'));
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
        $date1 = $this->M_data_skripsi->find("date");
        $date2 = date('Y-m-d');
        $datetime1 = date_create($date1);
        $datetime2 = date_create($date2);
        $interval = date_diff($datetime1, $datetime2);
        $interval = $interval->format('%a Hari');

        $data = $this->M_data_usul->find($npm);
        $skripsi = $this->M_data_skripsi->find($npm);
        $pengajuan = [
            'time' => $interval,
            'date' => $date2,
            'npm'=> $data["npm"],
            'judul'=> $data["judul"],
            'dospem1'=> $data["dospem1"],
            'dospem2'=> $data["dospem2"],
            'status'=> "TELAH DITERIMA USUL"
        ];
            
            
        
        
        // if($dosen_pembimbing == )
        
        $this->M_data_skripsi->update($npm,$pengajuan);
        
        // $this->M_data_usul->delete($npm);
            
        return redirect()->to(base_url('Dosen/data_pengajuan_usul'));
    }

    public function data_pengajuan_hasil()
    {
        $data1 =$this->M_data_hasil->query("SELECT * FROM data_skripsi where dospem1='".session()->user."' OR dospem2='".session()->user."'")->getResult();

        $data = [
            'title' => "Data Usul",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen');
        echo view('r_dosen/data_hasil', $data);
        echo view('layouts/footer');
    }

    public function terima_hasil($npm)
    {   
        $pengajuan = 
            $this->M_data_hasil->find($npm);
            
        $skripsi = $this->M_data_skripsi->find($npm);
        
        // if($dosen_pembimbing == )
        $this->M_data_skripsi->update($skripsi,$pengajuan);
        $this->M_data_hasil->delete($npm);
            
        return redirect()->to(base_url('Dosen/data_pengajuan_usul'));
    }

    public function data_pengajuan_kompre()
    {
        $data1 =$this->M_data_kompre->query("SELECT * FROM data_skripsi where dospem1='".session()->user."' OR dospem2='".session()->user."'")->getResult();

        $data = [
            'title' => "Data Usul",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen');
        echo view('r_dosen/data_kompre', $data);
        echo view('layouts/footer');
    }

    public function terima_kompre($npm)
    {   
        $pengajuan = 
            $this->M_data_kompre->find($npm);
            
        
        
        // if($dosen_pembimbing == )
        $this->M_data_skripsi->insert($pengajuan);
        $this->M_data_kompre->delete($npm);
            
        return redirect()->to(base_url('Admin/data_pengajuan_kompre'));
    }



    
}

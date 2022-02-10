<?php

namespace App\Controllers;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_profil_mahasiswa;
use App\Models\M_profil_dosen;
use App\Models\M_data_usul;
use App\Models\M_data_hasil;
use App\Models\M_data_kompre;
use App\Models\M_data_skripsi;
use App\Models\M_surat_pengajuan_judul;
use App\Models\M_surat_pengajuan_usul;
use App\Models\M_surat_pengajuan_hasil;
use App\Models\M_surat_pengajuan_kompre;

class Mahasiswa extends BaseController
{
    protected $M_data_pengajuan_judul;

    public function __construct()
    {
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        $this->M_profil_mahasiswa = new M_profil_mahasiswa();
        $this->M_profil_dosen = new M_profil_dosen();
        $this->M_data_usul = new M_data_usul();
        $this->M_data_kompre = new M_data_kompre();
        $this->M_data_hasil = new M_data_hasil();
        $this->M_data_skripsi = new M_data_skripsi();
        $this->M_surat_pengajuan_judul = new M_surat_pengajuan_judul();
        $this->M_surat_pengajuan_usul = new M_surat_pengajuan_usul();
        $this->M_surat_pengajuan_hasil = new M_surat_pengajuan_hasil();
        $this->M_surat_pengajuan_kompre = new M_surat_pengajuan_kompre();
    }

    public function index()
    {   
        $skripsi = $this->M_data_skripsi->query("SELECT * FROM data_skripsi where npm='".session()->user."'")->getResult();
        $profil = $this->M_profil_mahasiswa->query("SELECT * FROM profil_mahasiswa where npm='".session()->user."'")->getResult();
        
        $data = [
            'title' => "Home - Mahasiswa",
            'skripsi' => $skripsi, 'profil' => $profil
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/v_mahasiswa');
        echo view('layouts/footer');
    }

    public function skripsi()
    {   
        $skripsi = $this->M_data_skripsi->query("SELECT * FROM data_skripsi where npm='".session()->user."'")->getResultArray();
        $pengajuan = $this->M_data_pengajuan_judul->query("SELECT * FROM data_pengajuan_judul where npm='".session()->user."'")->getResultArray();
        $data = [
            'title' => "Skripsi - Mahasiswa",
            'skripsi' => $skripsi, 'pengajuan' => $pengajuan,
            'pesan_err' => \Config\Services::validation(),
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/v_skripsi',$data);
        echo view('layouts/footer');
    }

    public function profil()
    {   
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
        $readFile =  './upload/foto/mhs/'.$this->request->getVar('foto');
        if (is_readable($readFile)){
            unlink($readFile);
        } 
        $file =  $this->request->getFile('gambarmhs');  $namafile = $file->getName();
        $file->move('./upload/foto/mhs', 'profil_'.$npm.'.'.$file->getExtension()); 
        $file_fix = $file->getName();
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
        $Dosen =$this->M_profil_dosen->findAll();
        
        $data = [
            'title' => "form pengajuan judul", 'dosen' => $Dosen,
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

    public function form_pembayaran_keterlambatan_ukt()
    {
        $data = [
            'title' => "Formulir Pembayaran Keterlambatan UKT"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirUKT/form_pembayaran_keterlambatan_ukt');
        echo view('layouts/footer');
    }

    public function form_kehilangan_ukt()
    {
        $data = [
            'title' => "Formulir Kehilangan UKT"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirUKT/form_kehilangan_ukt');
        echo view('layouts/footer');
    }

    public function form_keringanan_ukt()
    {
        $data = [
            'title' => "Formulir Keringanan UKT"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirUKT/form_keringanan_ukt');
        echo view('layouts/footer');
    }

    public function form_pembebasan_ukt()
    {
        $data = [
            'title' => "Formulir pembebasan UKT"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirUKT/form_pembebasan_ukt');
        echo view('layouts/footer');
    }

    public function form_keringanan_ukt_50()
    {
        $data = [
            'title' => "Formulir keringanan UKT 50%"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirUKT/form_keringanan_ukt_50');
        echo view('layouts/footer');
    }

    public function form_masih_aktif_kuliah()
    {
        $data = [
            'title' => "Formulir Keterangan Masih Aktif Kuliah"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_masih_aktif_kuliah');
        echo view('layouts/footer');
    }

    public function form_keterangan_beasiswa()
    {
        $data = [
            'title' => "Formulir Keterangan Beasiswa"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_keterangan_beasiswa');
        echo view('layouts/footer');
    }

    public function form_permohonan_cuti_kuliah()
    {
        $data = [
            'title' => "Formulir Permohonan Cuti Kuliah"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_permohonan_cuti_kuliah');
        echo view('layouts/footer');
    }

    public function form_studi_terbimbing()
    {
        $data = [
            'title' => "Formulir Permohonan Studi Terbimbing"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_studi_terbimbing');
        echo view('layouts/footer');
    }

    public function form_pindah_kuliah()
    {
        $data = [
            'title' => "Formulir Permohonan Pindah Kuliah"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_pindah_kuliah');
        echo view('layouts/footer');
    }

    public function tambah_pengajuan_judul()
    {   $skrip1 = ""; $skrip2 = "";
        $isi1 = explode(PHP_EOL, $this->request->getVar('judul1_isi'));
        $isi2 = explode(PHP_EOL, $this->request->getVar('judul2_isi'));
        foreach ($isi1 as $p1) :
            $skrip1 .= "<p>".$p1."</p>";
        endforeach;
        foreach ($isi2 as $p2) :
            $skrip2 .= "<p>".$p2."</p>";
        endforeach;
        $skrip1 = str_replace("<p></p>","",$skrip1);
        $skrip2 = str_replace("<p></p>","",$skrip2);

        $data =[
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'prodi'         => $this->request->getVar('prodi'),
            'judul1'        => $this->request->getVar('judul1'),
            'judul1_isi'    => $skrip1,
            'judul2'        => $this->request->getVar('judul2'),
            'judul2_isi'    => $skrip2,
            'alamat'     => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon'),
            'sks'   => $this->request->getVar('sks'),
            'ipk'   => $this->request->getVar('ipk'),
            'dospem1' => $this->request->getVar('dospem1'),
            'dospem2' => $this->request->getVar('dospem2'),
        ];
        
        $this->M_data_pengajuan_judul->insert($data);
        $this->M_surat_pengajuan_judul->insert([
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'prodi'         => $this->request->getVar('prodi'),
            'alamat'     => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon'),
            'sks'   => $this->request->getVar('sks'),
            'ipk'   => $this->request->getVar('ipk'),
        ]);
        
        return redirect()->to(base_url('Mahasiswa/skripsi/'));
    }

    public function tambah_pengajuan_usul()
    {
        $data =[
            
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'judul'          => $this->request->getVar('judul'), 
            'prodi'         => $this->request->getVar('prodi'),
            'jurusan'         => $this->request->getVar('jurusan'),
            
        ];
        
        $this->M_data_usul->insert($data);
        $this->M_surat_pengajuan_usul->insert($data);
       
        
        return redirect()->to(base_url('Cetakan/surat_pengajuan_usul/'.$data['npm']));
    }

    public function tambah_pengajuan_hasil()
    {
        $data =[
            
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'judul'          => $this->request->getVar('judul'), 
         
            
        ];
        
        $this->M_data_hasil->insert($data);
        $this->M_surat_pengajuan_hasil->insert($data);
        
       
        return redirect()->to(base_url('Cetakan/surat_pengajuan_hasil/'.$data['npm']));
    }

    public function tambah_pengajuan_kompre()
    {
        
        $data =[
            
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'judul'          => $this->request->getVar('judul'), 
      
            
        ];
        
        $this->M_data_kompre->insert($data);
        $this->M_surat_pengajuan_kompre->insert($data);
       
       
        return redirect()->to(base_url('Cetakan/surat_pengajuan_kompre/'.$data['npm']));
    }




}

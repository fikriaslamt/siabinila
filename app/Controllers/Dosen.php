<?php

namespace App\Controllers;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_data_skripsi;
use App\Models\M_seminar_usul;
use App\Models\M_seminar_hasil;
use App\Models\M_ujian_kompre;
use App\Models\M_akun;
use App\Models\M_profil_dosen;
use App\Models\M_surat_pengajuan_usul;
use App\Models\M_surat_pengajuan_hasil;
use App\Models\M_surat_pengajuan_kompre;
use App\Models\M_data_notif;



class Dosen extends BaseController

{
    protected $M_data_pengajuan_judul;
    protected $M_data_skripsi;

    public function __construct()
    {
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        $this->M_data_skripsi = new M_data_skripsi();
        $this->M_seminar_usul = new M_seminar_usul();
        $this->M_ujian_kompre = new M_ujian_kompre();
        $this->M_seminar_hasil = new M_seminar_hasil();
        $this->M_akun = new M_akun();
        $this->M_profil_dosen = new M_profil_dosen();
        $this->M_surat_pengajuan_usul = new M_surat_pengajuan_usul();
        $this->M_surat_pengajuan_hasil = new M_surat_pengajuan_hasil();
        $this->M_surat_pengajuan_kompre = new M_surat_pengajuan_kompre();
        $this->M_data_notif = new M_data_notif();
    }

    public function index()
    {
        $dat_skrip = $this->M_data_skripsi->query("SELECT * FROM data_skripsi where dospem1='".session()->nama."' OR dospem2='".session()->nama."'")->getResultArray();
        $dat_uji = $this->M_data_skripsi->query("SELECT * FROM data_skripsi where penguji_u='".session()->nama."' OR penguji_p='".session()->nama."'")->getResultArray();
        
        $dat_usul = $this->M_seminar_usul->query("SELECT * FROM data_seminar_usul JOIN surat_pengajuan_usul ON surat_pengajuan_usul.npm = data_seminar_usul.npm WHERE surat_pengajuan_usul.dospem1='".session()->nama."' OR surat_pengajuan_usul.dospem2='".session()->nama."' OR surat_pengajuan_usul.penguji_u='".session()->nama."' OR surat_pengajuan_usul.penguji_p='".session()->nama."'")->getResultArray();
        $dat_hasil = $this->M_seminar_usul->query("SELECT * FROM data_seminar_hasil JOIN surat_pengajuan_hasil ON surat_pengajuan_hasil.npm = data_seminar_hasil.npm WHERE surat_pengajuan_hasil.dospem1='".session()->nama."' OR surat_pengajuan_hasil.dospem2='".session()->nama."' OR surat_pengajuan_hasil.penguji_u='".session()->nama."' OR surat_pengajuan_hasil.penguji_p='".session()->nama."'")->getResultArray();
        $dat_kompre = $this->M_ujian_kompre->query("SELECT * FROM data_ujian_kompre JOIN surat_pengajuan_kompre ON surat_pengajuan_kompre.npm = data_ujian_kompre.npm WHERE surat_pengajuan_kompre.dospem1='".session()->nama."' OR surat_pengajuan_kompre.dospem2='".session()->nama."' OR surat_pengajuan_kompre.penguji_u='".session()->nama."' OR surat_pengajuan_kompre.penguji_p='".session()->nama."'")->getResultArray();

        $data = [
            'title' => "Dosen",'skripsi' => $dat_skrip, 'uji' => $dat_uji, 
            'usul'  => $dat_usul, 'hasil' => $dat_hasil, 'kompre' => $dat_kompre, 
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen');
        echo view('r_dosen/v_dosen', $data);
        echo view('layouts/footer');
    }
    
    public function profil()
    {   
       
        $data1 = $this->M_profil_dosen->query("SELECT * FROM profil_dosen where nama='".session()->nama."'")->getResult();
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
        $data1 = $this->M_profil_dosen->query("SELECT * FROM profil_dosen where nama='".session()->nama."'")->getResult();
        $data = [
            'title' => "Profile - Edit",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen');
        echo view('r_dosen/edit_profil_dosen');
        echo view('layouts/footer');
    }
    public function edit_foto($npm){
        if(!$this->validate([
            'gambar_profil' => 'uploaded[gambar_profil]|max_size[gambar_profil,500]|ext_in[gambar_profil,png,jpg]'
        ]) ){
            return redirect()->to(base_url('Dosen/profil'))->withInput();
        }
        $readFile =  './upload/foto/dosen/'.$this->request->getVar('foto');
        if (is_readable($readFile)){
            unlink($readFile);
        } 
        $file =  $this->request->getFile('gambar_profil');  $namafile = $file->getName();
        $file->move('./upload/foto/dosen', 'profil_'.$npm.'.'.$file->getExtension());        
        $file_fix = $file->getName();
        $this->M_profil_dosen->query("UPDATE profil_dosen SET foto = '$file_fix' WHERE nip = $npm");
        return redirect()->to(base_url('Dosen/profil'));
    }
    public function edit_profil($nip)
    {   
        $dat_skrip = $this->M_data_skripsi->query("SELECT * FROM data_skripsi where dospem1='".session()->nama."' OR dospem2='".session()->nama."' OR penguji_u='".session()->nama."' OR penguji_p='".session()->nama."'")->getResultArray();
        if(!empty($dat_skrip)){
            session()->setFlashdata('notif', "Profil tidak dapat diubah saat anda menjadi pembimbing/penguji, karena dapat menyebabkan error");
            return redirect()->to(base_url('Dosen/profil'));
        }
        $this->M_profil_dosen->update($nip,$this->request->getPost());
        $ModelAkun = new \App\Models\M_akun();
        $ModelAkun->save(array(
            'user' => session()->user,
            'nama' => $this->request->getVar('nama')
        )); 
        $_SESSION['nama'] = $this->request->getVar('nama');
        return redirect()->to(base_url('Dosen/profil'));
    }

    public function data_pengajuan_usul()
    {
        $data1 = $this->M_seminar_usul->query("SELECT * FROM data_seminar_usul JOIN surat_pengajuan_usul ON surat_pengajuan_usul.npm = data_seminar_usul.npm WHERE surat_pengajuan_usul.dospem1='".session()->nama."' OR surat_pengajuan_usul.dospem2='".session()->nama."' OR surat_pengajuan_usul.penguji_u='".session()->nama."' OR surat_pengajuan_usul.penguji_p='".session()->nama."'")->getResultArray();
        
        $data = [
            'title' => "Data Pengajuan Seminar Usul",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen');
        echo view('r_dosen/data_seminar_usul');
        echo view('layouts/footer');
    }

    public function data_pengajuan_hasil()
    {
        $data1 = $this->M_seminar_usul->query("SELECT * FROM data_seminar_hasil JOIN surat_pengajuan_hasil ON surat_pengajuan_hasil.npm = data_seminar_hasil.npm WHERE surat_pengajuan_hasil.dospem1='".session()->nama."' OR surat_pengajuan_hasil.dospem2='".session()->nama."' OR surat_pengajuan_hasil.penguji_u='".session()->nama."' OR surat_pengajuan_hasil.penguji_p='".session()->nama."'")->getResultArray();

        $data = [
            'title' => "Data Pengajuan Seminar Hasil",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen', $data);
        echo view('r_dosen/data_seminar_hasil', $data);
        echo view('layouts/footer');
    }

    public function data_pengajuan_kompre()
    {
        $data1 = $this->M_ujian_kompre->query("SELECT * FROM data_ujian_kompre JOIN surat_pengajuan_kompre ON surat_pengajuan_kompre.npm = data_ujian_kompre.npm WHERE surat_pengajuan_kompre.dospem1='".session()->nama."' OR surat_pengajuan_kompre.dospem2='".session()->nama."' OR surat_pengajuan_kompre.penguji_u='".session()->nama."' OR surat_pengajuan_kompre.penguji_p='".session()->nama."'")->getResultArray();

        $data = [
            'title' => "Data Pengajuan Ujian Skripsi",
            'data'  => $data1
        ];

        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen', $data);
        echo view('r_dosen/data_ujian_kompre', $data);
        echo view('layouts/footer');
    }


    public function terima_usul($npm)
    {   
        $skripsi = $this->M_data_skripsi->find($npm);
        
        var_dump($npm);
        $date1 = $skripsi["date_judul"];
        $date2 = date('Y-m-d');
        $datetime1 = date_create($date1);
        $datetime2 = date_create($date2);
        $interval = date_diff($datetime1, $datetime2);
        $interval = $interval->format('%a');

        $data = $this->M_surat_pengajuan_usul->find($npm);
        
        $pengajuan = [
            'time' => $interval,
            'time_judul_usul' => $interval,
            'date' => $date2,
            'date_usul' => $date2,
            'npm'=> $data["npm"],
            'nama'=> $data["nama"],
            'judul'=> $data["judul"],
            'dospem1'=> $data["dospem1"],
            'dospem2'=> $data["dospem2"],
            'status'=> "Seminar Usul Disetujui"
        ];

        if ($this->request->getVar("sebagai") == "Pembimbing 1"){
            $penilaian = ['nilai_d1' => $this->request->getVar("nilai")];
        }else if ($this->request->getVar("sebagai") == "Pembimbing 2"){
            $penilaian = ['nilai_d2' => $this->request->getVar("nilai")];
        }else if ($this->request->getVar("sebagai") == "Penguji 1"){
            $penilaian = ['nilai_pu' => $this->request->getVar("nilai")];
        }else if ($this->request->getVar("sebagai") == "Penguji 2"){
            $penilaian = ['nilai_pp' => $this->request->getVar("nilai")];
        }

        $this->M_surat_pengajuan_usul->update($npm, $penilaian);

        $surat = $this->M_surat_pengajuan_usul->find($npm);
        if($surat["nilai_d1"] != 0 && $surat["nilai_d2"] != 0 && $surat["nilai_pu"] != 0 ){
            $this->M_data_skripsi->update($npm, $pengajuan);
            $this->M_seminar_usul->delete($npm);
        } else if($surat["nilai_d1"] != 0 && $surat["nilai_pu"] != 0 && $surat["nilai_pp"] != 0 ){
            $this->M_data_skripsi->update($npm, $pengajuan);
            $this->M_seminar_usul->delete($npm);
        }
        
        session()->setFlashdata('pesan', "Berhasil Memberi Nilai Seminar");

        return redirect()->to(base_url('Dosen/data_pengajuan_usul'));
    }

    public function tolak_usul($npm)
    {      
        $this->M_data_notif->insert([
            'untuk' => $npm,
            'oleh' => "Dosen",
            'subjek' => "Seminar Usul",
            'isi_pesan' => "Seminar Usul Anda Telah Ditolak, Silahkan Ajukan Seminar Ulang Jika Telah Melakukan Revisi",
        ]);
        $this->M_data_skripsi->update($npm,['status'=>"Judul Disetujui"]);
        $this->M_surat_pengajuan_usul->delete($npm);
        $this->M_seminar_usul->delete($npm);

        session()->setFlashdata('pesan', "Seminar Usul Tersebut Telah Ditolak");
        return redirect()->to(base_url('Dosen/data_pengajuan_usul'));
    }

    public function terima_hasil($npm)
    {   
        $skripsi = $this->M_data_skripsi->find($npm);
        
        $date1 = $skripsi["date_usul"];
        $date2 = date('Y-m-d');
        $datetime1 = date_create($date1);
        $datetime2 = date_create($date2);
        $interval = date_diff($datetime1, $datetime2);
        $interval = $interval->format('%a');

        $data = $this->M_surat_pengajuan_hasil->find($npm);
        
        $pengajuan = [
            'time' => $interval,
            'time_usul_hasil' => $interval,
            'date' => $date2,
            'date_hasil' => $date2,
            'npm'=> $data["npm"],
            'nama'=> $data["nama"],
            'judul'=> $data["judul"],
            'dospem1'=> $data["dospem1"],
            'dospem2'=> $data["dospem2"],
            'status'=> "Seminar Hasil Disetujui"
        ];
        if ($this->request->getVar("sebagai") == "Pembimbing 1"){
            $penilaian = ['nilai_d1' => $this->request->getVar("nilai")];
        }else if ($this->request->getVar("sebagai") == "Pembimbing 2"){
            $penilaian = ['nilai_d2' => $this->request->getVar("nilai")];
        }else if ($this->request->getVar("sebagai") == "Penguji 1"){
            $penilaian = ['nilai_pu' => $this->request->getVar("nilai")];
        }else if ($this->request->getVar("sebagai") == "Penguji 2"){
            $penilaian = ['nilai_pp' => $this->request->getVar("nilai")];
        }
        
        $this->M_surat_pengajuan_hasil->update($npm, $penilaian);
        
        $surat = $this->M_surat_pengajuan_hasil->find($npm);
        if($surat["nilai_d1"] != 0 && $surat["nilai_d2"] != 0 && $surat["nilai_pu"] != 0 ){
            $this->M_data_skripsi->update($npm, $pengajuan);
            $this->M_seminar_hasil->delete($npm);
        }
        else if($surat["nilai_d1"] != 0 && $surat["nilai_pu"] != 0 && $surat["nilai_pp"] != 0 ){
            $this->M_data_skripsi->update($npm, $pengajuan);
            $this->M_seminar_hasil->delete($npm);
        }
        session()->setFlashdata('pesan', "Berhasil Memberi Nilai Seminar");

        return redirect()->to(base_url('Dosen/data_pengajuan_hasil'));
    }

    public function tolak_hasil($npm)
    {      
        $this->M_data_notif->insert([
            'untuk' => $npm,
            'oleh' => "Dosen",
            'subjek' => "Seminar Hasil",
            'isi_pesan' => "Seminar Hasil Anda Telah Ditolak, Silahkan Ajukan Seminar Ulang Jika Telah Melakukan Revisi",
        ]);
        $this->M_data_skripsi->update($npm,['status'=>"Seminar Usul Disetujui"]);
        $this->M_surat_pengajuan_hasil->delete($npm);
        $this->M_seminar_hasil->delete($npm);
        session()->setFlashdata('pesan', "Seminar Hasil Tersebut Telah Ditolak");

        return redirect()->to(base_url('Dosen/data_pengajuan_hasil'));
    }

    public function terima_kompre($npm)
    {   
        $skripsi = $this->M_data_skripsi->find($npm);
        
        $date = $skripsi["date_judul"];
        $date1 = $skripsi["date_hasil"];
        $date2 = date('Y-m-d');
        $datetime = date_create($date);
        $datetime1 = date_create($date1);
        $datetime2 = date_create($date2);
        $interval = date_diff($datetime1, $datetime2);
        $interval = $interval->format('%a');
        $interval_total = date_diff($datetime, $datetime2);
        $interval_total = $interval_total->format('%a');

        $data = $this->M_surat_pengajuan_kompre->find($npm);
        
        $pengajuan = [
            'time' => $interval,
            'time_hasil_kompre' => $interval,
            'time_total' => $interval_total,
            'date' => $date2,
            'date_kompre' => $date2,
            'npm'=> $data["npm"],
            'nama'=> $data["nama"],
            'judul'=> $data["judul"],
            'dospem1'=> $data["dospem1"],
            'dospem2'=> $data["dospem2"],
            'status'=> "Telah Lulus Skripsi"
        ];
        
        
        if ($this->request->getVar("sebagai") == "Pembimbing 1"){
            $penilaian = [
                'nilai_d1' => $this->request->getVar("nilai1"),
                'nilai_d1t' => $this->request->getVar("nilai2"),
            ];
        }else if ($this->request->getVar("sebagai") == "Pembimbing 2"){
            $penilaian = [
                'nilai_d2' => $this->request->getVar("nilai1"),
                'nilai_d2t' => $this->request->getVar("nilai2"),
            ];
        }else if ($this->request->getVar("sebagai") == "Penguji 1"){
            $penilaian = [
                'nilai_pu' => $this->request->getVar("nilai1"),
                'nilai_put' => $this->request->getVar("nilai2"),
            ];
        }else if ($this->request->getVar("sebagai") == "Penguji 2"){
            $penilaian = [
                'nilai_pp' => $this->request->getVar("nilai1"),
                'nilai_ppt' => $this->request->getVar("nilai2"),
            ];
        }
        
        $this->M_surat_pengajuan_kompre->update($npm, $penilaian);
        
        $surat = $this->M_surat_pengajuan_kompre->find($npm);
        if($surat["nilai_d1"] != 0 && $surat["nilai_d2"] != 0 && $surat["nilai_pu"] != 0 ){
            $this->M_data_skripsi->update($npm, $pengajuan);
            $this->M_ujian_kompre->delete($npm);
        } else if($surat["nilai_d1"] != 0 && $surat["nilai_pu"] != 0 && $surat["nilai_pp"] != 0 ){
            $this->M_data_skripsi->update($npm, $pengajuan);
            $this->M_ujian_kompre->delete($npm);
        }
        session()->setFlashdata('pesan', "Berhasil Memberi Nilai Ujian Kompre");

        return redirect()->to(base_url('Dosen/data_pengajuan_kompre'));
    }

    public function tolak_kompre($npm)
    {      
        $this->M_data_notif->insert([
            'untuk' => $npm,
            'oleh' => "Dosen",
            'subjek' => "Ujian Kompre",
            'isi_pesan' => "Ujian Kompre Anda Telah Ditolak, Silahkan Ajuan Ujian Ulang Jika Telah Melakukan Revisi",
        ]);
        $this->M_data_skripsi->update($npm,['status'=>"Seminar Hasil Disetujui"]);
        $this->M_surat_pengajuan_kompre->delete($npm);
        $this->M_ujian_kompre->delete($npm);
        session()->setFlashdata('pesan', "Ujian Kompre Tersebut Telah Ditolak");

        return redirect()->to(base_url('Dosen/data_pengajuan_kompre'));
    }

    public function data_skripsi()
    {
        $data1 =$this->M_data_skripsi->query("SELECT * FROM data_skripsi where dospem1='".session()->nama."' OR dospem2='".session()->nama."'")->getResultArray();

        $data = [
            'title' => "Data Skripsi",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen', $data);
        echo view('r_dosen/data_skripsi', $data);
        echo view('layouts/footer');
    }

    public function detail_skripsi($npm)
    {
        $data1 = $this->M_data_skripsi->find($npm);
        $data = [
            'title' => "Detail Skripsi: ".$data1["nama"],
            'data' => $data1

        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen', $data);
        echo view('r_dosen/v_detail_skripsi',$data);
        echo view('layouts/footer'); 
    }

}
<?php

namespace App\Controllers;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_data_pengajuan_penguji;
use App\Models\M_profil_mahasiswa;
use App\Models\M_profil_dosen;
use App\Models\M_seminar_usul;
use App\Models\M_seminar_hasil;
use App\Models\M_ujian_kompre;
use App\Models\M_data_skripsi;
use App\Models\M_data_notif;
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
        $this->M_data_pengajuan_penguji = new M_data_pengajuan_penguji();
        $this->M_profil_mahasiswa = new M_profil_mahasiswa();
        $this->M_profil_dosen = new M_profil_dosen();
        $this->M_seminar_usul = new M_seminar_usul();
        $this->M_ujian_kompre = new M_ujian_kompre();
        $this->M_seminar_hasil = new M_seminar_hasil();
        $this->M_data_skripsi = new M_data_skripsi();
        $this->M_data_notif = new M_data_notif();
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
        $notif = $this->M_data_notif->query("SELECT * FROM data_notif where untuk='".session()->user."'")->getResultArray();
        $pengajuan = $this->M_data_pengajuan_judul->query("SELECT * FROM data_pengajuan_judul where npm='".session()->user."'")->getResultArray();
        $pengajuan_p = $this->M_data_pengajuan_penguji->find(session()->user);
        $data = [
            'title' => "Skripsi - Mahasiswa",
            'skripsi' => $skripsi, 'pengajuan' => $pengajuan,'pengajuan_p' => $pengajuan_p, 'notif' => $notif,
            'pesan_err' => \Config\Services::validation(),
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('r_mahasiswa/v_skripsi');
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
        $ModelAkun = new \App\Models\M_akun();
        $ModelAkun->save(array(
            'user' => session()->user,
            'nama' => $this->request->getVar('nama')
        )); 
        $_SESSION['nama'] = $this->request->getVar('nama');
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

    public function menu_akademik()
    {   
        $data = ['title' => "Formulir Akademik Mahasiswa"];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('r_mahasiswa/FormulirAkademik/aview_akademik');
        echo view('layouts/footer');
    }
    public function menu_ukt()
    {   
        $data = ['title' => "Formulir Akademik Mahasiswa"];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('r_mahasiswa/FormulirUKT/aview_ukt');
        echo view('layouts/footer');
    }
    public function menu_jurusan()
    {   
        $data = ['title' => "Formulir Jurusan Administrasi Bisnis"];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('r_mahasiswa/FormulirJurusan/aview_jurusan');
        echo view('layouts/footer');
    }
    public function menu_kelengkapan_wisuda()
    {   
        $data = ['title' => "Formulir Kelengkapan Wisuda"];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('r_mahasiswa/FormulirWisuda/aview_wisuda');
        echo view('layouts/footer');
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
        $Dosen = $this->M_profil_dosen->findAll();
        
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
        $jadwal1 = $this->M_seminar_usul->findAll();
        $jadwal2 = $this->M_seminar_hasil->findAll();
        $skripsi = $this->M_data_skripsi->find(session()->user);
        $dosen   = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "form pengajuan usul", 'jadwal1' => $jadwal1, 'jadwal2' => $jadwal2, 'skripsi' => $skripsi,
            'dosen' => $dosen
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('r_mahasiswa/form_pengajuan_usul');
        echo view('layouts/footer');
    }

    public function form_pengajuan_hasil()
    {   
        $jadwal1 = $this->M_seminar_usul->findAll();
        $jadwal2 = $this->M_seminar_hasil->findAll();
        $skripsi = $this->M_data_skripsi->find(session()->user);
        $dosen   = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "form pengajuan hasil", 'jadwal1' => $jadwal1, 'jadwal2' => $jadwal2, 'skripsi' => $skripsi,
            'dosen' => $dosen
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/form_pengajuan_hasil');
        echo view('layouts/footer');
    }

    public function form_pengajuan_kompre()
    {
        $jadwal = $this->M_ujian_kompre->findAll();
        $skripsi = $this->M_data_skripsi->find(session()->user);
        $dosen   = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Form Pengajuan Ujian Skripsi", 'jadwal' => $jadwal, 'skripsi' => $skripsi,
            'dosen' => $dosen
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
        $Dosen = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Formulir Keringanan UKT",
            'dosen' => $Dosen
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirUKT/form_keringanan_ukt');
        echo view('layouts/footer');
    }

    public function form_pembebasan_ukt()
    {
        $Dosen = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Formulir pembebasan UKT",
            'dosen' => $Dosen
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
        $Dosen = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Formulir Permohonan Cuti Kuliah",
            'dosen' => $Dosen,
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_permohonan_cuti_kuliah');
        echo view('layouts/footer');
    }

    public function form_studi_terbimbing()
    {
        $Dosen = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Formulir Permohonan Studi Terbimbing",
            'dosen' => $Dosen,
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_studi_terbimbing');
        echo view('layouts/footer');
    }

    public function form_pindah_kuliah()
    {
        $Dosen = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Formulir Permohonan Pindah Kuliah",
            'dosen' => $Dosen
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_pindah_kuliah');
        echo view('layouts/footer');
    }

    public function form_perpanjangan_masa_studi()
    {
        $Dosen = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Formulir Permohonan Perpanjangan Masa Studi",
            'dosen' => $Dosen
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_perpanjangan_masa_studi');
        echo view('layouts/footer');
    }

    public function form_pengisian_krs_terlambat()
    {
        $data = [
            'title' => "Formulir Permohonan Pengisian KRS Terlambat"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_pengisian_krs_terlambat');
        echo view('layouts/footer');
    }

    public function form_penghapusan_mk()
    {   
        $Dosen = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Formulir Permohonan Penghapusan Mata Kuliah",
            'dosen' => $Dosen
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_penghapusan_mk');
        echo view('layouts/footer');
    }

    public function form_pembetulan_nilai()
    {
        $Dosen = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Formulir Permohonan Pembetulan Nilai",
            'dosen' => $Dosen
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_pembetulan_nilai');
        echo view('layouts/footer');
    }

    public function form_mengundurkan_diri()
    {
        $Dosen = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Formulir Permohonan Mengundurkan Diri",
            'dosen' => $Dosen
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_mengundurkan_diri');
        echo view('layouts/footer');
    }

    public function form_studi_lapangan()
    {
        $Dosen = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Formulir Permohonan Izin Studi Lapangan",
            'dosen' => $Dosen
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_studi_lapangan');
        echo view('layouts/footer');
    }

    public function form_riset_data_skripsi()
    {
        $Dosen = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Formulir Permohonan Izin Riset & Pengambilan Data Skripsi",
            'dosen' => $Dosen
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_riset_data_skripsi');
        echo view('layouts/footer');
    }

    public function form_studi_lanjut_sarjana()
    {
        $data = [
            'title' => "Formulir Permohonan Studi Lanjut Dari Diploma ke Sarjana"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_studi_lanjut_sarjana');
        echo view('layouts/footer');
    }

    public function form_pindah_studi()
    {
        $data = [
            'title' => "Formulir  Permohonan Pindah Studi ke Unila"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_pindah_studi');
        echo view('layouts/footer');
    }

    public function form_pindah_studi_internal()
    {
        $Dosen = $this->M_profil_dosen->findAll();
        $data = [
            'title' => "Formulir Permohonan Pindah Program Studi Internal Unila",
            'dosen' => $Dosen
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_pindah_studi_internal');
        echo view('layouts/footer');
    }

    public function form_tidak_sanksi()
    {
        $data = [
            'title' => "Formulir Keterangan Tidak Pernah Menerima Sanksi Akademik"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('r_mahasiswa/FormulirAkademik/form_tidak_sanksi');
        echo view('layouts/footer');
    }

    public function tambah_pengajuan_judul()
    {   
        $data_dosen = $this->M_profil_dosen->query("SELECT nip FROM profil_dosen where nama='".$this->request->getVar('dosen_pa')."'")->getResultArray();
        $skrip1 = ""; $skrip2 = ""; $dapus1 = ""; $dapus2 = "";
        $isi1 = explode(PHP_EOL, $this->request->getVar('judul1_isi'));
        $isi2 = explode(PHP_EOL, $this->request->getVar('judul2_isi'));
        $dap1 = explode(PHP_EOL, $this->request->getVar('dapus1'));
        $dap2 = explode(PHP_EOL, $this->request->getVar('dapus2'));
        foreach ($isi1 as $p1) :
            $skrip1 .= "<p>".$p1."</p>";
        endforeach;
        foreach ($isi2 as $p2) :
            $skrip2 .= "<p>".$p2."</p>";
        endforeach;
        foreach ($dap1 as $d1) :
            $dapus1 .= "<p>".$d1."</p>";
        endforeach;
        foreach ($dap2 as $d2) :
            $dapus2 .= "<p>".$d2."</p>";
        endforeach;
        $skrip1 = str_replace("<p></p>","",$skrip1); $skrip2 = str_replace("<p></p>","",$skrip2);
        $dapus1 = str_replace("<p></p>","",$dapus1); $dapus2 = str_replace("<p></p>","",$dapus2);

        $data =[
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'prodi'         => $this->request->getVar('prodi'),
            'judul1'        => $this->request->getVar('judul1'),
            'judul1_isi'    => $skrip1,
            'dapus1'        => $dapus1,
            'judul2'        => $this->request->getVar('judul2'),
            'judul2_isi'    => $skrip2,
            'dapus2'        => $dapus2,
            'alamat'  => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon'),
            'sks'   => $this->request->getVar('sks'),
            'ipk'   => $this->request->getVar('ipk'),
            'dospem1' => $this->request->getVar('dospem1'),
            'dospem2' => $this->request->getVar('dospem2'),
            'konsen'  => $this->request->getVar('konsen'),
        ];
        
        $this->M_data_pengajuan_judul->insert($data);
        $this->M_surat_pengajuan_judul->insert([
            'npm'        => $this->request->getVar('npm'),
            'nama'       => $this->request->getVar('nama'), 
            'prodi'      => $this->request->getVar('prodi'),
            'alamat'     => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon'),
            'dosen_pa'   => $this->request->getVar('dosen_pa'),
            'nip_pa'   => $data_dosen[0]["nip"],
            'sks'   => $this->request->getVar('sks'),
            'ipk'   => $this->request->getVar('ipk'),
        ]);
        $this->M_data_notif->delete(session()->user);

        return redirect()->to(base_url('Mahasiswa/skripsi/'));
    }

    public function ajukan_penguji($npm)
    {
        $skrip = $this->M_data_skripsi->find($npm);
        $this->M_data_pengajuan_penguji->insert([
            'npm'           => $skrip["npm"],
            'nama'          => $skrip["nama"], 
            'judul'         => $skrip["judul"], 
            'konsentrasi'   => $skrip["konsen"],
        ]);
        return redirect()->to(base_url('Mahasiswa/skripsi'));
    }

    public function tambah_pengajuan_usul($npm)
    {
        $this->M_seminar_usul->insert([
            'npm'      => $this->request->getVar('npm'),
        ]);
        $this->M_surat_pengajuan_usul->insert([
            'npm'      => $this->request->getVar('npm'),
            'nama'     => $this->request->getVar('nama'), 
            'judul'    => $this->request->getVar('judul'), 
            'dospem1'  => $this->request->getVar('dospem1'),
            'dospem2'  => $this->request->getVar('dospem2'),
            'penguji_u'=> $this->request->getVar('penguji'),
            'penguji_p'=> $this->request->getVar('penguji_p'),
            'pembahas1'=> $this->request->getVar('pembahas1'),
            'pembahas2'=> $this->request->getVar('pembahas2'),
            'moderator'=> $this->request->getVar('moderator'),
            'prodi'    => "Administrasi Bisnis",
            'jurusan'  => "Administrasi Bisnis",
            'jam'      => $this->request->getVar('jam'),
            'tanggal'  => $this->request->getVar('tanggal'),
        ]);
        $this->M_data_skripsi->save([
            'npm'      => $npm,
            'judul'    => $this->request->getVar('judul'), 
            'status'   => "Mengajukan Seminar Usul"
        ]); 
        $this->M_data_notif->delete($npm);
        
        return redirect()->to(base_url('Mahasiswa/skripsi'));
    }

    public function tambah_pengajuan_hasil($npm)
    {
        $this->M_seminar_hasil->insert([
            'npm'      => $this->request->getVar('npm'),
        ]);
        $this->M_surat_pengajuan_hasil->insert([
            'npm'      => $this->request->getVar('npm'),
            'nama'     => $this->request->getVar('nama'), 
            'judul'    => $this->request->getVar('judul'),
            'dospem1'  => $this->request->getVar('dospem1'),
            'dospem2'  => $this->request->getVar('dospem2'),
            'penguji_u'=> $this->request->getVar('penguji'),
            'penguji_p'=> $this->request->getVar('penguji_p'),
            'pembahas1'=> $this->request->getVar('pembahas1'),
            'pembahas2'=> $this->request->getVar('pembahas2'),
            'moderator'=> $this->request->getVar('moderator'),
            'prodi'    => "Administrasi Bisnis",
            'jurusan'  => "Administrasi Bisnis",
            'jam'      => $this->request->getVar('jam'),
            'tanggal'  => $this->request->getVar('tanggal'),
        ]);
        $this->M_data_skripsi->save([
            'npm' => $npm,
            'status' => "Mengajukan Seminar Hasil",
            'judul'    => $this->request->getVar('judul'),
        ]); 
        $this->M_data_notif->delete($npm);

        return redirect()->to(base_url('Mahasiswa/skripsi'));
    }

    public function tambah_pengajuan_kompre($npm)
    {
        $this->M_ujian_kompre->insert([
            'npm'      => $this->request->getVar('npm'),
        ]);
        $this->M_surat_pengajuan_kompre->insert([
            'npm'      => $this->request->getVar('npm'),
            'nama'     => $this->request->getVar('nama'), 
            'judul'    => $this->request->getVar('judul'),
            'dospem1'  => $this->request->getVar('dospem1'),
            'dospem2'  => $this->request->getVar('dospem2'),
            'penguji_u'=> $this->request->getVar('penguji'),
            'penguji_p'=> $this->request->getVar('penguji_p'),
            'sks'      => $this->request->getVar('sks'),
            'prodi'    => "Administrasi Bisnis",
            'jurusan'  => "Administrasi Bisnis",
            'jam'      => $this->request->getVar('jam'),
            'tanggal'  => $this->request->getVar('tanggal'),
        ]);
        $this->M_data_skripsi->save([
            'npm' => $npm,
            'judul'    => $this->request->getVar('judul'),
            'status' => "Mengajukan Ujian Skripsi"
        ]); 
        $this->M_data_notif->delete($npm);
        
        return redirect()->to(base_url('Mahasiswa/skripsi'));
    }
    
    public function hapus_akun($npm)
    {
        $ModelAkun = new \App\Models\M_akun();
        $ModelLulusan = new \App\Models\M_mahasiswa_lulusan();
        $skripsi = $this->M_data_skripsi->find($npm);
        $mahasiswa = $this->M_profil_mahasiswa->find($npm);
        
        $MulaiKuliah = date_create($mahasiswa["angkatan"]."-09-01");
        $TanggalLulus = date_create($skripsi["date_kompre"]);
        $diff = date_diff($MulaiKuliah,$TanggalLulus);
        $waktu_tempuh = $diff->format("%a");
        $waktu_tempuh = round(($waktu_tempuh/360), 2);


        $SubjekPeriode = "2022-".date_format($TanggalLulus,"m-d");
        $BatasPeriode = "2022-09-01";
        $HasilPeriode = date_format($TanggalLulus,"Y");
        if ($SubjekPeriode > $BatasPeriode){$HasilPeriode;}
        else{--$HasilPeriode;}

        $data_mhs = [
            'npm'=> $mahasiswa["npm"],
            'nama'=> $mahasiswa["nama"],
            'jenis_kelamin'=> $mahasiswa["jenis_kelamin"],
            'angkatan'=> $mahasiswa["angkatan"],
            'periode_lulus'=> $HasilPeriode,
            'tanggal_lulus'=> $skripsi["date_kompre"],
            'waktu_tempuh'=> $waktu_tempuh,
            'judul_skripsi'=> $skripsi["judul"],
            'no_hp'=> $mahasiswa["no_hp"],
            'email'=> $mahasiswa["email"],
        ];

        var_dump($ModelLulusan->insert($data_mhs));
        $this->M_data_skripsi->delete($npm);
        $this->M_profil_mahasiswa->delete($npm);
        $ModelAkun->delete($npm);
        
        unset(
            $_SESSION['user'], $_SESSION['role']
        );
        
        session()->setTempdata('kelulusan', $npm, 600);
        return redirect()->to(base_url('Login/lulus'));
    }

}
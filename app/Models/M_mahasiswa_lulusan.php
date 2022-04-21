<?php

namespace App\Models;

use CodeIgniter\Model;

class M_mahasiswa_lulusan extends Model
{
    
    protected $table                = 'mahasiswa_lulusan';
    protected $primaryKey           = 'npm';
    protected $allowedFields        = ['npm','nama','jenis_kelamin','angkatan','tanggal_lulus','waktu_tempuh','judul_skripsi','no_hp','email'];

}
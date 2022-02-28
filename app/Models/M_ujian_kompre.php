<?php

namespace App\Models;

use CodeIgniter\Model;

class M_ujian_kompre extends Model
{
    protected $table = 'data_ujian_kompre';
    protected $primaryKey     = 'npm';
    protected $allowedFields  =  ['npm','nama','judul','dospem1','dospem2','penguji_u','jam','tanggal','jenis'];
}

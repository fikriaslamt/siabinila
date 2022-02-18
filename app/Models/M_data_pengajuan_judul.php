<?php

namespace App\Models;

use CodeIgniter\Model;

class M_data_pengajuan_judul extends Model
{
    protected $table = 'data_pengajuan_judul';
    protected $primaryKey     = 'npm';
    protected $allowedFields  = ['npm','nama','judul1','judul2','judul1_isi','judul2_isi','dapus1','dapus2','dospem1','dospem2','konsen'];
}

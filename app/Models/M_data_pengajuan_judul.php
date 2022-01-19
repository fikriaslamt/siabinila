<?php

namespace App\Models;

use CodeIgniter\Model;

class M_data_pengajuan_judul extends Model
{
    protected $table = 'data_pengajuan_judul';
    protected $primaryKey     = 'npm';
    protected $allowedFields  = ['npm','judul1','judul2','dospem1','dospem2'];
}

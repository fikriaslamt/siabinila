<?php

namespace App\Models;

use CodeIgniter\Model;

class M_data_skripsi extends Model
{
    protected $table = 'data_skripsi';
    protected $primaryKey     = 'npm';
    protected $allowedFields  = ['npm','judul'];
}

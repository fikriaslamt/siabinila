<?php

namespace App\Models;

use CodeIgniter\Model;

class M_data_kompre extends Model
{
    protected $table = 'data_kompre';
    protected $primaryKey     = 'npm';
    protected $allowedFields  =  ['npm','judul','dospem1','dospem2'];
}

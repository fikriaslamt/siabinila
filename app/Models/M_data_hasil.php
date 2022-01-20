<?php

namespace App\Models;

use CodeIgniter\Model;

class M_data_hasil extends Model
{
    protected $table = 'data_hasil';
    protected $primaryKey     = 'npm';
    protected $allowedFields  =  ['npm','judul','dospem1','dospem2'];
}

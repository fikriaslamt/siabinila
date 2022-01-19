<?php

namespace App\Models;

use CodeIgniter\Model;

class M_data_usul extends Model
{
    protected $table = 'data_usul';
    protected $primaryKey     = 'npm';
    protected $allowedFields  =  ['npm','judul','dospem1','dospem2'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class Z_instansi extends Model
{
    protected $table = 'z_instansi';
    protected $primaryKey     = 'id';
    protected $allowedFields  =  ['id','jurusan','kajur','kajur_nip','kajur_ttd'];
}
